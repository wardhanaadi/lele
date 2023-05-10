<?= $this->extend('user/master') ?>

<?= $this->section('content') ?>
<!-- Begin Page Content -->

<div class="shadow-sm p-2 mb-3 bg-body rounded ">
    <h4 class="text-center text-primary font-weight-bold">PAKET</h4>
</div>

<table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Paket</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Harga</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1; ?>
        <?php foreach ($paket as $p) : ?>
            <tr>
                <th scope="row"><?= $i++; ?></th>
                <td><?= $p['nama_paket']; ?></td>
                <td><?= $p['deskripsi']; ?></td>
                <td><?= $p['harga']; ?></td>
            </tr>
        <?php endforeach; ?>
        </tr>

    </tbody>
</table>

<!-- End of Main Content -->



<?= $this->endSection() ?>