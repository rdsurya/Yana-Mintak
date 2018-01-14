<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Register</title>
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
                height: 560px;
                text-align:center;
                background-color: rgba(189, 195, 199, 0.7);
                border-radius: 4px;
                margin: 0 auto;
                margin-top:0px;
            }

            input[type="text"],input[type="password"], input[type="email"]{
                height:35px;
                width: 300px;
                font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
                font-size:18px;
                border:none;
                margin-top:0px;
                margin-bottom:20px;
                background-color:#FFF;
                padding-left:40px;
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

            select {
                width: 350px;
                height: 35px;
                font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
                font-size:14px;
            }

            .btn-register{
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
                padding: 10px;
                font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
                font-size:20px;
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
            <form>
                <div class="form-input">
                    <h2 align="center">Pendaftaran Baru</h2>
                    <input type="text" name="username" placeholder="Masukkan ID Pengguna"><br />
                        <label for="soalan">Contoh: 87091135525 (tanpa simbol -) / A12345678</label>
                </div><br />

                <div class="form-input">
                    <input type="password" name="password" placeholder="Masukkan Kata Laluan"/>
                </div>

                <div class="form-input">
                    <input type="password" name="password" placeholder="Sahkan Kata Laluan"/>
                </div>

                <div class="form-input">
                    <input type="email" name="email" placeholder="Masukkan no telefon / email"/>
                </div>

                <label for="soalan">Soalan Keselamatan:</label>
                <select name="jenis">
                    <option value="-">SILA PILIH</option>
                    <option value="warna">Apakah warna kegemaran anda?</option>
                </select><br /><br />

                <input type="text" name="jawapan" placeholder="Jawapan"/><br />

                <input type="submit" name="submit" value="DAFTAR" class="btn-register" /><br />
                <a href="login.php">Log Masuk</a>
            </form>
        </div>
    </body>
</html>