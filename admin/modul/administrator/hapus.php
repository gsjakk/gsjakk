<?php
if(isset($_GET['idpengguna'])){
	include "../config.php";
	$idpengguna=$_GET['idpengguna'];
	$sql   = "SELECT * FROM petugas WHERE idpengguna='$idpengguna'";
	$hapus = mysqli_query($koneksi,$sql);
	$r     = mysqli_fetch_array($hapus);
	if ($r['foto']!=''){
		$foto=$r['foto'];
		// hapus file gambar yang berhubungan dengan berita tersebut
		unlink("../gambar/pengguna/$foto");
	}
	$sql   = "DELETE FROM petugas WHERE idpengguna='$idpengguna'";
	$hapus = mysqli_query($koneksi,$sql);
	if($hapus){
		header("Location: ?m=admin");
	}else{
		include "index.php?m=admin&s=awal";
		echo '<script language="JavaScript">';
			echo 'alert("Data Gagal dihapus.")';
		echo '</script>';
	}
}
?>
