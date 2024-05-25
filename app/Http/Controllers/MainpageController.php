<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainpageController extends Controller
{
    public function library()
    {
        return view('library');
    }

    public function history()
    {
        return view('history');
    }

    public function kategori()
    {
        return view('kategori');
    }

    public function wishlist()
    {
        return view('wishlist');
    }

    public function notify()
    {
        return view('notify');
    }
}
