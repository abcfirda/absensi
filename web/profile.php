<?php 

include 'conf.php';
session_start();
 
if (!isset($_SESSION['nis'])) {
    header("Location: login1.php");
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <title>SiMaK | My Profile</title>
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body>
    <header>
      <div class="bg-biru">
        <span class="back">
          <a href="home1.php" class="icon-back-wht"
            ><i class="fa-solid fa-arrow-left"></i
          ></a>
        </span>
        <span class="profile">
          <p>Profile</p>
        </span>
      </div>
    </header>
    <section class="section1">
      <div class="pp-img">
        <img src="assets/img/profile.jpg" alt="" />
      </div>
    </section>
     <?php 
        $data = mysqli_query($conn,"select * from data_siswa WHERE nis='$_SESSION[nis]'");
		while($d = mysqli_fetch_array($data)){
        ?>   
    <section class="section2">
      <span class="nama"><p><?php echo $d['nama']; ?></p></span>
      <span class="nis"><p><?php echo $d['nis']; ?></p></span>
    </section>
    <section class="section3">
      <span class="col3"><p><?php echo $d['no_absen']; ?></p></span>
      <span class="col3"><p><?php echo $d['kelas']; ?></p></span>
      <span class="col3"><p><?php echo $d['jenis_kelamin']; ?></p></span>
    </section>
 <?php } ?>
    <section class="btnnn">
      <a class="btn-prof" href="about.php">
      <button class="btn-prof" type="submit">
        About SiMaK<i class="next fa-solid fa-arrow-right"></i>
      </button>
     </a>
    </section>
    <section class="btnnn">
      <a class="btn-prof" href="logout.php">
      <button class="btn-prof" type="submit"> 
        Logout<i class="next fa-solid fa-arrow-right"></i>
      </button>
      </a>
    </section>
    <!-- <script src="assets/js/main.js"></script> -->
  </body>
</html>
