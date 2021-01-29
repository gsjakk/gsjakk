<?php
//if(isset($_POST['simpan'])){
include "sesi.php";
	include "../config.php";
	$golput=$_POST['golput'];
	$no1	=$_POST['1'];
	$no2	=$_POST['2'];
	$jk		=$_POST['jk'];
	$jm		=$_POST['jm'];
	echo $no1.",".$no2.",".$jk.",".$golput;
	
	$tgl = date('Y');
	if ($jk=='2'){
	$sql1="INSERT INTO validasi SET tahun='".date('Y')."', nokandidat='1', sekor='".$_POST['1']."', jumlah='".$_POST['jm']."' ";
    $simpan=mysqli_query($koneksi,$sql1);
	
	$sql2="INSERT INTO validasi SET tahun='".date('Y')."', nokandidat='2', sekor='".$_POST['2']."', jumlah='".$_POST['jm']."' ";
    $simpan=mysqli_query($koneksi,$sql2);
	} //jika kandidat 2,
	else if ($jk=='3'){
	$sql1="INSERT INTO validasi SET tahun='".date('Y')."', nokandidat='1', sekor='".$_POST['1']."', jumlah='".$_POST['jm']."' ";
    $simpan=mysqli_query($koneksi,$sql1);
	
	$sql2="INSERT INTO validasi SET tahun='".date('Y')."', nokandidat='2', sekor='".$_POST['2']."', jumlah='".$_POST['jm']."'";
    $simpan=mysqli_query($koneksi,$sql2);
	
	$sql3="INSERT INTO validasi SET tahun='".date('Y')."', nokandidat='3', sekor='".$_POST['3']."', jumlah='".$_POST['jm']."' ";
    $simpan=mysqli_query($koneksi,$sql3);
	} //jika kandidat 3,
	else {
	$sql1="INSERT INTO validasi SET tahun='".date('Y')."', nokandidat='1', sekor='".$_POST['1']."', jumlah='1' ";
    $simpan=mysqli_query($koneksi,$sql1);
	
	$sql2="INSERT INTO validasi SET tahun='".date('Y')."', nokandidat='2', sekor='".$_POST['2']."', jumlah='1' ";
    $simpan=mysqli_query($koneksi,$sql2);
	
	$sql3="INSERT INTO validasi SET tahun='".date('Y')."', nokandidat='3', sekor='".$_POST['3']."', jumlah='1' ";
    $simpan=mysqli_query($koneksi,$sql3);
	
	$sql4="INSERT INTO validasi SET tahun='".date('Y')."', nokandidat='4', sekor='".$_POST['4']."', jumlah='1' ";
    $simpan=mysqli_query($koneksi,$sql4);
	} //jika kandidat 4,
	if($simpan){
		header('Location:?m=laporan');	
		echo "berhasil";
	}else{
		include "index.php";
		echo '<script language="JavaScript">';
			echo 'alert("Data Gagal Ditambahkan.")';
		echo '</script>';
	}
/*}else{
	echo '<script>window.history.back()</script>';
}*/
?>
