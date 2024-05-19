<?php

include "pondasi/kepala.php";
?>

<section id="slider" class="flexslider-wrap fullscreen clearfix">
    <div class="slider-wrapper">
        <div class="flexslider clearfix">
            <ul class="slides">
                <li class="clearfix" style="background-image: url(image/halamanindex.jpg); background-size: cover; background-repeat: no-repeat;">
                    <div class="overlay color"></div>
                    <div class="flex-content vertical-center">
                        <div class="container">

                            <div class="caption wow fadeInUp">
                                <h1 style="color: white; font-size: 56px;">Selamat Datang<br>Di Website RA Al-Fathunnisa</h1>
                            </div>

                            <div class="caption wow fadeInUp">
                                <div class="button-normal white">
                                    <a href="pendaftaran.php "> Langsung Daftar Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- SLIDER END -->

<!-- CONTENT START
            ============================================= -->
<section id="content">

    <!-- BANNER START
                ============================================= -->
    <?php
    include "admin/config/koneksi.php";
    $sql = mysqli_query($conn, "SELECT * FROM moto");
    while ($b = mysqli_fetch_assoc($sql)) {

    ?>
        <div class="banner large text-center wow fadeInUp">
            <div class="container">
                <div class="row">
                    <h1 class="no-margin"><?php echo $b['moto'] ?></h1>
                </div>
            </div>
        </div><?php } ?>
    <!-- BANNER END -->

    <!-- ABOUT US SECTION START
                ============================================= -->
    <div class="about-us no-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 wow fadeIn">
                    <div class="heading-block">
                        <h2 style="color: black; font-size: 30px;">RA Al-Fathunnisa</h2>
                    </div>
                    <?php
                    include "admin/config/koneksi.php";
                    $sql = mysqli_query($conn, "SELECT * FROM profil");
                    while ($b = mysqli_fetch_assoc($sql)) {

                    ?>
                        <p style="color: black; font-size: 18px;">“Selamat datang di Raudhatul Athfal (RA) Al-Fathunnisa, tempatlahir di mana pendidikan anak usia dini (PAUD) dipadu dengan nilai-nilai islami yang kuat. Kami berkomitmen untuk menyediakan lingkungan belajar yang menyenangkan dan penuh kasih sayang, di mana anak-anak dapat berkembang secara optimal melalui permainan dan pembelajaran yang terstruktur”</p>
                        <!--<p><?php echo $b['profil'] ?></p>-->
                    <?php } ?><div class="button-normal green">
                        <a href="profil.php">Informasi Lebih Lanjut</a>
                    </div>
                </div>

                <div class="about-img col-md-6 wow fadeInLeft">
                    <img src="image/bgra.png" alt="" height="auto" width="auto" />
                </div>
            </div>
        </div>
    </div>
    <!-- ABOUT US SECTION END -->



        <div class="container">
            <div class="heading-block wow fadeIn">
            <div class="row">
            <div class="features">
                <h2><center>Mengembangkan potensi anak melalui metode pembelajaran yang menyenangkan dan berbasis karakter islami </center></h2>
            </div>
            </div>
        </div>
    </div>


    <!-- REVIEW SECTION START
                ============================================= -->

    <div class="testimonial with-bg-image" style="background-image: url('image/bgg.jpg')">
        <div class="container">
            <div class="row">
                <div class="testimonial-wrap text-center wow fadeIn">
                    <div class="testimonial-item flexslider">

                        <ul class="slides">
                            <?php
                            include "admin/config/koneksi.php";
                            $sql = mysqli_query($conn, "SELECT * FROM testi");
                            while ($b = mysqli_fetch_assoc($sql)) {

                            ?>
                                <li>
                                    <div class="review">
                                        <p class="text">“<?php echo $b['testi'] ?>”</p>
                                        <h5 class="title"><?php echo $b['nama'] ?></h5>

                                    </div>
                                <?php } ?>
                                </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="overlay dark"></div>
    </div>

    <div class="banner small wow fadeIn" style="background-color: yellow;">
        <div class="container">
            <div class="row">
                <div class="col-md-8 pull-left wow fadeInUp">
                    <h3 style=" color:black;">Ayo Ibu dan Bapak Daftarkan anak-anak anda sekarang juga!</h3>
                </div>

                <div class="col-md-4 wow fadeInUp">
                    <div class="button-normal white pull-right">
                        <a href="pendaftaran.php" class="no-margin">Langsung Daftar Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BANNER SECTION END -->

</section>

<?php
include "pondasi/kaki.php";
?>