    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title', 'UTS PBWL')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
        <style>
            body {
                font-family: 'Poppins', sans-serif;
            }

            .navbar-brand {
                font-weight: 600;
            }

            .offcanvas-title {
                font-weight: 600;
            }

            .nav-link {
                color: gray !important;
                transition: color 0.3s ease;
            }

            .nav-link:hover {
                color: black !important;
            }

            .nav-link.active {
                color: black !important;

            }
        </style>
    </head>

    <body>
        <nav class="navbar navbar-light bg-light px-3">
            <div class="container-fluid d-flex justify-content-between align-items-center">
                <a class="navbar-brand" href="/">UTS Laravel</a>

                <button class="btn btn-light border-dark" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#menuOffcanvas" aria-controls="menuOffcanvas">
                    <i class="fas fa-bars fa-lg"></i>
                </button>
            </div>
        </nav>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="menuOffcanvas" aria-labelledby="menuOffcanvasLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="menuOffcanvasLabel">UTS Laravel</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('tabel_produk') ? 'active' : '' }}"
                            href="{{ url('tabel_produk') }}">
                            Produk
                        </a>
                    </li>
                </ul>

                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>

        <div class="container mt-3">
            @yield('content')
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>
