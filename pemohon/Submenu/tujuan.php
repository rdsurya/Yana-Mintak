<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tujuan Permohonan</title>
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
	width: 1000px;
	height: 635px;
	text-align:center;
	background-color: rgba(189, 195, 199, 0.7);
	border-radius: 4px;
	margin: 0 auto;
	margin-top:0px;
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
	
#formwrapper {
	width: 800px;
	height:auto;
}

form {
	width: 800px;
	height: auto;
	text-align: left;
}

fieldset {
	background-color:rgba(189, 195, 199, 0.7);
	border:none;
	padding-bottom:10px;
}

h2 {
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size:18px;
	color:#000;
}

p {
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size:14px;
	color:#F00;
}	

label {
	width: 500px;
	display:block;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size:16px;
	color:#000;
	margin-top:5px;
	margin-right:0px;
	margin-bottom:5px;
	margin-left:0px;
}

input[type="text"]{
	height:30px;
	width: 700px;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size:18px;
	border:thin solid #000;
	margin-bottom:20px;
	background-color:#FFF;
	padding-left:40px;
}

input[type="checkbox"]{
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size:18px;
	border:thin solid #000;
	margin-bottom:10px;
	background-color:#FFF;
	padding-left:40px;
}

btn {
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
	width: 350px;
	height: 35px;
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
<li><a href="../Submenu/pemohon.php">Bahagian A: Pemohon</a></li>
<li><a href="../Submenu/pasangan.php">Bahagian B: Pasangan Pemohon</a></li>
<li><a href="../Submenu/tanah.php">Bahagian C: Perihal Tanah</a></li>
<li><a href="../Submenu/tujuan.php">Bahagian D: Tujuan Permohonan</a></li>
<li><a href="../Submenu/pelan.php">Bahagian E: Pelan Kasar Tanah</a></li>
<li><a href="../registration/login.php">Keluar</a></li>
</ul>
</div>

<center>
<div id="formwrapper">
<form action="pemohonform.php" method="post">
<fieldset>
<h2 align="center">D: TUJUAN PERMOHONAN</h2>
<!-- tujuan -->
<label for="tujuan">1. Tujuan Permohonan:</label>
<input name="tanaman" type="checkbox" value="tanaman" />Tanaman</br>
<input name="dusun" type="checkbox" value="dusun" />Dusun</br>
<input name="padi" type="checkbox" value="padi" />Padi</br>
<input name="sawit" type="checkbox" value="kelapa sawit" />Kelapa Sawit</br>
<input name="bangunan" type="checkbox" value="bangunan" />Bangunan</br><br />
<label for="lain">Lain-lain:Nyatakan</label>
<input name="lain" type="text"  /><br />

<p><b>* - Sila pastikan semua medan wajib diisi. </b></p><br /><br />

<!-- Button -->
<input class="btn" name="Simpan" type="button" value="Simpan" />
<a href="pelan.php"><input class="btn" name="Seterusnya" type="button" value="Seterusnya" /></a>
</fieldset>
</form>

</div>
</body>
</html>