<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php session_start();?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>.:Febri Sukmawati|Job 6 A:.</title>
</head>

<body>
<?php
	if($_SESSION['counter']==""){$_SESSION['counter']=0;}
		$_SESSION['counter']++;
		echo"<h1>Halaman Ini dipanggil ".$_SESSION['counter']." kali</h1>";
		?>
</body>
</html>
