<div>
    
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Super Admin Dashboard</h1>

    <div class="card">
        <div class="card-header">
            Church Statistics
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <h5>Total Churches: {{ $churches->count() }}</h5>
                </div>
                <div class="col-md-4">
                    <h5>Total Members: {{ $totalMembers }}</h5>
                </div>
                <div class="col-md-4">
                    <h5>Total Activities: {{ $totalActivities }}</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-4">
        <h3>Generate Reports</h3>
        <form action="{{ route('reports.generate') }}" method="POST">
            @csrf
            <select name="period" class="form-control">
                <option value="annual">Annual Report</option>
                <option value="mid_year">Mid Year Report</option>
            </select>
            <input type="number" name="year" class="form-control mt-2" placeholder="Year">
            <button type="submit" class="btn btn-primary mt-2">Generate Report</button>
        </form>
    </div>
</div>
@endsection
</div>
