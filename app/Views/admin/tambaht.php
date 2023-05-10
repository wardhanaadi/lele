<?= $this->extend('admin/masterA') ?>

<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container">
    <div class="row">
        <div class="col-9">
            <h2 class="my-3"> Tambah Data Trainer</h2>
            <form class="row g-3" action="trainer/simpan" method="post">
                <?= csrf_field(); ?>
                <div class="col-md-6 my-2">
                    <label for="nama_paket" class="form-label">Nama Trainer</label>
                    <input type="text" class="form-control" id="nama" name="nama" autofocus>
                </div>
                <div class="col-md-6 my-2">
                    <label for="deskripsi" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat">
                </div>
                <div class="col-md-6 my-2">
                    <label for="harga" class="form-label">no. Hp</label>
                    <input type="text" class="form-control" id="nomor" name="nomor">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary mt-3">Tambah Data</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?= $this->endSection() ?>