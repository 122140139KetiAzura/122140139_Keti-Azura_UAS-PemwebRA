<main class="content">
    <div class="auth-container">
    <h1>Selamat Datang di CrafityNEST</h1>
    <p class="tagline">tempat di mana kreativitas bertemu dengan keindahan</p>

    <div class="auth-card">
        <h2>Masuk untuk mengakses layanan pelanggang</h2>
        
        <form class="auth-form" action="<?= BASEURL; ?>/Login/masuk" method="post">
            <div class="form-group">
                <label for="email">Email</label>
                <input 
                    type="text" 
                    id="login" 
                    placeholder="masukkan email kamu"
                    required
                    name="email"
                >
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input 
                    type="password" 
                    id="password" 
                    placeholder="masukkan password kamu"
                    required
                    name="password"
                >
            </div>

            <button type="submit" class="btn btn-daftar btn-block">Daftar</button>
            <p class="auth-switch">
                Klik <a href="<?= BASEURL; ?>/Daftar">Daftar</a> jika belum memiliki akun
            </p>
        </form>
    </div>
    </div>
</main>