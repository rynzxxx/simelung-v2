<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .login-container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
            overflow: hidden;
            display: flex;
            max-width: 900px;
            width: 100%;
        }

        .login-form {
            padding: 40px;
            flex: 1;
        }

        .login-image {
            flex: 1;
            background-image: url('<?= base_url('assets/images/login_illustration.svg') ?>');
            background-size: cover;
            background-position: center;
            background-color: #e8e9f1;
        }

        .logo {
            color: #2D336B;
            font-weight: bold;
            margin-bottom: 20px;
            font-size: 1.5rem;
        }

        h2 {
            color: #333;
            margin-bottom: 10px;
            font-size: 2rem;
        }

        .tagline {
            color: #777;
            margin-bottom: 30px;
            font-size: 1rem;
        }

        /* === PERUBAHAN UTAMA PADA STYLING TEXTBOX === */
        .form-control {
            border: none;
            /* Hapus border default */
            background-color: #f0f4fa;
            /* Warna latar kebiruan seperti contoh */
            border-radius: 8px;
            padding: 14px 20px;
            /* Padding agar lebih tebal */
            font-size: 1rem;
            margin-bottom: 20px;
            /* Jarak antar textbox */
        }

        .form-control:focus {
            background-color: #f0f4fa;
            box-shadow: 0 0 0 2px rgba(45, 51, 107, 0.2);
            /* Efek focus shadow */
        }

        /* Penyesuaian padding kanan untuk input password agar teks tidak menimpa ikon */
        #password {
            padding-right: 50px;
        }

        /* === STYLING BARU UNTUK WRAPPER DAN IKON MATA === */
        .password-wrapper {
            position: relative;
            margin-bottom: 20px;
        }

        .toggle-password-icon {
            position: absolute;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
            cursor: pointer;
            color: #888;
            /* Warna ikon lebih soft */
        }

        /* ============================================== */

        .form-check {
            margin-bottom: 15px;
        }

        .forgot-password a {
            color: #2D336B;
            text-decoration: none;
            font-size: 0.9rem;
        }

        .btn-primary {
            background-color: #2D336B;
            border-color: #2D336B;
            border-radius: 8px;
            padding: 12px 20px;
            font-size: 1rem;
            width: 100%;
        }

        .btn-primary:hover {
            background-color: #21264E;
            border-color: #21264E;
        }

        .signup-link {
            margin-top: 20px;
            text-align: center;
            font-size: 0.9rem;
        }

        .signup-link a {
            color: #2D336B;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="login-form">
            <div class="logo">SiMelung</div>
            <h2>Hallo, Selamat Datang Kembali !</h2>
            <p class="tagline">Silahkan Masukan Username dan Password Anda</p>

            <?php if (session()->getFlashdata('error')): ?>
                <div class="alert alert-danger" role="alert">
                    <?= session()->getFlashdata('error') ?>
                </div>
            <?php endif; ?>

            <form action="<?= base_url('/login/process') ?>" method="post">
                <?= csrf_field() ?>

                <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>

                <div class="password-wrapper">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    <i class="bi bi-eye-slash-fill toggle-password-icon" id="togglePasswordIcon"></i>
                </div>

                <!-- <div class="d-flex justify-content-between mb-3">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="remember">
                        <label class="form-check-label" for="remember">Remember me</label>
                    </div>
                    <div class="forgot-password">
                        <a href="#">Forgot Password?</a>
                    </div>
                </div> -->
                <br><br>


                <button type="submit" class="btn btn-primary">Masuk</button>

            </form>

            <!-- <div class="signup-link">
                Don't have an account? <a href="#">Sign Up</a>
            </div> -->
        </div>
        <div class="login-image">
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Target elemen ikon yang baru
        const togglePasswordIcon = document.querySelector('#togglePasswordIcon');
        const password = document.querySelector('#password');

        togglePasswordIcon.addEventListener('click', function() {
            // Toggle tipe input
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);

            // Toggle kelas ikon
            this.classList.toggle('bi-eye-slash-fill');
            this.classList.toggle('bi-eye-fill');
        });
    </script>
</body>

</html>