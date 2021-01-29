<?php
if(isset($_POST['simpan'])){
	include "config.php";
	$id_pengguna	=$_POST['id_pengguna'];
	$username		=$_POST['username'];
	$nama_lengkap	=$_POST['nama_lengkap'];
	$email			=$_POST['email'];
	$telepone		=$_POST['telepone'];
	$alamat			=$_POST['alamat'];
	$lokasi 		=$_FILES['foto']['tmp_name'];
	$namafile		=$_FILES['foto']['name'];
	$tipefile		=$_FILES['foto']['type'];

	if(empty($_POST['password'])){
		if(empty($lokasi)){
			$sql="UPDATE petugas SET username='$username', nama_lengkap='$nama_lengkap', email='$email', telepone='$telepone', alamat='$alamat' 
			WHERE id_pengguna='$id_pengguna'";
		}else{
			include "upload.php";
			$folder="../img/petugas/";
			$ukuran=100;
			UploadFoto($namafile,$folder,$ukuran);
			$sql="UPDATE petugas SET username='$username', nama_lengkap='$nama_lengkap', email='$email', telepone='$telepone', alamat='$alamat', foto='$namafile' WHERE id_pengguna='$id_pengguna'";
		}
	}
	if(empty($lokasi)){
			$sql="UPDATE petugas SET username='$username', nama_lengkap='$nama_lengkap', email='$email', telepone='$telepone', alamat='$alamat' 
			WHERE id_pengguna='$id_pengguna'";
	}else{
			include "upload.php";
			$folder="../img/petugas/";
			$ukuran=100;
			UploadFoto($namafile,$folder,$ukuran);
			$sql="UPDATE petugas SET username='$username', nama_lengkap='$nama_lengkap', email='$email', telepone='$telepone', alamat='$alamat', foto='$namafile' WHERE id_pengguna='$id_pengguna'";
	}
	$simpan=mysqli_query($koneksi,$sql);
	//var_dump($sql);
	if($simpan){
		header('Location:index.php?m=petugas');
		//echo "berhasil";
	}else{
		//echo "gagal alias tidak berhasil";
		include "index.php?m=petugas&s=awal";
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
