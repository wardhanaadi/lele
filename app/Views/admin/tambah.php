<?= $this->extend('admin/masterA') ?>

<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container">
    <div class="row">
        <div class="col-9">
            <h2 class="my-3"> Tambah Data Paket</h2>
            <form class="row g-3" action="paket/simpan" method="post">
                <?= csrf_field(); ?>
                <div class="col-md-6 my-2">
                    <label for="nama_paket" class="form-label">Nama Paket</label>
                    <input type="text" class="form-control" id="nama_paket" name="nama_paket" autofocus>
                </div>
                <div class="col-md-6 my-2">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control" id="deskripsi" name="deskripsi">
                </div>
                <div class="col-md-6 my-2">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="text" class="form-control" id="harga" name="harga">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary mt-3">Tambah Data</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?= $this->endSection() ?>