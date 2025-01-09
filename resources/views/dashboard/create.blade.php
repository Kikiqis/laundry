@extends('dashboard.layout')

@section('content')
    <h1 class="text-center text-uppercase fw-bold mt-3" style="font-size: 3rem; color: #2c3e50;">Tambah Pakaian</h1>
    
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h5 class="mb-0">Form Tambah Pakaian</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('pakaian.store') }}" method="POST">
                            @csrf
                            
                            <!-- Nama Pakaian -->
                            <div class="mb-3">
                                <label for="nama_pakaian" class="form-label">Nama Pakaian</label>
                                <input type="text" class="form-control @error('nama_pakaian') is-invalid @enderror" id="nama_pakaian" name="nama_pakaian" value="{{ old('nama_pakaian') }}" required>
                                @error('nama_pakaian')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Kategori -->
                            <div class="mb-3">
                                <label for="kategori" class="form-label">Kategori</label>
                                <select class="form-control @error('kategori') is-invalid @enderror" id="kategori" name="kategori" required>
                                    <option value="" disabled {{ old('kategori') ? '' : 'selected' }}>Pilih Kategori</option>
                                    <option value="Laundry Satuan" {{ old('kategori') == 'Laundry Satuan' ? 'selected' : '' }}>Laundry Satuan</option>
                                    <option value="Laundry Kiloan" {{ old('kategori') == 'Laundry Kiloan' ? 'selected' : '' }}>Laundry Kiloan</option>
                                    <option value="Sepatu" {{ old('kategori') == 'Sepatu' ? 'selected' : '' }}>Sepatu</option>
                                    <option value="Furniture" {{ old('kategori') == 'Furniture' ? 'selected' : '' }}>Furniture</option>
                                    <option value="Karpet" {{ old('kategori') == 'Karpet' ? 'selected' : '' }}>Karpet</option>
                                </select>
                                @error('kategori')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>


                            <!-- Harga -->
                            <div class="mb-3">
                                <label for="harga" class="form-label">Harga</label>
                                <input type="number" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" value="{{ old('harga') }}" min="0" step="0.01" required>
                                @error('harga')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Submit Button -->
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Tambah Pakaian</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
