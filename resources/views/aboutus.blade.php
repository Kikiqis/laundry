@extends('layout')

@section('content')
    <div class="mt-5">
        <h1 class="text-center text-uppercase fw-bold" style="font-size: 3rem; color: #2c3e50;">About Us</h1>
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

    <div class="mt-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 mb-4">
                    <div class="">
                        <p class="text-center text-uppercase fw-light" style="font-size: 2.5rem; color: #34495e;">Who We Are?</p>

                        <p class="fw-light text-center" style="font-size: 1.1rem; line-height: 1.6; color: #7f8c8d; width: 90%; margin: 0 auto;">
                            We provide premium washing and dry cleaning services leveraging mobile-based technology. Our aim is to offer high-quality laundry services coupled with a customized experience and express delivery. We pick up your dirty clothes from your doorstep and deliver fresh, clean clothes back at your doorstep.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <img src="{{ asset('img/hurang.png') }}" alt="About Us" class="img-fluid rounded shadow-lg d-block mx-auto" style="object-fit: cover; height: 80%; width: 60%;">
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <p class="text-center text-uppercase fw-light" style="font-size: 2.5rem; color: #34495e;">Contact Us</p>

                    <p class="fw-light text-center" style="font-size: 1.1rem; line-height: 1.6; color: #7f8c8d;">
                        Have questions or concerns? Fill out the form below, and we’ll get back to you as soon as possible.
                    </p>
                                <!-- Pemberitahuan sukses/error -->
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @elseif(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    

                    <form action="{{ route('massage.store') }}" method="POST" class="mt-4">
                        @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label fw-bold" style="color: #34495e;">Your Name</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter your name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label fw-bold" style="color: #34495e;">Your Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                        </div>
                        <div class="mb-3">
                            <label for="massage" class="form-label fw-bold" style="color: #34495e;">Your Message</label>
                            <textarea class="form-control" id="massage" name="massage" rows="5" placeholder="Write your message here" required></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary fw-bold" style="background-color: #2c3e50; border-color: #2c3e50;">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
