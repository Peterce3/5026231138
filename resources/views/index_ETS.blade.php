<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Team Cherry</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="https://images.squarespace-cdn.com/content/v1/606d4deb4db8c15ea53b3624/be882ce3-f3df-4a5b-831e-c665218180bc/favicon.ico?format=100w">
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <style>
            .contact-container {
              background: white;
              max-width: 600px;
              margin: auto;
              padding: 30px;
              box-shadow: 0 4px 8px rgba(0,0,0,0.1);
              border-radius: 10px;
            }
        
            .form-group {
              margin-bottom: 15px;
            }
        
            label {
              display: block;
              margin-bottom: 5px;
              color: #444;
            }
        
            input, textarea {
              width: 100%;
              padding: 10px;
              border: 1px solid #ddd;
              border-radius: 5px;
            }
        
            input:focus, textarea:focus {
              border-color: #007BFF;
              outline: none;
            }
          </style>
                  <script>
                    function validateForm() {
                
                      const name = document.getElementById("name").value.trim();
                      const email = document.getElementById("email").value.trim();
                      const subject = document.getElementById("subject").value.trim();
                      const message = document.getElementById("message").value.trim();
                
                      if (name === "" || name.match(/[0-9]/) ) {
                        Swal.fire({
                            title: "Error",
                            text: "Please enter name, must be letters.",
                            icon: "error"
                        });
                        document.getElementById("name-form").focus();
                        return false;
                      }
                
                      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                      if (!emailRegex.test(email)) {
                        Swal.fire({
                            title: "Error",
                            text: "Please enter a valid email.",
                            icon: "error"
                        });
                        document.getElementById("email-form").focus();
                        return false;
                      }
                
                      if (subject === "") {
                        Swal.fire({
                            title: "Error",
                            text: "Please enter subject.",
                            icon: "error"
                        });
                        document.getElementById("subject-form").focus();
                        return false;
                      }
                
                      if (message.length < 10) {
                        Swal.fire({
                            title: "Error",
                            text: "Message must be at least 10 characters.",
                            icon: "error"
                        });
                        document.getElementById("message-form").focus();
                        return false;
                      }
                
                      return true;
                    }
                  </script>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#blog">Blog</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#merchandise">Merchandise</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">Games</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">About</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5" src="assets/img/Team_Cherry_Logo_NoText_Small.png" alt="..." />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">Team Cherry</h1>

                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">Indie Game Developer</p>
            </div>
        </header>
        <section class="page-section portfolio" id="blog">
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Blog</h2>
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-12 ms-auto"><img class="col-lg-8 ms-auto" src="assets/img/blog1.jpg" alt="..." /><h1 style="color: #d56262;">TEAM CHERRY HOLIDAY SIGN OFF</h1><p class="lead col-lg-8 text-center" style="margin: auto;">Happy Holidays Gang! With Christmas close and Team Cherry about to take a few days off after an intensive year’s development, we’re gonna try and keep this update as snap-sharp as we can. 12/13/19</p></div>
                    <div class="col-lg-12 ms-auto"><img class="col-lg-8 ms-auto" src="assets/img/blog2.jpg" alt="..." /><h1 style="color: #d56262;">POST E3 WRAP!</h1><p class="lead col-lg-8 text-center" style="margin: auto;">Team Cherry checking in for a long-past due Silksong development update. Let’s get into it for our post-E3 wrap edition!. 6/25/19</p></div>
                    <div class="col-lg-12 ms-auto"><img class="col-lg-8 ms-auto" src="assets/img/blog3.jpg" alt="..." /><h1 style="color: #d56262;">LATE ANNIVERSARY CELEBRATION!</h1><p class="lead col-lg-8 text-center" style="margin: auto;">Gang! We’re jumping in for a quick round-up update. Lots going on in the world of Hollow Knight, so we’re gonna start running down the list. This’ll be a speedy one, so we can dive straight back into Silksong development. Hold onto your horns! 3/19/19</p></div>
                    <div class="col-lg-12 ms-auto"><img class="col-lg-8 ms-auto" src="assets/img/blog4.jpg" alt="..." /><h1 style="color: #d56262;">HOLLOW KNIGHT: SILKSONG REVEALED!</h1><p class="lead col-lg-8 text-center" style="margin: auto;">No time for fluff today gang. Let’s leap straight in for the big reveal, in trailer form! 2/14/19</p></div>
                    <div class="col-lg-12 ms-auto"><img class="col-lg-8 ms-auto" src="assets/img/blog5.jpg" alt="..." /><h1 style="color: #d56262;">READY YOUR NEEDLE!</h1><p class="lead col-lg-8 text-center" style="margin: auto;">2/11/19</p></div>
                </div>

            </div>

        </section>

        <section class="page-section portfolio" id="merchandise" style="background-color: #e83046;">
            <h2 class="page-section-heading text-center text-uppercase text-white mb-0">Merchandise</h2>
            <div class="divider-custom">
                <div class="divider-custom-line" style="background-color: white;"></div>
                <div class="divider-custom-icon text-white"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line" style="background-color: white;"></div>
            </div>
            <div class="container d-flex align-items-center flex-column">
                <img src="assets/img/merch.jpg" alt="">
                <img src="assets/img/Yetee_banner.png" alt="">
            </div>
        </section>
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Games</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    <!-- Portfolio Item 1-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/hollow knight.png" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 2-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/silksong-title.png" alt="..." />
                        </div>
                    </div>
            </div>
        </section>
        <!-- About Section-->
        <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row text-center">
                    <div class="col-lg-4 ms-auto"><img class="col-lg-8 ms-auto" src="assets/img/ari gibson.png" alt="..." /><p class="lead">Ari is a Co-director of Team Cherry. He previously ran the animation studio Mechanical Apple and has worked on countless projects across film, games and music videos. Ari's been modding games from before computers were colour and has loved them since his first ever game rental: Faxanadu for NES.</p></div>
                    <div class="col-lg-4 ms-auto"><img class="col-lg-8 ms-auto" src="assets/img/william pellen.png" alt="..." /><p class="lead">William is a Co-director of Team Cherry. He's been designing and building games for years, creating crazy worlds for people to poke around in and explore. He's loved games ever since his Dad found the wing boots for him in Zelda 2, and wants to recreate that experience of adventure and excitement for other people.</p></div>
                    <div class="col-lg-4 ms-auto"><img class="col-lg-8 ms-auto" src="assets/img/jack vine.png" alt="..." /><p class="lead">Jack is Team Cherry’s supremely talented coder. Jack’s been building out the systems, tightening and optimising and adding a suite of all new exciting features. Jack has worked with Team Cherry for some time now, being instrumental in Hollow Knight’s console releases and the development of its huge final free Content Pack, Godmaster.</p></div>
                </div>
                <!-- About Section Button-->

            </div>
        </section>
        <!-- Contact Section-->
        <section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Us</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="contact-container">
                    <form id="contactForm" action="https://google.co.id" method="get" onsubmit="return validateForm()">
                      <div class="form-group" id="name-form">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" />
                      </div>
                
                      <div class="form-group" id="email-form">
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" />
                      </div>
                
                      <div class="form-group" id="subject-form">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" />
                      </div>
                
                      <div class="form-group" id="message-form">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="5" ></textarea>
                      </div>
                
                      <button type="submit" style="
                        background-color: #e83046;
                        color: white;
                        padding: 12px 20px;
                        border: none;
                        border-radius: 5px;
                        width: 100%;
                        font-size: 16px;
                        cursor: pointer;">Send Message</button>
                    </form>
                  </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">Around the Web</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/teamcherrygames"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://twitter.com/TeamCherryGames"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.youtube.com/user/teamcherrygames">YT</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; Team Cherry 2025</small></div>
        </div>
        <!-- Portfolio Modals-->
        <!-- Portfolio Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/hollow knight.png" alt="..." />
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Forge your own path in Hollow Knight! An epic action adventure through a vast ruined kingdom of insects and heroes. Explore twisting caverns, battle tainted creatures and befriend bizarre bugs, all in a classic, hand-drawn 2D style.</p>
                                    <button class="btn btn-primary" id="link-button">
                                        <a href="https://www.hollowknight.com/" class="link-button text-white" style="text-decoration: none;">Full Site</a>
                                    </button>
                                    <button class="btn btn-primary" id="link-button">
                                        <a href="https://drive.google.com/drive/folders/1SPCRaalJJepKYOQ4fdxZEzqNukJiUQCo" class="link-button text-white" style="text-decoration: none;">Press Kit</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" aria-labelledby="portfolioModal2" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/silksong-title.png" alt="..." />
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Discover a vast, haunted kingdom in Hollow Knight: Silksong! The sequel to the award winning action-adventure. Explore, fight and survive as you ascend to the peak of a land ruled by silk and song.

                                        Currently in development for Pc, Mac, Linux, Nintendo Switch, Playstation 5 and Xbox Series X|S.</p>
                                    <button class="btn btn-primary" id="link-button">
                                        <a href="https://store.steampowered.com/app/1030300/Hollow_Knight_Silksong/" class="link-button text-white" style="text-decoration: none;">Steam Page (Wishlist Today)</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
