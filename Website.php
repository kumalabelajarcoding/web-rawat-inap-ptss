<!DOCTYPE html>
<html>

<head>
    <title> Website rumah sakit kumala</title>
</head>
<style>
    * {
        margin: 0px;
        padding: 0px;
    }

    body {
        font-size: 14px;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        width: 100%;

    }

    #heading {
        float: left;
        width: 640px;
    }

    #heading a {
        text-decoration: none;
        padding-left: 50px;
        color: blue;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-size: 25px;
        font-weight: bold;
    }

    #menu {
        background: #ff6166;
        width: 100%;
        height: 65px;
        margin: 0px;
        padding: 0px;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

    }

    #menu ul {
        list-style: none;
        word-spacing: 2px;

    }

    #menu ul li {
        float: left;
        line-height: 65px
    }

    #menu ul li a {
        width: 100px;
        display: block;
        text-align: center;
        color: #FFF;
        text-decoration: none;
        font-size: 17px;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-weight: bold;
    }

    #menu ul ul {
        display: none;
        list-style: none;
        position: absolute;
        background-color: #3a3935;
        float: none;
        top: 65px;
        width: 190px;
    }

    #menu ul li a:hover {
        background-color: #7db64e;
        display: block;
    }

    #menu ul li:hover ul {
        display: block;
    }

    #menu ul ul li a {
        display: block;
        padding-left: 30px;
        text-align: left;
        width: 160px;
        height: 60px;
        line-height: 60px;
    }

    #content {
        background-image: url(Gambar/rsuns.jpg);
        background-size: cover;
        background-attachment: fixed;
        background-repeat: no-repeat;
        width: 1366px;
        height: 560px;
    }

    .pagination {
        text-align: center;
        font-size: 18px;
        padding-top: 200px;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        color: #4caf50;
    }

    .a {
        color: white;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        padding-top: 68px;
    }

    .b {
        font-size: 12px;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        color: #67adf9;
    }

    .c {

        
        font-size: 28px;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        color: black;

    }
    #sub1 {
        background-color: white;
    }
    
</style>

<body>
    <header>
        <nav id="menu">
            <ul>
                <div id="heading">
                    <a href="#" style="margin-top: 10px;">RS Harapan Bunda</a>
                    <img src="" style="width: 45px; position: relative; top: 10px;">
                </div>
                </div>
                <li><a href="Website1.php">Beranda</a></li>
                <li><a href="Pasien.php">Pasien</a></li>
                <li><a href="Dokter.php">Dokter</a></li>
                <li><a href="Kamar.php">Kamar</a></li>
                <li><a href="">Layanan</a>
                    <<ul class="sub1">
                        <li><a href="Pendaftaran.php">Pendaftaran </a></li>
                        <li><a href="Pembayaran.php">Pembayaran</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <content>
        <nav id="content">
            <div class="pagination">
                <div class="c">
                    <?php
        $satu = "selamat datang admin.";
        $dua = ucwords($satu);
        echo "<h1>".$dua."</h1>";
        ?>
                </div>

                <div class="b">
                    <h2> Sistem Informasi Manajemen Rumah Sakit Harapan Bunda </h2>
                    <br><br><br><br><br><br><br><br>

                </div>
            </div>

    </content>
</body>

</html>