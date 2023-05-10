<?= $this->extend('admin/masterA') ?>

<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="shadow-sm p-2 mb-3 bg-whitesmoke rounded ">
    <h4 class="text-center text-primary font-weight-bold">Data Pemesan</h4>
</div>
<table class="table">
    <thead>
        <!-- <a href="" class="btn btn-primary">Tambah Data</a> -->

        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Pemesan</th>
            <th scope="col">Paket</th>
            <th scope="col">Jam</th>
            <th scope="col">No.hp</th>
            <th scope="col">Alamat</th>
            <th scope="col">Aksi</th>

        </tr>
    </thead>

    <tbody>
        <?php $i = 1; ?>
        <?php foreach ($booking as $b) : ?>
            <tr>
                <th scope="row"><?= $i++; ?></th>
                <td><?= $b['nama_cust']; ?></td>
                <td><?= $b['nama_paket']; ?></td>
                <td><?= $b['tanggal']; ?></td>
                <td><?= $b['nomor']; ?></td>
                <td><?= $b['alamat']; ?></td>
                <td>
                    <a href="" class="btn btn-success">Detail</a>
                    <a href="" class="btn btn-danger">Hubungi</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<!-- End of Main Content -->



<?= $this->endSection() ?>