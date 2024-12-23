<main class="content">
    <div class="auth-container">
        <h1>Selamat Datang di CrafityNEST</h1>
        <p class="tagline">tempat di mana kreativitas bertemu dengan keindahan</p>

        <div class="auth-card">
            <h2>Masuk untuk mengakses layanan pelanggan</h2>

            <form class="auth-form" method="POST" action="<?= BASEURL; ?>/Daftar/tambah" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input 
                        type="text" 
                        id="username" 
                        name="username"
                        placeholder="masukkan username kamu"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email"
                        placeholder="masukkan email kamu"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input 
                        type="password" 
                        id="password" 
                        name="password"
                        placeholder="masukkan password kamu"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="confirm-password">Konfirmasi Password</label>
                    <input 
                        type="password" 
                        id="confirm-password" 
                        name="confirm-password"
                        placeholder="konfirmasi password kamu"
                        required
                    >
                </div>

                <button type="submit" class="btn btn-daftar btn-block">Daftar</button>
                <p class="auth-switch">
                    Klik <a href="<?= BASEURL; ?>/Login">Masuk</a> jika sudah memiliki akun
                </p>
            </form>
        </div>
    </div>
</main>

<script>
    document.getElementById('confirm_password').addEventListener('input', function() {
        var password = document.getElementById('password').value;
        var confirmPassword = this.value;
        var errorElement = document.getElementById('password_error');

        if (password !== confirmPassword) {
            errorElement.style.display = 'block';
        } else {
            errorElement.style.display = 'none';
        }
    });
</script>