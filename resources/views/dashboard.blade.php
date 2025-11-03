
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nutapos Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:wght@300;400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

<div class="container">

    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="logo-wrap">
            <img src="{{ asset('img/nutapos_logo.png') }}" class="logo-icon">
            <span class="logo">nutapos</span>
        </div>
            <ul class="menu">
                <li class="active"><a href="/dashboard">Dashboard</a></li>
                <li><a href="/pegawai">Pegawai</a></li>
                <li><a href="/kasir">Kasir</a></li>
                <li><a href="/stok">Stok</a></li>
                <li><a href="/penjualan">Riwayat Penjualan</a></li>
                <li><a href="/member">Member</a></li>
                <li><a href="/">Tutup Outlet</a></li>
                <li><a href="/">Pengaturan</a></li>
            </ul>
    </aside>

    <!-- TOP Content -->
    <main class="main">
        <header class="topbar">
        <div class="left-section">
            <div class="menu-icon">☰</div>
            <span class="status">
            <span class="status-dot"></span>
            <span class="status-text">Online</span>
            </span>
        </div>

        <div class="right-section"> <!-- Profile Dummy Ayau -->
            <button class="icon">📄</button>
            <div class="profile">
            <div class="avatar">P</div> 
            <div class="profile-info">
                <span class="name">PT Cunyau Terbang</span>
                <span class="role">Manager</span>
            </div>
            <div class="dropdown">
                <button>▾</button>
                <div class="content">  
                    <a href="/public/login">Logout</a>
                </div>
            </div>
        </div>
        </header>


    <!--Main Content -->
        <div class="dashboard">
            <h2 class="section-title">Ringkasan Penjualan</h2>

    <!-- Filter bar -->
            <div class="filter-bar">
                <button class="filter-btn">🏪 Semua Outlet</button>
                <button class="filter-btn">📅 16 Apr 2025 - 20 Mei 2025</button>
            </div>

  <!-- Cards -->
            <div class="cards">
                <div class="card card-large">
                <p>Total Penjualan</p>
                <h3>Rp 10.000.000</h3>
            </div>
            <div class="card">
                <p>Jumlah Transaksi</p>
                <h3>100 transaksi</h3>
            </div>
                <div class="card">
                <p>Rata-rata Transaksi</p>
                <h3>Rp 39.000</h3>
            </div>
                <div class="card">
                <p>Laba Kotor</p>
                <h3>Rp 18.000.000</h3>
            </div>
                <div class="card">
                <p>Total Biaya</p>
                <h3>Rp 15.240.000</h3>
            </div>
        </div>
        

  <!-- Chart -->
  <h2 class="subtitle">Grafik Penjualan</h2>
  <div class="chart-box">
    <canvas id="salesChart"></canvas>
  </div>
</div>


</div>

<script>
const ctx = document.getElementById('salesChart');

new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['30 Apr', '1 Mei', '2 Mei', '3 Mei', '4 Mei', '5 Mei'],
        datasets: [
            { label: 'April', data: [20, 15, 18, 17, 21, 19], borderWidth: 2, fill: true },
            { label: 'Mei', data: [18, 16, 19, 20, 22, 21], borderWidth: 2, fill: true }
        ]
    }
});
</script>

</body>
</html>
