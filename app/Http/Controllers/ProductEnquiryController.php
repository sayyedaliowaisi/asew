<?php

namespace App\Http\Controllers;

use App\Mail\NewProductEnquiryMail;
use App\Mail\ProductEnquiryConfirmationMail;
use App\Models\Product;
use App\Models\ProductEnquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ProductEnquiryController extends Controller
{
    /**
     * Display quote / enquiry form.
     */
    public function create(Request $request)
    {
        $products = Product::query()
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->orderBy('name')
            ->get();


        $selectedProduct = null;


        if ($request->filled('product')) {

            $selectedProduct = Product::query()
                ->where('slug', $request->product)
                ->where('is_active', true)
                ->first();

        }


        return view(
            'quote',
            compact(
                'products',
                'selectedProduct'
            )
        );
    }



    /**
     * Store new product enquiry.
     */
    public function store(Request $request)
    {
        /*
        |--------------------------------------------------------------------------
        | Validate Request
        |--------------------------------------------------------------------------
        */

        $validated = $request->validate([

            'product_id' => [
                'nullable',
                'exists:products,id'
            ],

            'name' => [
                'required',
                'string',
                'max:120'
            ],

            'company' => [
                'nullable',
                'string',
                'max:150'
            ],

            'email' => [
                'required',
                'email',
                'max:150'
            ],

            'phone' => [
                'required',
                'string',
                'max:25'
            ],

            'city' => [
                'nullable',
                'string',
                'max:100'
            ],

            'quantity' => [
                'required',
                'integer',
                'min:1',
                'max:10000'
            ],

            'message' => [
                'nullable',
                'string',
                'max:3000'
            ],

        ]);



        /*
        |--------------------------------------------------------------------------
        | Get Selected Product
        |--------------------------------------------------------------------------
        */

        $product = null;


        if (!empty($validated['product_id'])) {

            $product = Product::find(
                $validated['product_id']
            );

        }



        /*
        |--------------------------------------------------------------------------
        | Save Enquiry
        |--------------------------------------------------------------------------
        */

        $enquiry = ProductEnquiry::create([

            'product_id' =>
                $product?->id,

            'product_name' =>
                $product?->name,

            'product_code' =>
                $product?->code,

            'name' =>
                $validated['name'],

            'company' =>
                $validated['company'] ?? null,

            'email' =>
                $validated['email'],

            'phone' =>
                $validated['phone'],

            'city' =>
                $validated['city'] ?? null,

            'quantity' =>
                $validated['quantity'],

            'message' =>
                $validated['message'] ?? null,

            'status' =>
                'new',

        ]);



        /*
        |--------------------------------------------------------------------------
        | Send Email Notifications
        |--------------------------------------------------------------------------
        |
        | Email errors should NOT prevent the customer's enquiry from
        | being saved in the database.
        |
        */

        try {

            /*
             * Send notification to ASEW sales/admin.
             */

            $salesEmail =
                config('mail.sales_address');


            if ($salesEmail) {

                Mail::to($salesEmail)
                    ->send(
                        new NewProductEnquiryMail(
                            $enquiry
                        )
                    );

            }



            /*
             * Send acknowledgement to customer.
             */

            Mail::to($enquiry->email)
                ->send(
                    new ProductEnquiryConfirmationMail(
                        $enquiry
                    )
                );


        } catch (\Throwable $exception) {

            /*
             * Enquiry remains safely stored even
             * if SMTP/email delivery fails.
             */

            Log::error(
                'Product enquiry email notification failed.',
                [
                    'enquiry_id' =>
                        $enquiry->id,

                    'customer_email' =>
                        $enquiry->email,

                    'error' =>
                        $exception->getMessage(),
                ]
            );

        }



        /*
        |--------------------------------------------------------------------------
        | Redirect
        |--------------------------------------------------------------------------
        */

        return redirect()
            ->route('quote.create')
            ->with(
                'success',
                'Thank you. Your product enquiry has been submitted successfully.'
            );
    }
}

