<?php
if(isset($_POST['simpan'])){
	include "../config.php";
	$idpengguna	=$_POST['idpengguna'];
	$username	=$_POST['username'];
	$password	=md5($_POST['password']);
	$nama		=$_POST['nama'];
	$jabatan	=$_POST['jabatan'];
	$hp			=$_POST['hp'];
	$email		=$_POST['email'];
	$hakakses	=$_POST['hakakses'];
	$aktif		=$_POST['aktif'];
	$lokasi 	=$_FILES['foto']['tmp_name'];
	$namafile	=$_FILES['foto']['name'];
	$tipefile	=$_FILES['foto']['type'];
	
	if(empty($_POST['password'])){
		if(empty($lokasi)){
			$sql="UPDATE petugas SET username='$username', nama='$nama', jabatan='$jabatan',hp='$hp',email='$email', hakakses='$hakakses', aktif='$aktif' WHERE idpengguna='$idpengguna'";
		}else{
			include "upload.php";
			$folder="../gambar/pengguna/";
			$ukuran=100;
			UploadFoto($namafile,$folder,$ukuran);
			$sql="UPDATE petugas SET username='$username', nama='$nama', jabatan='$jabatan',hp='$hp',email='$email', hakakses='$hakakses', aktif='$aktif', foto='$namafile' WHERE idpengguna='$idpengguna'";
		}
	}else{
		if(empty($lokasi)){
			$sql="UPDATE petugas SET username='$username', password='$password', nama='$nama', jabatan='$jabatan',hp='$hp',email='$email', hakakses='$hakakses', aktif='$aktif' WHERE idpengguna='$idpengguna'";
		}else{
			include "upload.php";
			$folder="../gambar/pengguna/";
			$ukuran=100;
			UploadFoto($namafile,$folder,$ukuran);
			$sql="UPDATE petugas SET username='$username', password='$password', nama='$nama', jabatan='$jabatan',hp='$hp',email='$email', hakakses='$hakakses', aktif='$aktif', foto='$namafile' WHERE idpengguna='$idpengguna'";
		}
	}
	$simpan=mysqli_query($koneksi,$sql);
	//var_dump($sql);
	if($simpan){
		header('Location:index.php?m=admin');
		//echo "berhasil";
	}else{
		//echo "gagal alias tidak berhasil";
		include "index.php?m=admin&s=awal";
		echo '<script language="JavaScript">';
			echo 'alert("Data Gagal diupdate.")';
		echo '</script>';
		//var_dump($sql);
	}
}else{
	echo '<script>window.history.back()</script>';
	//echo "apa nih";
}
?>
