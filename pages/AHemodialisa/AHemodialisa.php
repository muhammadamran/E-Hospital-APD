<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h3><span class="micon dw dw-fuel"></span> Graph Hemodialisa</h3>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Table Hemodialisa</li>
                            </ol>
                            <hr>
                            <ol class="breadcrumb">
                                <?php
                                    $result_t = pg_query($pg, "SELECT COUNT(*) AS jumlah FROM infokunjunganhd_v WHERE DATE(tgl_pendaftaran) = CURRENT_DATE");
                                    $row_t = pg_fetch_assoc($result_t);
                                ?>
                                <li class="breadcrumb-item"><h5>Jumlah Pasien HD <?= tanggal_indo(date('Y-m-d'));?> - <?= $row_t['jumlah']; ?> Pasien</h5> </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <div class="dropdown">
                            <a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                Klik Disini
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="index.php?m=AHemodialisa&s=AHemodialisa">Lihat Graph</a>
                                <a class="dropdown-item" href="index.php?m=AHemodialisa&s=AHemodialisa_T">Lihat Table Data</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Export Datatable start -->
            <div class="row">
                <div class="col-xl-6">
                    <div class="bg-white pd-20 card-box mb-30">
                        <div id="chartCarabayar"></div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="bg-white pd-20 card-box mb-30">
                        <div id="chartRuangan"></div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="bg-white pd-20 card-box mb-30">
                        <div id="chartKelas"></div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="bg-white pd-20 card-box mb-30">
                        <div id="chartJeniskelamin"></div>
                    </div>
                </div>
            </div>
            <!-- Export Datatable End -->
        </div>