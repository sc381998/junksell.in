<?php
if (!defined('fileIncluded')) {
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php echo $title; ?></title>
        <meta name="keywords" content="<?php echo $metakey; ?>" >
        <meta name="description" content="<?php echo $metades; ?>" >
        <link rel="icon" href="assets/img/Fevicon.png" type="image/png">
        <link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,500,500i,600,700,800,900|Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/all.min.css">
        <link href="assets/css/owl.carousel.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="assets/css/style.css">

    </head>
    <body class="bg-shape">
        <!--================ Header Menu Area start =================-->
        <header class="header_area">
            <div class="main_menu">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container box_1620">
                        <a class="navbar-brand logo_h" href="index.html"><img src="assets/img/home/mt-1733-home-logo.png" alt=""></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                            <ul class="nav navbar-nav menu_nav justify-content-end">
                                <?php
                                foreach ($menuarray as $key => $val) {
                                    $liclassname = 'class="nav-item"';
                                    $aclassname = 'class="nav-link"';
                                    if ($key == "index") {
                                        ?>
                                        <li <?php echo $liclassname; ?>><a <?php echo $aclassname; ?> href="index.php"><?php echo $val['name']; ?></a></li>                                        </li>
                                        <?php
                                    } else {
                                        ?>
                                        <li <?php echo $liclassname; ?>><a <?php echo $aclassname; ?> href="<?php echo $key; ?>.php"><?php echo $val['name']; ?></a></li>  
                                        <?php
                                    }
                                }
                                ?>
                            </ul>

                            <div class="nav-right text-center text-lg-right py-4 py-lg-0">
                                <button class="button border-0 mt-0" type="button" data-toggle="modal" data-target="#myModal">₹ SELL</button>
                            </div>
                        </div> 
                    </div>
                </nav>
            </div>
        </header>

        <!--================Header Menu Area =================-->


        <!--================Hero Banner Area Start =================-->

        <section class="hero-banner">
            <div class="owl-carousel align-items-center owl-theme" id="topslide">
                <div class="owl-slide d-flex align-items-center cover img-fluid img-responsive" style="background: url('assets/img/header1.jpg'); background-size: cover;">
                    <div class="container"> 
                        <div class="row justify-content-center justify-content-md-start">
                            <div class="col-10 col-md-6 static">
                                <div class="owl-slide-text">
                                    <div class="owl-slide-animated owl-slide-title">
                                        <!-- content here -->
                                        <h1>Welcome to The Junk Sell!</h1>
                                    </div>
                                    <div class="owl-slide-animated owl-slide-subtitle mb-3">
                                        <!-- content here -->
                                        <p>Junk Sell is a doorstep service intends to help out people to sell their household junks like Newspaper, iron, plastic books, copies, metal etc. and get paid for it. It is intended to recycle, reuse, reduce up-cycle and resell the scrap</p>
                                    </div>
                                    <a class="button owl-slide-animated owl-slide-cta" href="our-company.php" role="button">
                                        <!-- content here -->
                                        Download our app
                                    </a>
                                </div><!-- /owl-slide-text -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-slide d-flex align-items-center cover img-fluid img-responsive" style="background: url('assets/img/header1.jpg'); background-size: cover;">
                    <div class="container"> 
                        <div class="row justify-content-center justify-content-md-start">
                            <div class="col-10 col-md-6 static">
                                <div class="owl-slide-text mb-5 mb-md-0">
                                    <div class="owl-slide-animated owl-slide-title">
                                        <!-- content here -->
                                        <h1> Junk Sell!</h1>
                                    </div>
                                    <div class="owl-slide-animated owl-slide-subtitle mb-3">
                                        <!-- content here -->
                                        <p>Junk Sell is a doorstep service intends to help out people to sell their household junks like Newspaper, iron, plastic books, copies, metal etc. and get paid for it. It is intended to recycle, reuse, reduce up-cycle and resell the scrap</p>
                                    </div>
                                    <a class="button button-hero mt-4owl-slide-animated owl-slide-cta" href="our-company.php" role="button">
                                        <!-- content here -->
                                        Download our app
                                    </a>
                                </div><!-- /owl-slide-text -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--================Hero Banner Area End =================-->

        <?php
        if (is_readable("./pages/$pagefile.php")) {
            include ("./pages/$pagefile.php");
        } else {
            echo $sys->showError('danger', '! 404 file not found. Please try after some time');
        }
        ?>



        <!-- ================ start footer Area ================= -->
        <footer class="footer-area">
            <div class="container">
                <div class="footer-bottom">
                    <div class="row align-items-center">
                        <p class="col-lg-8 col-sm-12 footer-text m-0 text-center text-lg-left"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made by <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://apexinvention.com" target="_blank">Apex Invention</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        <div class="col-lg-4 col-sm-12 footer-social text-center text-lg-right">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div id="myModal" role="dialog"  class="modal fade">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content search-wrapper">
                    <div class="modal-header">
                        <h2>Sell your scrap</h2>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form class="search-form" action="#">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Enter your name">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="number" class="form-control" placeholder="Mobile No.">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Full Address">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="date" class="form-control" placeholder="Date">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" class="form-control"  placeholder="Eg.- House/Flat No, Society/Apartment Name">
                                </div>
                            </div>

                            <div class="form-group">
                                <button class="button border-0 mt-3" type="submit">₹ SELL</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!-- ================ End footer Area ================= -->

        <script src="assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/js/owl-carousel.min.js" type="text/javascript"></script>
        <script src="assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <!--<script src="assets/js/skrollr.min.js"></script>-->
        <script src="assets/js/main.js"></script>
              <!--<script>var plugin_path = 'assets/js/';</script>-->
        <script>
                                $(document).ready(function () {
                                    $("#footer-scroll").owlCarousel({
                                        items: 5,
                                        loop: true,
                                        nav: false,
                                        margin: 10,
                                        autoplay: true,
                                        autoplayHoverPause: true,
                                        autoplayTimeout: 300,
                                        smartSpeed: 500

                                    });
                                });

                                $("#topslide").on("initialized.owl.carousel", () => {
                                    setTimeout(() => {
                                        $(".owl-item.active .owl-slide-animated").addClass("is-transitioned");
                                        $("section").show();
                                    }, 200);
                                });

                                const $owlCarousel = $("#topslide").owlCarousel({
                                    items: 1,
                                    loop: true,
                                    autoplay: true,
                                    autoplayHoverPause: true,
                                    autoplayTimeout: 300,
                                    smartSpeed: 500,
                                    nav: true,
                                    navText: [
                                        '<img class="img-fluid" src="assets/img/leftarrow.png" />',
                                        '<img class="img-fluid" src="assets/img/rightarrow.png" />',
                                    ]
                                });

                                $owlCarousel.on("changed.owl.carousel", e => {
                                    $(".owl-slide-animated").removeClass("is-transitioned");

                                    const $currentOwlItem = $(".owl-item").eq(e.item.index);
                                    $currentOwlItem.find(".owl-slide-animated").addClass("is-transitioned");

                                });
        </script>

    </body>
</html>