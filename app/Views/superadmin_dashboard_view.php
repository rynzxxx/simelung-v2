<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Super Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <div class="container">
            <a class="navbar-brand" href="#">Super Admin Panel</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/logout') ?>">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Selamat Datang, <?= session()->get('username') ?>!</h4>
            <p>Anda telah berhasil login sebagai <strong><?= strtoupper(session()->get('role')) ?></strong>.</p>
            <hr>
            <p class="mb-0">Ini adalah halaman dashboard khusus untuk Super Admin.</p>
        </div>
    </div>
</body>

</html>