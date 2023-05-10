<?= $this->extend('admin/masterA') ?>

<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div>
    <a href="<?= base_url('tambaht') ?>" class="btn btn-success mb-3">Tambah Data</a>
</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama </th>
            <th scope="col">Alamat</th>
            <th scope="col">No. Hp</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>

    <tbody>
        <?php

        $i = 1; ?>
        <?php foreach ($trainer as $t) : ?>
            <tr>
                <th scope="row"><?= $i++; ?></th>
                <td><?= $t['nama']; ?></td>
                <td><?= $t['alamat']; ?></td>
                <td><?= $t['nomor']; ?></td>
                <td>
                    <!-- <a href="" class="btn btn-success ">Edit</a> -->
                    <form action="trainer/<?= $t['id']; ?>" method="POST">
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