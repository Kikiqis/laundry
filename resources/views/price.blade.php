@extends('layout')

@section('content')
    <div class="mt-5 text-center">
        <h1>Daftar Harga Toko Laundry</h1>
        <div class="container">
            <div class="line-container">
                <div class="line"></div>
                <div class="star">
                    <i class="bi bi-star-fill"></i>
                </div>
                <div class="line"></div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <!-- Laundry Satuan -->
            <div class="col-6 mb-4">
                <h3>Laundry Satuan</h3>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Item</th>
                            <th>Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($laundrySatuan as $item)
                            <tr>
                                <td>{{ $item->nama_pakaian }}</td>
                                <td>Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Laundry Kiloan -->
            <div class="col-6 mb-4">
                <h3>Laundry Kiloan</h3>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Item</th>
                            <th>Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($laundryKiloan as $item)
                            <tr>
                                <td>{{ $item->nama_pakaian }}</td>
                                <td>Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row">
            <!-- Sepatu -->
            <div class="col-6 mb-4">
                <h3>Sepatu</h3>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Item</th>
                            <th>Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($sepatu as $item)
                            <tr>
                                <td>{{ $item->nama_pakaian }}</td>
                                <td>Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Furniture -->
            <div class="col-6 mb-4">
                <h3>Furniture</h3>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Item</th>
                            <th>Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($furniture as $item)
                            <tr>
                                <td>{{ $item->nama_pakaian }}</td>
                                <td>Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row">
            <!-- Karpet -->
            <div class="col-12 mb-4 d-flex justify-content-center">
                <div class="col-6">
                    <h3>Karpet</h3>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Item</th>
                                <th>Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($karpet as $item)
                                <tr>
                                    <td>{{ $item->nama_pakaian }}</td>
                                    <td>Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
