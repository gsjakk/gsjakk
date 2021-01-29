<?php
include "sesi.php";
if(isset($_POST['simpan'])){
	include "config.php";
	include "upload.php";
	$nogaleri		=$_POST['nogaleri'];
	$namagaleri		=$_POST['namagaleri'];
	$tanggalgaleri	=$_POST['tanggalgaleri'];
	$status			=$_POST['status'];
	$lokasi 		=$_FILES['foto']['tmp_name'];
	$namafile		=$_FILES['foto']['name'];
	$tipefile		=$_FILES['foto']['type'];

	$folder="../img/galeri/";
	$ukuran=100;
	UploadFoto($namafile,$folder,$ukuran);		
	$sql="INSERT INTO galeri SET nogaleri='$nogaleri', namagaleri='$namagaleri', tanggalgaleri='$tanggalgaleri', status='$status', foto='$namafile' ";
	$simpan=mysqli_query($koneksi,$sql);
	if($simpan){
		header('Location:?m=galeri&s=awal');
		//echo "berhasil";
	}else{
		include "?m=galeri&s=awal";
		echo '<script language="JavaScript">';
			echo 'alert("Data Gagal Ditambahkan.")';
		echo '</script>';
	}
}else{
	echo '<script>window.history.back()</script>';
}
?>
