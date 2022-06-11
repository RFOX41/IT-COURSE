<php include(config/constants.php) >
<html lang="en">
  <head>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="assets/styles/frontend/styles.css">

    <title>IT Course</title>
  </head>
  <body>
    <div class="container">
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <img src="assets/images/igslogo.png" alt="" width="50" height="44" class="d-inline-block align-text-top">
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Layanan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Portofolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Tentang Kami</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="kontak.html">Kontak</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <section class="hero_section">
            <img class="img-fluid hero_image" src="assets/images/hero_header.svg" alt="" class="d-inline-blockp">

            <div class="title_position">
                <h1 class="title_first">Bangun Karir Impianmu</h1>
                <h1 class="title_second">Bersama Mentor</h1>
                <h1 class="title_second">Berpengalaman.</h1>
            </div>

            <h4 class="hero_description">Perdalam kemampuan dalam pengembangan aplikasi web, mobile dan data science secara fokus dan terarah</h4>
            <div class="d-grid gap-2 d-md-flex button_position">
                <button class="btn btn-started" type="button">Get Started</button>
                <button class="btn btn-watched" type="button"><img class="play_logo" src="assets/images/play_logo.svg" alt="logo" />Watch Video</button>
            </div>
      </section>

      <section class="course_catalog">
            <h2 class="text-center title_catalog">Katalog Kelas</h2>
            <h4 class="text-center catalog_description">Pelajari ilmu terbaru dari mentor yang berpengalaman di bidangnya</h4>
      </section>

      <section class="course_categories">
        <h4 class="categories_title">Start Learning Today</h4>
        <h2 class="categories_title_big">Our Categories</h2>
        <h4 class="categories_description">Explore our courses based on your favorite category</h4>
        <div class="row categories_wrap">
          <div class="col-3">
            <div class="content_wrap">
              <img class="category_logo" src="assets/images/web_logo.svg" alt="logo web Development" />
              <h4 class="title_card">Web Development</h4>
              <h4 class="desc_card">Lorem ipsum sit dolor amet</h4>
            </div>
          </div>
          <div class="col-3">
            <div class="content_wrap">
              <img class="category_logo" src="assets/images/mobile_logo.svg" alt="logo web Development" />
              <h4 class="title_card">Mobile Development</h4>
              <h4 class="desc_card">Lorem ipsum sit dolor amet</h4>
            </div>
          </div>
          <div class="col-3">
            <div class="content_wrap">
              <img class="category_logo" src="assets/images/data_logo.svg" alt="logo web Development" />
              <h4 class="title_card">Data Science</h4>
              <h4 class="desc_card">Lorem ipsum sit dolor amet</h4>
            </div>
          </div>
          <div class="col-3"></div>
          <div class="col-3"></div>
        </div>
      </section>

      <section class="popular_course">
        <div class="row">
          <div class="col-9">
            <h4 class="categories_title">Top Featured Courses</h4>
            <h2 class="categories_title_big">Our Popular Course</h2>
            <h4 class="categories_description">Explore our top courses that been subscribed by many students</h4>
          </div>
          <div class="col-3">
            <button class="btn btn-course">All Courses</button>
          </div>
        </div>
        
        <div class="course_wrap">
          <div class="row row_course">
          <div class="col-4 card_course">
              <div class="coursetitle_wrap"><img class="thumbnail_course" src="assets/images/thumbnail1.svg" alt="thumbnail"/>
                <small class="px-2 py-1 text-primary bg-primary bg-opacity-10 rounded-2 tag_course">Website development</small>
                <h4 class="title_course">Mastering HTML: Responsive Website</h4>
                <h4 class="price_course">Rp. 200.000</h4>
              </div>
          </div>
          <div class="col-4 card_course">
              <div class="coursetitle_wrap"><img class="thumbnail_course" src="assets/images/thumbnail2.svg" alt="thumbnail"/>
                <small class="px-2 py-1 text-warning bg-warning bg-opacity-10 rounded-2 tag_course">Mobile development</small>
                <h4 class="title_course">Fundamental React Native</h4>
                <h4 class="price_course">Free</h4>
              </div>
          </div>
          <div class="col-4 card_course">
              <div class="coursetitle_wrap"><img class="thumbnail_course" src="assets/images/thumbnail3.svg" alt="thumbnail"/>
                <small class="px-2 py-1 text-danger bg-danger bg-opacity-10 rounded-2 tag_course">Data Science</small>
                <h4 class="title_course">Fundamental Data Science</h4>
                <h4 class="price_course">Rp. 100.000</h4>
              </div>
          </div>
        </div>
        </div>

        <div class="course_wrap">
          <div class="row row_course">
          <div class="col-4 card_course">
              <div class="coursetitle_wrap"><img class="thumbnail_course" src="assets/images/thumbnail1.svg" alt="thumbnail"/>
                <small class="px-2 py-1 text-primary bg-primary bg-opacity-10 rounded-2 tag_course">Website development</small>
                <h4 class="title_course">Mastering HTML: Responsive Website</h4>
                <h4 class="price_course">Rp. 200.000</h4>
              </div>
          </div>
          <div class="col-4 card_course">
              <div class="coursetitle_wrap"><img class="thumbnail_course" src="assets/images/thumbnail2.svg" alt="thumbnail"/>
                <small class="px-2 py-1 text-warning bg-warning bg-opacity-10 rounded-2 tag_course">Mobile development</small>
                <h4 class="title_course">Fundamental React Native</h4>
                <h4 class="price_course">Free</h4>
              </div>
          </div>
          <div class="col-4 card_course">
              <div class="coursetitle_wrap"><img class="thumbnail_course" src="assets/images/thumbnail3.svg" alt="thumbnail"/>
                <small class="px-2 py-1 text-danger bg-danger bg-opacity-10 rounded-2 tag_course">Data Science</small>
                <h4 class="title_course">Fundamental Data Science</h4>
                <h4 class="price_course">Rp. 100.000</h4>
              </div>
          </div>
        </div>
        </div>
      </section>

      <section class="text-center benefit">
        <h4 class="categories_title">Boost Productivity</h4>
        <h2 class="categories_title_big">Metode Belajar Lebih Santai dan Terarah</h2>
        <img class="benefit_logo" src="assets/images/benefit_logo.svg" alt="logo benefit"/>

        <div class="counting">
          <div class="row">
            <div class="col-3"></div>
            <div class="col-2 counting_card">
              <h4 class="total_count">689,250</h4>
              <h4 class="title_count">Success Member</h4>
            </div>
            <div class="col-2 counting_card">
              <h4 class="total_count">186</h4>
              <h4 class="title_count">High-Quality Courses</h4>
            </div>
            <div class="col-2 counting_card">
              <h4 class="total_count">20+</h4>
              <h4 class="title_count">Courses</h4>
            </div>
            <div class="col-3"></div>
          </div>
        </div>
      </section>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
      crossorigin="anonymous"
    ></script>
  </body>
  
  <footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <h6>About</h6>
          <p class="text-justify">IT Course adalah sebuah website khusus untuk menyediakan layanan belajar bagi banyak orang yang ingin kursus seputar dunia teknologi seperti Java, CSS, HTML, Desain, Logika, dan masih banyak materi lainnya yang disediakan oleh IT Course</p>
        </div>

        <div class="col-xs-6 col-md-3">
          <h6>Contact</h6>
          <ul class="footer-links">
            <li><i class="fa-solid fa-envelope"></i>   itcourse@gmail.com</li>
            <li><i class="fa-solid fa-square-phone"></i>   081343636948</li>
            <li><i class="fa-solid fa-location-dot"></i>   Jl. Rungkut Madya No.1, Gn. Anyar, Kec. Gn. Anyar, Kota SBY, Jawa Timur 60294</li>
          </ul>
          <script src="https://kit.fontawesome.com/73185ffd23.js" crossorigin="anonymous"></script>
        </div>

        <div class="col-xs-6 col-md-3">
          <h6>Quick Links</h6>
          <ul class="footer-links">
            <li><a href="#">Layanan</a></li>
            <li><a href="#">Portofolio</a></li>
            <li><a href="#">Tentang Kami</a></li>
            <li><a href="#">Kontak</a></li>
          </ul>
        </div>
      </div>
      <hr>
    </div>
</footer>

</html>
