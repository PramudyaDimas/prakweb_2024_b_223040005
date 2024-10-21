<div class="container mt-5">
    <div class="row">
        <div class="col-6">
        <div class="col-5">
            <h3>Daftar Mahasiswa</h3>
            <?php foreach( $data['mhs'] as $mhs ) : ?>
            <ul>
                <li><?= $mhs['nama']; ?></li>
                <li><?= $mhs['nrp']; ?></li>
                <li><?= $mhs['email']; ?></li>
                <li><?= $mhs['jurusan']; ?></li>
            <ul class="list-group">
                <?php foreach ($data['mhs'] as $mhs) : ?>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?= $mhs['nama']; ?>
                    <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge text-bg-primary"
                        style="text-decoration: none;">Detail</a>
                </li>
                <?php endforeach; ?>
            </ul>
            <?php endforeach; ?>
        </div>
    </div>
    </div>
</div>