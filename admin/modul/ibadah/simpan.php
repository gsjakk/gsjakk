<?php
include "sesi.php";
if(isset($_POST['simpan'])){
	include "config.php";
	include "upload.php";

	$judul		=$_POST['judul'];
	$tanggal	=$_POST['tanggal'];
	$pic		=$_POST['pic'];
	$link		=$_POST['link'];
	$ayat		=$_POST['ayat'];
	$isi 		=$_POST['isi'];
	$kesimpulan =$_POST['kesimpulan'];
	$status		=$_POST['status'];
	$lokasi 	=$_FILES['foto']['tmp_name'];
	$namafile	=$_FILES['foto']['name'];
	$tipefile	=$_FILES['foto']['type'];

	$folder="../img/ibadah/";
	$ukuran=100;
	UploadFoto($namafile,$folder,$ukuran);
		
	$sql="INSERT INTO ibadah SET judul='$judul', tanggal='$tanggal', link='$link', ayat='$ayat', isi='$isi', kesimpulan='$kesimpulan', pic='$pic',
	status='$status', foto='$namafile' ";
	$simpan=mysqli_query($koneksi,$sql);
	if($simpan){
		header('Location:?m=ibadah&s=awal');
		//echo "berhasil";
	}else{
		include "?m=ibadah&s=awal";
		echo '<script language="JavaScript">';
			echo 'alert("Data Gagal Ditambahkan.")';
		echo '</script>';
	}
}else{
	echo '<script>window.history.back()</script>';
}
?>
