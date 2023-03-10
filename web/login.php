<?php 
 
include 'conf.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: home.php");
}
 
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
 
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: home.php");
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
 
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <title>SiMaK | Login</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>

  <body>
    <div class="imglogo">
      <img src="assets/img/logo.png" alt="" />
    </div>

    <div class="attention">
      <span class="lorem"
        ><p>Welcome back, please login to make attedance</p></span
      >
    </div>
    <form action="" method="post">
      <section class="nis-input">
        <div class="input-container">
          <input
            type="text"
            id="username"
            name="username"
            autocomplete="off
        "
            placeholder=""
            required
            class="text-input"
          />
          <label for="name" class="label">NIS</label>
        </div>
      </section>
      <section class="pass-input">
        <div class="input-container">
          <input
            type="password"
            id="passwordd"
            name="password"
            autocomplete="off
              "
            placeholder=""
            required
            class="text-input"
          />
          <label for="password" class="label">Password</label>
        </div>
      </section>
      <!-- <input type="checkbox" onclick="myFunction()" />Show Password -->
      <section class="btnn">
        <button class="btn-log" type="submit" name="submit">Login</button>
      </section>
    </form>

    <!-- <script src="assets/js/main.js"></script> -->
  </body>
</html>
