@extends('layout')

@section('content')
<div class="card text-bg-dark" style="z-index: -9999;">
    <img src="{{ asset('img/header.jpg') }}" alt="" class="w-100 opacity-50" style="height: 60vh; object-fit: cover">
    <div class="card-img-overlay">
    <h1 class="card-title ms-5  fw-bold text-uppercase" style="width: 700px; padding-top: 25vh">The Best Laundry Experience, Just for You!</h1>
  </div>
</div>

<div class="mt-5">
    <h2 class="text-center">Jasa Laundry Kami</h2>
    <div class="container">
        <div class="line-container">
            <div class="line"></div>
            <div class="star">
                <i class="bi bi-star-fill"></i>
            </div>
            <div class="line"></div>
        </div>
    </div>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset('img/baju.png') }}" alt="" class="img-fluid mb-2 d-block mx-auto" style="width: 100px">
                <h5 class="text-center mb-5">Dry Cleaning</h5>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('img/sepatu.png') }}" alt="" class="img-fluid mb-2 d-block mx-auto" style="width: 100px">
                <h5 class="text-center mb-5">Shoe</h5>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('img/mesincuci.png') }}" alt="" class="img-fluid mb-2 d-block mx-auto" style="width: 100px">
                <h5 class="text-center mb-5">Laundry Kiloan</h5>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('img/handuk.png') }}" alt="" class="img-fluid mb-2 d-block mx-auto" style="width: 100px">
                <h5 class="text-center mb-5">Towel</h5>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('img/karpet.png') }}" alt="" class="img-fluid mb-2 d-block mx-auto" style="width: 100px">
                <h5 class="text-center mb-5">Carpet</h5>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('img/sofa.png') }}" alt="" class="img-fluid mb-2 d-block mx-auto" style="width: 100px">
                <h5 class="text-center mb-5">Sofa</h5>
            </div>
        </div>
    </div>
        <h2 class="text-center">Why Choose Us?</h2>
        <div class="container">
            <div class="line-container">
                <div class="line"></div>
                <div class="star">
                    <i class="bi bi-star-fill"></i>
                </div>
                <div class="line"></div>
            </div>
        </div>

        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-6 mb-4">
                    <div class="d-flex justify-content-center">
                        <i class="bi bi-shield-fill-check fs-1 pt-4"></i>
                        <div class="ms-5">
                            <h1>Jaminan Higienis</h1>
                            <p>Menjamin konsep 1 mesin cuci hanya untuk 1 pengguna jasa tidak dicampur dengan pengguna jasa yang lain. Konsep ini juga dapat meminimalisir pakaian tertukar dengan pengguna jasa lain.</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 mb-4">
                    <div class="d-flex justify-content-center">
                        <div class="ms-5 text-end me-5">
                            <h1>Jaminan Keamanan</h1>
                            <p>Penetapan prosedur yang selalu mengalami penyempurnaan untuk peningkatan mutu layanan laundry. Apabila terjadi kehilangan akan kami garansi sesuai syarat dan ketentuan berlaku.</p>
                        </div>
                        <i class="bi bi-shield-lock-fill fs-1 pt-4"></i>
                    </div>
                </div>
                <div class="col-6">
                    <div class="d-flex justify-content-center">
                        <i class="bi bi-water fs-1 pt-4"></i>
                        <div class="ms-5">
                            <h1>Pengguna Detergen</h1>
                            <p>Dilengkapi dengan berbagai macam chemical pembersih atau detergen sesuai jenis noda dan jenis bahan pakaian anda. Dukungan staff yang terlatih untuk menangani setiap permasalahan pada pakaian anda.</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 mb-4">
                    <div class="d-flex justify-content-center">
                        <div class="ms-5 text-end me-5">
                            <h1>Jaminan Kualitas</h1>
                            <p>Kami menggunakan standar kualitas terbaik dalam proses pencucian dan penyetrikaan untuk memastikan pakaian Anda bersih, rapi, dan harum setiap saat.</p>
                        </div>
                        <i class="bi bi-star-fill fs-1 pt-4"></i>
                    </div>
                </div>
            </div>
        </div>
        
        
    
    </div>
</div>
@endsection