<?php
include "sesi.php";
if(isset($_POST['simpan'])){
	include "../config.php";
	include "upload.php";
	$tahun	=$_POST['tahun'];
	$mulai	=$_POST['mulai'];
	$akir	=$_POST['akir'];

	$sql="INSERT INTO jadwal SET tahun='$tahun', mulai='$mulai', akir='$akir'";
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
