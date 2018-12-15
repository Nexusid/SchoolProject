<!DOCTYPE html>
<?php
if(isset($_SESSION["uid"])){
  header("location:logform.php");
}
?>
<head>
    <title>Rawat Inap</title>

    <link href="css/stayle.css" type="text/css" rel='stylesheet'>
    <link href="css/bootstrap.css" type="text/css" rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script><script src="js/bootstrap.js"></script>
        <a href="#" class=""><img src="assets/images/rms.png" width="90px"></a>
        <ul>
        <li><a href="home.php">home</a></li>
        <li><a href="jadwaldokter.php">jadwal</a></li>
        <li><a href="fasilitas.php">fasilitas</a></li>
        <li><a href="rawat.php">rawat</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">contact</a></li>
    </ul>
</head>
<body>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="assets/images/rumah saki.jpg" alt="1">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets/images/ss4.jpg" alt="2">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets/images/des.jpg" alt="3">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only"></span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only"></span>
  </a>
</div>
<section></section>


</body>
</html>
