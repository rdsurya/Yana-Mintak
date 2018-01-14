<?php
    session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Menu Utama</title>
<style>
header{
	padding: 5px;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size:15px;
    color: #000;
     background-color: rgba(236, 240, 241, 0.7);
    clear: left;
    text-align: center;
}

body {
	margin: 0 auto;
	background-image:url(../img/wallpaper1.jpg);
	background-repeat:no-repeat;
	background-size:100% 720px;
}

.container {
	width: 800px;
	height: 500px;
	text-align:center;
	background-color: rgba(189, 195, 199, 0.7);
	border-radius: 4px;
	margin: 0 auto;
	margin-top:0px;
}

a{
	width:150px;
	color:#FFF;
	display:block;
	text-decoration:none;
	font-size:16px;
	text-align:center;
	padding:10px;
	border-radius:10px;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-weight:bold;
}

.menu ul{
		list-style:none;
		margin:0;
		padding:0;
	}
	
	.menu ul li{
		padding:10px;
		position:relative;
		width:160px;
		vertical-align:middle;
		background-color: rgba(189, 195, 199, 0.7);
		cursor:pointer;
		border-top:1px solid #000;
		border-bottom:1px solid #000;
		border-right:1px solid #000;
	}
	
	.menu ul li a{
		font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
		font-size:14px;
		color:#000;
		text-decoration:none;
		font-weight:bold;
	}
	
	span{
		margin-right:15px;
	}
	
fieldset {
	border:none;
	padding-bottom:10px;
}

h2 {
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size:14px;
	color:#000;
}

p {
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size:12px;
	color:#F00;
}	

label {
	width: 500px;
	display:block;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size:14px;
	color:#000;
	margin-top:5px;
	margin-right:0px;
	margin-bottom:5px;
	margin-left:0px;
}

input {
	width:500px;
	border:thin solid #000;
	margin-bottom:10px;
}

textarea {
	width: 500px;
	border:thin solid #000;
	margin-bottom:10px;
}

.btn {
	width: 70px;
	height: 20px;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size:12px;
	color: #FFF;
	background-color:#09F;
	margin-left: 0px;
	float:left;
}

td {
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size:12px;
	color:#000;
}

select {
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size:14px;
}
</style>
</head>

<body>
<header>
   <h1>Sistem Permohonan Milik Tanah (e-Mintak)</h1>
</header>
<div class="menu" style="float: left;">
<ul>
<li><a href="papar.php">Papar Maklumat Pemohon</a></li>
<li><a href="carian.php">Carian</a></li>
<li><a href="hapus.php">Hapus</a></li>
<li><a href="login.php">Keluar</a></li>
</ul>
</div>

<center>
<div class="container">
</div>
</body>
</html>