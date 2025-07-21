<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BranchDashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.branch');
    }
    public function __construct()
    {
        $this->middleware(['auth', 'check.role:branch']);
    }
    public function showActivities()
    {
        // Logic to retrieve and display activities for the branch
        $activities = auth()->user()->branch->activities; // Assuming a relationship exists
        return view('dashboard.branch.activities', compact('activities'));
    }
}
