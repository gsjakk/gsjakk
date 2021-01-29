<?php
if(isset($_GET['norenungan'])){
	include "config.php";
	$norenungan=$_GET['norenungan'];
	$sql   = "SELECT * FROM renungan WHERE norenungan='$norenungan'";
	$hapus = mysqli_query($koneksi,$sql);
	$r     = mysqli_fetch_array($hapus);
	if ($r['foto']!=''){
		$foto=$r['foto'];
		// hapus file gambar yang berhubungan dengan berita tersebut
		unlink("../img/renungan/$foto");
	}
	$sql   = "DELETE FROM renungan WHERE norenungan='$norenungan'";
	$hapus = mysqli_query($koneksi,$sql);
	if($hapus){
		header("Location: ?m=renungan");
	}else{
		include "index.php?m=renungan&s=awal";
		echo '<script language="JavaScript">';
			echo 'alert("Data Gagal dihapus.")';
		echo '</script>';
	}
}
?>
