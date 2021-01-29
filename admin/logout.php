<?php
session_start();
unset($_SESSION['idkasis']);
unset($_SESSION['userkasis']);
unset($_SESSION['namakasis']);
unset($_SESSION['jabatankasis']);
unset($_SESSION['hakakseskasis']);
unset($_SESSION['fotokasis']);
echo "<script>window.location='../'</script>";	
//session_destroy();
//  unset($_SESSION["sessidpks"]);
?>
