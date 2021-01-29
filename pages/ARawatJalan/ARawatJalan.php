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
                <div class="pb-20">
                    <table class="table hover multiple-select-row data-table-export nowrap">
                        <thead>
                            <tr>
                                <th class="table-plus datatable-nosort">ID</th>
                                <th>No. Pendaftaran</th>
                                <th>No. Rekam Medis</th>
                                <th>Nama Pasien</th>
                                <th>Jenis Kelamin</th>
                                <th>Kelas Pelayanan</th>
                                <th>Nama Ruangan</th>
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- DATA -->
                            <?php 
                            $result = pg_query($pg, "SELECT pasien_id,namadepan,nama_pasien,jeniskelamin,no_rekam_medik,no_pendaftaran,kelaspelayanan_nama,ruangan_nama,tgl_pendaftaran FROM infokunjunganrj_v ORDER BY tgl_pendaftaran DESC LIMIT 10");
                                while ($row = pg_fetch_assoc($result)) {
                            ?>
                            <tr>
                                <td><?= $row['pasien_id'] ?></td>
                                <td><?= $row['no_pendaftaran'] ?></td>
                                <td><?= $row['no_rekam_medik'] ?></td>
                                <td><?= $row['namadepan'] ?> <?= $row['nama_pasien'] ?></td>
                                <td><?= $row['jeniskelamin'] ?></td>
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
                            <?php } ?>
                            <!-- END DATA -->
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Export Datatable End -->
        </div>