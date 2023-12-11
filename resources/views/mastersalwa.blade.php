<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <!-- Brand -->
            <a class="navbar-brand" href="#">5026221098 - Salwa Iqlima Alifutri</a>

            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Karyawan
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="/karyawan">Data</a>
                            <a class="dropdown-item" href="/karyawan/tambahkaryawan">Tambah</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container">
            <hr />
            <br />
            <br />

            <!-- bagian judul halaman blog -->
            @yield('judul_halaman')

            <!-- bagian konten blog -->
            @yield('konten')
            <br />
            <br />
            <hr />
            <footer>
                <p>&copy; <a href="https://github.com/salwaiqlimaa">salwaiqlimaa</a>. 2023</p>
            </footer>
        </div>
    </div>
</body>

</html>