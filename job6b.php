<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php session_start();ob_start();?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>.:Febri Sukmawati|Job 6 B:.</title>
</head>

<body>
<?php echo"<form action method=\"post\">";?>
<p>
<pre>

silahkan Login :
	
	User  : <input type="text" name="user" value="" />
	
	Sandi : <input type="password" name="sandi" value="" />
	
			<input type="submit" name="login" value="Login" />

</pre>
</p>


<?php
	if($_POST['login'])
	{
	$lgnuser="stekom";$lgnsandi="605";
	
	if(trim($_POST['user'])==$lgnuser and trim($_POST['sandi'])==$lgnsandi)
	{ ob_end_clean();
		$_SESSION['user']=$_POST['user'];
		$_SESSION['sandi']=$_POST['sandi'];
		header("Location:job6c.php");
		exit();
	}
}
?>
		
</body>
</html>
