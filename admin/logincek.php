<?php
include_once "config.php";

$user	= $_POST['username'];
$pass	= $_POST['password'];
$sql 	= "SELECT * FROM petugas WHERE username='$user' AND password='$pass' ";
$login=mysqli_query($koneksi,$sql);
$ketemu=mysqli_num_rows($login);
$b=mysqli_fetch_array($login);
if($ketemu>0){
	session_start();
	$_SESSION['id_pengguna'] 	= $b['username'];
	header('location: index.php?m=awal');
}else{
	include "login.php";
	echo '<script language="javascript">';
		echo 'alert ("Username/Password ada yang salah, atau akun anda belum Aktif")';
	echo '</script>';
}
?>
