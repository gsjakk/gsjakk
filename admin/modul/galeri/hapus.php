<?php
if(isset($_GET['nogaleri'])){
	include "config.php";
	$nogaleri=$_GET['nogaleri'];
	$sql   = "SELECT * FROM galeri WHERE nogaleri='$nogaleri'";
	$hapus = mysqli_query($koneksi,$sql);
	$r     = mysqli_fetch_array($hapus);
	if ($r['foto']!=''){
		$foto=$r['foto'];
		// hapus file gambar yang berhubungan dengan berita tersebut
		unlink("../img/galeri/$foto");
	}
	$sql   = "DELETE FROM galeri WHERE nogaleri='$nogaleri'";
	$hapus = mysqli_query($koneksi,$sql);
	if($hapus){
		header("Location: ?m=galeri");
	}else{
		include "index.php?m=galeri&s=awal";
		echo '<script language="JavaScript">';
			echo 'alert("Data Gagal dihapus.")';
		echo '</script>';
	}
}
?>
