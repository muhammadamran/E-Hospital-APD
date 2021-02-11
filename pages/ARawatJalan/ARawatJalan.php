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
                        
					
                <!--  -->
                <div class="pb-20">
                    
                    <form id="formSubmit" action="pages/ARawatJalan/ARawatJalan_proses.php?aksi=insert" method="POST">
                    <table id="pasien" class="checkbox-datatable table nowrap">
                        <!--  -->
                    <div class="form-group">
							<div class="row">
								<div class="col-md-6 col-sm-12">
									<label class="weight-600">APD yang digunakan :</label>
									<div class="custom-control custom-checkbox mb-5">
										<input type="checkbox" value="1" class="custom-control-input" name="hazmat" id="customCheck1">
										<label class="custom-control-label" for="customCheck1">Hazmat</label>
									</div>
									<div class="custom-control custom-checkbox mb-5">
										<input type="checkbox" value="1" class="custom-control-input" name="jashujan" id="customCheck2">
										<label class="custom-control-label" for="customCheck2">Jas Hujan</label>
									</div>
									<div class="custom-control custom-checkbox mb-5">
										<input type="checkbox" value="1" class="custom-control-input" name="maskerbedah" id="customCheck3">
										<label class="custom-control-label" for="customCheck3">Masker Bedah</label>
									</div>
									<div class="custom-control custom-checkbox mb-5">
										<input type="checkbox" value="1" class="custom-control-input" name="maskern95" id="customCheck4">
										<label class="custom-control-label" for="customCheck4">Masker N95</label>
									</div>
									<div class="custom-control custom-checkbox mb-5">
										<input type="checkbox" value="1" class="custom-control-input" name="gown" id="customCheck5">
										<label class="custom-control-label" for="customCheck5">Gown</label>
									</div>
									<div class="custom-control custom-checkbox mb-5">
										<input type="checkbox" value="1" class="custom-control-input" name="faceshield" id="customCheck6">
										<label class="custom-control-label" for="customCheck6">Face Shield</label>
									</div>
									<div class="custom-control custom-checkbox mb-5">
										<input type="checkbox" value="1" class="custom-control-input" name="google" id="customCheck7">
										<label class="custom-control-label" for="customCheck7">Google</label>
									</div>
									<div class="custom-control custom-checkbox mb-5">
										<input type="checkbox" value="1" class="custom-control-input" name="sepatuboot" id="customCheck8">
										<label class="custom-control-label" for="customCheck8">Sepatu Boot</label>
									</div>
									<div class="custom-control custom-checkbox mb-5">
										<input type="checkbox" value="1" class="custom-control-input" name="handschoonpd" id="customCheck9">
										<label class="custom-control-label" for="customCheck9">Handschoon Pendek</label>
									</div>
									<div class="custom-control custom-checkbox mb-5">
										<input type="checkbox" value="1" class="custom-control-input" name="handschoonpj" id="customCheck10">
										<label class="custom-control-label" for="customCheck10">Handschoon Panjang</label>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
                                   
                                        <div class="form-group">
                                            <label>Jumlah Dokter :</label>
                                            <input class="form-control" type="text" name="dok" id="num1">
                                        </div>
                                        <div class="form-group">
                                            <label>Jumlah Perawat :</label>
                                            <input class="form-control" type="text" name="perawat" id="num2">
                                        </div>
                                        <div class="form-group">
                                            <label>Jumlah CS :</label>
                                            <input class="form-control" type="text" name="cs" id="num3">
                                        </div>
                                            <input class="form-control" type="hidden" value="" name="hasil" id="hasil">
                                        <!-- <p id="demo" onclick="calc()">Click me to change my text color.</p> -->
                                            <!-- <button onclick="calc()"> HASIL </button>   -->
                                            <input type="hidden" id="med" name="med[]">
                                            <button type="submit" id="input" class="btn btn-primary">Submit</button>
                                            
                                        
                                </div>

                                
							</div>
						</div>
                    <!--  -->
                        <thead>
                            <tr>
                                <th>
                                    <div class="dt-checkbox">
											<input type="checkbox" value="1" id="example-select-all">
											<span class="dt-checkbox-label"></span>
									</div>
								</th>
                                <th class="table-plus datatable-nosort">Tgl Pendaftaran</th>
                                <th>No. Pendaftaran</th>
                                <th>No. RM</th>
                                <th>Nama Pasien</th>
                                <th>Jenis Kelamin</th>
                                <th>Umur</th>
                                <th>Status APD</th>
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
                                <td class="dt-body-center">
                                    <div class="dt-checkbox">
                                        <input type="checkbox" name="id[]" id="medrek" value="<?= $row['no_rekam_medik'] ?>" class="custom-control-input" >
                                        <span class="dt-checkbox-label"></span>
                                    </div>
                                    
                                </td>
                                <td><?= $row['tgl_pendaftaran'] ?></td>
                                <td><?= $row['no_pendaftaran'] ?></td>
                                <td id="norm"><?php echo $row['no_rekam_medik'] ?></td>
                                <td><?= $row['namadepan'] ?> <?= $row['nama_pasien'] ?></td>
                                <td><?= $row['jeniskelamin'] ?></td>
                                <td><?= $row['umur'] ?></td>
                                <?php
                                $data = $db->query('SELECT * FROM tb_apd WHERE no_rm ="'.$row['no_rekam_medik'].'"');
                                $a = $data->fetch_assoc()
                                ?>
                                <td><?= $a['no_rm'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : 'Ada' ?></td>
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
                    </form>
                </div>
            </div>
            <!-- Export Datatable End -->
        </div>


        <script>
        $(document).ready(function () {
            $('#example-select-all').change(function(){
                $('.checkitem').prop("checked", $(this).prop("checked"))
            });
            $('#input').on('click', function(){
                    var norm = ();
                    if(norm != ''){
                    $(':checkbox:checked').each(function(i){
                        norm = $('#norm').text();
                    });
            
                    if(norm.length === 0){
                    alert("Pilih minimal satu data");
                    }else{
                    $.ajax({
                        url:'pages/ARawatJalan/ARawatJalan_proses?aksi=insert.php',
                        method:'POST',
                        data:{norm:norm},
                        success:function(data){
                            alert('Data Updated');
                            fetch_data();
                        }
                    });
                    }
             } else {
                    return false;
                }
            });


            var n1 = parseFloat(document.getElementById('num1').value);
            var n2 = parseFloat(document.getElementById('num2').value);
            var n3 = parseFloat(document.getElementById('num3').value);

            var elem = document.getElementById("hasil");
            elem.value = n1+n2+n3;


            $('#medrek').on('change', function(){
            $('#med').value = this.checked ? $('#norm').value : 0;
            // alert(this.value);
            }).push();

            $('#customCheck1').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
            }).change();

            $('#customCheck2').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
            }).change();
            
            $('#customCheck3').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
            }).change();

            $('#customCheck4').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
            }).change();

            $('#customCheck5').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
            }).change();

            $('#customCheck6').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
            }).change();
            
            $('#customCheck7').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
            }).change();

            $('#customCheck8').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
            }).change();

            $('#customCheck9').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
            }).change();

            $('#customCheck10').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
            }).change();
        });
        </script>