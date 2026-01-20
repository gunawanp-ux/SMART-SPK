<div class="pcoded-content">
    <!-- Page-header start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Hasil Perankingan SMART</h5>
                        <p class="m-b-0">Hasil akhir perankingan siswa berprestasi untuk kelas <?= $kelas ?> angkatan <?= $angkatan ?></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="<?= base_url('WaliKelas/cDashboardWaliKelas') ?>"> <i class="fa fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="<?= base_url('WaliKelas/cHitungSmart') ?>">Perhitungan</a></li>
                        <li class="breadcrumb-item"><a href="#!">Hasil Ranking</a></li>
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
                                    <h5>Tabel Hasil Perankingan Siswa</h5>
                                    <span>Berikut adalah daftar siswa yang diurutkan berdasarkan skor akhir tertinggi hasil perhitungan metode SMART.</span>
                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Peringkat</th>
                                                    <th>Nama Siswa</th>
                                                    <th>Skor Akhir</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if (empty($ranking)) { ?>
                                                    <tr>
                                                        <td colspan="3" class="text-center">Tidak ada data siswa untuk periode yang dipilih.</td>
                                                    </tr>
                                                <?php } else {
                                                    $rank = 1;
                                                    foreach ($ranking as $item) {
                                                ?>
                                                    <tr>
                                                        <td><span class="badge badge-success"><?= $rank++ ?></span></td>
                                                        <td><?= htmlspecialchars($item['nama_siswa']) ?></td>
                                                        <td><?= number_format($item['final_score'], 4) ?></td>
                                                    </tr>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <a href="<?= base_url('WaliKelas/cHitungSmart') ?>" class="btn btn-secondary mt-3"><i class="fa fa-arrow-left"></i> Kembali</a>
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