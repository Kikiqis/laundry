@extends('dashboard.layout')

@section('content')
<h1 class="mt-5 text-center text-uppercase fw-bold">Pesan dari Pelanggan</h1>

<div class="mt-5">
    <div class="row">
            @foreach ($messages as $message)
            <div class="col-3">
                <div class="card mb-3 w-75 mx-auto text-center">
                    <div class="card-body">
                        <h5 class="card-title">{{ $message->nama }}</h5>
                        <p class="card-text">{{ $message->email }}</p>
                        <div class="mx-auto" style="width: 100px; height: 2px; background-color: black;"></div>
                        <p class="card-text mt-3">"{{ $message->massage }}"</p>
                    </div>
                </div>
            </div>
            @endforeach
    </div>

</div>

@endsection
