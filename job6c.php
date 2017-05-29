<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php session_start();ob_start();

{ ob_end_clean();
	header("Location:job6b.php");
	exit();
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>.:Febri Sukmawati|Job 6 C:.</title>
</head>

<body>
<b> Selamat Datang Di Pengolahan Data Internal</b>
<br /><br />
<?php		
		echo"User Anda:".$_SESSION['user']."<br>";
		echo"Sandi Anda:".$_SESSION['sandi']."<br><br>";
		echo"	<form action=\"$php_selt\"method=\"post\">
				<input type=\"submit\"name=\"logout\"value=\"Keluar\" />
				</form>";
		?>
		
</body>
</html>
<?php
if($_POST['logout'])
{ session_destroy();
	ob_end_clean();
	header("Location: job6b.php");
	exit();
	}
	?>