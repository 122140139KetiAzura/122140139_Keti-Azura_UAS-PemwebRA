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
        <?php if (is_array($data['laporan']) && count($data['laporan']) > 0): ?>
            <?php $nomor = 1; ?>
            <?php foreach ($data['laporan'] as $laporan): ?>
                <tr>
                    <td><?= $nomor++; ?></td>
                    <td><?= $laporan['waktu'] ?></td>
                    <td><?= $laporan['judul'] ?></td>
                    <td><?= $laporan['deskripsi'] ?></td>
                    <td><?= $laporan['kategori'] ?></td>
                    <td><?= $laporan['balasan'] ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="6">Tidak ada laporan yang ditemukan.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>