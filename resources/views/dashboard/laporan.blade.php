@extends('dashboard.layout')

@section('content')
<h1 class="text-center text-uppercase fw-bold mt-3" style="font-size: 3rem; color: #2c3e50;">Laporan</h1>

<form action="{{ route('laporan.generate') }}" method="POST">
    @csrf
    <div class="mt-5">
        <label for="tanggal_awal" class="form-label">Tanggal Awal</label>
        <input type="date" class="form-control w-50" id="tanggal_awal" name="tanggal_awal" required>
    </div>
    <div class="mt-3">
        <label for="tanggal_akhir" class="form-label">Tanggal Akhir</label>
        <input type="date" class="form-control w-50" id="tanggal_akhir" name="tanggal_akhir" required>
    </div>
    <button type="submit" class="btn btn-primary mt-4">Generate PDF</button>
</form>
@endsection
