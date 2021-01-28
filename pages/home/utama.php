<?php
date_default_timezone_set("Asia/Jakarta");

$jam = date('H:i');

if ($jam > '05:30' && $jam < '10:00') {
	$salam = 'Pagi';
} elseif ($jam >= '10:00' && $jam < '15:00') {
	$salam = 'Siang';
} elseif ($jam < '18:00') {
	$salam = 'Sore';
} else {
	$salam = 'Malam';
}
?>
<div class="main-container">
	<div class="pd-ltr-20">
		<div class="card-box pd-20 height-100-p mb-30">
			<div class="row align-items-center">
				<div class="col-md-4">
					<img src="assets/vendors/images/banner-img.png" alt="">
				</div>
				<div class="col-md-8">
					<h4 class="font-20 weight-500 mb-10 text-capitalize">
						Welcome back <div class="weight-600 font-30 text-blue">Johnny Brown!</div>
					</h4>
					<p class="font-18 max-width-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde hic non repellendus debitis iure, doloremque assumenda. Autem modi, corrupti, nobis ea iure fugiat, veniam non quaerat mollitia animi error corporis.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-3 mb-30">
				<div class="card-box height-100-p widget-style1">
					<div class="d-flex flex-wrap align-items-center">
						<div class="progress-data">
							<div id="chart"></div>
						</div>
						<div class="widget-data">
							<div class="h4 mb-0">2020</div>
							<div class="weight-600 font-14">Contact</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 mb-30">
				<div class="card-box height-100-p widget-style1">
					<div class="d-flex flex-wrap align-items-center">
						<div class="progress-data">
							<div id="chart2"></div>
						</div>
						<div class="widget-data">
							<div class="h4 mb-0">400</div>
							<div class="weight-600 font-14">Deals</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 mb-30">
				<div class="card-box height-100-p widget-style1">
					<div class="d-flex flex-wrap align-items-center">
						<div class="progress-data">
							<div id="chart3"></div>
						</div>
						<div class="widget-data">
							<div class="h4 mb-0">350</div>
							<div class="weight-600 font-14">Campaign</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 mb-30">
				<div class="card-box height-100-p widget-style1">
					<div class="d-flex flex-wrap align-items-center">
						<div class="progress-data">
							<div id="chart4"></div>
						</div>
						<div class="widget-data">
							<div class="h4 mb-0">$6060</div>
							<div class="weight-600 font-14">Worth</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-8 mb-30">
				<div class="card-box height-100-p pd-20">
					<h2 class="h4 mb-20">Activity</h2>
					<div id="chart5"></div>
				</div>
			</div>
			<div class="col-xl-4 mb-30">
				<div class="card-box height-100-p pd-20">
					<h2 class="h4 mb-20">Lead Target</h2>
					<div id="chart6"></div>
				</div>
			</div>
		</div>
		<div class="card-box mb-30">
			<h2 class="h4 pd-20">Best Selling Products</h2>
			<table class="data-table table nowrap">
				<thead>
					<tr>
						<th class="table-plus datatable-nosort">Product</th>
						<th>Name</th>
						<th>Color</th>
						<th>Size</th>
						<th>Price</th>
						<th>Oty</th>
						<th class="datatable-nosort">Action</th>
					</tr>
				</thead>
				<tbody>
				<?php 
						$result = pg_query($pg, "SELECT * FROM bidang_m ");
							while ($row = pg_fetch_assoc($result)) {
					?>
					<tr>
					
						<td class="table-plus">
						<?= $row['bidang_id'] ?>
						</td>
						<td>
							<h5 class="font-16"><?= $row['bidang_id'] ?></h5>
						</td>
						<td><?= $row['golongan_id'] ?></td>
						<td><?= $row['bidang_kode'] ?></td>
						<td><?= $row['bidang_nama'] ?></td>
						<td><?= $row['bidang_namalainnya'] ?></td>
						<td><?= $row['bidang_aktif'] ?></td>
						<td>
							<div class="dropdown">
								<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									<i class="dw dw-more"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
									<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
									<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
									<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
								</div>
							</div>
						</td>
						
					</tr>
					<?php
							}
						?>
				</tbody>
			</table>
		</div>
		<!-- RAWAT JALAN -->
		<div class="card-box mb-30">
			<h2 class="h4 pd-20">Rawat Jalan</h2>
			<table class="data-table table nowrap">
				<thead>
					<tr>
						<th class="table-plus datatable-nosort">No.Identitas Pasien</th>
						<th>Nama Pasien</th>
						<th>No. Pendaftara</th>
						<th>Jenis Kelas Pelayanan</th>
						<th>Nama Ruangan</th>
						<th class="datatable-nosort">Action</th>
					</tr>
				</thead>
				<tbody>
				<?php 
						$result = pg_query($pg, "SELECT pasien_id,nama_pasien,no_pendaftaran,kelaspelayanan_nama,ruangan_nama FROM infokunjunganrj_v ORDER BY no_identitas_pasien LIMIT 10");
							while ($row = pg_fetch_assoc($result)) {
					?>
					<tr>
					
						<td class="table-plus">
							<h5 class="font-16"><?= $row['pasien_id'] ?></h5>
						</td>
						<td><?= $row['nama_pasien'] ?></td>
						<td><?= $row['no_pendaftaran'] ?></td>
						<td><?= $row['kelaspelayanan_nama'] ?></td>
						<td><?= $row['ruangan_nama'] ?></td>
						<td>
							<div class="dropdown">
								<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									<i class="dw dw-more"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
									<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
									<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
									<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
								</div>
							</div>
						</td>
						
					</tr>
					<?php
							}
						?>
				</tbody>
			</table>
		</div>
		<!-- RAWAT INAP -->
		<div class="card-box mb-30">
			<h2 class="h4 pd-20">Rawat Inap</h2>
			<table class="data-table table nowrap">
				<thead>
					<tr>
						<th class="table-plus datatable-nosort">No.Identitas Pasien</th>
						<th>Nama Pasien</th>
						<th>No. Pendaftara</th>
						<th>Jenis Kelas Pelayanan</th>
						<th>Nama Ruangan</th>
						<th class="datatable-nosort">Action</th>
					</tr>
				</thead>
				<tbody>
				<?php 
						$result = pg_query($pg, "SELECT pasien_id,nama_pasien,no_pendaftaran,kelaspelayanan_nama,ruangan_nama FROM infokunjunganri_v ORDER BY no_identitas_pasien LIMIT 10");
							while ($row = pg_fetch_assoc($result)) {
					?>
					<tr>
					
						<td class="table-plus">
							<h5 class="font-16"><?= $row['pasien_id'] ?></h5>
						</td>
						<td><?= $row['nama_pasien'] ?></td>
						<td><?= $row['no_pendaftaran'] ?></td>
						<td><?= $row['kelaspelayanan_nama'] ?></td>
						<td><?= $row['ruangan_nama'] ?></td>
						<td>
							<div class="dropdown">
								<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									<i class="dw dw-more"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
									<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
									<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
									<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
								</div>
							</div>
						</td>
						
					</tr>
					<?php
							}
						?>
				</tbody>
			</table>
		</div>
		<!-- HD -->
		<div class="card-box mb-30">
			<h2 class="h4 pd-20">HD</h2>
			<table class="data-table table nowrap">
				<thead>
					<tr>
						<th class="table-plus datatable-nosort">No.Identitas Pasien</th>
						<th>Nama Pasien</th>
						<th>No. Pendaftara</th>
						<th>Jenis Kelas Pelayanan</th>
						<th>Nama Ruangan</th>
						<th class="datatable-nosort">Action</th>
					</tr>
				</thead>
				<tbody>
				<?php 
						$result = pg_query($pg, "SELECT pasien_id,nama_pasien,no_pendaftaran,kelaspelayanan_nama,ruangan_nama FROM infokunjunganhd_v ORDER BY no_identitas_pasien LIMIT 10");
							while ($row = pg_fetch_assoc($result)) {
					?>
					<tr>
					
						<td class="table-plus">
							<h5 class="font-16"><?= $row['pasien_id'] ?></h5>
						</td>
						<td><?= $row['nama_pasien'] ?></td>
						<td><?= $row['no_pendaftaran'] ?></td>
						<td><?= $row['kelaspelayanan_nama'] ?></td>
						<td><?= $row['ruangan_nama'] ?></td>
						<td>
							<div class="dropdown">
								<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									<i class="dw dw-more"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
									<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
									<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
									<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
								</div>
							</div>
						</td>
						
					</tr>
					<?php
							}
						?>
				</tbody>
			</table>
		</div>

		<!-- OK -->
		<div class="card-box mb-30">
			<h2 class="h4 pd-20">OK</h2>
			<table class="data-table table nowrap">
				<thead>
					<tr>
						<th class="table-plus datatable-nosort">No.Identitas Pasien</th>
						<th>Nama Pasien</th>
						<th>No. Pendaftara</th>
						<th>Jenis Kelas Pelayanan</th>
						<th>Nama Ruangan</th>
						<th class="datatable-nosort">Action</th>
					</tr>
				</thead>
				<tbody>
				<?php 
						$result = pg_query($pg, "SELECT pasien_id,nama_pasien,no_pendaftaran,kelaspelayanan_nama,ruangan_nama FROM laporankunjunganbedahsentral_v ORDER BY no_identitas_pasien LIMIT 10");
							while ($row = pg_fetch_assoc($result)) {
					?>
					<tr>
					
						<td class="table-plus">
							<h5 class="font-16"><?= $row['pasien_id'] ?></h5>
						</td>
						<td><?= $row['nama_pasien'] ?></td>
						<td><?= $row['no_pendaftaran'] ?></td>
						<td><?= $row['kelaspelayanan_nama'] ?></td>
						<td><?= $row['ruangan_nama'] ?></td>
						<td>
							<div class="dropdown">
								<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									<i class="dw dw-more"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
									<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
									<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
									<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
								</div>
							</div>
						</td>
						
					</tr>
					<?php
							}
						?>
				</tbody>
			</table>
		</div>
		<!--  -->
		<div class="footer-wrap pd-20 mb-20 card-box">
			DeskApp - Bootstrap 4 Admin Template By <a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
		</div>
	</div>
</div>