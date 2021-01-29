<?php
include_once "sesi.php";
$modul=(isset($_GET['s']))?$_GET['s']:"awal";
switch($modul){
	case 'awal'		: default: include "modul/ibadah/tampil.php"; break;
	case 'edit'		: include "modul/ibadah/edit.php"; break;
	case 'update'	: include "modul/ibadah/update.php"; break;
	case 'hapus'	: include "modul/ibadah/hapus.php"; break;
	case 'detail'	: include "modul/ibadah/detail.php"; break;
	case 'tambah'	: include "modul/ibadah/tambah.php"; break;
	case 'simpan'	: include "modul/ibadah/simpan.php"; break;
}
?>
