<?php

namespace App\Http\Controllers;
use App\Models\Contoradmin;
use App\Models\status;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('page.index');
    }
    public function showmember()
    {
        $contoradmins = Contoradmin::with('status')->paginate(5);
        // return response()->json($contoradmins);

        return view('report.member', compact('contoradmins'));
    }
}
