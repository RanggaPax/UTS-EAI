<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Toko Baju Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        :root {
            --sidebar-width: 250px;
        }
        .sidebar {
            width: var(--sidebar-width);
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            background: #2c3e50;
            color: white;
            padding: 1rem;
        }
        .main-content {
            margin-left: var(--sidebar-width);
            padding: 2rem;
        }
        .nav-link {
            color: rgba(255,255,255,0.8);
            padding: 0.5rem 1rem;
            margin: 0.2rem 0;
            border-radius: 5px;
        }
        .nav-link:hover {
            color: white;
            background: rgba(255,255,255,0.1);
        }
        .nav-link.active {
            color: white;
            background: rgba(255,255,255,0.2);
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }
        .stat-card {
            transition: transform 0.2s;
        }
        .stat-card:hover {
            transform: translateY(-5px);
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="d-flex align-items-center mb-4">
            <h4 class="mb-0">Admin Panel</h4>
        </div>
        <nav class="nav flex-column">
            <a class="nav-link active" href="#">
                <i class="bi bi-speedometer2 me-2"></i>
                Dashboard
            </a>
            <a class="nav-link" href="#">
                <i class="bi bi-bag me-2"></i>
                Produk
            </a>
            <a class="nav-link" href="#">
                <i class="bi bi-people me-2"></i>
                Pelanggan
            </a>
            <a class="nav-link" href="#">
                <i class="bi bi-cart me-2"></i>
                Pesanan
            </a>
            <a class="nav-link" href="#">
                <i class="bi bi-gear me-2"></i>
                Pengaturan
            </a>
            <a class="nav-link" href="{{ route('logout') }}">
                <i class="bi bi-box-arrow-right me-2"></i>
                Logout
            </a>
        </nav>
    </div>

    <div class="main-content">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Dashboard Admin</h2>
            <div class="d-flex align-items-center">
                <span class="me-2">Selamat datang, {{ Auth::user()->name }}</span>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="card stat-card bg-primary text-white">
                    <div class="card-body">
                        <h5 class="card-title">Total Produk</h5>
                        <h2 class="mb-0">150</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card stat-card bg-success text-white">
                    <div class="card-body">
                        <h5 class="card-title">Total Pesanan</h5>
                        <h2 class="mb-0">45</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card stat-card bg-warning text-white">
                    <div class="card-body">
                        <h5 class="card-title">Pelanggan</h5>
                        <h2 class="mb-0">120</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card stat-card bg-info text-white">
                    <div class="card-body">
                        <h5 class="card-title">Pendapatan</h5>
                        <h2 class="mb-0">Rp 15.000.000</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Pesanan Terbaru</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID Pesanan</th>
                                        <th>Pelanggan</th>
                                        <th>Total</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#12345</td>
                                        <td>John Doe</td>
                                        <td>Rp 500.000</td>
                                        <td><span class="badge bg-success">Selesai</span></td>
                                    </tr>
                                    <tr>
                                        <td>#12346</td>
                                        <td>Jane Smith</td>
                                        <td>Rp 750.000</td>
                                        <td><span class="badge bg-warning">Proses</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Produk Terlaris</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Produk</th>
                                        <th>Terjual</th>
                                        <th>Pendapatan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Kemeja Flanel</td>
                                        <td>25</td>
                                        <td>Rp 2.500.000</td>
                                    </tr>
                                    <tr>
                                        <td>Celana Jeans</td>
                                        <td>20</td>
                                        <td>Rp 3.000.000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 