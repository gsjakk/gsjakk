<?php
if(isset($_POST['simpan'])){
	include "config.php";
	
	$norenungan	=$_POST['norenungan'];
	$judul		=$_POST['judul'];
	$tanggal	=$_POST['tanggal'];
	$pic		=$_POST['pic'];
	$isi1		=$_POST['isi1'];
	$isi2 		=$_POST['isi2'];
	$ayat		=$_POST['ayat'];
	$status		=$_POST['status'];
	$lokasi 	=$_FILES['foto']['tmp_name'];
	$namafile	=$_FILES['foto']['name'];
	$tipefile	=$_FILES['foto']['type'];


	if(empty($lokasi)){
			$sql="UPDATE renungan SET judul='$judul', tanggal='$tanggal', pic='$pic', isi1='$isi1', isi2='$isi2', ayat='$ayat', status='$status'
			WHERE norenungan='$norenungan'";
	}else{
			include "upload.php";
			$folder="../img/renungan/";
			$ukuran=100;
			UploadFoto($namafile,$folder,$ukuran);
			$sql="UPDATE renungan SET judul='$judul', tanggal='$tanggal', pic='$pic', isi1='$isi1', isi2='$isi2', ayat='$ayat', status='$status',
			foto='$namafile' WHERE norenungan='$norenungan'";
	}
	$simpan=mysqli_query($koneksi,$sql);
	//var_dump($sql);
	if($simpan){
		header('Location:index.php?m=renungan');
		//echo "berhasil";
	}else{
		//echo "gagal alias tidak berhasil";
		include "index.php?m=renungan&s=awal";
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
