<?= $this->extend('user/master') ?>

<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="row">
  <div class="container-fluid">
    <!-- Page Heading -->
    <div class="col-xl-12 col-lg-7">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Gerbang Selamat Datang</h6>

        </div>
        <!-- Card Body -->
        <div class="card-body">
          <div class="chart-area">
            <img src="img/selamatdatang.jpg" alt="gerbang" style="height: 330px; width: 950px;">
            <canvas id="myAreaChart"></canvas>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-6 col-lg-7">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Gerbang Selamat Datang</h6>

        </div>
        <!-- Card Body -->
        <div class="card-body">
          <div class="chart-area">
            <img src="img/selamatdatang.jpg" alt="gerbang" style="height: 310px; width: 420px;">
            <canvas id="myAreaChart"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End of Main Content -->



<?= $this->endSection() ?>