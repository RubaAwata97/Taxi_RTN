<!DOCTYPE html>
<html>

<?php include 'sections/head.php' ?>

<body>

    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="#">
                        <span>
                            TAXI
                        </span>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                            <ul class="navbar-nav  ">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#about-section"> About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#services-section"> Services </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#contact-us-section">Contact Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#contact-us-section"><img class="change-lang-icon"
                                            src="images/English.png"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->
        <!-- slider section -->
        <section class=" slider_section ">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-7 ">
                        <div class="box">
                            <div class="detail-box">
                                <h4>
                                    Welcome to
                                </h4>
                                <h1>
                                    TAXI
                                </h1>
                            </div>
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">

                                        <div class="img-box">
                                            <img src="images/hero-1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="img-box">
                                            <img src="images/hero-2.png" alt="">
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="img-box">
                                            <img src="images/hero-3.png" alt="">
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="img-box">
                                            <img src="images/hero-4.png" alt="">
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="img-box">
                                            <img src="images/hero-5.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5 " id="book-section">
                        <div class="slider_form">
                            <h4>
                                Get A Taxi Now
                            </h4>
                            <form action="">
                                <input type="text" placeholder="Car Type">
                                <input type="text" placeholder="Pick Up Location">
                                <input type="text" placeholder="Drop Location">
                                <div class="btm_input">
                                    <input type="text" placeholder="Your Phone Number">
                                    <button onclick="reserveTaxiPage()">Book Now</button>
                                </div>
                            </form>
                            <h4>
                                OR
                            </h4>
                            <div class="book-form__call-us-buttons">
                                <div class="book-form__call-us-buttons-item">
                                    <a href="tel:01008434175"><i class="fa-solid fa-phone"></i></a>
                                </div>
                                <div class="book-form__call-us-buttons-item">
                                    <a href="mailto:someone@example.com"><i class="fa-solid fa-envelope"></i></a>
                                </div>
                                <div class="book-form__call-us-buttons-item">
                                    <a href="whatsapp://send?abid=+201008434175"><i class="fab fa-whatsapp"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- end slider section -->
    </div>

    <!-- about section -->

    <section class="about_section layout_padding" id="about-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-5 offset-lg-2 offset-md-1">
                    <div class="detail-box">
                        <h2>
                            About <br>
                            Taxi Company
                        </h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniaLorem ipsum dolor sit amet, consectetur
                            adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                            ad minim veniamm
                        </p>
                        <a href="#book-section">
                            Try It!
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="img-box">
                        <img src="images/about-img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end about section -->

    <!-- service section -->

    <section class="service_section layout_padding" id="services-section">
        <div class="container">
            <div class="heading_container">
                <h2>
                    Our <br>
                    Taxi Services
                </h2>
            </div>
            <div class="service_container">
                <div class="box">
                    <div class="img-box">
                        <img src="images/delivery-man.png" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Private Driver
                        </h5>
                        <p>
                            Lorem ipsum dolor sit ame
                        </p>
                        <a href="#book-section">
                            Try It!
                        </a>
                    </div>
                </div>
                <div class="box">
                    <div class="img-box">
                        <img src="images/airplane.png" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Airport Transfer
                        </h5>
                        <p>
                            Lorem ipsum dolor sit ame
                        </p>
                        <a href="#book-section">
                            Try It!
                        </a>
                    </div>
                </div>
                <div class="box">
                    <div class="img-box">
                        <img src="images/backpack.png" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Luggage Transfer
                        </h5>
                        <p>
                            Lorem ipsum dolor sit ame
                        </p>
                        <a href="#book-section">
                            Try It!
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end service section -->

    <!-- news section -->

    <section class="news_section layout_padding">
        <div class="container">
            <div class="heading_container">
                <h2>
                    Our <br>
                    Service Types
                </h2>
            </div>
            <div class="news_container">
                <div class="box">
                    <div class="img-box">
                        <img src="images/business_class_halfprofile_right.png" alt="">
                    </div>
                    <div class="detail-box">
                        <h6>
                            Business Class
                        </h6>
                        <div class="service-type__counts">
                            <div class="service-type__counts-item">
                                <i class="fa-solid fa-user"></i><span>max. 3</span>
                            </div>
                            <div class="service-type__counts-item">
                                <i class="fa-solid fa-suitcase"></i><span>max. 2</span>
                            </div>
                        </div>
                        <p>
                            Most popular - Mercedes-Benz E-Class or similar
                        </p>
                    </div>
                </div>
                <div class="box">
                    <div class="img-box">
                        <img src="images/van_halfprofile_right.png" alt="">
                    </div>
                    <div class="detail-box">
                        <h6>
                            Business Van/SUV
                        </h6>
                        <div class="service-type__counts">
                            <div class="service-type__counts-item">
                                <i class="fa-solid fa-user"></i><span>max. 5</span>
                            </div>
                            <div class="service-type__counts-item">
                                <i class="fa-solid fa-suitcase"></i><span>max. 5</span>
                            </div>
                        </div>
                        <p>
                            More spacious - Mercedes-Benz V-Class or similar
                        </p>
                    </div>
                </div>
                <div class="box">
                    <div class="img-box">
                        <img src="images/first_class_halfprofile_right.png" alt="">
                    </div>
                    <div class="detail-box">
                        <h6>
                            First Class
                        </h6>
                        <div class="service-type__counts">
                            <div class="service-type__counts-item">
                                <i class="fa-solid fa-user"></i><span>max. 3</span>
                            </div>
                            <div class="service-type__counts-item">
                                <i class="fa-solid fa-suitcase"></i><span>max. 2</span>
                            </div>
                        </div>
                        <p>
                            Most luxurious - Mercedes-Benz S-Class or similar
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end news section -->

    <!-- client section -->

    <section class="client_section layout_padding-bottom" id="clients-section">
        <div class="container">
            <div class="heading_container">
                <h2>
                    What <br>
                    Client <br>
                    Says
                </h2>
            </div>
            <div class="client_container">
                <div class="carousel-wrap ">
                    <div class="owl-carousel">
                        <div class="item">
                            <div class="box">
                                <div class="img-box">
                                    <img src="images/client-1.png" alt="">
                                </div>
                                <div class="detail-box">
                                    <h3>
                                        Aliqua
                                    </h3>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et amet, consectetur adipiscing
                                    </p>
                                    <img src="images/quote.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="box">
                                <div class="img-box">
                                    <img src="images/client-2.png" alt="">
                                </div>
                                <div class="detail-box">
                                    <h3>
                                        Liqua
                                    </h3>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et amet, consectetur adipiscing
                                    </p>
                                    <img src="images/quote.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end client section -->

    <!-- contact section -->

    <section class="contact_section layout_padding-bottom" id="contact-us-section">
        <div class="container">
            <div class="heading_container">
                <h2>
                    Any Problems <br>
                    Any Questions
                </h2>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5  offset-md-1">
                    <div class="contact_form">
                        <h4>
                            Get In touch
                        </h4>
                        <form action="">
                            <input type="text" placeholder="Name">
                            <input type="text" placeholder="Phone Number">
                            <input type="text" placeholder="Message" class="message_input">
                            <button>Send</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 px-0">
                    <div class="img-box">
                        <img src="images/contact-img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact section -->

    <!-- why section -->

    <section class="why_section layout_padding">
        <div class="container">
            <div class="heading_container">
                <h2>
                    Why <br>
                    Choose Us
                </h2>
            </div>
            <div class="why_container">
                <div class="box">
                    <div class="img-box">
                        <img src="images/delivery-man-white.png" alt="" class="img-1">
                        <img src="images/delivery-man-black.png" alt="" class="img-2">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Best Drivers
                        </h5>
                        <p>
                            It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its
                        </p>
                    </div>
                </div>
                <div class="box">
                    <div class="img-box">
                        <img src="images/shield-white.png" alt="" class="img-1">
                        <img src="images/shield-black.png" alt="" class="img-2">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Safe and Secure
                        </h5>
                        <p>
                            It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its
                        </p>
                    </div>
                </div>
                <div class="box">
                    <div class="img-box">
                        <img src="images/repairing-service-white.png" alt="" class="img-1">
                        <img src="images/repairing-service-black.png" alt="" class="img-2">
                    </div>
                    <div class="detail-box">
                        <h5>
                            24x7 support
                        </h5>
                        <p>
                            It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its
                        </p>
                    </div>
                </div>
                <div class="box">
                    <div class="img-box">
                        <img src="images/price-white.png" alt="" class="img-1">
                        <img src="images/price-black.png" alt="" class="img-2">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Affordable Price
                        </h5>
                        <p>
                            It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end why section -->

    <?php include 'sections/footer.php' ?>
    
    <?php include 'sections/scripts.php' ?>

    <script>
        function reserveTaxiPage() {
            window.location.href = 'reserve';
        }
    </script>
</body>

</html>