<?php
if(isset($_POST['simpan'])){
	include "config.php";
	$nogaleri		=$_POST['nogaleri'];
	$namagaleri		=$_POST['namagaleri'];
	$tanggalgaleri	=$_POST['tanggalgaleri'];
	$status			=$_POST['status'];
	$lokasi 		=$_FILES['foto']['tmp_name'];
	$namafile		=$_FILES['foto']['name'];
	$tipefile		=$_FILES['foto']['type'];


	if(empty($lokasi)){
			$sql="UPDATE galeri SET nogaleri='$nogaleri', namagaleri='$namagaleri', tanggalgaleri='$tanggalgaleri', status='$status' 
			WHERE nogaleri='$nogaleri'";
	}else{
			include "upload.php";
			$folder="../img/galeri/";
			$ukuran=100;
			UploadFoto($namafile,$folder,$ukuran);
			$sql="UPDATE galeri SET nogaleri='$nogaleri', namagaleri='$namagaleri', tanggalgaleri='$tanggalgaleri', status='$status', 
			foto='$namafile' WHERE nogaleri='$nogaleri'";
	}
	$simpan=mysqli_query($koneksi,$sql);
	//var_dump($sql);
	if($simpan){
		header('Location:index.php?m=galeri');
		//echo "berhasil";
	}else{
		//echo "gagal alias tidak berhasil";
		include "index.php?m=galeri&s=awal";
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
