<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class AboutController extends Controller
{
    /**
     * Company Profile
     */
    public function companyProfile(): View
    {
        return view('pages.about.company-profile');
    }

    /**
     * 50+ Years of Excellence
     */
    public function excellence(): View
    {
        return view('pages.about.excellence');
    }

    /**
     * Quality & Precision
     */
    public function quality(): View
    {
        return view('pages.about.quality');
    }
}