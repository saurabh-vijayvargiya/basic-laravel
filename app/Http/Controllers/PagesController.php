<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    /**
     * Method to load home page.
     */
    public function home()
    {
        return view('home');
    }

    /**
     * Method to load about page.
     */
    public function about()
    {
        return view('about');
    }

}
