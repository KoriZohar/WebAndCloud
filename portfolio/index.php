<?php
  include "config.php";
  $query = "SELECT * FROM portfolioSh.portfolio_KoriZohar";
  $result = mysqli_query($connection, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kori Zohar</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Satisfy" rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Laura
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/laura-free-creative-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>
  <header id="header" class="fixed-top d-flex justify-content-center align-items-center header-transparent">
  <nav id="navbar" class="navbar">
    <ul>
      <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
      <li><a class="nav-link scrollto" href="#about">About</a></li>
      <li><a class="nav-link scrollto" href="#resume">Resume</a></li>
      <li><a class="nav-link scrollto" href="#services">Skills</a></li>
      <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
      <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
  </nav>
  </header>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <h1>Kori Zohar</h1>
      <h2>System Engineer, Software Engineer student, Graphic Designer</h2>
      <a href="#about" class="btn-scroll scrollto" title="Scroll Down"><i class="bx bx-chevron-down"></i></a>
    </div>
  </section>

  <main id="main">
    <!-- ======= About Me Section ======= -->
    <section id="about" class="about">
      <div class="container">
        <div class="section-title">
          <span>About Me</span>
          <h2>About Me</h2>
        </div>

        <div class="row">
          <div class="image col-lg-4 d-flex align-items-stretch justify-content-center justify-content-lg-start"></div>
          <div class="col-lg-8 d-flex flex-column align-items-stretch">
            <div class="content ps-lg-4 d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-lg-6">
                  <ul>
                    <li><i class="bi bi-chevron-right"></i> <strong>Name:</strong> <span>Kori Zohar</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Central District, Israel</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>26</span></li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul>
                    <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>B.Sc student for Software engineering</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Diploma:</strong> <span>Graphic Designer</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Work:</strong> <span>System Engineer</span></li>
                  </ul>
                </div>
              </div>
              <div class="row mt-n4">
                <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-emoji-smile" style="color: #20b38e;"></i>
                    <span data-purecounter-start="0" data-purecounter-end="4" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Hobbies</strong>, Photography, Baking, Yoga, Music.</p>
                  </div>
                </div>

                <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-journal-richtextr" style="color: #8a1ac2;"></i>
                    <span data-purecounter-start="0" data-purecounter-end="6" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Programming Languages</strong> HTML, CSS, JavaScript, C, C++, Assembly</p>
                  </div>
                </div>

                <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-clock" style="color: #2cbdee;"></i>
                    <span data-purecounter-start="0" data-purecounter-end="4" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Years of experience</strong> as a Project lead, as QA Engineer, Scrum Master and System Engineer</p>
                  </div>
                </div>

                <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-award" style="color: #ffb459;"></i>
                    <span data-purecounter-start="0" data-purecounter-end="1" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Diploma</strong> in Graphic designing, Graduated with honors from Shenkar college.</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="skills-content ps-lg-4">
              <div class="progress">
                <span class="skill">C & C++<i class="val">100%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">HTML, CSS and JavaScript <i class="val">90%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">Assembly <i class="val">75%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
      <div class="col-lg-11">
      <div class="section-title">
        <p>I am a System Engineer, highly motivated and driven by my curiosity to explore and learn. Have a broad experience in aspects of test, establish, and configure systems with different software and hardware. Own a deep understanding of Agile methodologies while lead and manage projects as a Scrum Master.
          <br><br>
          I am a responsible and committed team player that quickly adapts to changes in a fast paced environment. I have excellent communication skills, highly-organized and a problem solver. I have a unique perspective on products' quality, risks analysis and user experience.
          <br><br>
          Doing my best to keep cultivating my creativity and mind with my next challenges to come!
        </p>
      </div>
      </div>
    </section>

    <!-- ======= My Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <span>My Resume</span>
          <h2>My Resume</h2>
        </div>
        <div class="row">
          <section id="services" class="services">
            <div class="container">
              <div class="row">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                  <div class="icon-box">
                    <div class="icon"><i class="bx  bx-file"></i></div>
                      <h4 class="title"><a href="CV_KoriZohar.pdf" target="_blank">Download CV Here</a></h4>
                    </div>
                  </div>
              </div>
            </div>
          </section>
    </section>

    <!-- ======= My Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <span>Skills</span>
          <h2>Skills</h2>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Scrum Master and Project Lead</a></h4>
              <p class="description">Owns a deep understanding of Agile methodologies while lead projects as Scrum Master.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Systems Configuration and Characterization</a></h4>
              <p class="description">As a system engineer, I have a broad experience in aspects of test, establish, and configure systems with different software and hardware.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Projects Managing Tools</a></h4>
              <p class="description">Daily working with testing and projects managing tools such as: Jira, Confluance, QC, DOORS, TFS.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Adobe Grpahic Design Tools</a></h4>
              <p class="description">Adobe photoshop, Illustrator, Indesign and Lightroom. Graduated with Honors from Shenkar.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End My Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container position-relative"></div>
    </section>

    <!-- ======= My Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <span>My Portfolio</span>
          <h2>My Portfolio</h2>
          <p>Here you can see some of my recent works</p>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-center">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">HTML</li>
        </ul>

        <?php
        if ($result) {
          // Fetch all rows as an associative array

          while($portfolioData = mysqli_fetch_assoc($result)) { 
            echo '<div class="row portfolio-container">';
            echo '<div class="col-lg-4 col-md-6 portfolio-item filter-app">';
            echo '<div class="portfolio-img"><img src="' . $portfolioData['image'] . '" class="img-fluid" alt=""></div>';
            echo '<div class="portfolio-info">';
            echo '<h4>' . $portfolioData['header'] . '</h4>';
            echo '<p>' . $portfolioData['description'] . '</p>';
            echo '<a href="' . $portfolioData['image'] . '" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="'.$portfolioData['description'].'"><i class="bx bx-plus"></i></a>';
            echo '<a href="' . $portfolioData['reference'] . '" class="details-link" title="More Details" target="_blank"><i class="bx bx-link"></i></a>';
            echo '</div></div>';
          }
        }
        ?>
      </div>
    </section>

    <!-- ======= Contact Me Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
        <div class="section-title">
          <span>Contact Me</span>
          <h2>Contact Me</h2>
          <p></p>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-share-alt"></i>
                  <h3>Social Profiles</h3>
                  <div class="social-links">
                    <a href="https://www.instagram.com/korizohar/" class="instagram" target="_blank"><i class="bx bxl-instagram"></i></a>
                    <a href="www.linkedin.com/in/kori-zohar" class="linkedin" target="_blank"><i class="bx bxl-linkedin"></i></a>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="info-box mt-4">
                  <i class="bx bx-share-alt"></i>
                  <h3>GITHUB</h3>
                  <p><a href="https://github.com/KoriZohar/WebAndCloud.git">My GitHub Repositories</a></p>
                </div>
              </div>
              <div class="col-md-12">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Me</h3>
                  <p>korizohar@gmail.com</p>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer id="footer">
    <div class="container">
      <h3>Kori Zohar</h3>
      <div class="social-links">
        <a href="https://www.instagram.com/korizohar/" class="instagram" target="_blank"><i class="bx bxl-instagram"></i></a>
        <a href="www.linkedin.com/in/kori-zohar" class="linkedin" target="_blank"><i class="bx bxl-linkedin"></i></a>
      </div>
      <a href="https://www.shenkar.ac.il/he/departments/engineering-software-department" target="_blank"><p>תואר ראשון בהנדסת תוכנה בשנקר</p></a>
      <div class="copyright">
        &copy; Copyright <strong><span>Kori Zohar</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/laura-free-creative-bootstrap-theme/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <script src="assets/js/main.js"></script>
</body>
</html>
<?php
  mysqli_close($connection);
?>