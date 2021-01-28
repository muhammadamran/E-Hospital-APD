<?php
session_start();
include 'db/db.php';

function login($data) {
  if ($data['password_hash'] == $data['password']) {
    $_SESSION['id'] = $data['id'];
    $_SESSION['nama'] = $data['nama'];
    $_SESSION['tmp_lahir'] = $data['tmp_lahir'];
    $_SESSION['tgl_lahir'] = $data['tgl_lahir'];
    $_SESSION['jk'] = $data['jk'];
    $_SESSION['stts_wp'] = $data['stts_wp'];
    $_SESSION['stts_kerja'] = $data['stts_kerja'];
    $_SESSION['jbtn'] = $data['jbtn'];
    $_SESSION['email'] = $data['email'];
    $_SESSION['alamat'] = $data['alamat'];
    $_SESSION['role'] = $data['role'];
    return 2;
  }
  else return 1;
}

if(isset($_POST["nik"])){$nik_=$db->real_escape_string($_POST["nik"]);}else{$nik_="";}
if(isset($_POST["password"])){$password_=$db->real_escape_string($_POST["password"]);}else{$password_="";}

$user = $db->query("SELECT * FROM pegawai 
                    WHERE nik='".$nik_."' AND password='".md5($password_)."'", 0);
$result = $user->fetch_assoc();

$id = $result['id'];
$password = $result['password'];
$nama = $result['nama'];
$tmp_lahir = $result['tmp_lahir'];
$tgl_lahir = $result['tgl_lahir'];
$jk = $result['jk'];
$stts_wp = $result['stts_wp'];
$stts_kerja = $result['stts_kerja'];
$jbtn = $result['jbtn'];
$email = $result['email'];
$alamat = $result['alamat'];
$role = $result['role'];

$data = [
  'id' => $id,
  'password' => $password,
  'password_hash' => md5($password_),
  'nama' => $nama,
  'tmp_lahir' => $tmp_lahir,
  'tgl_lahir' => $tgl_lahir,
  'jk' => $jk,
  'stts_wp' => $stts_wp,
  'stts_kerja' => $stts_kerja,
  'jbtn' => $jbtn,
  'email' => $email,
  'alamat' => $alamat,
  'role' => $role
];

  $log_type = "login";
  $date_log = date('Y-m-d H:i:m');
  $data2 = $db->query("INSERT INTO tb_log VALUES(' ','$nama','$log_type','$date_log',' ')");

$loginArea = login($data);
if ($loginArea == 2) {
  echo '<script>alert("Hello, ' . $nama . '. kamu berhasil login");location.href = "index.php"</script>';
} else if ($loginArea == 1) {
  echo '<script>alert("Gagal Login | Periksa Kembali NIP atau Password anda!");window.history.go(-1);</script>';
  // header("Location: ./notfound.php");
}
?>