<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'check.role:super_admin']);
    }

    public function index()
    {
        // Add any data you want to pass to the dashboard view
        return view('admin.dashboard');
    }
}
