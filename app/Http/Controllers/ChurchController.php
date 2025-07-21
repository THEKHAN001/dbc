<?php

namespace App\Http\Controllers;

use App\Models\Church;
use App\Models\ChurchActivity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChurchController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:500',
            'contact_number' => 'required|string|max:20',
            'capacity' => 'required|numeric|min:1'
        ]);

        try {
            $church = Church::create($validated);
            return redirect()->back()->with('success', 'Church added successfully');
        } catch (\Exception $e) {
            return redirect()->back()
                           ->with('error', 'Failed to add church')
                           ->withInput();
        }
    }

    public function generateReport(Request $request)
    {
        $validated = $request->validate([
            'period' => 'required|in:annual,mid_year',
            'year' => 'required|integer|min:1900|max:2100',
        ]);

        try {
            $query = ChurchActivity::query();

            if ($validated['period'] === 'mid_year') {
                $query->whereYear('activity_date', $validated['year'])
                      ->whereMonth('activity_date', '<=', 6);
            } else {
                $query->whereYear('activity_date', $validated['year']);
            }

            $report = $query->with('church')  // Assuming there's a relationship defined
                           ->get()
                           ->groupBy('church_id');

            return view('reports.show', [
                'report' => $report,
                'period' => $validated['period'],
                'year' => $validated['year']
            ]);
        } catch (\Exception $e) {
            return redirect()->back()
                           ->with('error', 'Failed to generate report')
                           ->withInput();
        }
    }
}
