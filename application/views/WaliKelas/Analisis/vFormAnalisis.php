<div class="pcoded-content">
    <!-- Page-header start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Perhitungan SMART</h5>
                        <p class="m-b-0">Lakukan perhitungan metode SMART untuk menentukan siswa berprestasi</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="<?= base_url('WaliKelas/cDashboardWaliKelas') ?>"> <i class="fa fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Perhitungan SMART</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Page-header end -->
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-body start -->
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Pilih Periode</h5>
                                    <span>Pilih kelas dan angkatan untuk memulai proses perhitungan.</span>
                                </div>
                                <div class="card-block">
                                    <form action="<?= base_url('WaliKelas/cHitungSmart/hitung') ?>" method="POST">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Periode</label>
                                            <div class="col-sm-5">
                                                <select name="kelas" class="form-control">
                                                    <option value="">---Pilih Kelas---</option>
                                                    <?php foreach ($periode as $value) { ?>
                                                        <option value="<?= $value->kelas ?>"><?= $value->kelas ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="col-sm-5">
                                                <select name="angkatan" class="form-control">
                                                    <option value="">---Pilih Angkatan---</option>
                                                    <?php foreach ($periode as $value) { ?>
                                                        <option value="<?= $value->angkatan ?>"><?= $value->angkatan ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2"></label>
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary m-b-0"><i class="fa fa-calculator"></i> Hitung dan Ranking</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page-body end -->
            </div>
        </div>
        <!-- Main-body end -->
    </div>
</div>