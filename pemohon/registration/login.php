<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<style>
header{
	padding: 10px;
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
	width: 500px;
	height: 400px;
	text-align:center;
	background-color: rgba(189, 195, 199, 0.7);
	border-radius: 4px;
	margin: 0 auto;
	margin-top:100px;
}

.container img {
	width: 120px;
	height: 120px;
	margin-top: -60px;
	margin-bottom:0px;
}

input[type="text"],input[type="password"]{
	height:45px;
	width: 300px;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size:18px;
	border:none;
	margin-bottom:20px;
	background-color:#FFF;
	padding-left:40px;
}

.btn-login{
	padding: 15px 25px;
	color: #fff;
	border-radius: 4px;
	border: none;
	background-color:#34495e;
	border-bottom: 4px solid #34495e;
	margin-bottom:20px;
}

a {
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size:15px;
	color:#000;
}

h2 {
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size:25px;
    color: #000;
    clear: left;
    text-align: center;
}

</style>
</head>

<body>
<header>
   <h1>Sistem Permohonan Milik Tanah (e-Mintak)</h1>
</header>
<div class="container">
<img src="../img/PTJPM.png"/>
  <h2>Log Masuk</h2>
<form>
<div class="form-input">
<input type="text" name="username" placeholder="Masukkan ID Pengguna">
</div>

<div class="form-input">
<input type="password" name="password" placeholder="Masukkan Kata Laluan"/>
</div>

<input type="submit" name="submit" value="LOG MASUK" class="btn-login" /><br />
<a href="register2.php">Daftar Baru</a>
</form>
</div>
</body>
</html>