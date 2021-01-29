<?php
include_once "sesi.php";
$modul=(isset($_GET['s']))?$_GET['s']:"awal";
switch($modul){
	case 'awal'		: default: include "modul/galeri/tampil.php"; break;
	case 'tambah'	: include "modul/galeri/tambah.php"; break;
	case 'simpan'	: include "modul/galeri/simpan.php"; break;
	case 'edit'		: include "modul/galeri/edit.php"; break;
	case 'update'	: include "modul/galeri/update.php"; break;
	case 'hapus'	: include "modul/galeri/hapus.php"; break;
	case 'detail'	: include "modul/galeri/detail.php"; break;
	case 'profil'	: include "modul/galeri/profil.php"; break;
}
?>
