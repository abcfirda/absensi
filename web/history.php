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

    <link
      href="https://fonts.googleapis.com/css2?family=Krona+One&family=Poppins&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="assets/css/style.css" />
    <title>Document</title>
  </head>
  <body>
    <style>
      body {
        background: #f9f9f9;
        margin: 0;
        max-width: 375px;
      }

      header {
        height: 90%;
        display: inline;
        /* justify-content: space-between; */
      }

      .inner-width {
        max-width: 375px;
        padding: 0 20px;
        margin: 0 auto;
      }

      .icon-back {
        float: left;
        padding-top: 32px;
        text-decoration: none;
        color: black;
        z-index:11;
      }

      .menu {
        float: right;
        display: flex;
        align-items: center;
        position: absolute;
      }

      .menu ul {
        list-style: none;
        position: relative;
        margin-top: 10%;
        margin-left: 100%;
      }

      .menu ul p {
        font-family: Poppins;
        font-weight: 600;
        align-items: center;
      }

      .search-input {
        overflow: hidden;
        box-sizing: border-box;
        max-width: 375px;
        clear: both;
        display: grid;
        padding-left: 20px;
        padding-right: 20px;
        padding-top: 15%;
      }

      .input-container {
        width: 100%;
        position: relative;
        display: flex;
      }

      .label {
        position: absolute;
        left: 10px;
        top: 14px;
        transition: all 0.2s;
        padding: 3px;
        z-index: 1;
        color: black;
        font-size: 14px;
        font-family: Poppins;
      }

      .text-input {
        margin-right: 10px;
        padding: 0.9rem;
        width: 100%;
        height: 100%;
        border: 1px solid black;
        border-radius: 15px;
        background-color: transparent;
        font-size: 16px;
        font-family: Poppins;
        font-weight: 600;
        outline: none;
        transition: all 0.3s;
        color: black;
        float: left;
      }

      .label::before {
        content: "";
        height: 5px;
        background-color: #f9f9f9;
        position: absolute;
        left: 0;
        top: 10px;
        width: 100%;
        z-index: -1;
      }

      .text-input:focus {
        border: 1px solid #696cff;
      }

      .text-input:focus + .label,
      .filled {
        top: -10px;
        color: #696cff;
        font-size: 14px;
      }

      .text-input::placeholder {
        font-size: 16px;
        opacity: 0;
        transition: all 0.3s;
      }

      .text-input:focus::placeholder {
        opacity: 1;
        animation-delay: 0.2s;
      }

      form {
        position: relative;
        box-sizing: border-box;
        width: 100%;
      }

      .submit-button {
        padding: 20px;
        border-radius: 15px;
        background-color: #ffb169;
        border: 1px solid black;
        width: 20%;
      }

      .history-list {
        overflow: hidden;
        /* box-sizing: border-box; */
        max-width: 375px;
        clear: both;
        display: grid;
        padding-left: 20px;
        padding-right: 20px;
        padding-top: 3%;
      }

      .month {
        font-size: 14px;
        font-family: Poppins;
        color: black;
        font-weight: 500;
      }

      .history {
        display: flex;
        margin-top: 5%;
      }

      .day {
        width: 50%;
        padding-bottom: 20px;
        /* float: left; */
        font-size: 16px;
        font-family: Poppins;
        font-weight: 600;
      }

      .date {
        font-size: 14px;
        font-family: Poppins;
        font-weight: 500;
      }

      .status {
        float: right;
        width: 50%;
        padding-top: 20px;
        text-align: right;
        font-family: Poppins;
        font-size: 14px;
        font-weight: 500;
      }

      .time {
        width: 50%;
        float: left;
      }
    </style>

    <!-- Header -->

    <!--<header>-->
    <!--  <div class="inner-width">-->
    <!--    <a href="clockout.php" class="icon-back"><i class="fa-solid fa-arrow-left"></i></a>-->
    <!--    <nav class="menu">-->
    <!--      <ul>-->
    <!--        <li><p>History</p></li>-->
    <!--      </ul>-->
    <!--    </nav>-->
    <!--  </div>-->
    <!--</header>-->
    
     <header>
      <div class="bg-head">
        <span class="back">
          <a href="clockout.php" class="icon-back-blck"
            ><i class="fa-solid fa-arrow-left"></i
          ></a>
        </span>
        <span class="about">
          <p>Histori</p>
        </span>
      </div>
    </header>

    <!-- Section -->

    <section class="search-input">
      <form action="">
        <div class="input-container">
          <input
            type="text"
            id="username"
            autocomplete="off"
            placeholder=""
            required
            class="text-input"
          />
          <label for="name" class="label">Search</label>
          <button type="submit" class="submit-button">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </form>
    </section>
 
    <section class="history-list">
 <?php 
        $data = mysqli_query($conn,"select * from clockin WHERE nis='$_SESSION[nis]'");
		while($d = mysqli_fetch_array($data)){
  ?>   
    
      <div class="month">January</div>
      <div class="history">
        <div class="time">
          <div class="day">Friday</div>
          <div class="date"><?php echo $d['time_clockin']; ?></div>
        </div>
        <div class="status"><?php echo $d['status']; ?></div>
      </div>
<?php 
		}
		?>
    </section>
  </body>
</html>
