<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap-icons/font/bootstrap-icons.css') }}">
    <style>
        .list-unstyled li {
            margin-bottom: 30px; /* Menambahkan jarak antar item */
        }
        .list-unstyled li a {
    display: block; /* Ubah elemen menjadi blok agar memenuhi lebar */
    width: 100%; /* Pastikan lebarnya 100% */
    text-align: left; /* Pastikan teks tetap di tengah */
}
.list-unstyled {
    width: 100%; /* Pastikan ul memenuhi lebar container */
    max-width: 400px; /* Atur batas maksimal jika ingin lebar tetap */
    margin: 0 auto; /* Tengah jika diperlukan */
}

        .custom-hover {
position: relative;
overflow: hidden;
background: transparent;
display: inline-block;
text-align: center;
}

.custom-hover::before {
content: "";
position: absolute;
top: 0;
left: -100%;
width: 100%;
height: 100%;
background: white; /* Latar belakang hitam saat hover */
z-index: 0;
transition: left 0.3s ease-in-out;
}

.custom-hover:hover::before {
left: 0; /* Animasi bergerak dari kiri ke kanan */
}

.custom-hover:hover span {
color: black;
}

.custom-hover span {
position: relative;
color: white;
z-index: 1; /* Pastikan teks tetap terlihat di atas layer */
font-size: 1.1em;
}
.table-centered th,
.table-centered td {
text-align: center;
vertical-align: middle; /* Agar teks vertikal berada di tengah */
}

</style>
</head>
<body>
    <div class="w-100 d-flex justify-content-between align-items-center" style="height: 10vh; background-color: black;">
        <img src="{{ asset('img/logo.png') }}" class="ms-5" alt="" style="width: 100px; height: 100px;">
        <div class="me-5 d-flex align-items-center">
            <a href="#" class="text-white  d-flex align-items-center link-underline link-underline-opacity-0" id="dropdownMenuButton" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fs-2 bi-person-circle me-2"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="javascript:void(0)" onclick="confirmLogout()">Logout</a></li>
                <form id="keluar-app" action="{{ route('logout') }}" method="post">
                    @csrf
                </form>
            </ul>
            <p class="text-white mb-0">Halo, {{ Auth::user()->username }}</p>
        </div>  
    </div>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-1" style="width: 15%; background-color: rgb(63, 61, 61); min-height: 100vh;">
                <div class="mt-3">
                    <h2 class="ms-2 text-white">Admin Panel</h2>
                    <div class="mt-4 mb-3">
                        <ul class="list-unstyled mt-4">
                            <li>
                                <a href="{{ route('dashboard') }}" class="text-decoration-none text-white custom-hover p-2 rounded d-block">
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('pakaian') }}" class="text-decoration-none text-white custom-hover p-2 rounded d-block">
                                    <span>Data Pakaian</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('laporan') }}" class="text-decoration-none text-white custom-hover p-2 rounded d-block">
                                    <span>Laporan</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('massage') }}" class="text-decoration-none text-white custom-hover p-2 rounded d-block">
                                    <span>Massage</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
    
            <!-- Main Content -->
            <div class="col-10">
                @yield('content')
            </div>
        </div>
    </div>
    
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script>
        function confirmLogout() {
    if (confirm("Apakah anda yakin ingin keluar?")) {
        document.getElementById("keluar-app").submit();
    }
}
    </script>
</body>
</html>