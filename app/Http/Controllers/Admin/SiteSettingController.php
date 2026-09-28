<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SiteSettingController extends Controller
{
    public function edit()
    {
        $settings = SiteSetting::current();

        return view(
            'admin.settings.edit',
            compact('settings')
        );
    }


    public function update(Request $request)
    {
        $settings = SiteSetting::current();

        $validated = $request->validate([
            'company_name' => [
                'required',
                'string',
                'max:180',
            ],

            'short_name' => [
                'required',
                'string',
                'max:50',
            ],

            'tagline' => [
                'nullable',
                'string',
                'max:255',
            ],

            'logo' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:4096',
            ],

            'favicon' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp,ico',
                'max:2048',
            ],

            'phone' => [
                'nullable',
                'string',
                'max:30',
            ],

            'alternate_phone' => [
                'nullable',
                'string',
                'max:30',
            ],

            'email' => [
                'nullable',
                'email',
                'max:180',
            ],

            'sales_email' => [
                'nullable',
                'email',
                'max:180',
            ],

            'address' => [
                'nullable',
                'string',
                'max:1000',
            ],

            'facebook' => [
                'nullable',
                'url',
                'max:500',
            ],

            'instagram' => [
                'nullable',
                'url',
                'max:500',
            ],

            'linkedin' => [
                'nullable',
                'url',
                'max:500',
            ],

            'youtube' => [
                'nullable',
                'url',
                'max:500',
            ],
        ]);


        if ($request->hasFile('logo')) {
            $this->deleteUploadedFile(
                $settings->logo
            );

            $path = $request
                ->file('logo')
                ->store(
                    'settings',
                    'public'
                );

            $validated['logo'] =
                'storage/' . $path;
        }


        if ($request->hasFile('favicon')) {
            $this->deleteUploadedFile(
                $settings->favicon
            );

            $path = $request
                ->file('favicon')
                ->store(
                    'settings',
                    'public'
                );

            $validated['favicon'] =
                'storage/' . $path;
        }


        $settings->update($validated);

        return back()->with(
            'success',
            'Site settings updated successfully.'
        );
    }


    private function deleteUploadedFile(
        ?string $file
    ): void {
        if (
            !$file ||
            !str_starts_with(
                $file,
                'storage/'
            )
        ) {
            return;
        }

        Storage::disk('public')->delete(
            Str::after(
                $file,
                'storage/'
            )
        );
    }
}