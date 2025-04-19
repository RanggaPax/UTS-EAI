<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard User - Toko Baju Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .navbar {
            background: #2c3e50;
            padding: 1rem;
        }
        .navbar-brand {
            color: white !important;
            font-weight: bold;
        }
        .nav-link {
            color: rgba(255,255,255,0.8) !important;
        }
        .nav-link:hover {
            color: white !important;
        }
        .product-card {
            transition: transform 0.2s;
            border: none;
            border-radius: 10px;
            overflow: hidden;
        }
        .product-card:hover {
            transform: translateY(-5px);
        }
        .product-image {
            height: 200px;
            object-fit: cover;
        }
        .category-badge {
            position: absolute;
            top: 10px;
            right: 10px;
        }
        .search-bar {
            max-width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">Toko Baju Online</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kategori</a>
                    </li>
                </ul>
                <div class="d-flex align-items-center">
                    <a href="#" class="nav-link me-3">
                        <i class="bi bi-cart"></i>
                        <span class="badge bg-danger">3</span>
                    </a>
                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Profil</a></li>
                            <li><a class="dropdown-item" href="#">Pesanan Saya</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="search-bar mb-4">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Cari produk...">
                <button class="btn btn-primary" type="button">
                    <i class="bi bi-search"></i>
                </button>
            </div>
        </div>

        <h2 class="mb-4">Produk Terbaru</h2>
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="card product-card">
                    <span class="badge bg-primary category-badge">Kemeja</span>
                    <img src="https://via.placeholder.com/300x200" class="card-img-top product-image" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Kemeja Flanel</h5>
                        <p class="card-text text-muted">Rp 250.000</p>
                        <button class="btn btn-primary w-100">Tambah ke Keranjang</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card product-card">
                    <span class="badge bg-success category-badge">Celana</span>
                    <img src="https://via.placeholder.com/300x200" class="card-img-top product-image" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Celana Jeans</h5>
                        <p class="card-text text-muted">Rp 350.000</p>
                        <button class="btn btn-primary w-100">Tambah ke Keranjang</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card product-card">
                    <span class="badge bg-warning category-badge">Jaket</span>
                    <img src="https://via.placeholder.com/300x200" class="card-img-top product-image" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Jaket Hoodie</h5>
                        <p class="card-text text-muted">Rp 450.000</p>
                        <button class="btn btn-primary w-100">Tambah ke Keranjang</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card product-card">
                    <span class="badge bg-info category-badge">T-Shirt</span>
                    <img src="https://via.placeholder.com/300x200" class="card-img-top product-image" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">T-Shirt Basic</h5>
                        <p class="card-text text-muted">Rp 150.000</p>
                        <button class="btn btn-primary w-100">Tambah ke Keranjang</button>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="mb-4">Pesanan Terakhir</h2>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID Pesanan</th>
                                <th>Tanggal</th>
                                <th>Total</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#12345</td>
                                <td>19 April 2024</td>
                                <td>Rp 500.000</td>
                                <td><span class="badge bg-success">Selesai</span></td>
                            </tr>
                            <tr>
                                <td>#12346</td>
                                <td>18 April 2024</td>
                                <td>Rp 750.000</td>
                                <td><span class="badge bg-warning">Proses</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 