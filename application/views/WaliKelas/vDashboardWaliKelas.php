<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
	<div class="pcoded-content">
		<!-- [ breadcrumb ] start -->
		<div class="page-header">
			<div class="page-block">
				<div class="row align-items-center">
					<div class="col-md-12">
						<div class="page-header-title">
							<h5 class="m-b-10">Dashboard</h5>
						</div>
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
							<li class="breadcrumb-item"><a href="#!">Dashboard Analytics</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- [ breadcrumb ] end -->
		<!-- [ Main Content ] start -->
		<div class="row">
			<?php
			$siswa = $this->db->query("SELECT COUNT(id_siswa) as jml FROM `analisis_siswa`")->row();
			$analisis = $this->db->query("SELECT COUNT(id_siswa) as jml FROM `analisis_siswa` WHERE hasil != '0'")->row();
			$user = $this->db->query("SELECT COUNT(id_user) as jml FROM `user`")->row();
			$hasil_analisis = $this->db->query("SELECT MAX(hasil) as hasil, nama_siswa, jk, kelas, angkatan FROM analisis_siswa WHERE hasil!=0 GROUP BY kelas, angkatan")->result();
			$k_raport = $this->db->get('kriteria_raport')->result();
			$k_absensi = $this->db->get('kriteria_absensi')->result();
			$k_keaktifan = $this->db->get('kriteria_keaktifan')->result();
			$k_kepribadian = $this->db->get('kriteria_kepribadian')->result();
			$k_kejuaraan = $this->db->get('kriteria_kejuaraan')->result();

			?>
			
			<!-- table card-1 start -->
			<div class="col-md-12 col-xl-4">
				<div class="card flat-card">
					<div class="row-table">
						<div class="col-sm-6 card-body br">
							<div class="row">
								<div class="col-sm-4">
									<i class="icon feather icon-eye text-c-green mb-1 d-block"></i>
								</div>
								<div class="col-sm-8 text-md-center">
									<h5><?= $siswa->jml ?></h5>
									<span>Siswa</span>
								</div>
							</div>
						</div>
						<div class="col-sm-6 card-body">
							<div class="row">
								<div class="col-sm-4">
									<i class="icon feather icon-music text-c-red mb-1 d-block"></i>
								</div>
								<div class="col-sm-8 text-md-center">
									<h5><?= $user->jml ?></h5>
									<span>User</span>
								</div>
							</div>
						</div>
					</div>
					<div class="row-table">
						<div class="col-sm-6 card-body br">
							<div class="row">
								<div class="col-sm-4">
									<i class="icon feather icon-file-text text-c-blue mb-1 d-block"></i>
								</div>
								<div class="col-sm-8 text-md-center">
									<h5><?= $analisis->jml ?></h5>
									<span>Analisis</span>
								</div>
							</div>
						</div>
						<div class="col-sm-6 card-body">
							<div class="row">
								<div class="col-sm-4">
									<i class="icon feather icon-mail text-c-yellow mb-1 d-block"></i>
								</div>
								<div class="col-sm-8 text-md-center">
									<h5>5</h5>
									<span>Kriteria</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- widget primary card start -->
				<div class="card flat-card widget-primary-card">
					<div class="row-table">
						<div class="col-sm-3 card-body">
							<i class="feather icon-star-on"></i>
						</div>
						<div class="col-sm-9">
							<h4>Hallo!</h4>
							<h6>Selamat Datang Wali Kelas</h6>
						</div>
					</div>
				</div>
				<!-- widget primary card end -->
			</div>
			<div class="col-xl-8">
				<div class="card">
					<div class="card-header">
						<h3>Informasi Siswa Terbaik Per Kelas dan Angkatan</h3>
					</div>
					<div class="card-body table-border-style">
						<div class="table-responsive">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>#</th>
										<th>Nama Siswa</th>
										<th>Kelas</th>
										<th>Angkatan</th>
										<th>Jenis Kelamin</th>
										<th>Hasil</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($hasil_analisis as $key => $value) {
									?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $value->nama_siswa ?></td>
											<td><?= $value->kelas ?></td>
											<td><?= $value->angkatan ?></td>
											<td><?= $value->jk ?></td>
											<td><?= $value->hasil ?>
											</td>

										</tr>
									<?php
									}
									?>

								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<!-- table card-1 end -->
			 
			<!-- table card-2 start -->
			 <div class="card">
    <div class="card-body">
        <h5 class="text-center font-weight-bold">
      
        </h5>

        <div class="table-responsive mt-3">
            <table class="table table-bordered text-center">
                <thead class="thead-light">
                    <tr>
                        <th>Kode</th>
                        <th>Kriteria</th>
                        <th>Jenis</th>
                        <th>Bobot Awal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>C1</td>
                        <td>Nilai Raport</td>
                        <td>Benefit</td>
                        <td>30</td>
                    </tr>
                    <tr>
                        <td>C2</td>
                        <td>Kehadiran</td>
                        <td>Benefit</td>
                        <td>20</td>
                    </tr>
                    <tr>
                        <td>C3</td>
                        <td>Prestasi</td>
                        <td>Benefit</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>C4</td>
                        <td>Keaktifan</td>
                        <td>Benefit</td>
                        <td>20</td>
                    </tr>
                    <tr>
                        <td>C5</td>
                        <td>Kepribadian</td>
                        <td>Benefit</td>
                        <td>20</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr class="font-weight-bold">
                        <td colspan="3">Total</td>
                        <td>100</td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
									<div class="card mt-4">
    <div class="card-body">
        <h5 class="text-center font-weight-bold">
  
        </h5>

        <div class="table-responsive mt-3">
            <table class="table table-bordered text-center">
                <thead class="thead-light">
                    <tr>
                        <th>Kriteria</th>
                        <th>Bobot Awal</th>
                        <th>Bobot Normalisasi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>C1</td>
                        <td>30</td>
                        <td>0,30</td>
                    </tr>
                    <tr>
                        <td>C2</td>
                        <td>20</td>
                        <td>0,20</td>
                    </tr>
                    <tr>
                        <td>C3</td>
                        <td>10</td>
                        <td>0,10</td>
                    </tr>
                    <tr>
                        <td>C4</td>
                        <td>20</td>
                        <td>0,20</td>
                    </tr>
                    <tr>
                        <td>C5</td>
                        <td>20</td>
                        <td>0,20</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr class="font-weight-bold">
                        <td>Total</td>
                        <td>100</td>
                        <td>1,00</td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

			<div class="col-md-6">
				<div class="card">
					<div class="card-header">
						<h3>Kriteria Raport</h3>
					</div>
					<div class="card-body table-border-style">
						<div class="table-responsive">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Range Nilai</th>
										<th>Nilai Bobot</th>
									</tr>
								</thead>
								<tbody>
									<?php
									foreach ($k_raport as $value) {
									?>
										<tr>
											<td><?= $value->range_raport ?></td>
											<td><?= $value->nilai_raport ?></td>
										</tr>
									<?php
									}
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">
						<h3>Kriteria Absensi</h3>
					</div>
					<div class="card-body table-border-style">
						<div class="table-responsive">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Range Absensi</th>
										<th>Nilai Bobot</th>
									</tr>
								</thead>
								<tbody>
									<?php
									foreach ($k_absensi as $value) {
									?>
										<tr>
											<td><?= $value->range_absensi ?></td>
											<td><?= $value->nilai_absensi ?></td>
										</tr>
									<?php
									}
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">
						<h3>Kriteria Keaktifan</h3>
					</div>
					<div class="card-body table-border-style">
						<div class="table-responsive">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Range Keaktifan</th>
										<th>Nilai Bobot</th>
									</tr>
								</thead>
								<tbody>
									<?php
									foreach ($k_keaktifan as $value) {
									?>
										<tr>
											<td><?= $value->range_keaktifan ?></td>
											<td><?= $value->nilai_keaktifan ?></td>
										</tr>
									<?php
									}
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">
						<h3>Kriteria Kepribadian</h3>
					</div>
					<div class="card-body table-border-style">
						<div class="table-responsive">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Range Kepribadian</th>
										<th>Nilai Bobot</th>
									</tr>
								</thead>
								<tbody>
									<?php
									foreach ($k_kepribadian as $value) {
									?>
										<tr>
											<td><?= $value->range_kepribadian ?></td>
											<td><?= $value->nilai_kepribadian ?></td>
										</tr>
									<?php
									}
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">
						<h3>Kriteria Kejuaraan</h3>
					</div>
					<div class="card-body table-border-style">
						<div class="table-responsive">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Range Kejuaraan</th>
										<th>Nilai Bobot</th>
									</tr>
								</thead>
								<tbody>
									<?php
									foreach ($k_kejuaraan as $value) {
									?>
										<tr>
											<td><?= $value->range_kejuaraan ?></td>
											<td><?= $value->nilai_kejuaraan ?></td>
										</tr>
									<?php
									}
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<!-- Latest Customers end -->
		</div>
		<!-- [ Main Content ] end -->
	</div>
</div>