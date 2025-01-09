<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Toko Laundry</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap-icons/font/bootstrap-icons.css') }}">
    <style>
.line-container {
    display: flex;
    align-items: center;
    justify-content: center;
}

.line {
    flex-grow: 0.1; /* Kecilkan nilai flex-grow */
    height: 1px;
    background-color: #000; /* Warna garis */
}

.star {
    margin: 0 10px;
}

    </style>
</head>
<body>
    <div class="w-100 d-flex justify-content-between align-items-center" style="background-color: white; height: 100px; position: fixed; top: 0;">
        <img src="{{ asset('img/logo.png') }}" alt="" class="ms-5" style="width: 100px; height: 100px">
        <div class="me-5">
            <a href="{{ route('home') }}" class="text-decoration-none px-3 text-dark">Home</a>
            <a href="{{ route('price') }}" class="text-decoration-none px-3 text-dark">Pricing</a>
            <a href="{{ route('about') }}" class="text-decoration-none px-3 text-dark">About Us</a>
        </div>
    </div>

    <div class="" style="margin-top: 100px;">
        @yield('content')
    </div>

    <footer class="bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <!-- About Us -->
                <div class="col-md-4 mb-4">
                    <h5 class="text-uppercase fw-bold">About Us</h5>
                    <p class="text-light mt-3">
                        Kami adalah layanan laundry profesional yang memberikan kualitas terbaik untuk pakaian Anda. Bersih, rapi, dan tepat waktu adalah komitmen kami.
                    </p>
                </div>
    
                <!-- Operational Time -->
                <div class="col-md-4 mb-4">
                    <h5 class="text-uppercase fw-bold">Operational Time</h5>
                    <ul class="list-unstyled mt-3">
                        <li>Monday - Friday: 08:00 AM - 08:00 PM</li>
                        <li>Saturday: 09:00 AM - 06:00 PM</li>
                        <li>Sunday: Closed</li>
                    </ul>
                </div>
    
                <!-- Contact -->
                <div class="col-md-4 mb-4">
                    <h5 class="text-uppercase fw-bold">Contact</h5>
                    <ul class="list-unstyled mt-3">
                        <li><i class="bi bi-telephone-fill me-2"></i>+62 812-3456-7890</li>
                        <li><i class="bi bi-envelope-fill me-2"></i>info@tokolaundry.com</li>
                        <li><i class="bi bi-geo-alt-fill me-2"></i>Jl. Kebersihan No. 12, Jakarta</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="mt-4 text-center" style="border-top: 2px solid white; padding-top: 30px;">
            <small class="text-light">&copy; 2025 Toko Laundry. All rights reserved.</small>
        </div>
    </footer>
    
    
    
</body>
</html>