<?php
if(isset($_POST['simpan'])){
	include "config.php";
	
	$noibadah	=$_POST['noibadah'];
	$judul		=$_POST['judul'];
	$tanggal	=$_POST['tanggal'];
	$pic		=$_POST['pic'];
	$link		=$_POST['link'];
	$ayat		=$_POST['ayat'];
	$isi 		=$_POST['isi'];
	$kesimpulan =$_POST['kesimpulan'];
	$status		=$_POST['status'];
	$lokasi 	=$_FILES['foto']['tmp_name'];
	$namafile	=$_FILES['foto']['name'];
	$tipefile	=$_FILES['foto']['type'];


	if(empty($lokasi)){
			$sql="UPDATE ibadah SET judul='$judul', tanggal='$tanggal', link='$link', ayat='$ayat', isi='$isi', kesimpulan='$kesimpulan', pic='$pic',
				  status='$status' WHERE noibadah='$noibadah' ";
	}else{
			include "upload.php";
			$folder="../img/ibadah/";
			$ukuran=100;
			UploadFoto($namafile,$folder,$ukuran);
			$sql="UPDATE ibadah SET judul='$judul', tanggal='$tanggal', link='$link', ayat='$ayat', isi='$isi', kesimpulan='$kesimpulan', pic='$pic',
				  status='$status', foto='$namafile' WHERE noibadah='$noibadah' ";
	}
	$simpan=mysqli_query($koneksi,$sql);
	//var_dump($sql);
	if($simpan){
		header('Location:index.php?m=ibadah');
		//echo "berhasil";
	}else{
		//echo "gagal alias tidak berhasil";
		include "index.php?m=ibadah&s=awal";
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
