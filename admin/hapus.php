<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hapus Maklumat Pemohon</title>
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
	width: 2700px;
	background-image:url(img/wallpaper1.jpg);
	background-repeat:no-repeat;
	background-size:200% 720px;
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
	width: 2700px;
	height:auto;
}

form {
	width: 2700px;
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

td {
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size:12px;
	color:#000;
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
<div id="formwrapper">
<form action="pemohonform.php" method="post">
<fieldset>
<h2 align="center">HAPUS MAKLUMAT PEMOHON</h2>
<table width="2318" border="1">
  <tr>
    <th width="23" scope="10">Bil.</th>
    <th width="374" scope="col">Nama</th>
    <th width="131">No. Kad Pengenalan</th>
    <th width="254">Alamat</th>
    <th width="49">Poskod</th>
    <th width="105">Bandar</th>
    <th width="70">Negeri</th>
    <th width="54">Umur</th>
    <th width="118">Tempat Lahir</th>
    <th width="113">Pekerjaan</th>
    <th width="102">Jenis Pekerjaan</th>
    <th width="78">Pendapatan</th>
    <th width="105">Lain-lain Pendapatan</th>
    <th width="114">Tempat Lahir Bapa</th>
    <th width="135">Tanah Lain Milik Pemohon</th>
    <th width="112">No. Telefon</th>
    <th width="206">Email</th>
    <th width="63">Hapus</th>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center"><img src="img/deletee.png" width="19" height="19"></td>
  </tr>
</table>
</fieldset>
</form>

</div>
</body>
</html>