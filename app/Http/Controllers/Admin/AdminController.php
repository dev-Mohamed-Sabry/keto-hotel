<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $usertype = Auth::user()->usertype;

        if ($usertype === 'user') {
            return view('Website.Frontend.index');
        }

        if ($usertype === 'admin') {
            return view('Admin.index');
        }

        return redirect()->back()->with(
            'error',
            'You Need To Be A User Or Admin'
        );
    }
}
