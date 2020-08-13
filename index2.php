<?php
	session_start();
	require_once 'php/security.php';
	$errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];
	$fields = isset($_SESSION['fields']) ? $_SESSION['fields'] : [];
?>
<!DOCTYPE html>
<html lang="us-en">

<head>
    <!--Meta Info-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Dfuture | Web Development</title>
    <meta name="keywords" content="Web development Portoflio, Dfuture web development, web developer in mexico">
    <meta name="description" content="Dfuture develops professional web pages for startups, companies, and individual people.">
    <meta name="author" content="dfuture.mx">
    <meta name="owner" content="Abraham Cepeda Oseguera">

    <!--Google Verification-->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-147025455-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-147025455-2');
    </script>

    <!--Basic configuration-->
    <link rel="icon" type="image/png" href="img/index/dfuture_favicon.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-------------CSS--------------->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--AOS CSS-->
    <link rel="stylesheet" href="css/aos copia 2.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="css/mdb.min.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Index css-->
    <link rel="stylesheet" href="css/index_v=2.css">

    <!--------------Google Fonts-------------->
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Bowlby+One+SC|Lilita+One&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans|Lato|Roboto|Rubik&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran|Nunito|Poppins|Rubik&display=swap" rel="stylesheet">

    <!--------------Javascript-------------->
    <script src="../js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!--<script src="https://kit.fontawesome.com/e284a863c3.js"></script>-->
    <!-- jQuery -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
</head>
<header id="header">
    <!--Navbar -->
    <nav class="mb-1 navbar navbar-expand-lg navbar-dark white my_navbar">
        <a class="navbar-brand" href="#">
            <img src="img/index/dfuture_logo2.png" height="60" alt="peninsula_golf_store_logo">
        </a>
        <button class="navbar-toggler my_navbar_toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
            aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
            <ul class="nav lighten-4 py-4 font-weight-bold justify-content-center ml-auto">
                <li class="nav-item">
                    <a class="nav-link my_nav_link" href="#header">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link my_nav_link" href="#service">SERVICE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link my_nav_link" href="#portfolio">PORTOFOLIO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link my_nav_link" href="#pricing">PRICING</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link my_nav_link" href="#contact">CONTACT</a>
                </li>
            </ul>
        </div>
    </nav>
    <!--/.Navbar -->
</header>
<body>
    <!--Background-->
    <div class="background">
        <div class="background_color">
            <div class="background_content">
                <div class="row background_content_inner">
                    <div class="background_titles col-lg-6">
                        <h1 data-aos="fade-right">DFUTURE WEB DEVELOPMENT</h1>
                        <h3 data-aos="fade-right">We care about your business</h3>
                    </div>
                    <div class="background_img col-12 col-lg-6">
                        <img src="img/index/dfuture_hand.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/Background-->

    <!--Quote-->
    <div class="quote_frame">
        <div class="quote_content">
            <i class="fas fa-quote-left fa-3x"></i>
            <h4 data-aos="fade-left">Web development is the art of combining creativity along with ingenuity.</h4>
        </div>
    </div>
    <!--/Quote-->
    <!--Service-->
    <div class="service" id="service">
        <h3 data-aos="fade-up">OUR SERVICE</h3>
        <img src="img/index/under_title.png" alt="" data-aos="fade-up">
        <p class="service_paragraph" data-aos="fade-up">To design is much more than simply to assemble, to order, or even to edit: it is to add value and meaning, to
        illuminate, to simplify, to clarify, to modify, to dignify, to dramatize.</p>
        <div class="service_steps">
            <!--Step 1-->
            <div class="row">
                <div class="col-12 col-lg-6 service_title service_title1">
                    <h4 data-aos="fade-left"><span>1.</span>Concept</h4>
                    <div class="service_title_holder">
                        <div class="service_title_holder2">
                            <div class="service_line service_line1"></div>
                            <div class="service_square service_square1"></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 step_img">
                    <div class="service_img service_img1">
                        <div class="service_img_color service_img_color1">
                            <div class="service_content service_content1" data-aos="fade-right">
                                <p>Both the client and the Dfuture team will meet to discuss all aspects of the idea, taking into account the current
                                situation, the environment where the project will take place, and the contemporary market movements to be able to
                                develop it most effectively and professionally.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/Step 1-->
            <!--Step 2-->
            <div class="row">
                <div class="col-12 col-lg-6 service_title service_title2">
                    <h4 data-aos="fade-right"><span>2.</span>Content & Funcionality</h4>
                    <div class="service_title_holder">
                        <div class="service_title_holder2">
                            <div class="service_square service_square2"></div>
                            <div class="service_line service_line2"></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="service_img service_img2">
                        <div class="service_img_color service_img_color2">
                            <div class="service_content service_content2" data-aos="fade-left">
                                <p>Defining the content and functionality is crucial because it allows both us and the client to have a clear idea of what
                                the website must-have. Furthermore, it serves the define the interaction that the user will be able to have with the web
                                page.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/Step 2-->
            <!--Step 3-->
            <div class="row">
                <div class="col-12 col-lg-6 service_title service_title3">
                    <h4 data-aos="fade-left"><span>3.</span>Design & Development</h4>
                    <div class="service_title_holder">
                        <div class="service_title_holder2">
                            <div class="service_line service_line3"></div>
                            <div class="service_square service_square3"></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 step_img">
                    <div class="service_img service_img3">
                        <div class="service_img_color service_img_color3">
                            <div class="service_content service_content1" data-aos="fade-right">
                                <p>After defining the content and functionality, the client and the team will discuss some ideas. Once we have a clear
                                approach, Dfuture will commence creating the design of the web page. After its approval, Dfuture will begin the
                                development phase, during which the client will be receiving constant updates of the project.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/Step 3-->
            <!--Step 4-->
            <div class="row">
                <div class="col-12 col-lg-6 service_title service_title4">
                    <h4 data-aos="fade-right"><span>4.</span>Project test</h4>
                    <div class="service_title_holder">
                        <div class="service_title_holder2">
                            <div class="service_square service_square4"></div>
                            <div class="service_line service_line4"></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="service_img service_img4">
                        <div class="service_img_color service_img_color4">
                            <div class="service_content service_content2" data-aos="fade-left">
                                <p>After the development's completion, we, along with the client, will do a final review for the project. In case the
                                project needs any changes, we will correct them for the project to fit the client's needs. Once the client approves the
                                project, we will launch it and ask users to interact with the website to analyze their responses and feedback.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/Step 4-->
        </div>
    </div>
    <!--/Service-->

    <!----------Our projetcs---------->
    <div class="projects" id="portfolio">
        <h3 data-aos="fade-up">OUR PROJECTS</h3>
        <img src="img/index/under_title.png" alt="" data-aos="fade-up">
        <!--Duud App-->
        <div class="row project duud_project" data-aos="fade-up">
            <div class="col-lg-8 project_img" data-aos="fade-left">
                <img src="img/index/duud.png" alt="">
            </div>
            <div class="col-lg-4 project_content" data-aos="fade-right">
                <h4>Duud App</h4>
                <p>Website for a mobile application that sends Mexican-style stickers from the keyboard on every social media platform.</p>
                <a href="http://duud.mx/" target="_blank"><button>Discover<i class="fas fa-arrow-right"></i></button></a>
            </div>
        </div>
        <!--/Duud App-->
        <!--Nutzen-->
        <div class="row project nutzen_project" data-aos="fade-up">
            <div class="col-lg-8 project_img project_img2" data-aos="fade-right">
                <img src="img/index/nutzen.png" alt="">
            </div>
            <div class="col-lg-4 project_content project_content2" data-aos="fade-left">
                <h4>Nutzen</h4>
                <p>It's a website for an organic peanut butter Mexican company.</p>
                <a href="https://www.nutzen.mx/" target="_blank"><button>Discover<i class="fas fa-arrow-right"></i></button></a>
            </div>
        </div>
        <!--/Nutzen-->
        <!--Lagartos golf-->
        <div class="row project lagartos_project" data-aos="fade-up">
            <div class="col-lg-8 project_img" data-aos="fade-left">
                <img src="img/index/lagartos.png" alt="">
            </div>
            <div class="col-lg-4 project_content" data-aos="fade-right">
                <h4>Lagartos golf</h4>
                <p>Website for a group of golfers that want to keep a record of the rankings as well as to see live scoring.</p>
                <a href="https://www.lagartosgolf.com/" target="_blank"><button>Discover<i class="fas fa-arrow-right"></i></button></a>
            </div>
        </div>
        <!--/Lagartos golf-->
        <!--Ixmukané-->
        <div class="row project ixmukane_project" data-aos="fade-up">
            <div class="col-lg-8 project_img project_img2" data-aos="fade-right">
                <img src="img/index/ixmukane.png" alt="">
            </div>
            <div class="col-lg-4 project_content project_content2" data-aos="fade-left">
                <h4>Ixmukané</h4>
                <p>Website a company that offers traditional Mexican medicine as a way of healing.</p>
                <a href="http://ixmukane.mx/index.php" target="_blank"><button>Discover<i class="fas fa-arrow-right"></i></button></a>
            </div>
        </div>
        <!--/Ixmukané-->
        <!--Península Golf Store-->
        <div class="row project peninsula_project" data-aos="fade-up">
            <div class="col-lg-8 project_img" data-aos="fade-left">
                <img src="img/index/peninsula.png" alt="">
            </div>
            <div class="col-lg-4 project_content" data-aos="fade-right">
                <h4>Península Golf Store</h4>
                <p>Website for a golf store in Mexico that has an online store as well.</p>
                <a href="http://pgs.mx/" target="_blank"><button>Discover<i class="fas fa-arrow-right"></i></button></a>
            </div>
        </div>
        <!--/Península Golf Store-->
        <!--CECIMINV-->
        <div class="row project ceciminv_project" data-aos="fade-up">
            <div class="col-lg-8 project_img project_img2" data-aos="fade-right">
                <img src="img/index/ceciminv.png" alt="">
            </div>
            <div class="col-lg-4 project_content project_content2" data-aos="fade-left">
                <h4>CECIMINV</h4>
                <p>Website for a doctor who is looking to increase his exposure in Merida for him to have more patients.</p>
                <a href="http://www.ceciminv.com.mx/index.php" target="_blank"><button>Discover<i class="fas fa-arrow-right"></i></button></a>
            </div>
        </div>
        <!--/CECIMINV-->
        <!--Hernia Clinic-->
        <div class="row project hernia_project" data-aos="fade-up">
            <div class="col-lg-8 project_img" data-aos="fade-left">
                <img src="img/index/herniaclinic.png" alt="">
            </div>
            <div class="col-lg-4 project_content" data-aos="fade-right">
                <h4>Hernia Clinic</h4>
                <p>Website for a Clinic that is looking to be the most renowned one in Merida</p>
                <a href="http://herniaclinicmexico.com.mx/" target="_blank"><button>Discover<i class="fas fa-arrow-right"></i></button></a>
            </div>
        </div>
        <!--/Hernia Clinic-->
    </div>
    <!----------/Our projetcs---------->

    <!----------Pricing---------->
    <div>
        <div class="pricing_frame" id="pricing">
            <h3 data-aos="fade-left">Pricing</h3>
        </div>
        <div class="pricing_content">
            <div class="row">
                <div class="col-lg-4">
                    <div class="price_card" data-aos="fade-up">
                        <div class="price_top">
                            <h5>Landing page</h5>
                        </div>
                        <div class="price_circle">
                            <p class="price_from">from mxn.</p>
                            <p class="price">1000$</p>
                        </div>
                        <div class="price_content">
                            <p>Responsive design</p>
                            <p>Single page</p>
                            <a href="#contact"><button>Get Started</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="price_card" data-aos="fade-up">
                        <div class="price_top">
                            <h5>Web App</h5>
                        </div>
                        <div class="price_circle">
                            <p class="price_from">from mxn.</p>
                            <p class="price">20000$</p>
                        </div>
                        <div class="price_content">
                            <p>Responsive design</p>
                            <p>Several informative pages</p>
                            <p>Contact form</p>
                            <p>Interactive pages</p>
                            <a href="#contact"><button>Get Started</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="price_card" data-aos="fade-up">
                        <div class="price_top">
                            <h5>Informative website</h5>
                        </div>
                        <div class="price_circle">
                            <p class="price_from">from mxn.</p>
                            <p class="price">15000$</p>
                        </div>
                        <div class="price_content">
                            <p>Responsive design</p>
                            <p>Several informative pages</p>
                            <p>Contact form</p>
                            <a href="#contact"><button>Get Started</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----------/Pricing---------->
    <!----------Contact---------->
    <div class="contact" id="contact">
        <h3>Let us make your vision a reality</h3>
        <?php if(!empty($errors)): ?>
            <div class="panel">
                <ul><li><?php echo implode('</li><li>', $errors) ?></li></ul>
            </div>
        <?php endif; ?>
        <div class="contact_form">
            <form action="php/contact.php" data-aos="fade-up" method="POST">
                <input type="text" name="f_name" placeholder="Nombre" <?php echo isset($fields['f_name']) ? 'value="' . e($fields['f_name']). '"' : '';?>>
                <input type="text" name="l_name" placeholder="Apellido" <?php echo isset($fields['l_name']) ? 'value="' . e($fields['l_name']). '"' : '';?>>
                <input type="text" name="email" placeholder="E-mail" <?php echo isset($fields['email']) ? 'value="' . e($fields['email']). '"' : '';?>>
                <input type="text" name="cell" placeholder="Teléfono" <?php echo isset($fields['cell']) ? 'value="' . e($fields['cell']). '"' : '';?>>
                <textarea name="message" id="" cols="30" rows="10" placeholder="Mensaje" <?php echo isset($fields['message']) ? 'value="' . e($fields['message']). '"' : '';?>></textarea>
                <button class="submit" type="submit" value="Enviar">SEND<i class="fas fa-arrow-right"></i></button>
            </form>
        </div>
        <div class="contact_info">
            <div>
                <i class="fas fa-2x fa-mobile-alt contact_icon"></i>
                <p>999 365 4620</p>
            </div>
            <div>
                <i class="far fa-2x fa-envelope contact_icon"></i>
                <p>abraham.cepeda@dufuture.mx</p>
            </div>
        </div>
    </div>
    <!----------/Contact---------->
    <!----------Goback---------->
    <div class="goback"><a href="#header"><i class="fas fa-angle-up fa-3x"></i></a></div>
    <!----------/Goback---------->
</body>
<!---------------Javascript----------------->
<!-----------Main js---------->
<script src="js/main.js"></script>
<!--Smooth scroll events-->
<script type="text/javascript">
    $(document).ready(function () {
        // Add smooth scrolling to all links
        $("a").on('click', function (event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 2000, function () {

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            } // End if
        });
    });
</script>
<!--Smooth scroll events-->
<script type="text/javascript">
    $(document).ready(function () {
        // Add smooth scrolling to all links
        $("a").on('click', function (event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 2000, function () {

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            } // End if
        });
    });
</script>
<!--AOS animations controller-->
<script src="js/aos copia 2.js"></script>
<script type="text/javascript">
    AOS.init({
        easing: 'ease-in-out-back',
        disable: 'mobile',
        duration: 1000,
        delay: 250
    });
</script>
</html>
<?php
	unset($_SESSION['errors']);
	unset($_SESSION['fields']);
?>