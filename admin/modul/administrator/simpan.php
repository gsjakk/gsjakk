<?php
include "sesi.php";
if(isset($_POST['simpan'])){
	include "../config.php";
	include "upload.php";
	$idpengguna	=$_POST['idpengguna'];
	$username	=$_POST['username'];
	$password	=md5(trim($_POST['password']));
	$nama		=$_POST['nama'];
	$jabatan	=$_POST['jabatan'];
	$hp			=$_POST['hp'];
	$email		=$_POST['email'];
	$hakakses	=$_POST['hakakses'];
	$aktif		=$_POST['aktif'];
	$lokasi 	=$_FILES['foto']['tmp_name'];
	$namafile	=$_FILES['foto']['name'];
	$tipefile	=$_FILES['foto']['type'];
	
	if(empty($lokasi)){
		$sql="INSERT INTO petugas SET idpengguna='', username='$username', password='$password', nama='$nama', jabatan='$jabatan',hp='$hp',email='$email', hakakses='$hakakses', aktif='$aktif'";
	}else{
		$folder="../img/pengguna/";
		$ukuran=100;
		UploadFoto($namafile,$folder,$ukuran);
		
		$sql="INSERT INTO petugas SET idpengguna='', username='$username', password='$password', nama='$nama', jabatan='$jabatan',hp='$hp',email='$email', hakakses='$hakakses', aktif='$aktif', foto='$namafile'";
	}
	$simpan=mysqli_query($koneksi,$sql);
	if($simpan){
		header('Location:?m=admin&s=awal');
		//echo "berhasil";
	}else{
		include "?m=admin&s=awal";
		echo '<script language="JavaScript">';
			echo 'alert("Data Gagal Ditambahkan.")';
		echo '</script>';
	}
}else{
	echo '<script>window.history.back()</script>';
}
?>
