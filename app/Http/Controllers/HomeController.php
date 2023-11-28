<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('page.index');
    }
    public function showmember()
    {

        return view('report.member');
    }
}
