<?= $this->extend('admin/masterA') ?>

<?= $this->section('content') ?>
<!-- Begin Page Content -->

<style>
    .shadow-sm {
        background-color: white;
    }
</style>


<div class="shadow-sm p-2 mb-3 bg-body rounded ">
    <h4 class="text-center text-primary font-weight-bold">PAKET</h4>
</div>

<div>
    <a href="tambah" class="btn btn-success mb-3">Tambah Data</a>
</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Paket</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Harga</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>

    <tbody>
        <?php

        $i = 1; ?>
        <?php foreach ($paket as $p) : ?>
            <tr>
                <th scope="row"><?= $i++; ?></th>
                <td><?= $p['nama_paket']; ?></td>
                <td><?= $p['deskripsi']; ?></td>
                <td><?= $p['harga']; ?></td>
                <td>
                    <a href="" class="btn btn-success ">Edit</a>

                    <form action="Paket/<?= $p['id']; ?>" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin?');">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>

</table>

<!-- End of Main Content -->



<?= $this->endSection() ?>