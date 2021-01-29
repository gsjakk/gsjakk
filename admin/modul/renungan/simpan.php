<?php
include "sesi.php";
if(isset($_POST['simpan'])){
	include "config.php";
	include "upload.php";

	$judul		=$_POST['judul'];
	$tanggal	=$_POST['tanggal'];
	$pic		=$_POST['pic'];
	$isi1		=$_POST['isi1'];
	$isi2 		=$_POST['isi2'];
	$ayat		=$_POST['ayat'];
	$status		=$_POST['status'];
	$lokasi 	=$_FILES['foto']['tmp_name'];
	$namafile	=$_FILES['foto']['name'];
	$tipefile	=$_FILES['foto']['type'];

	$folder="../img/renungan/";
	$ukuran=100;
	UploadFoto($namafile,$folder,$ukuran);
		
	$sql="INSERT INTO renungan SET judul='$judul', tanggal='$tanggal', pic='$pic', isi1='$isi1', isi2='$isi2', ayat='$ayat', status='$status', foto='$namafile'";
	$simpan=mysqli_query($koneksi,$sql);
	if($simpan){
		header('Location:?m=renungan&s=awal');
		//echo "berhasil";
	}else{
		include "?m=renungan&s=awal";
		echo '<script language="JavaScript">';
			echo 'alert("Data Gagal Ditambahkan.")';
		echo '</script>';
	}
}else{
	echo '<script>window.history.back()</script>';
}
?>
