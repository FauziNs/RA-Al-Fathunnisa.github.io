<?php

include "admin/config/koneksi.php";
include "pondasi/alert.php";
session_start();

$nama_siswa = $_POST["nama_siswa"];
$tempatlahir = $_POST['tempatlahir'];
$jenis_kel = $_POST["jenis_kel"];
$nm_ayah = $_POST["nm_ayah"];
$nm_ibu = $_POST["nm_ibu"];
$job_ayah = $_POST["job_ayah"];
$kampung = $_POST["kampung"];
$rtrw = $_POST["rtrw"];
$desa = $_POST["desa"];
$kecamatan = $_POST["kecamatan"];
$no_ortu = $_POST["no_ortu"];

$sql = "INSERT INTO ppdb (nama_siswa, tempat, tgl_lahir, jenis_kel, nm_ayah, nm_ibu, 
  job_ayah, kampung, rtrw, desa, kecamatan, no_ortu) VALUES
		('$nama_siswa','$tempat','$tgl_lahir','$jenis_kel','$nm_ayah','$nm_ibu','$job_ayah',
    '$kampung','$rtrw','$desa','$kecamatan','$no_ortu')";

$hasil = mysqli_query($conn, $sql);

if ($hasil) {
    $last_id = mysqli_insert_id($conn);
    $_SESSION['current_id'] = $last_id;

    echo "<script>alert('Anda Berhasil Mendaftar');document.location='kartu_daftar.php'</script>";
} else {
    echo "<script>alert('Anda Gagal Mendaftar');document.location='pendaftaran.php'</script>";
}
