<!doctype html>
<html lang="en">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" href="{{ asset('css/style.css')}}">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<!--Font google-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter&family=Poppins:wght@400;500;700&display=swap"
    rel="stylesheet">

<!-- My Style -->
<link rel="stylesheet" href="{{ asset('css/style.css')}}">

<!-- Logo -->
<link rel="icon" href="{{ asset('img/logo_woodka.png')}}" type="image/png">

<title>Woodka</title>

</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top"
        style="background-color: rgba(255, 255, 255, 0.9); margin-bottom: 20px;">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('img/logo_woodka.png')}}" width="30" class="d-inline-block align-top">
                Woodka
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <div class="d-lg-flex align-items-center">
                        <a class="nav-link mx-2" href="#">Home</a>
                        <a class="nav-link mx-2" href="#about">About</a>
                        <a class="nav-link mx-2" href="#products">Products</a>
                        <a class="nav-link mx-2" href="#footer">Contact Us</a>
                        <a class="nav-link mx-2" href="#myaccount">My Account</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>


    <!-- Hero Slider -->
    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel" style="margin-top: 55px;">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active" data-interval="10000">
                <a href="https://woodka.fun/collections/best-combination">
                    <img src="{{ asset('img/welcome.png')}}" class="d-block w-100" alt="Slide 1">
                </a>
            </div>
            <div class="carousel-item" data-interval="2000">
                <a href="https://woodka.fun/products/mini-loca-sonokeling-x-csrl">
                    <img src="{{ asset('img/hero_slide1.png')}}" class="d-block w-100" alt="Slide 2">
                </a>
            </div>
            <div class="carousel-item">
                <a href="https://woodka.fun/blogs/journal/the-hexo-collection">
                    <img src="{{ asset('img/hero_slide2.png')}}" class="d-block w-100" alt="Slide 3">
                </a>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleInterval" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleInterval" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>

    <!-- About -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p></p>
                    <h2>About</h2>
                    <p>
                        WOODKA comes from two different words and two different languages, WOOD and KARYA. WOOD is an
                        English word, which will be the main material for our product. KARYA is a Sanskrit word which
                        means creation in English. By using this name, our company will always try to discover and make
                        creations from the sincerity of wood.
                    </p>
                    <p>
                        WOODKA wants to become a company that incorporates the beauty of nature, ethnic, and art into
                        our daily lifestyle, by using recycled wood as a medium. We also aim to conserve the delicacy of
                        Indonesian culture through our products.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('img/aboutfix.png')}}" class="img-fluid" alt="About Image">
                </div>
            </div>
        </div>
    </section>

    <!-- Product Slide -->
    <div id="productCarousel" class="carousel slide" data-ride="carousel">

        <!-- Products Section -->
        <section id="products">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center mb-4">
                        <h2>Our Products</h2>
                    </div>
                    <div id="productCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="product-card">
                                            <a href="https://woodka.fun/collections/best-combination">
                                                <img src="{{ asset('img/product1.png')}}" alt="Product 1">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="product-card">
                                            <a href="https://woodka.fun/collections/timepiece">
                                                <img src="{{ asset('img/product2.png')}}" alt="Product 2">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="product-card">
                                            <a href="https://woodka.fun/pages/collaboration">
                                                <img src="{{ asset('img/product3.png')}}" alt="Product 3">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="product-card">
                                            <a href="https://woodka.fun/collections/straps">
                                                <img src="{{ asset('img/product4.png')}}" alt="Product 4">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="product-card">
                                            <a href="https://woodka.fun/collections/essential">
                                                <img src="{{ asset('img/product5.png')}}" alt="Product 5">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="product-card">
                                            <a href="https://woodka.fun/pages/bundling-catalog">
                                                <img src="{{ asset('img/product6.png')}}" alt="Product 6">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#productCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#productCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Contact Section -->
    <section id="myaccount">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card-form w-100">
                        <form>
                            <h2>Let's Connect With Us!</h2>
                            <h5>Sign In to Your Account</h5>
                            <p></p>
                            <div class="form-floating mb-2">
                                <label for="floatingInput">Please enter your Email</label>
                                <input type="email" class="form-control" id="floatingInput"
                                    placeholder="name@example.com">
                            </div>
                            <div class="form-floating mb-2">
                                <label for="floatingPassword">Password</label>
                                <input type="password" class="form-control" id="floatingPassword"
                                    placeholder="contain min 8 character, include letters and numbers">
                            </div>
                            <div class="form-floating mb-2">
                                <label for="floatingInput">Please enter your Telephone Numbers</label>
                                <input type="telephone" class="form-control" id="floatingInput" placeholder="+628">
                            </div>
                            <div class="form-floating mb-2">
                                <label for="floatingInput">Please Enter your Name</label>
                                <input type="name" class="form-control" id="floatingInput">
                            </div>
                            <div class="form-floating mb-2">
                                <label for="floatingInput">Do You Have Any Question?</label>
                                <input type="question" class="form-control" id="floatingInput" rows="3">
                            </div>
                            <p></p>
                            <div>
                                <input type="submit" value="Sign Up" href="#" class="btn custom-btn text-white">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 connect-img">
                    <img src="connectimg.png" alt="connect" class="img-fluid custom-img">
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <section id="footer">
        <div class="container mt-2">
            <div class="row">
                <!-- Sosmed -->
                <div class="col-md-3">
                    <h4>Contact Us</h4>
                    <h6>Follow Our Social Media</h6>
                    <div class="sosmed">
                        <div>
                            <a href="https://www.instagram.com/woodka_/">
                                <img src="ig-icon.png" alt="instagram" class="img-fluid"> @woodka_
                            </a>
                        </div>
                        <div>
                            <a href="https://www.facebook.com/WOODKAwatch/">
                                <img src="fb-icon.png" alt="facebook" class="img-fluid"> WOODKA
                            </a>
                        </div>
                        <div>
                            <a
                                href="https://api.whatsapp.com/send/?phone=6281910818101&text&type=phone_number&app_absent=0">
                                <img src="wa-icon.png" class="img-fluid" alt="wa"> +62 8191 0818 101
                            </a>
                        </div>
                        <div>
                            <img src="email-icon.png" alt="email" class="img-fluid"> woodkawatch@gmail.com
                        </div>
                        <p></p>
                    </div>
                </div>
                <!-- Support -->
                <div class="col-md-3">
                    <div class="support">
                        <h4>Support</h4>
                        <a href="https://woodka.fun/pages/return-policy-and-guarantee">Return Policy and Guarantee</a>
                        <p></p>
                        <a href="https://woodka.fun/pages/terms-and-conditions-of-use">Terms & Condition</a>
                        <p></p>
                        <p>
                            <a href="https://woodka.fun/pages/f-a-qs">FAQs</a>
                        </p>
                    </div>
                </div>
                <!-- Extras -->
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="extras">
                                <h4>Extras</h4>
                                <a href="https://woodka.fun/pages/about-us">About Us</a>
                                <p></p>
                                <a href="#">Careers</a>
                                <p></p>
                                <p>
                                    <a href="https://woodka.fun/pages/contact-us">Contact</a>
                                </p>
                            </div>
                        </div>
                        <!-- Subscribe -->
                        <div class="col-md-9">
                            <div class="subscribe">
                                <form class="footer-email">
                                    <h4>Enjoy Woodka exclusive offers</h4>
                                    <h6>Stay up to date with our updates and offers</h6>
                                    <input class="email" type="email" placeholder="  Email address">
                                    <p></p>
                                    <button class="btn btn-danger" type="button">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
            <div class="row mt-5">
                <div class="col copyright text-center">
                    <small class="text-white-50">Copyright © 2023, Woodka Watch</small>
                </div>
            </div>
    </section>
    <script src="script.js"></script>
</body>

</html>