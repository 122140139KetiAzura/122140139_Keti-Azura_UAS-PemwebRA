<h1>Selamat Datang di Layanan Pelanggan CrafityNEST</h1>
<p class="tagline">tempat di mana kreativitas bertemu dengan keindahan</p>

<form class="contact-form" action="<?= BASEURL; ?>/Helpdesk/tambah" method="post">	
    <div class="form-group">
        <label>Kategori Keluhan</label>
        <div class="checkbox-group">
            <label><input type="checkbox" value="kerusakan barang" name="kategori"> kerusakan barang</label>
            <label><input type="checkbox" value="pelayanan buruk" name="kategori"> pelayanan buruk</label>
            <label><input type="checkbox" value="jumlah item tidak sesuai" name="kategori"> jumlah item tidak sesuai</label>
            <label><input type="checkbox" value="barang tidak sesuai" name="kategori"> barang tidak sesuai</label>
        </div>
    </div>

    <div class="form-group">
        <label for="subjek">Subjek</label>
        <input type="text" id="subjek" placeholder="masukkan subjek keluhan kamu" name="judul">
    </div>

    <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <textarea id="deskripsi" placeholder="jelaskan secara detail keluhan kamu" name="deskripsi"></textarea>
    </div>

    <button type="submit" class="btn btn-kirim">Kirim</button>
</form>