@extends('layouts.app')

@section('content')
    <div class="container d-flex flex-column align-items-center justify-content-center min-vh-100">
        <div class="card shadow-lg w-100 mb-4" style="max-width: 600px;">
            <div class="card-body text-center">
                <h1 class="display-4 text-primary mb-3">Welcome to VBCI Church Management</h1>
                <p class="lead text-secondary mb-4">Manage churches, members, and activities with ease. Secure, fast, and
                    user-friendly.</p>
                @auth
                    <a href="{{ route('admin.dashboard') }}" class="btn btn-primary btn-lg">Go to Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-primary btn-lg me-2">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-outline-primary btn-lg">Register</a>
                @endauth
            </div>
        </div>
        <div class="text-muted small mt-2">
            &copy; {{ date('Y') }} VBCI Church Management. All rights reserved.
        </div>
    </div>
@endsection
