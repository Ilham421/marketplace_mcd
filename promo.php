<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Promo</title>           <!-- Title pada halaman Menu Promo -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />    <!-- Link CSS AOS (Animate On Scroll) -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />  <!-- Link Google Font  -->
    <link rel="stylesheet" href="css/product.css">          <!-- Link CSS untuk card product -->
</head>
<body>

    <!-- Untuk memanggil Header -->
    <?php
        include 'header.php'

    ?>
    <!-- Header End -->

    <!-- Card Menu Promo Start -->
    <div class="menuuu"  data-aos="fade-up-left" data-aos-offset="100" data-aos-duration="1000"> 
      <h1>PROMO</h1>
    </div>
    <!-- Menu Promo -->
    <section class="menu">      <!-- Section Untuk Card Menu Promo  -->
        <div class="item">
          <div class="badge">Potongan 10k</div>                 <!-- Diskon atau badge pada menu card -->
          <nav>
            <a href="#">
              <span class="material-icons">                     <!-- Icon Cart/Keranjang -->
                shopping_basket       
              </span>
            </a>
            <a href="#">
              <span class="material-icons">                     <!-- Icon Favorite/Love/Hati -->
                favorite
              </span>
            </a>
            <a href="#" class="active">
              <span class="material-icons">                     <!-- Icon Eye/Mata -->
                visibility
              </span>
            </a>
          </nav>
          <div class="foto">
            <img src="image/promo-1.png" alt="menu 1" />        <!-- Gambar menu promo ke 1 -->
          </div>
          <div class="keterangan">
            <div class="bintang">                               <!-- Untuk menambahkan rating bintang pada menu card -->
              <span class="material-icons active">star</span>
              <span class="material-icons active">star</span>
              <span class="material-icons active">star</span>
              <span class="material-icons active">star</span>
              <span class="material-icons active">star</span>
            </div>
          </div>
          <div class="nama">Himalayan Latte Frappe</div>        <!-- Nama menu promo ke 1 -->
          <div class="harga">
            Harga <span class="merah">Rp.35.500</span>          <!-- Harga menu promo ke 1 -->
            <span class="coret">Rp.45.500</span>                <!-- Harga yang di coret -->
          </div>
        </div>
        <div class="item">
          <div class="badge">Potongan 15k</div>
          <nav>
            <a href="#">
              <span class="material-icons">
                shopping_basket
              </span>
            </a>
            <a href="#">
              <span class="material-icons">
                favorite
              </span>
            </a>
            <a href="#" class="active">
              <span class="material-icons">
                visibility
              </span>
            </a>
          </nav>
          <div class="foto">
            <img src="image/promo-2.png" alt="menu 2" />
          </div>
          <div class="keterangan">
            
            <div class="bintang">
              <span class="material-icons active">star</span>
              <span class="material-icons active">star</span>
              <span class="material-icons active">star</span>
              <span class="material-icons active">star</span>
              <span class="material-icons grey">star</span>
            </div>
          </div>
          <div class="nama">
              Himalayan Latte Frappe with Cake
          </div>
          <div class="harga">
            Harga <span class="merah">Rp. 56.000 </span> 
            <span class="coret">Rp. 71.000</span>
          </div>
        </div>
        <div class="item">
          <div class="badge">Potongan 9k</div>
          <nav>
            <a href="#">
              <span class="material-icons">
                shopping_basket
              </span>
            </a>
            <a href="#">
              <span class="material-icons">
                favorite
              </span>
            </a>
            <a href="#" class="active">
              <span class="material-icons">
                visibility
              </span>
            </a>
          </nav>
          <div class="foto">
            <img src="image/promo-3.png" alt="menu 3" />
          </div>
          <div class="keterangan">
            <div class="bintang">
              <span class="material-icons active">star</span>
              <span class="material-icons active">star</span>
              <span class="material-icons active">star</span>
              <span class="material-icons grey">star</span>
              <span class="material-icons grey">star</span>
            </div>
          </div>
          <div class="nama">
              Himalayan Tea Frappe
          </div>
          <div class="harga">
            Harga <span class="merah">Rp. 32.500</span> /
            <span class="coret">Rp. 41.500</span>
          </div>
        </div>
        <div class="item">
          <div class="badge">Potongan 15k</div>
          <nav>
            <a href="#">
              <span class="material-icons">
                shopping_basket
              </span>
            </a>
            <a href="#">
              <span class="material-icons">
                favorite
              </span>
            </a>
            <a href="#" class="active">
              <span class="material-icons">
                visibility
              </span>
            </a>
          </nav>
          <div class="foto">
            <img src="image/promo-4.png" alt="menu 4" />
          </div>
          <div class="keterangan">
            <div class="bintang">
              <span class="material-icons active">star</span>
              <span class="material-icons active">star</span>
              <span class="material-icons active">star</span>
              <span class="material-icons active">star</span>
              <span class="material-icons grey">star</span>
            </div>
          </div>
          <div class="nama">
              Himalayan Frappe with Cake
          </div>
          <div class="harga">
            Harga <span class="merah">Rp. 56.500</span> /
            <span class="coret">Rp. 71.500</span>
          </div>
        </div>
        <div class="item">
          <div class="badge">Potongan 13k</div>
          <nav>
            <a href="#">
              <span class="material-icons">
                shopping_basket
              </span>
            </a>
            <a href="#">
              <span class="material-icons">
                favorite
              </span>
            </a>
            <a href="#" class="active">
              <span class="material-icons">
                visibility
              </span>
            </a>
          </nav>
          <div class="foto">
            <img src="image/menu-3.png" alt="menu 5" />
          </div>
          <div class="keterangan">
            <div class="bintang">
              <span class="material-icons active">star</span>
              <span class="material-icons active">star</span>
              <span class="material-icons active">star</span>
              <span class="material-icons active">star</span>
              <span class="material-icons grey">star</span>
            </div>
          </div>
          <div class="nama">
            Double Big Mac
          </div>
          <div class="harga">
            Harga <span class="merah">Rp. 48.000</span> 
            <span class="coret">Rp. 61.000</span>
          </div>
          
        </div>
        <div class="item">
          <div class="badge"> Potongan 10k</div>
          <nav>
            <a href="#">
              <span class="material-icons">
                shopping_basket
              </span>
            </a>
            <a href="#">
              <span class="material-icons">
                favorite
              </span>
            </a>
            <a href="#" class="active">
              <span class="material-icons">
                visibility
              </span>
            </a>
          </nav>
          <div class="foto">
            <img src="image/promo-5.png" alt="menu 5" />
          </div>
          <div class="keterangan">
            <div class="bintang">
              <span class="material-icons active">star</span>
              <span class="material-icons active">star</span>
              <span class="material-icons active">star</span>
              <span class="material-icons active">star</span>
              <span class="material-icons grey">star</span>
            </div>
          </div>
          <div class="nama">
            Big Mac Beef Rasher
          </div>
          <div class="harga">
            Harga <span class="merah">Rp. 39.900</span> /
            <span class="coret">Rp. 50.500</span>
          </div>
        </div>
        <div class="item">
          <div class="badge">Potongan 6k</div>
          <nav>
            <a href="#">
              <span class="material-icons">
                shopping_basket
              </span>
            </a>
            <a href="#">
              <span class="material-icons">
                favorite
              </span>
            </a>
            <a href="#" class="active">
              <span class="material-icons">
                visibility
              </span>
            </a>
          </nav>
          <div class="foto">
            <img src="image/menu-4.png" alt="menu 7" />
          </div>
          <div class="keterangan">
            <div class="bintang">
              <span class="material-icons active">star</span>
              <span class="material-icons active">star</span>
              <span class="material-icons active">star</span>
              <span class="material-icons grey">star</span>
              <span class="material-icons grey">star</span>
            </div>
          </div>
          <div class="nama">
            Cheeseburger McFlavor Fries with Beef Rasher Bites
          </div>
          <div class="harga">
            Harga <span class="merah">Rp. 18.500</span>
            <span class="coret">Rp. 25.000</span>
          </div>
        </div>
      </section>
      <!-- Card Menu Promo End -->

  <!-- Script AOS Start (Animate On Scroll) -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    const menu= document.querySelectorAll('.item');

    menu.forEach((img, i) => {
      img.dataset.aos = 'fade-down';
      img.dataset.aosDelay = i * 150;
      img.dataset.aosDuration = 1000;
      img.dataset.aosOffset = 400;
    });

    AOS.init();
  </script>
  <!-- Script AOS End -->

  <!-- Untuk memanggil footer -->
  <?php
    include 'footer.php'
  ?>
  <!-- Footer End -->
  
</body>
</html>