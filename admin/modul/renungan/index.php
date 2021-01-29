<?php
include_once "sesi.php";
$modul=(isset($_GET['s']))?$_GET['s']:"awal";
switch($modul){
	case 'awal'		: default: include "modul/renungan/tampil.php"; break;
	case 'tambah'	: include "modul/renungan/tambah.php"; break;
	case 'simpan'	: include "modul/renungan/simpan.php"; break;
	case 'edit'		: include "modul/renungan/edit.php"; break;
	case 'update'	: include "modul/renungan/update.php"; break;
	case 'hapus'	: include "modul/renungan/hapus.php"; break;
	case 'detail'	: include "modul/renungan/detail.php"; break;
	case 'profil'	: include "modul/renungan/profil.php"; break;
}
?>
