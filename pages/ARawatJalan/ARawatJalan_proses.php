<?php
include '../../db/db.php';
$aksi = $_GET['aksi'];
// PROSES INPUT
if ($aksi == 'insert') {
    $hazmat = $_POST['hazmat'];
    $jas_hujan = $_POST['jashujan'];
    $masker_bedah = $_POST['maskerbedah'];
    $maskern = $_POST['maskern95'];
    $gown = $_POST['gown'];
    $faceshield = $_POST['faceshield'];
    $dok = $_POST['dok'];
    $perawat = $_POST['perawat'];
    $cs = $_POST['cs'];
    $hasil = $dok + $perawat + $cs;
    $medrek = $_POST['id'];
    // $a = implode(",", $medrek);
    for($i=0; $i<count($medrek); $i++){
        $insert = $db->query('INSERT INTO tb_apd 
                        (no_rm,hazmat, jas_hujan, masker_bedah, masker_n95, gown, face_shield, jml_dokter, jml_perawat, jml_cs, hasil) 
                        VALUES 
                        ("'.$medrek[$i].'","'.$hazmat.'","'.$jas_hujan.'","'.$masker_bedah.'","'.$maskern.'","'.$gown.'","'.$faceshield.'","'.$dok.'","'.$perawat.'","'.$cs.'","'.$hasil.'")');

            if ($insert) {
                echo '<script>alert("Data berhasil ditambahkan");location.href = "../../index.php?m=ARawatJalan&s=ARawatJalan"</script>';
            } else {
                echo '<script>alert("Data gagal ditambahkan");history.go(-1)</script>';
            }
        }
    

    
    
// PROSES DATA UPDATE
} else if ($aksi == 'update') {
    $id = $_GET['id'];
    $kd_soap = $_POST['kd_soap'];
    $no_rm = $_POST['no_rm'];
    $nama_pasien = $_POST['nama_pasien'];
    $kelas = $_POST['kelas'];
    $dokter_jaga = $_POST['dokter_jaga'];
    $DPJP = $_POST['DPJP'];
    $subject  = $_POST['subject'];
    $object = $_POST['object'];
    $assesment = $_POST['assesment'];
    $plan = $_POST['plan'];
    $keterangan = $_POST['keterangan'];
    // $status_pasien = $_POST['status_pasien'];
    $date_created = $_POST['date_created'];
    $tgl_jaga = $_POST['tgl_jaga'];
    // $berkas = $_POST['berkas'];
    
    $update = $db->query('UPDATE tb_soap SET no_rm="'.$no_rm.'",
                                            nama_pasien="'.$nama_pasien.'",
                                            kelas="'.$kelas.'",
                                            dokter_jaga="'.$dokter_jaga.'",
                                            DPJP="'.$DPJP.'",
                                            subject="'.$subject.'",
                                            object="'.$object.'",
                                            assesment="'.$assesment.'",
                                            plan="'.$plan.'",
                                            keterangan="'.$keterangan.'",
                                            date_created="'.$date_created.'",
                                            tgl_jaga="'.$tgl_jaga.'"
                                            WHERE id="'.$id.'"');

    $insert2 = $db->query('INSERT INTO tb_soaplog
                    (kd_soap,status,date_add) 
                    VALUES 
                    ("'.$kd_soap.'","1","'.$date_created.'")');


    if ($update) {
        echo '<script>alert("Data berhasil diUpdate");location.href = "../../index.php?m=forms&s=forms"</script>';
    } else {
        echo '<script>alert("Data gagal diUpdate");history.go(-1)</script>';
    }

// HAPUS DATA
} else if ($aksi == 'hapus') {
    $id = $_GET['id'];
    $hapus = $db->query('DELETE FROM tb_soap WHERE id="'.$id.'"');

    if ($hapus) {
        echo '<script>alert("Data berhasil dihapus");location.href = "../../index.php?m=forms&s=forms"</script>';
    } else {
        echo '<script>alert("Data gagal dihapus");history.go(-1)</script>';
    }
}