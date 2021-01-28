<?php 
	ini_set('display_errors', 0);
	ini_set('max_execution_time',0);

	date_default_timezone_set("Asia/Jakarta");

	session_start();
	session_destroy();
	include "db/db.php";

	unset($_SESSION['id']);
    unset($_SESSION['nama']);
    unset($_SESSION['tmp_lahir']);
    unset($_SESSION['tgl_lahir']);
    unset($_SESSION['jk']);
    unset($_SESSION['stts_wp']);
    unset($_SESSION['stts_kerja']);
    unset($_SESSION['jbtn']);
    unset($_SESSION['email']);
    unset($_SESSION['alamat']);
    unset($_SESSION['role']);

	header('Location: index.php'); 
?>

