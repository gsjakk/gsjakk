<?php
if(isset($_GET['id_pengguna'])){
	include "config.php";
	$id_pengguna=$_GET['id_pengguna'];
	$sql   = "SELECT * FROM petugas WHERE id_pengguna='$id_pengguna'";
	$hapus = mysqli_query($koneksi,$sql);
	$r     = mysqli_fetch_array($hapus);
	if ($r['foto']!=''){
		$foto=$r['foto'];
		// hapus file gambar yang berhubungan dengan berita tersebut
		unlink("../img/petugas/$foto");
	}
	$sql   = "DELETE FROM petugas WHERE id_pengguna='$id_pengguna'";
	$hapus = mysqli_query($koneksi,$sql);
	if($hapus){
		header("Location: ?m=petugas");
	}else{
		include "index.php?m=petugas&s=awal";
		echo '<script language="JavaScript">';
			echo 'alert("Data Gagal dihapus.")';
		echo '</script>';
	}
}
?>
