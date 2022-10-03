<!DOCTYPE html>

<!-- Konekas Ke Database -->
<?php
    // Header
    include 'header.php';

    session_start();

    include_once 'process/koneksi.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME | IlhamShop</title>                                         <!-- Title pada halaman index.php -->
    <link rel="shortcut icon" href="image/favico.ico" type="image/x-icon">  <!-- Icon pada index.php -->
    <link rel="stylesheet" href="css/index.css">                            <!-- Link CSS index.php -->
    <link rel="stylesheet" href="css/product.css">                          <!-- Link CSS untuk card Product -->
</head>

<body>
    <!-- Judul Koten di halaman index.php -->
    <div class="menuuu"  data-aos="fade-up-left" data-aos-offset="350" data-aos-duration="1000"> 
      <h1>CATTEGORY</h1>
    </div>

    <!-- Card Category Menu Start -->
    <section class="menu">
            <div class="item" data-aos="fade-up-right" data-aos-offset="380" data-aos-duration="1200" data-aos-delay="150">
              <div class="badge"><a href="promo.php"> MENU PROMO</a></div>    <!-- Link untuk menuju ke menu Promo -->
              </nav>
              <div class="foto">
                <img src="image/menu-14.png" alt="menu 1" />                  <!-- Gambar Menu Promo -->
              </div>
            </div>
            <div class="item" data-aos="flip-left" data-aos-offset="380" data-aos-duration="1200" data-aos-delay="250">
                <div class="badge"><a href="drinks.php">DRINKS</a></div>      <!-- Link untuk menuju ke menu Drinks/Minuman -->
                </nav>
                <div class="foto" >
                    <img src="image/menu-13.png" alt="menu 1" />              <!-- Gambar Menu Drinks/Minuman -->
                </div>
                <div class="keterangan">
                </div>
              </div>
              <div class="item" data-aos="fade-up-left" data-aos-offset="380" data-aos-duration="1200" data-aos-delay="150">
              <div class="badge"><a href="happymeal.php">HAPPY MEAL</a></div> <!-- Link untuk menuju ke menu Happy Meal -->
              </nav>
              <div class="foto">
                <img src="image/menu-6.png" alt="menu 1" />                   <!-- Gambar  Menu Happy Meal -->
              </div>
              <div class="keterangan">
              </div>
            </div>
        </section>
        <!-- Card Category End -->
</body>


  <!-- Script AOS Start (Animate On Scroll) -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>  <!-- Source Link AOS -->
  <script>
    AOS.init();
  </script>
  <!-- Script AOS End -->

<!-- Footer -->
<?php
    include 'footer.php';
?>
<!-- Footer End -->
</html>