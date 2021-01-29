<?php
include_once "config.php";

$username	= $_POST['username'];
$password	= $_POST['password'];
$sql 	= "SELECT * FROM petugas WHERE username='$username' AND password='$password' ";
$login	=mysqli_query($koneksi,$sql);
$ketemu	=mysqli_num_rows($login);
$b		=mysqli_fetch_array($login);
if($ketemu>0){
	session_start();
	$_SESSION['idkasis'] 		= $b['id_pengguna'];
	$_SESSION['namakasis'] 		= $b['nama_lengkap'];
	if($b['foto']==""){
		$_SESSION['fotokasis'] = "0.jpg";
	}else{
		$_SESSION['fotokasis'] = $b['foto'];
	}
	header('location: index.php?m=awal');
}else{
	include "login.php";
	echo '<script language="javascript">';
		echo 'alert ("Username/Password ada yang salah, atau akun anda belum Aktif")';
	echo '</script>';
}
?>
