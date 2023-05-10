<?= $this->extend('user/master') ?>

<?= $this->section('content') ?>

<style>
    .shadow-sm {
        background-color: white;
    }
</style>

<!-- Begin Page Content -->

<div class="shadow-sm p-2 mb-3 bg-body rounded ">
    <h4 class="text-center text-primary font-weight-bold">PESAN</h4>
</div>
<div class="container">
    <div class="row">

        <form class="row g-3" action="bookingc/save" method="post">
            <?= csrf_field(); ?>
            <div class="col-md-6 my-2">
                <label for="nama_cust" class="form-label">Nama Instansi</label>
                <input type="text" class="form-control" id="nama_cust" name="nama_cust" autofocus>
            </div>
            <div class="col-md-6 my-2">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat">
            </div>
            <div class="col-md-6 my-2">
                <label for="nomor" class="form-label">No. Handphone</label>
                <input type="text" class="form-control" id="nomor" name="nomor">
            </div>
            <div class="col-md-6 my-2">
                <label for="nomor" class="form-label">No. Handphone</label>
                <select name="paket" class="form-control" aria-label="Default select example">
                    <option selected>Pilih Paket</option>
                    <?php foreach($paket as $pak) {?>
                        <option value="<?= $pak['nama_paket'] ?>"><?= $pak['nama_paket'] ?></option>
                    <?php } ?>
                </select>
                <!-- <label for="nama_paket" class="form-label">Pilih Paket</label>
                <input type="text" class="form-control" id="nama_paket" name="nama_paket"> -->
            </div>
            <div class="col-md-6 my-2">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal">
            </div>
            <div class="col-md-6 my-2" disabled>
                <label for="total" class="form-label">Total Harga</label>
                <input type="text" class="form-control" id="total" name="total" readonly>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary mt-3">Pesan Sekarang</button>
            </div>
        </form>
    </div>
</div>
</div>


<!-- End of Main Content -->

<?= $this->endSection() ?>