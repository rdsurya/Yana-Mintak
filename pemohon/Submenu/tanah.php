<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Perihal Tanah</title>
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

p1 {
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size:14px;
	color:#000;
}	

p2 {
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

input[type="text"],input[type="password"], input[type="email"]{
	height:30px;
	width: 700px;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size:18px;
	border:thin solid #000;
	margin-bottom:20px;
	background-color:#FFF;
	padding-left:40px;
}

input[type="number"] {
	height:30px;
	width:100px;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size:18px;
	border:thin solid #000;
	margin-bottom:20px;
	background-color:#FFF;
	padding-left:40px;
}
	
textarea {
	width: 730px;
	border:thin solid #000;
	margin-bottom:10px;
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
<h2 align="center">C: PERIHAL TANAH</h2>
<!-- jenis tanah -->
<label for="jenis">*1. Jenis Tanah:</label>
<select name="jenis">
  <option value="-">SILA PILIH</option>
  <option value="kerajaan">Tanah Kerajaan</option>
  <option value="pengambilan">Tanah Pengambilan</option>
</select><br /><br />

<!-- Tahun Rentahan -->
<label for="tahun">*2. Tahun Rentahan:</label>
<p1><b>Sudah rentah sejak tahun:</b></p1>
<select name="tahun">
  <option value="tiada">-TIADA-</option>
  <option value="2017">2017</option>
  <option value="2016">2016</option>
  <option value="2015">2015</option>
  <option value="2014">2014</option>
  <option value="2013">2013</option>
  <option value="2012">2012</option>
  <option value="2011">2011</option>
  <option value="2010">2010</option>
  <option value="2009">2009</option>
  <option value="2008">2008</option>
  <option value="2007">2007</option>
  <option value="2006">2006</option>
  <option value="2005">2005</option>
  <option value="2004">2004</option>
  <option value="2003">2003</option>
  <option value="2002">2002</option>
  <option value="2001">2001</option>
  <option value="2000">2000</option>
  <option value="1999">1999</option>
  <option value="1998">1998</option>
  <option value="1997">1997</option>
  <option value="1996">1996</option>
  <option value="1995">1995</option>
  <option value="1994">1994</option>
  <option value="1993">1993</option>
  <option value="1992">1992</option>
  <option value="1991">1991</option>
  <option value="1990">1990</option>
  <option value="1989">1989</option>
  <option value="1988">1988</option>
  <option value="1987">1987</option>
  <option value="1986">1986</option>
  <option value="1985">1985</option>
  <option value="1984">1984</option>
  <option value="1983">1983</option>
  <option value="1982">1982</option>
  <option value="1981">1981</option>
  <option value="1980">1980</option>
  <option value="1979">1979</option>
  <option value="1978">1978</option>
  <option value="1977">1977</option>
  <option value="1976">1976</option>
  <option value="1975">1975</option>
  <option value="1974">1974</option>
  <option value="1973">1973</option>
  <option value="1972">1972</option>
  <option value="1971">1971</option>
  <option value="1970">1970</option>
  <option value="1969">1969</option>
  <option value="1968">1968</option>
  <option value="1967">1967</option>
  <option value="1966">1966</option>
  <option value="1965">1965</option>
  <option value="1964">1964</option>
  <option value="1963">1963</option>
  <option value="1962">1962</option>
  <option value="1961">1961</option>
  <option value="1960">1960</option>
  <option value="1959">1959</option>
  <option value="1958">1958</option>
  <option value="1957">1957</option>
</select><br /><br />

<!-- No. Telefon Tempat Kerja -->
<label for="fon">3. Tanaman kekal yang ada di atas tanah yang dipohon:</label>
<input name="fon" type="text"  />

<!-- pendapatan -->
<label for="pendapatan">4. Bangunan yang ada di atas tanah:</label>
<input name="pendapatan" type="text"  /><br /><br />

<p2><b>* - Sila pastikan semua medan wajib diisi. </b></p2><br /><br />

<!-- Button -->
<input class="btn" name="Simpan" type="button" value="Simpan" />
<a href="tujuan.php"><input class="btn" name="Seterusnya" type="button" value="Seterusnya" /></a>
</fieldset>
</form>

</div>
</body>
</html>