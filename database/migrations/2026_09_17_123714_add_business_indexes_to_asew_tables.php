<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        /*
        |--------------------------------------------------------------------------
        | Product Enquiries
        |--------------------------------------------------------------------------
        */

        Schema::table('product_enquiries', function (Blueprint $table) {
            $table->index(
                ['status', 'created_at'],
                'product_enquiries_status_created_index'
            );
        });


        /*
        |--------------------------------------------------------------------------
        | Quotations
        |--------------------------------------------------------------------------
        */

        Schema::table('quotations', function (Blueprint $table) {
            $table->index(
                ['status', 'quotation_date'],
                'quotations_status_date_index'
            );

            $table->index(
                'valid_until',
                'quotations_valid_until_index'
            );
        });


        /*
        |--------------------------------------------------------------------------
        | Sales Orders
        |--------------------------------------------------------------------------
        */

        Schema::table('sales_orders', function (Blueprint $table) {
            $table->index(
                ['order_status', 'order_date'],
                'sales_orders_status_date_index'
            );

            $table->index(
                'payment_status',
                'sales_orders_payment_status_index'
            );

            $table->index(
                'delivery_status',
                'sales_orders_delivery_status_index'
            );
        });
    }


    public function down(): void
    {
        Schema::table('sales_orders', function (Blueprint $table) {
            $table->dropIndex(
                'sales_orders_status_date_index'
            );

            $table->dropIndex(
                'sales_orders_payment_status_index'
            );

            $table->dropIndex(
                'sales_orders_delivery_status_index'
            );
        });


        Schema::table('quotations', function (Blueprint $table) {
            $table->dropIndex(
                'quotations_status_date_index'
            );

            $table->dropIndex(
                'quotations_valid_until_index'
            );
        });


        Schema::table('product_enquiries', function (Blueprint $table) {
            $table->dropIndex(
                'product_enquiries_status_created_index'
            );
        });
    }
};