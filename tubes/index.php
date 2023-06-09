<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!--google font-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Alkatra&family=Merriweather:wght@400;900&family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">

  <!--box icon-->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />


  <!--custom css-->
  <link rel="stylesheet" href="css/style.css">

  <title>Anni's shop</title>
</head>

<body>
 
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top py-3">
      <div class="container">
        <a class="navbar-brand" href="#"><span>Anni's</span>shop</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-lg-flex justify-content-lg-end align-items-lg-center" id="navbarNavAltMarkup">
          <div class="navbar-nav me-5">
            <a class="nav-link me-4 active" href="#home">Home</a>
            <a class="nav-link me-4" href="#service">service</a>
            <a class="nav-link me-4" href="#product">Product</a>
        
          </div>
          <div class="icons-home mt-3 mt-lg-0">
          </div>
        </div>
      </div>
    </nav>
  </header>
  <!--Home-->
  <section class="home" id="home">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-lg-flex flex-lg-column content-left">
          <h1 class="heading">make your shopping more enjoyable here</h1>
          <p class="subheading">make books a better place for you</p>
          <div class="btn-home mt-5">
            <a href="register.php" class="btn btn-buy py-2 px-3 px-lg-4 py-lg-3">REGISTER</a>
          </div>
        </div>
        <div class="col-lg-6 position-relative d-none d-lg-block">
          <img src="img/buku.jpg-removebg-preview.png" class="img-fluid position-absolute" alt="">

        </div>
      </div>
    </div>
  </section>

  <!--service-->
  <section class="service section-margin" id="service">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <h1 class="heading">Our service</h1>
          <p class="subheading">we provide the best variants of books from the best authors</p>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-lg-4 my-4">
          <div class="card-service rounded-3 d-flex justify-content-between align-items-center p-4">
            <div class="detail">
              <h3 class="heading">selft improvment</h3>

              

            </div>
            <div class="img-service">
              <img src="img/buku.improvment-removebg-preview.png">
            </div>
          </div>
        </div>
        <div class="col-lg-4 my-4">
          <div class="card-service rounded-3 d-flex justify-content-between align-items-center p-4">
            <div class="detail">
              <h3 class="heading">Novel</h3>

            </div>
            <div class="img-service">
              <img src="img/Hyderabad_Irvannd-rev-3.0-Convert-depan (1).jpg">
            </div>
          </div>
        </div>
        <div class="col-lg-4 my-4">
          <div class="card-service rounded-3 d-flex justify-content-between align-items-center p-4">
            <div class="detail">
              <h3 class="heading">biografi</h3>

              

            </div>
            <div class="img-service">
              <img src="img/buya hamka.jpg.jpg">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--produck-->
  <section class="Product section-margin" id="Product">
    <div class="container">
      <div class="row text-center">
        <div class="col">
          <h1 class="heading">Our Product</h1>
          <p class="subheading">Available for all your needs</p>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-lg-6 populer">
          <h3 class="heading">populer categories</h3>
          <div class="toggle-slider d-flex justify-content-end">
            <i class='bx bxs-chevron-left-circle'></i>
            <i class='bx bxs-chevron-right-circle'></i>
          </div>
        </div>
      </div>
      <div class="row mt-4 product-populer">
        <div class="col">
          <!-- Swiper -->
          <div class="swiper mySwiperPopuler">
            <div class="swiper-wrapper">
              <div class="swiper-slide card-product">
                <div class="img-box rounded-3 d-flex justify-content-center align-items-center py-4 px-2">
                <img src="img\The Frog Prince-300x450.jpg" class="img-fluid" alt="">
                </div>
                <div class="detail-product mt-3 d-flex justify-content-between">
                  <div class="info">
                    <p class="label text-center py-2">Book</p>
                    <p>30 Product</p>
                  </div>
                  <div class="btn-card">
                    <a href="#" class="btn"><i class="bx bx-shopping-bag"></i></a>
                  </div>

                </div>
              </div>
              <div class="swiper-slide card-product">
                <div class="img-box rounded-3 d-flex justify-content-center align-items-center py-4 px-2">
                  <img src="img\Puzzle Sliders Jungle Animals-300x450.jpg" class="img-fluid" alt="">
                </div>
                <div class="detail-product mt-3 d-flex justify-content-between">
                  <div class="info">
                    <p class="label text-center py-2">Book</p>
                    <p>30 Product</p>
                  </div>
                  <div class="btn-card">
                    <a href="#" class="btn"><i class="bx bx-shopping-bag"></i></a>
                  </div>

                </div>
              </div>
              <div class="swiper-slide card-product">
                <div class="img-box rounded-3 d-flex justify-content-center align-items-center py-4 px-2">
                  <img src="img\Disney Princess Ariel-300x450.jpg" class="img-fluid" alt="">
                </div>
                <div class="detail-product mt-3 d-flex justify-content-between">
                  <div class="info">
                    <p class="label text-center py-2">Book</p>
                    <p>30 Product</p>
                  </div>
                  <div class="btn-card">
                    <a href="#" class="btn"><i class="bx bx-shopping-bag"></i></a>
                  </div>

                </div>
              </div>
              <div class="swiper-slide card-product">
                <div class="img-box rounded-3 d-flex justify-content-center align-items-center py-4 px-2">
                  <img src="img\Busy Recycle-300x450.jpg" class="img-fluid" alt="">
                </div>
                <div class="detail-product mt-3 d-flex justify-content-between">
                  <div class="info">
                    <p class="label text-center py-2">Book</p>
                    <p>30 Product</p>
                  </div>
                  <div class="btn-card">
                    <a href="#" class="btn"><i class="bx bx-shopping-bag"></i></a>
                  </div>

                </div>
              </div>
              <div class="swiper-slide card-product">
                <div class="img-box rounded-3 d-flex justify-content-center align-items-center py-4 px-2">
                  <img src="img\The Elves and the Shoemaker-300x450.jpg" class="img-fluid" alt="">
                </div>
                <div class="detail-product mt-3 d-flex justify-content-between">
                  <div class="info">
                    <p class="label text-center py-2">Book</p>
                    <p>30 Product</p>
                  </div>
                  <div class="btn-card">
                    <a href="#" class="btn"><i class="bx bx-shopping-bag"></i></a>
                  </div>

                

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--footer-->
  <footer class="footer">
  <div class="container">
    <div class="row">
    <div class="col text-center">
      <h3 class="footer-brand"><span>Anni's</span>shop</h3>
      <p>annisshop is a place where shopping for books becomes fun and exciting, there are various genres of books from extraordinary authors that we can take to make learning</p>
      <p>anni'sshop123@gmail.com</p>
      <div class="icon-footer">
        <h3>contact us</h3>
        <a href="#"><i class='bx bxl-whatsapp'></i></a>
        <a href="#"><i class='bx bxl-instagram-alt'></i></a>
      </div>
    </div>
</div>
  </div>
</footer>

  <!-- Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!--custem js-->
  <script src="js/script.js"></script>

   
</body>

</html>