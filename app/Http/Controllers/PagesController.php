<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function treatments()
    {
        return view('pages.treatments');
    }

    public function prices()
    {
        return view('pages.prices');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
