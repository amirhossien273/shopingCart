<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        view('front.home');
    }

    public function contact()
    {
        view('front.contact');
    }

    public function about()
    {
        view('front.about');
    }

    public function privacyPolicy()
    {
        //
    }
}
