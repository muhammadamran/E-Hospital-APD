<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h3><span class="micon dw dw-stethoscope"></span> Rawat Jalan</h3>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Rawat Jalan</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <div class="dropdown">
                            <a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                Klik Disini
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Export List</a>
                                <a class="dropdown-item" href="#">Policies</a>
                                <a class="dropdown-item" href="#">View Assets</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Export Datatable start -->
            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-blue h4">Pasien Rawat Jalan</h4>
                </div>
					<form>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Single Select</label>
									<select class="custom-select2 form-control" name="state" style="width: 100%; height: 38px;">
                                        <optgroup label="Jenis APD">
                                        <?php 
                                            $apdd = $db->query("SELECT * FROM tb_apd_role ORDER BY id DESC", 0);
                                            while($apd = $apdd->fetch_assoc()) {
                                        ?>
                                            <option value="<?= $apd['role_apd'] ?>" name="apd"><?= $apd['role_apd'] ?></option>
                                        
                                        <?php
                                            }
                                        ?>
										</optgroup>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Multiple Select</label>
									<select class="custom-select2 form-control" multiple="multiple" style="width: 100%;">
                                    <optgroup label="Jenis APD">
                                        <?php 
                                            $apdd = $db->query("SELECT * FROM tb_apd_role ORDER BY id DESC", 0);
                                            while($apd = $apdd->fetch_assoc()) {
                                        ?>
                                            <option value="<?= $apd['role_apd'] ?>"><?= $apd['role_apd'] ?></option>
                                        
                                        <?php
                                            }
                                        ?>
										</optgroup>
									</select>
								</div>
							</div>
						</div>
					</form>
                <!--  -->
                <div class="pb-20">
                    <table class="table hover multiple-select-row data-table-export nowrap">
                        <thead>
                            <tr>
                                <th class="table-plus datatable-nosort">Tgl Pendaftaran</th>
                                <th>No. Pendaftaran</th>
                                <th>No. RM</th>
                                <th>Nama Pasien</th>
                                <th>Jenis Kelamin</th>
                                <th>Umur</th>
                                <th>DPJP</th>
                                <th>Jenis Kasus Penyakit</th>
                                <th>Nama Ruangan</th>
                                <th>Kelas Pelayanan</th>
                                <th>Status Periksa</th>
                                <th>Status Pasien</th>
                                <th>Status Masuk</th>
                                <th>Asuransi</th>
                                <th>Penjamin</th>
                                <th>Kelompok Umur</th>
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- DATA -->
                            <?php 
                            $tgl = date('Y-m-d');
                            $result = pg_query($pg, "SELECT * FROM infokunjunganrj_v WHERE DATE(tgl_pendaftaran) = CURRENT_DATE ORDER BY tgl_pendaftaran DESC");
                                while ($row = pg_fetch_assoc($result)) {
                            ?>
                            <tr>
                                <td><?= $row['tgl_pendaftaran'] ?></td>
                                <td><?= $row['no_pendaftaran'] ?></td>
                                <td><?= $row['no_rekam_medik'] ?></td>
                                <td><?= $row['namadepan'] ?> <?= $row['nama_pasien'] ?></td>
                                <td><?= $row['jeniskelamin'] ?></td>
                                <td><?= $row['umur'] ?></td>
                                <td><?= $row['gelardepan'] ?><?= $row['nama_pegawai'] ?>,<?= $row['gelarbelakang_nama'] ?></td>
                                <td><?= $row['jeniskasuspenyakit_nama'] ?></td>
                                <td><?= $row['ruangan_nama'] ?></td>
                                <td><?= $row['kelaspelayanan_nama'] ?></td>
                                <td><?= $row['statusperiksa'] ?></td>
                                <td><?= $row['statuspasien'] ?></td>
                                <td><?= $row['statusmasuk'] ?></td>
                                <td><?= $row['carabayar_nama'] ?></td>
                                <td><?= $row['penjamin_nama'] ?></td>
                                <td><?= $row['golonganumur_nama'] ?></td>
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
                            <?php } ?>
                            <!-- END DATA -->
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Export Datatable End -->
        </div>