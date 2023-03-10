<?php 
 
$server = "localhost";
$user = "titikkom_ukk";
$pass = "Teknologi123";
$database = "titikkom_absen";
 
$conn = mysqli_connect($server, $user, $pass, $database);
 
if (!$conn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
 
?>