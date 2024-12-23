<h1>Selamat Datang Admin</h1>
<p class="tagline">tempat di mana kreativitas bertemu dengan keindahan</p>

<table class="data-table">
    <thead>
        <tr>
            <th>Nomor</th>
            <th>Waktu</th>
            <th>Judul</th>
            <th>Deskripsi</th>
            <th>Kategori Laporan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach( $data['laporan'] as $laporan ) : ?>
            <tr>
                <td>1</td>
                <td><?= $laporan['waktu'] ?></td>
                <td><?= $laporan['kategori'] ?></td>
                <td><?= $laporan['judul'] ?></td>
                <td><?= $laporan['deskripsi'] ?></td>
                <td><a href="<?= BASEURL; ?>/HomeAdmin/detail/<?= $laporan['id_laporan']?>" class="btn"><button>Balas laporan</button></a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>