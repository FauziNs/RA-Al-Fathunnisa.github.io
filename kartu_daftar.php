<?php

include("admin/config/koneksi.php");

session_start();
$current_id = $_SESSION['current_id'];

$sql = 'SELECT id, nama_siswa, tempat, tgl_lahir, kampung, rtrw, desa, kecamatan, asal_sklh FROM ppdb WHERE id=' . $current_id;
$query    = mysqli_query($conn, $sql);
$result   = mysqli_fetch_array($query);
?>


<head>

    <!-- Stylesheets
    ============================================= -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="css/kartu.css" type="text/css" />
    <link rel="stylesheet" href="css/print.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="css/responsive.css" type="text/css" />

    <!-- icon web addres
    ============================================= -->
    <link rel="shortcut icon" href="image/logoraalfathunnisa.jpg">

    <!-- Document Title
    ============================================= -->
    <title>Unduh Kartu Pendaftaran</title>

</head>

<body>
    <!-- Header Card-->
    <header id="header" class="site-header clearfix no-print">
        <div class="container">
            <div class="row">

                <!-- LOGO START
                        ============================================= -->
                <div class="logo col-md-2">
                    <a href="index.php">
                        <img src="image/logoraalfathunnisa.jpg" alt="" width="100px" height="100px">
                    </a>
                </div>
                <!-- LOGO END -->

                <!-- NAVIGATION START
                        ============================================= -->
                <div class=" navigation col-md-10 text-right">

                    <!-- MAIN NAVIGATION START
                            ============================================= -->
                    <nav id="main-menu" class="menu">
                        <ul id="menu-top-menu" class="menus">
                            <li><a href="index.php">Home</a></li>
                            <li><a class="btn" style="background-color:#black" onclick="JavaScript:window.location.href='kartu_daftar.php?file=kartu peserta.pdf';">Cetak Kartu</a></li>
                        </ul>
                    </nav>
                    <!-- MAIN NAVIGATION END -->
                </div>
                <!-- NAVIGATION END -->
            </div>
        </div>
    </header>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <center>

    <div id="kartu" style="background-image: url(image/bgidcard2.jpg);">
        <img src="image/logorafix.png" alt="RA Al-Fathunnisa" style="display: block; margin-top: 10px; margin: cebter;" height="100px" width="100px">
        <h1 align="center"></h1>
        <h2 align="center">Kartu Pendaftaran</h2>

        <p>Dibawah ini adalah biodata siswa:</p>

        <table style="font-family:'Times New Roman', Times, serif">
            <tr>
                <td style="width: 30%;">No Peserta</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;"><?php echo $result['id'] ?></td>
            </tr>
            <tr>
                <td style="width: 30%;">Nama</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;"><?php echo $result['nama_siswa'] ?></td>
            </tr>
            <tr>
                <td style="width: 30%;">Tempat, tanggal lahir</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;"><?php echo $result['tempat'] ?>, <?php echo $result['tgl_lahir'] ?></td>
            </tr>
            <tr>
                <td style="width: 30%; vertical-align: top;">Alamat</td>
                <td style="width: 5%; vertical-align: top;">:</td>
                <td style="width: 65%;"><?= $result['kampung'] ?>, <?= $result['rtrw'] ?>, <?= $result['desa'] ?>, <?= $result['kecamatan'] ?></td>
            </tr>

        </table>

        <br>

        <p align="justify" style="font-family:'Times New Roman', Times, serif">Dengan ini, kami menyatakan bahwa siswa tersebut telah resmi mendaftar di Pendidikan Anak Usia Dini (PAUD) - Raudhatul Athfal. RA Al-Fathunnisa. Fun Learning and Playing with Islamic Character dan telah mengikuti prosedur pendaftaran yang ditetapkan oleh RA Al-Fathunnisa.Untuk memverifikasi data, <b style="color: crimson;">maka kepada bapak dan ibu calon siswa diharapkan untuk membawa persyaratan yang diperlukan dan dapat dilihat pada halaman informasi pendaftaran serta cetak kartu pendaftaran ini. </b></p>
        <br>
        <div style="width: 50%; text-align: left; float: right;">Tasikmalaya, <?= date('d-M-Y'); ?></div><br>
    </div>
    <br>
    <br>
    <br>
    

    </center>

    <!-- FOOTER START
            ============================================= -->

    <footer id="footer">
        <div class="container no-print">
            <div class="row">

                <div class="container">
                    <div class="row">
                        <div class="col-md-8 pull-left wow fadeInUp">
                            <h3>Dipersilahkan untuk mengklik tombol cetak kartu, untuk mencetak kartu pendaftaran !</h3>
                        </div>

                        <div class="col-md-4 wow fadeInUp">
                            <div class="button-normal white pull-right">
                                <a class="no-margin no-print" onclick="JavaScript:window.location.href='kartu_daftar.php?file=kartu peserta.pdf';">Cetak Kartu</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- FOOTER END -->
    <script>
        window.print();
    </script>
</body>


</html>