<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //Main Page
    public function main()
    {
        return view('pages.main');
    }
}
