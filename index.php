<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> ADVAITH IMPEX </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark">
        <div class="row py-2 px-lg-5">
            <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center text-white">
                    <small><i class="fa fa-phone-alt mr-2"></i>+91 9443215836</small>
                    <small class="px-3">|</small>
                    <small><i class="fa fa-envelope mr-2"></i>luqman.v.a@gmail.com</small>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-white px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-white pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <style>
        .drop {
            position: absolute;
            left: 100%;
            top: 0%;
            display: none;
        }

        .new-drop1:hover .drop {
            display: block;
        }
    </style>

    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
            <a href="index.html" class="navbar-brand ml-lg-3">
                <img src="img/logo.jpg" height="100px" width="100px" alt="">
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto p-4">
                    <a href="index.php" class="nav-item nav-link  ">Home</a>
                    <a href="about.php" class="nav-item nav-link">About</a>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Products</a>
                        <div class="dropdown-menu text-capitalize">
                            <?php

                            include "config.php";
                            $sel = "SELECT * FROM `pro`  ";
                            $q = mysqli_query($con, $sel);
                            while ($row = mysqli_fetch_array($q)) {


                            ?>
                                <a href="single.php?slug=<?php echo $row['slug'] ?>" class="dropdown-item"><?php echo $row['name'] ?></a>
                            <?php } ?>
                        </div>
                    </div>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                    <a href="flipbook.php" class="nav-item nav-link">Flipbook</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div id="carouselExample" class="carousel slide carousel-fad">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/banner/1.jpg" class="d-block w-100" alt="...">
                <!-- <div class="carousel-caption  " style="top: 20%;">
                    <div class="row justify-content-center " style="height: 50vh;">
                        <div
                            class="col-8 rounded bg-white py-5 d-flex align-items-center justify-content-center h-100 ">
                           
                            <div class="content_box">
                                <h4 class="display-3 animate__animated animate__fadeInDown animate__slow	">Christmas
                                </h4>
                                <p class="text-dark animate__animated animate__fadeInDown">Celebrate the season with our
                                    beautiful Christmas bouquets. Each bouquet is artfully arranged with seasonal blooms
                                    and accents such as vibrant reds, deep greens, and golden touches, designed to bring
                                    joy and festivity to your home. Ideal for holiday table settings or as a thoughtful
                                    gift.</p>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="carousel-item">
                <img src="img/banner/2.jpg" class="d-block w-100" alt="...">
                <!-- <div class="carousel-caption  " style="top: 20%;">
                    <div class="row justify-content-center " style="height: 50vh;">
                        <div
                            class="col-8 rounded bg-white py-5 d-flex align-items-center justify-content-center h-100 ">
                             
                            <div class="content_box">
                                <h4 class="display-3  animate__animated animate__fadeInDown animate__slow">Bouquets</h4>
                                <p class="text-dark animate__animated animate__fadeInDown">Our dried flower bouquets are
                                    meticulously crafted to bring lasting beauty and charm to any space. From romantic
                                    arrangements to vibrant mixes, each bouquet is designed to captivate and complement
                                    your style. Perfect for gifting or as a stunning centerpiece.</p>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="carousel-item">
                <img src="img/banner/3.jpg" class="d-block w-100" alt="...">
                <!-- <div class="carousel-caption  " style="top: 20%;">
                    <div class="row justify-content-center " style="height: 50vh;">
                        <div
                            class="col-8 rounded bg-white py-5 d-flex align-items-center justify-content-center h-100 ">
                            
                            <div class="content_box">
                                <h4 class="display-3 animate__animated animate__fadeInDown animate__slow">Wreaths</h4>
                                <p class="text-dark animate__animated animate__fadeInDown">Celebrate the seasons with
                                    our handcrafted dried flower wreaths. Ideal for door displays or wall art, our
                                    wreaths are made with a variety of flowers, ensuring that each piece is a unique
                                    expression of beauty and craftsmanship.</p>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Header End -->

    <section class="margin position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 my-5">
                    <div class="pera-content">
                        <p class="display-5 p-0 m-0 text-primary ">Welcome to</p>
                        <h2>Hameediya Farms</h2>
                        <div class="border border-5 border-dark   " style="width: 15%;"></div>

                        <p class="mt-3 text-dark">Welcome to <a href="/">Hameediya farms</a> where we bring the finest,
                            handpicked ingredients right to your kitchen. Our mission is to provide you with a premium
                            selection of spices, seeds, and grains that elevate your cooking experience and enhance the
                            flavor of every dish.</p>
                        <p>At <a href="/">Hameediya farms</a> we understand that quality matters. That's why we
                            carefully source and select our products, including Idli Rice, Black Pepper, Green Coffee
                            Beans, Dry Red Chilli, Sesame Seeds, Fennel Seeds, Black Sesame Seeds, and Cumin Seeds. Each
                            ingredient is chosen for its purity, flavor, and authenticity, ensuring that you receive
                            only the best.</p>

                        <a href="" class="btn btn-primary px-4 rounded-pill"> Read More</a>

                    </div>
                </div>
                <div class="col-lg-6 my-5 ">
                    <div class="clip-image">
                        <img src="img/product/red-chilli.jpg" class="rounded border" height="500px" width="100%" style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
        <img src="img/png-image/rice3.png" class="position-absolute top-0 start-0 d-none d-md-block" height="100px"
            width="100px" alt="">

    </section>
    <!-- same code -->





    <section class="choose-us margin position-relative">
        <div class="container ">
            <div class="row justify-content-center my-5">
                <div class="col-7">
                    <h3 class="text-white fs-1 text-center">Why Choose Us</h3>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 my-3">
                    <div class="icon_box  p-3  h-100 bg-white text-center py-5 rounded shadow-lg">
                        <div class="box">
                            <img src="img/png-image/1.png" height="70px" width="70px" alt="">

                        </div>
                        <h5>Quick Support</h5>
                        <p>We understand that your time is valuable. That's why we offer prompt and responsive support
                            to address any questions or concerns you may have. Our knowledgeable team is available to
                            assist you with any inquiries, ensuring that you receive timely and effective solutions.
                            Your satisfaction is our priority, and we are here to make your experience smooth and
                            hassle-free.</p>
                    </div>
                </div>
                <div class="col-lg-4 my-3">
                    <div class="icon_box p-3  h-100 bg-white text-center py-5 rounded shadow-lg">
                        <div class="box">
                            <img src="img/png-image/2.png" height="70px" width="70px" alt="">

                        </div>
                        <h5>Quality Service</h5>
                        <p>Excellence is at the heart of everything we do. We are committed to providing you with
                            top-notch service that reflects our high standards of quality. From the moment you place an
                            order to the delivery of your products, we ensure that every step of the process meets our
                            rigorous quality benchmarks. Our goal is to exceed your expectations and deliver a service
                            experience that is both professional and personalized.</p>
                    </div>
                </div>
                <div class="col-lg-4 my-3">
                    <div class="icon_box  p-3 h-100 bg-white text-center py-5 rounded shadow-lg">
                        <div class="box">
                            <img src="img/png-image/3.png" height="70px" width="70px" alt="">

                        </div>
                        <h5>100% Satisfaction</h5>
                        <p>Your complete satisfaction is our ultimate goal. We stand by the quality of our products and
                            services, and we are dedicated to ensuring that you are fully satisfied with every aspect of
                            your experience. If for any reason you are not completely happy with your purchase or our
                            service, please let us know. We are committed to resolving any issues and making things
                            right, because your happiness is what drives us.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class=" rounded-circle  bg-white position-absolute translate-middle  top-0 start-50">
            <img src="img/png-image/rice1.png" class="" height="150px" width="150px" alt="">
        </div>

    </section>

    <section>
        <div class="container">
            <div class="row justify-content-center my-5">
                <div class="col-12">
                    <h3 class="text-primary fs-1 text-center">Our Products</h3>
                    <section class="margin">

                        <div class="row justify-content-center">
                            <div class="col-lg-12 text-center text-capitalize">
                                <div class="owl-carousel related-carousel  " style="padding: 0 30px;">
                                    <?php
                                    include "config.php";
                                    $sel = "SELECT * FROM `pro`    ";
                                    $q = mysqli_query($con, $sel);
                                    while ($row = mysqli_fetch_array($q)) {


                                    ?>
                                        <div class="text-decoration-none">
                                            <div class="courses-list-item     rounded d-block overflow-hidden mb-2" style="border:3px solid black">
                                                <img class="img-fluid" src="<?php echo $row['image'] ?>" alt="">

                                            </div>
                                            <h4 class="text-dark  "><?php echo $row['name'] ?></h4>
                                            <a href="" class="btn btn-primary btn-sm">Enquiry</a>
                                            <a href="" class="btn btn-outline-dark btn-sm px-4">Detail</a>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>

    <style>
        .fixed-bg {
            background-image: linear-gradient(#000000bf, #000000b8), url(img/banner/green-beeg.jpg);
            background-attachment: fixed;
            background-size: cover;
            padding: 4rem 0rem;
        }
    </style>
    <section class="fixed-bg">
        <div class="container">
            <h3 class="text-white fs-1 text-center">Hameediya Farms in Numbers</h3>
            <!-- <h3 class="text-center text-white fs-1"></h3> -->
            <div class="row">
                <div class="col-lg-3 my-4">
                    <div class="text-center h-100 bg-white p-3 rounded">
                        <h3 class="display-5">19+</h3>
                        <p class="fs-5 ">Years in Rice
                            Manufacturing</p>
                    </div>
                </div>
                <div class="col-lg-3 my-4">
                    <div class="text-center h-100 bg-white p-3 rounded">
                        <h3 class="display-5">19+</h3>
                        <p class="fs-5">Years of <br>
                            Rice Trading</p>
                    </div>
                </div>
                <div class="col-lg-3 my-4">
                    <div class="text-center h-100 bg-white p-3 rounded">
                        <h3 class="display-5">19+</h3>
                        <p class="fs-5">Containers
                            Exported Annually</p>
                    </div>
                </div>
                <div class="col-lg-3 my-4">
                    <div class="text-center h-100 bg-white p-3 rounded">
                        <h3 class="display-5">456MT</h3>
                        <p class="fs-5">Production <br>
                            Annually</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- our gallary -->

    <section class="margin ">
        <div class="container">
            <h3 class="text-dark fs-1 text-center">Our Farm Gallery</h3>
            <!-- <h4 class="display-6 text-center">Our Farm Gallery</h4> -->
            <div class="row">
                <div class="col-lg-4 col-md-6 my-3">
                    <video src="img/v1.mp4" class="border border-4 border-dark rounded" autoplay muted loop height="400px" width="100%" style="object-fit: cover;"></video>
                </div>
                <div class="col-lg-4 col-md-6 my-3">
                    <video src="img/v7.mp4" class="border border-4 border-dark rounded" autoplay muted loop height="400px" width="100%" style="object-fit: cover;"></video>
                </div>
                <div class="col-lg-4 col-md-6 my-3">
                    <video src="img/v3.mp4" class="border border-4 border-dark rounded" autoplay muted loop height="400px" width="100%" style="object-fit: cover;"></video>
                </div>
                <div class="col-lg-4 col-md-6 my-3">
                    <video src="img/v4.mp4" class="border border-4 border-dark rounded" autoplay muted loop height="400px" width="100%" style="object-fit: cover;"></video>
                </div>
                <div class="col-lg-4 col-md-6 my-3">
                    <video src="img/v5.mp4" class="border border-4 border-dark rounded" autoplay muted loop height="400px" width="100%" style="object-fit: cover;"></video>
                </div>
                <div class="col-lg-4 col-md-6 my-3">
                    <video src="img/v6.mp4" class="border border-4 border-dark rounded" autoplay muted loop height="400px" width="100%" style="object-fit: cover;"></video>
                </div>
                <!-- <div class="col-lg-4 my-3">
                    <video src="img/v7.mp4" class="border border-4 border-dark rounded" autoplay muted loop height="400px" width="100%" style="object-fit: cover;"></video>
                </div>
                <div class="col-lg-4 my-3">
                    <video src="img/v8.mp4" class="border border-4 border-dark rounded" autoplay muted loop height="400px" width="100%" style="object-fit: cover;"></video>
                </div> -->
            </div>
        </div>
    </section>



    <!-- Testimonial Start -->
    <div class=" " style="background-color: #72391e; padding:2rem 0rem">
        <div class="container-fluid py-5">
            <div class="container">
                <div class="section-title text-center">
                    <h4 class=" text-uppercase text-white" style="letter-spacing: 5px;">Testimonial</h4>
                    <h1 class="display-4 text-white">Our Clients Say</h1>
                </div>
                <div class="owl-carousel testimonial-carousel  "  >
                    <div class="testimonial-item p-3 border bg-white  m-3  d-flex align-items-center rounded " style="height: 300px;">
                        <div class="">
                            <p class="m-0">“I’ve been using the idli rice from Hameediya farms for years, and it never disappoints. The rice ferments beautifully and makes the best dosas too. Quality that you can taste!”</p>
                            <div class="ml-3">

                                <i>- Rajesh K.</i>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-white  p-3 border m-3  d-flex align-items-center rounded " style="height: 300px;">

                        <div class="">
                            <p class="m-0">I love cooking, and using Hameediya farms pepper has taken my dishes to the next level. The flavor is intense yet balanced, and it grinds perfectly. A pantry staple in my kitchen!</p>
                            <i>- Anish</i>
                        </div>

                    </div>
                    <div class="testimonial-item  bg-white p-3 border m-3  d-flex align-items-center rounded " style="height: 300px;">

                        <div class="">
                            <p class="m-0">I am a coffee aficionado, and I must say, the coffee seeds from Hameediya farms have completely transformed my morning routine. The flavors are rich and nuanced, just as described. I look forward to trying more blends!</p>
                            <i>- Vrun K.</i>
                        </div>
                    </div>
                    <div class="testimonial-item bg-white  p-3 border m-3  d-flex align-items-center rounded " style="height: 300px;">

                        <div class="">
                            <p class="m-0">I love cooking, and using Hameediya farms pepper has taken my dishes to the next level. The flavor is intense yet balanced, and it grinds perfectly. A pantry staple in my kitchen!</p>
                            <i>- Anish</i>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->




    <style>
        .footer {
            background-color: black;
        }
    </style>

    <!-- Footer Start -->
    <div class="container-fluid footer text-white mt-5 pt-5 px-0   ">
        <div class="row mx-0 pt-5 px-sm-3 px-lg-5 mt-4">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Get In Touch</h4>
                <p><i class="fa fa-map-marker-alt mr-2"></i>134,B Dindigul Road , Tamil-Nadu ,
                    India-639207
                </p>
                <p><i class="fa fa-phone-alt mr-2"></i>+91 9443215836</p>
                <p class="m-0"><i class="fa fa-envelope mr-2"></i>luqman.v.a@gmail.com</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Follow Us</h4>

                <div class="d-flex justify-content-start">
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square" href="#"><i class="fab fa-instagram"></i></a>
                </div>


            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">About Us</h4>
                <p class="" style="text-align: justify;">At <b class="">Hameediya Farms </b>, we specialize in bringing you the finest quality coffee seeds and pepper products sourced from the best regions around the world. Whether you're a coffee enthusiast or a culinary aficionado, our carefully curated selection promises to elevate your experience.</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Newsletter</h4>

                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-light" style="padding: 25px;" placeholder="Your Email">
                        <div class="input-group-append">
                            <button class="btn btn-primary font-weight-bold px-3">Sign Up</button>
                        </div>
                    </div>
                </div>
                <a href="trust.pdf" class="mt-3 mt-3 d-block "><img src="img/trust.jpg" height="100px" width="100px" alt="trust sheel" /></a>
            </div>
        </div>
        <div class="container-fluid text-center text-white border-top mt-4 py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
            <p class="mb-2 text-white">Copyright &copy; <a class="font-weight-bold " href="#">Hameediya Farms</a>. All Rights Reserved.</a></p>
            <p class="m-0 text-white">Designed by <a class="font-weight-bold" href="https://web2export.com">Web2Export.com</a></p>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary rounded-0 btn-lg-square back-to-top"><i
            class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>