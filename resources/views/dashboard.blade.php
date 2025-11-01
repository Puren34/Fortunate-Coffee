<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nutapos Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:wght@300;400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

<div class="container">

    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="logo-wrap">
            <img src="{{ asset('img/NutaPOS_Logo.png') }}" class="logo-icon">
            <span class="logo">nutapos</span>
        </div>
            <ul class="menu">
                <li class="active">Dashboard</li>
                <li>Pegawai</li>
                <li>Kasir</li>
                <li>Stok</li>
                <li>Riwayat Penjualan</li>
                <li>Member</li>
                <li>Tutup Outlet</li>
                <li>Pengaturan</li>
            </ul>
    </aside>

    <!-- Main Content -->
    <main class="main">
        <h2 class="title">Ringkasan Penjualan</h2>

        <div class="cards">
            <div class="card">
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

        <h2 class="subtitle">Grafik Penjualan</h2>
        <div class="chart-box">
            <canvas id="salesChart"></canvas>
        </div>
    </main>

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
