<?php

namespace App\Http\Controllers\HRIS;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $employee = Employee::select('*', DB::raw('CONCAT(lastname, firstname, lastname) AS full_name'))->get();

        // dd($employee);
        return view('dashboard.page.employee', compact('title', 'employee'));
    }
}
