@extends('dashboard.layout')

@section('content')
    <h1 class="text-center text-uppercase fw-bold mt-3" style="font-size: 3rem; color: #2c3e50;">Dashboard</h1>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card shadow-lg mb-3">
                    <i class="bi bi-bag-fill text-center" style="font-size: 5rem; color: #2c3e50;"></i>
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold" style="color: #2c3e50;">Pakaian</h5>
                        <p class="card-text fw-bold" style="color: #2c3e50;">{{ $pakaianCount }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-lg mb-3">
                    <i class="bi bi-people-fill text-center" style="font-size: 5rem; color: #2c3e50;"></i>
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold" style="color: #2c3e50;">Admin User</h5>
                        <p class="card-text fw-bold" style="color: #2c3e50;">{{ $userCount }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-lg mb-3">
                    <i class="bi bi-envelope-fill text-center" style="font-size: 5rem; color: #2c3e50;"></i>
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold" style="color: #2c3e50;">Massage</h5>
                        <p class="card-text fw-bold" style="color: #2c3e50;">{{ $massageCount }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection