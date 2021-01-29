<?php
if(isset($_GET['noibadah'])){
	include "config.php";
	$noibadah=$_GET['noibadah'];
	$sql   = "SELECT * FROM ibadah WHERE noibadah='$noibadah'";
	$hapus = mysqli_query($koneksi,$sql);
	$r     = mysqli_fetch_array($hapus);
	if ($r['foto']!=''){
		$foto=$r['foto'];
		// hapus file gambar yang berhubungan dengan berita tersebut
		unlink("../img/ibadah/$foto");
	}
	$sql   = "DELETE FROM ibadah WHERE noibadah='$noibadah'";
	$hapus = mysqli_query($koneksi,$sql);
	if($hapus){
		header("Location: ?m=ibadah");
	}else{
		include "index.php?m=ibadah&s=awal";
		echo '<script language="JavaScript">';
			echo 'alert("Data Gagal dihapus.")';
		echo '</script>';
	}
}
?>
