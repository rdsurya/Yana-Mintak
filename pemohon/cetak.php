<!DOCTYPE html>
<html>
<body>
<page size="A4">
<head>
<style>

body {
        height: 295mm;/*297*/
        width: 210mm;
    }
dt { float: left; clear: left; text-align: right; font-weight: bold; margin-right: 10px } 
dd {  padding: 0 0 0.5em 0; }
@page 
    {
        size: auto;   /* auto is the initial value */
        margin: 0mm;  /* this affects the margin in the printer settings */
    }
	
	body {
  background: rgb(204,204,204); 
}
page {
  background: white;
  display: block;
  margin: 0 auto;
  margin-bottom: 0.5cm;
  box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
}
page[size="A4"] {  
  width: 21cm;
  height: 29.7cm; 
}
page[size="A4"][layout="portrait"] {
  width: 29.7cm;
  height: 21cm;  
}

}
@media print {
  body, page {
    margin: 0;
    box-shadow: 0;
  }
  @page:right{ 
  @bottom-left {
    margin: 10pt 0 30pt 0;
    border-top: .25pt solid #666;
      font-size: 9pt;
    color: #333;
  }

  @bottom-right { 
    margin: 10pt 0 30pt 0;
    border-top: .25pt solid #666;
    content: counter(page);
    font-size: 9pt;
  }

  @top-right {
    content:  string(doctitle);
    margin: 30pt 0 10pt 0;
    font-size: 9pt;
    color: #333;
  }
 span.white-text {
    margin: 5px;

  div {
    text-align: justify;
    text-justify: inter-word;
}
}
}
</style> 

<title>Cetak Borang</title>
</head>

<body>
<p style="text-align: justify; padding-left: 80px; padding-right: 60px;">BAHAGIAN A: MAKLUMAT PEMOHON</p>
<p style="text-align: justify; padding-left: 80px; padding-right: 80px;">1. Nama:</p>
<p style="text-align: justify; padding-left: 80px; padding-right: 80px;">2. No. Kad Pengenalan:</p>
<p style="text-align: justify; padding-left: 80px; padding-right: 80px;">3. Alamat Tetap (Seperti dalam Kad Pengenalan):</p>
<p style="text-align: justify; padding-left: 80px; padding-right: 80px;">Poskod:</p>
<p style="text-align: justify; padding-left: 80px; padding-right: 80px;">Bandar:</p>
<p style="text-align: justify; padding-left: 80px; padding-right: 80px;">Negeri:</p>
<p style="text-align: justify; padding-left: 80px; padding-right: 80px;">4. Umur:</p>
<p style="text-align: justify; padding-left: 80px; padding-right: 80px;">5. Tempat Lahir:</p>
<p style="text-align: justify; padding-left: 80px; padding-right: 80px;">6. Pekerjaan:</p>
<p style="text-align: justify; padding-left: 80px; padding-right: 80px;">7. Jenis Pekerjaan:</p>
<p style="text-align: justify; padding-left: 80px; padding-right: 80px;">8. Alamat Tempat Kerja:</p>
<p style="text-align: justify; padding-left: 80px; padding-right: 80px;">9. No. Telefon Tempat Kerja:</p>
<p style="text-align: justify; padding-left: 80px; padding-right: 80px;">10. Pendapatan:</p>
<p style="text-align: justify; padding-left: 80px; padding-right: 80px;">11. Lain-Lain Pendapatan:</p>
<p style="text-align: justify; padding-left: 80px; padding-right: 80px;">12. Tempat Lahir Bapa:</p>
<p style="text-align: justify; padding-left: 80px; padding-right: 80px;">13. Tanah Lain Milik Pemohon:</p>
<p style="text-align: justify; padding-left: 80px; padding-right: 80px;">14. No. Telefon:</p>
<p style="text-align: justify; padding-left: 80px; padding-right: 80px;">15. Email:</p>
<p style="text-align: justify; padding-left: 80px; padding-right: 80px;">16. Taraf Perkahwinan:</p>

<p style="text-align: justify; padding-left: 80px; padding-right: 60px;">BAHAGIAN B: MAKLUMAT PASANGAN PEMOHON</p>
<p style="text-align: justify; padding-left: 80px; padding-right: 80px;">1. Nama:</p>
<p style="text-align: justify; padding-left: 80px; padding-right: 80px;">2. No. Kad Pengenalan:</p>
<p style="text-align: justify; padding-left: 80px; padding-right: 80px;">3. Alamat Tetap (Seperti dalam Kad Pengenalan):</p>
<p style="text-align: justify; padding-left: 80px; padding-right: 80px;">Poskod:</p>
<p style="text-align: justify; padding-left: 80px; padding-right: 80px;">Bandar:</p>
<p style="text-align: justify; padding-left: 80px; padding-right: 80px;">Negeri:</p>
<p style="text-align: justify; padding-left: 80px; padding-right: 80px;">4. Umur:</p>
<p style="text-align: justify; padding-left: 80px; padding-right: 80px;">5. Tempat Lahir:</p>
<p style="text-align: justify; padding-left: 80px; padding-right: 80px;">6. Pekerjaan:</p>
<p style="text-align: justify; padding-left: 80px; padding-right: 80px;">7. Jenis Pekerjaan:</p>
<p style="text-align: justify; padding-left: 80px; padding-right: 80px;">8. Alamat Tempat Kerja:</p>
<p style="text-align: justify; padding-left: 80px; padding-right: 80px;">9. No. Telefon Tempat Kerja:</p>
<p style="text-align: justify; padding-left: 80px; padding-right: 80px;">10. Pendapatan:</p>
<p style="text-align: justify; padding-left: 80px; padding-right: 80px;">11. Lain-Lain Pendapatan:</p>
<p style="text-align: justify; padding-left: 80px; padding-right: 80px;">12. Tempat Lahir Bapa:</p>
<p style="text-align: justify; padding-left: 80px; padding-right: 80px;">13. No. Telefon:</p>
<p style="text-align: justify; padding-left: 80px; padding-right: 80px;">14. Email:</p>

<p style="text-align: justify; padding-left: 80px; padding-right: 60px;">BAHAGIAN C: PERIHAL TANAH </p>
<p style="text-align: justify; padding-left: 80px; padding-right: 80px;">1. Jenis Tanah:</p>
<p style="text-align: justify; padding-left: 80px; padding-right: 80px;">2. Tahun Rentahan:</p>
<p style="text-align: justify; padding-left: 80px; padding-right: 80px;">3. Tanaman kekal yang ada di atas tanah yang dipohon:</p>
<p style="text-align: justify; padding-left: 80px; padding-right: 80px;">4. Bangunan yang ada di atas tanah:</p>

<p style="text-align: justify; padding-left: 80px; padding-right: 60px;">BAHAGIAN D: TUJUAN PERMOHONAN</p>
<p style="text-align: justify; padding-left: 80px; padding-right: 80px;">1. Tujuan Permohonan:</p>

<p style="text-align: justify; padding-left: 80px; padding-right: 60px;">BAHAGIAN E: PELAN KASAR TANAH</p>
<p style="text-align: justify; padding-left: 80px; padding-right: 80px;">1. Mukim:</p>
<p style="text-align: justify; padding-left: 80px; padding-right: 80px;">2. Tempat Lokasi Tanah:</p>
<p style="text-align: justify; padding-left: 80px; padding-right: 80px;">3. Luas Mengikut Kiraan Ekar:</p>
<p style="text-align: justify; padding-left: 80px; padding-right: 80px;">4. Jauhnya dari Bandar, Jalan, Jalan Keretapi, Sungai & Pantai (Yang Hampir Sekali):</p>
<p style="text-align: justify; padding-left: 80px; padding-right: 80px;">5. No. Bahagian (Jika Ada):</p>
<p style="text-align: justify; padding-left: 80px; padding-right: 80px;">6. Sempadan:</p>
<p style="text-align: justify; padding-left: 80px; padding-right: 80px;">7. Utara:</p>
<p style="text-align: justify; padding-left: 80px; padding-right: 80px;">8. Selatan:</p>
<p style="text-align: justify; padding-left: 80px; padding-right: 80px;">9. Timur:</p>


</body>
</html>