<?php
session_start();
include_once "sesi.php";
$modul=(isset($_GET['m']))?$_GET['m']:"awal";
$jawal="Admin GSJA";
switch($modul){
	case 'awal'		: default: $aktif="Beranda";$judul="Beranda $jawal";	include "plain.php"; 					break;
	case 'admin'	: $aktif="Admin"; 		$judul="Modul $jawal"; 			include "modul/administrator/index.php";break;
	case 'renungan'	: $aktif="renungan"; 	$judul="Modul renungan $jawal"; include "modul/renungan/index.php"; 	break;
	case 'ibadah'	: $aktif="ibadah"; 		$judul="Modul ibadah $jawal";	include "modul/ibadah/index.php"; 		break;
	case 'petugas'	: $aktif="petugas"	; 	$judul="Modul petugas $jawal"; 	include "modul/petugas/index.php"; 		break;
	case 'galeri'	: $aktif="galeri";		$judul="Modul galeri $jawal";	include "modul/galeri/index.php"; 		break;
	case 'laporan'	: $aktif="laporan"; 	$judul="laporan $jawal"; 		include "modul/laporan/index.php"; 		break;
}


?>
