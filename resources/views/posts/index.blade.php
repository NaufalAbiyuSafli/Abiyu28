<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Start Bootstrap</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                        <div class="container mt-5">
                        <div class="row">
                            <div class="col-md-8 mx-auto">
                                <h1 class="text-center mb-4">Pizza reservations</h1>

                                <!-- Alert untuk Success Message -->
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif

                                <!-- Form Create Post -->
                                <div class="card mb-4">
                                    <div class="card-header bg-primary text-white">
                                        <h5>New reservations</h5>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('posts.store') }}" method="POST">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="title" class="form-label">Nama Pemesan</label>
                                                <input type="text" name="title" id="title" class="form-control" placeholder="Masukan Nama..." required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="content" class="form-label">Deskripsi Pesanan</label>
                                                <textarea name="content" id="content" class="form-control" rows="4" placeholder="Masukan Deskripsi..." required></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-success w-100">Pesan</button>
                                        </form>
                                    </div>
                                </div>

                                <!-- List of Posts -->
                                <div class="card">
                                    <div class="card-header bg-secondary text-white">
                                        <h5>List of Reservations</h5>
                                    </div>
                                    <div class="card-body">
                                        @if($posts->isEmpty())
                                            <p class="text-center">No reservations available.</p>
                                        @else
                                            <ul class="list-group">
                                                @foreach($posts as $post)
                                                    <li class="list-group-item">
                                                        <h6 class="fw-bold">{{ $post->title }}</h6>
                                                        <p>{{ $post->content }}</p>
                                                        <small class="text-muted">Created at: {{ $post->created_at->format('d M Y, H:i') }}</small>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy;AbiyuSafli 2024</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
