@extends('dashboard.layout')

@section('content')
    <h1 class="text-center text-uppercase fw-bold mt-3" style="font-size: 3rem; color: #2c3e50;">Pakaian</h1>
    <div class="table table-responsive w-100 mt-4">
        <table class="table table-hover table-centered">
            <thead>
                    <tr class="border">
                        <form method="GET" action="">
                        <th scope="col" colspan="10" style="">
                          <div class="d-flex" style="width: 100%;">
                            <div class="input-group" style="flex: 1;">
                              <span class="input-group-text bg-warning rounded-start bg-transparent">
                                <button type="submit" class="btn"><i class="bi-search"></i></button>
                              </span>
                              <input class="form-control" type="search" placeholder="Cari sesuatu..." aria-label="Search" name="query_produk">
                            </div>
                            <a class="btn btn-primary ms-2 pt-2" href="{{ route('pakaian.create') }}" role="button">Tambah Produk</a>
                          </div>
                        </th>
                        </form>
                      </tr>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($item as $item)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$item->nama_pakaian}}</td>
                    <td>{{$item->kategori}}</td>
                    <td>{{$item->harga}}</td>
                    <td>
                        <a href="{{ route('pakaian.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('pakaian.destroy', $item->id) }}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    @endsection