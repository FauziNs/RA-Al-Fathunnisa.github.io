<?php
include "pondasi/kepala.php";
?>
<html>

<head>

</head>

<body>

    <!-- MAIN WRAPPER START
        ============================================= -->
    <!-- HEADER END -->

    <!-- CONTENT START
            ============================================= -->
    <section id="content" class="single-wrapper">

        <div class="our-features grey-background">
            <div class="container">
                <center>
                <div class="heading-block wow fadeIn">
                    <h2><strong>Pengisian Biodata </strong></h2>
                    <h4 class="tagline">Formulir Pendaftaraan RA Al-Fathunnisa</h4>
                </div>
                </center>

                <div class="row">
                    <div class="features">
                    </div>

                    <!-- <center>-->
                    <form action="proses_daftar.php" method="post">
                        <div class="box-body">
                            <center>
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" name="nama_siswa" class="form-control" placeholder="Input Nama" style="width: 500px;" required>
                            </div>
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input type="text" name="tempat" class="form-control" placeholder="Input Tempat Lahir" style="width: 500px;" required>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" name="tgl_lahir" class="form-control" placeholder="Input Tempat Lahir" style="width: 500px;" required>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label></br>
                                <select name="jenis_kel" class="form-control" style="width: 500px;" required>
                                    <option>--Pilih Jenis Kelamin--</option>
                                    <option value="Pria">Pria</option>
                                    <option value="Wanita">Wanita</option>
                                </select>
                            </div>

                            <div class="form-group"></br>
                                <label>Nama Ayah</label>
                                <input type="text" name="nm_ayah" class="form-control" placeholder="Input Nama Ayah" style="width: 500px;" required>
                            </div>
                            <div class="form-group">
                                <label>Nama Ibu</label>
                                <input type="text" name="nm_ibu" class="form-control" placeholder="Input Nama Ibu" style="width: 500px;" required>
                            </div>
                            <div class="form-group">
                                <label>Pekerjaan Ayah</label>
                                <input type="text" name="job_ayah" class="form-control" placeholder="Input Pekerjaan Ayah" style="width: 500px;" required>
                            </div>
                            <div class="form-group">
                                <label>Dusun/Kampung</label>
                                <input type="text" name="kampung" class="form-control" placeholder="Input Nama Kampung" style="width: 500px;" required>
                            </div>
                            <div class="form-group">
                                <label>RT/RW</label>
                                <input type="text" name="rtrw" class="form-control" placeholder="Input No RT/RW" style="width: 500px;" required>
                            </div>

                            <div class="form-group">
                                <label>Desa/Kelurahan</label>
                                <input type="text" name="desa" class="form-control" placeholder="Input Nama Kelurahan" style="width: 500px;" required>
                            </div>

                            <div class="form-group">
                                <label>Kecamatan</label>
                                <input type="text" name="kecamatan" class="form-control" placeholder="Input Nama Kecamatan" style="width: 500px;" required>
                            </div>


                            <div class="form-group">
                                <label>Nomor Telepon</label></br>
                                <input type="number" name="no_ortu" class="form-control" placeholder="Input Nomor Telepon" style="width: 500px;">
                            </div>
                          
        
                            <p>
                            <div class="box-footer">
                                <button type="button" class="btn btn-danger">
                                    <a href="index.php"> <strong>Batal</strong>
                                    </a></button>
                                &nbsp;&nbsp;
                                <button type="submit" class="btn btn-success">
                                    <strong>Simpan</strong>
                                </button>
                                </center>
                            </div>
                            </p>
                        </div>
                        <!--</center>-->
                </div>
                </form>

    </section>

    <!-- FOOTER START
            ============================================= -->
    <footer id="footer">
        <div class="container">
            <div class="row">

                <div class="container">
                    <div class="row">
                        <div class="col-md-15 pull-left wow fadeInUp">
                            <center>
                            <h2>Terimakasih Sudah mendaftar !</h2>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </footer>

    <!-- COPYRIGHT START
            ============================================= -->
    <?php
    include "pondasi/kaki.php";
    ?>
</body>

</html>