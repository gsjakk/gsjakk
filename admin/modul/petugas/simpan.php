<?php
include "sesi.php";
if(isset($_POST['simpan'])){
	include "config.php";
	include "upload.php";
	$id_pengguna	=$_POST['id_pengguna'];
	$username		=$_POST['username'];
	$password		=$_POST['password'];
	$nama_lengkap	=$_POST['nama_lengkap'];
	$email			=$_POST['email'];
	$telepone		=$_POST['telepone'];
	$alamat			=$_POST['alamat'];
	$lokasi 		=$_FILES['foto']['tmp_name'];
	$namafile		=$_FILES['foto']['name'];
	$tipefile		=$_FILES['foto']['type'];

	$folder="../img/petugas/";
	$ukuran=100;
	UploadFoto($namafile,$folder,$ukuran);		
	$sql="INSERT INTO petugas SET id_pengguna='$id_pengguna', username='$username', password='$password', nama_lengkap='$nama_lengkap', email='$email', telepone='$telepone',
			alamat='$alamat', foto='$namafile' ";
	$simpan=mysqli_query($koneksi,$sql);
	if($simpan){
		header('Location:?m=petugas&s=awal');
		//echo "berhasil";
	}else{
		include "?m=petugas&s=awal";
		echo '<script language="JavaScript">';
			echo 'alert("Data Gagal Ditambahkan.")';
		echo '</script>';
	}
}else{
	echo '<script>window.history.back()</script>';
}
?>
