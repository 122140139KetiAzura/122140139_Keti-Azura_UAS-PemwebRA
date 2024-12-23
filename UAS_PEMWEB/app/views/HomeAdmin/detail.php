<h1>Detail Laporan</h1>
<form action="<?= BASEURL; ?>/homeAdmin/update" method="post" class="contact-form">
    <input type="hidden" name="id_laporan" value="<?= $data['laporan']['id_laporan']; ?>">
    <input type="hidden" name="id_user" value="<?= $data['laporan']['id_user']; ?>">
    <div class="form-group">
        <label for="waktu">Waktu</label>
        <input type="text" id="waktu" name="waktu" value="<?= $data['laporan']['waktu']; ?>" readonly>
    </div>
    <div class="form-group">
        <label for="judul">Judul</label>
        <input type="text" id="judul" name="judul" value="<?= $data['laporan']['judul']; ?>" readonly>
    </div>
    <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <input type="text" id="deskripsi" name="deskripsi" value=<?= $data['laporan']['deskripsi']; ?> readonly></input>
    </div>
    <div class="form-group">
        <label for="kategori">Kategori</label>
        <input type="text" id="kategori" name="kategori" value="<?= $data['laporan']['kategori']; ?>" readonly>
    </div>
    <div class="form-group" style="margin-bottom: 4rem;">
        <label for="status_laporan">Status Laporan</label>
        <input type="text" id="status_laporan" name="status_laporan" value="<?= $data['laporan']['status_laporan']; ?>" readonly>
    </div>

    <hr>

    <div class="form-group" style="margin-top: 4rem;">
        <label for="status_laporan">Balas Laporan</label>
        <textarea name="balasan" id=""></textarea>
    </div>
    <button type="submit" class="btn">Update</button>
</form>