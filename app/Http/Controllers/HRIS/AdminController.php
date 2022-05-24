<?php

namespace App\Http\Controllers\HRIS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function logout( Request $request) {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function index() {
        $title = 'Dashboard';

        return view('dashboard.index', compact('title'));
    }

    public function employee() {
        $title = 'Employees';
        return view('dashboard.page.employee', compact('title'));
    }
}
