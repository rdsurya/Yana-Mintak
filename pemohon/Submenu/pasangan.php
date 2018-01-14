<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Maklumat Pasangan Pemohon</title>
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
	background-size:100% 2000px;
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
<h2 align="center">B. MAKLUMAT PASANGAN PEMOHON</h2>
<!-- nama -->
<label for="nama">*1. Nama:</label>
<input type="text" name="username" required="required">

<!-- ic -->
<label for="ic">*2. No. Kad Pengenalan:</label>
<input type="text" name="ic" required="required">

<!-- alamat -->
<label for="alamat">*3. Alamat Tetap (Seperti dalam Kad Pengenalan):</label>
<textarea name="textarea" cols="40" rows="7" required="required"></textarea>

<label for="poskod">*Poskod:</label>
<input type="number" name="poskod" required="required">

<label for="alamat">*Bandar:</label>
<select name="bandar">
  <option value="-">SILA PILIH</option>
  <option value="g.musang">Gua Musang</option>
  <option value="kadok">Kadok</option>
  <option value="kb">Kota Bharu</option>
  <option value="k.krai">Kuala Krai</option>
  <option value="p.mas">Pasir Mas</option>
  <option value="p.kubor">Pengkalan Kubor</option>
  <option value="peringat">Peringat</option>
  <option value="t.merah">Tanah Merah</option>
  <option value="tumpat">Tumpat</option>
  <option value="w.bharu">Wakaf Bharu</option>
</select>

<label for="alamat">*Negeri:</label>
<select name="negeri">
  <option value="-">SILA PILIH</option>
  <option value="kelantan">Kelantan</option>
</select><br /><br />

<!-- umur -->
<label for="umur">*4. Umur:</label>
<input name="umur" type="text" required="required"/>

<!-- tempat lahir -->
<label for="lahir">*5. Tempat Lahir:</label>
<input name="lahir" type="text" required="required"/>

<!-- pekerjaan -->
<label for="pekerjaan">*6. Pekerjaan:</label>
<input name="pekerjaan" type="text" required="required" />

<!-- jenis pekerjaan -->
<label for="jenis">*7. Jenis Pekerjaan:</label>
<select name="jenis">
  <option value="-">-</option>
  <option value="sendiri">Sendiri</option>
  <option value="swasta">Swasta</option>
  <option value="kerajaan">Kerajaan</option>
</select>

<!-- alamat pejabat -->
<label for="pjbt">8. Alamat Tempat Kerja:</label>
<input name="pjbt" type="text" />

<!-- No. Telefon Tempat Kerja -->
<label for="fon">9. No. Telefon Tempat Kerja:</label>
<input name="fon" type="text"  />

<!-- pendapatan -->
<label for="pendapatan">*10. Pendapatan:</label>
<input name="pendapatan" type="text" required="required" />

<!-- Lain-Lain Pendapatan -->
<label for="lain">11. Lain-Lain Pendapatan:</label>
<input name="lain" type="text"  />

<!-- Tempat Lahir Bapa -->
<label for="lhr">*12. Tempat Lahir Bapa:</label>
<input name="lhr" type="text" required="required" />

<!-- No. Telefon -->
<label for="tel">*13. No. Telefon:</label>
<input name="tel" type="text" required="required" />

<!-- Email -->
<label for="email">14. Email:</label>
<input name="email" type="text"  />

<p><b>* - Sila pastikan semua medan wajib diisi. </b></p>

<!-- Button -->
<input class="btn" name="Simpan" type="button" value="Simpan" />
<a href="tanah.php"><input class="btn" name="Seterusnya" type="button" value="Seterusnya" /></a>
</fieldset>
</form>

</div>
</body>
</html>