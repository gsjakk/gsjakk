<?php
if(empty($_SESSION['idkasis']) AND empty($_SESSION['namakasis'])){
	header('location:login.php');
}
?>
