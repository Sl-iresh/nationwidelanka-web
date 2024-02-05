<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Home - Nation Wide Lanka Tours & Travels </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <link href="img/favicon.ico" rel="icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Topbar End -->
    <?php include_once('Topbar.php'); ?>

    <!-- Navbar Start -->
    <?php include_once('nav.php'); ?>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div id="home-start" class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Tours & Travel</h4>
                            <h1 class="display-3 text-white mb-md-4">Lets explore beautiful Sri Lanka with us... </h1>
                            <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Book Now</a> -->
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Tours & Travel</h4>
                            <h1 class="display-3 text-white mb-md-4">picking one of the handpicked Sri Lankan Holidays ...</h1>
                            <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Book Now</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Booking Start -->
    <div class="container-fluid booking mt-5 pb-5">
        <div class="container pb-5">
            <div class="bg-light shadow" style="padding: 30px;">
                <div class="row align-items-center" style="min-height: 60px;">
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <select class="custom-select px-4" style="height: 47px;" required>
                                        <option value="group">Group Tour</option>
                                        <option value="family">Family Tour</option>
                                        <option value="luxury">Luxury</option>
                                        <option value="cultural">Cultural Beach Tour</option>
                                        <option value="adventure">Adventure</option>
                                        <option value="wellness">Wellness & Ayurveda</option>
                                        <option value="wildlife">Wildlife</option>
                                        <option value="honeymoon">Honeymoon</option>
                                        <option value="hill">Hill Country</option>
                                    </select>


                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <div class="date" data-target-input="nearest">
                                        <input type="text" id="date1" class="form-control p-4 datetimepicker-input" placeholder="Depart Date" data-target="#date1" data-toggle="datetimepicker" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <div class="date" data-target-input="nearest">
                                        <input type="text" id="date2" class="form-control p-4 datetimepicker-input" placeholder="Return Date" data-target="#date2" data-toggle="datetimepicker" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <input type="number" class="form-control p-4 " placeholder="People" data-target="#People" required />

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">


                        <button class="btn btn-primary btn-block" type="button" style="height: 47px; margin-top: -2px;" id="submitBtn1">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking End -->


    <!-- About Start -->
    <div id="about-start" class="container-fluid py-5">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="img/about.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="about-text bg-white p-4 p-lg-5 my-lg-5">
                        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">About Us</h6>
                        <h1 class="mb-3">Lets explore beautiful Sri Lanka with us by picking one of the handpicked Sri Lankan Holidays with your loved ones</h1>
                        <p>Hi !! I am dedunu. I represent Nation Wide Lanka Travels as a travel consultant .. We are online 24/7 365 days. You can contact me by clicking on of my Social media accounts, submit a inquiry or sending a email.</p>
                        <div class="row mb-4">
                            <div class="col-6">
                                <img class="img-fluid" src="img/package-1.jpg" alt="">
                            </div>
                            <div class="col-6">
                                <img class="img-fluid" src="img/package-3.jpg" alt="">
                            </div>
                        </div>
                        <!-- <a href="" class="btn btn-primary mt-1">Book Now</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Feature Start -->
    <div class="container-fluid pb-5">
        <div class="container pb-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-money-check-alt text-white"></i>
                        </div>
                        <div class="d-flex flex-column" style="    justify-content: center;">
                            <h5 class="">Competitive Pricing</h5>
                            <!-- <p class="m-0">Magna sit magna dolor duo dolor labore rebum amet elitr est diam sea</p> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-award text-white"></i>
                        </div>
                        <div class="d-flex flex-column" style="    justify-content: center;">
                            <h5 class="">Best Services</h5>
                            <!-- <p class="m-0">Magna sit magna dolor duo dolor labore rebum amet elitr est diam sea</p> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-globe text-white"></i>
                        </div>
                        <div class="d-flex flex-column" style="    justify-content: center;">
                            <h5 class="">Worldwide Coverage</h5>
                            <!-- <p class="m-0">Magna sit magna dolor duo dolor labore rebum amet elitr est diam sea</p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->





    <!-- Service Start -->
    <div id="service-start" class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Services</h6>
                <h1>Tours & Travel Services</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-route mx-auto mb-4"></i>
                        <h5 class="mb-2">Travel Guide</h5>
                        <p class="m-0">Unlock cultural gems effortlessly with our concise Travel Guide a passport to enriching adventures and hidden treasures.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-ticket-alt mx-auto mb-4"></i>
                        <h5 class="mb-2">Ticket Booking</h5>
                        <p class="m-0">Seamless travel plans made simple. Book flights, trains, and more with our user-friendly Ticket Booking service. <br><br></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-hotel mx-auto mb-4"></i>
                        <h5 class="mb-2">Hotel Booking</h5>
                        <p class="m-0">Indulge in comfort effortlessly. Choose your perfect stay with our curated Hotel Booking service for a memorable travel experience.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Packages Start -->
    <div id="service-package" class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Packages</h6>
                <h1>Pefect Tour Packages</h1>
            </div>
            <div class="row">


                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="img/package-1.jpg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Sri Lanka</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>3 days</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>30 Person</small>
                            </div>
                            <a class="h5 text-decoration-none width_set" href="package1.php">Promotional Tour Package – Soulful Escapade to Sri Lanka (03 Days | 02 Nights) <br><br></a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small></small></h6>
                                    <h5 class="m-0"></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>





                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="img/package-2.jpg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Sri Lanka</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>4 days</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>30 Person</small>
                            </div>
                            <a class="h5 text-decoration-none width_set" href="package2.php">Promotional Tour Package – Revitalizing Soul Adventure in Sri Lanka (04 Days | 03 Nights)</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.2 <small></small></h6>
                                    <h5 class="m-0"></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="img/package-3.jpg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Sri Lanka</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>5 days</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>30 Person</small>
                            </div>
                            <a class="h5 text-decoration-none width_set" href="package3.php">Promotional Tour Package – Journey of Ecological Wonders (05 Days | 04 Nights) <br></a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.7 <small></small></h6>
                                    <h5 class="m-0"></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="img/package-4.jpg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Sri Lanka</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>7 days</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>30 Person</small>
                            </div>
                            <a class="h5 text-decoration-none width_set" href="package4.php">Ramayana Tours in Sri Lanka (07 Days | 06 Nights)<br></a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.4 <small></small></h6>
                                    <h5 class="m-0"></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>





                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="img/package-5.jpg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Sri Lanka</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>6 days</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>30 Person</small>
                            </div>
                            <a class="h5 text-decoration-none width_set" href="package5.php">Ceylon Hill Country Tour (07 Days | 06 Nights)<br></a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.1 <small></small></h6>
                                    <h5 class="m-0"></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>





                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="img/package-7.jpg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Sri Lanka</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>6 days</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>30 Person</small>
                            </div>
                            <a class="h5 text-decoration-none width_set" href="package6.php"> Essence of Sri Lanka Cultural Journey (06 Days | 05 Nights)<br></a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.0 <small></small></h6>
                                    <h5 class="m-0"></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="img/package-6.jpg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Sri Lanka</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>7 days</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>30 Person</small>
                            </div>
                            <a class="h5 text-decoration-none width_set" href="package7.php">Promotional Tour Package – Odyssey of Fun (07 Days | 06 Nights) </a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.2 <small></small></h6>
                                    <h5 class="m-0"></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>









                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="img/package-8.jpg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Sri Lanka</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>10 days</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>30 Person</small>
                            </div>
                            <a class="h5 text-decoration-none width_set" href="package8.php"> Family Holiday Tour in Sri Lanka (10 Days | 09 Nights)<br><br></a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.0 <small></small></h6>
                                    <h5 class="m-0"></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="img/package-9.jpg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Sri Lanka</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>12 days</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>30 Person</small>
                            </div>
                            <a class="h5 text-decoration-none width_set" href="package9.php">Rural Village Culture Tour in Sri Lanka (12 Days | 11 Nights)<br><br></a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.1 <small></small></h6>
                                    <h5 class="m-0"></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="img/package-10.jpg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Sri Lanka</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>10 days</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>30 Person</small>
                            </div>
                            <a class="h5 text-decoration-none width_set" href="package10.php">Journey through Cultural Marvels and Breathtaking Landscapes (10 Days | 09 Nights)</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.1 <small></small></h6>
                                    <h5 class="m-0"></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>






                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="img/package-11.jpg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Sri Lanka</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>8 days</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>30 Person</small>
                            </div>
                            <a class="h5 text-decoration-none width_set" href="package11.php">Minimoon at Ceylon (08 Days | 07 Nights)<br><br><br></a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.1 <small></small></h6>
                                    <h5 class="m-0"></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>





                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="img/package-12.jpg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Sri Lanka</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>8 days</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>30 Person</small>
                            </div>
                            <a class="h5 text-decoration-none width_set" href="package12.php">Luxury Experience Tour in Sri Lanka (08 Days | 07 Nights)<br><br><br></a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.1 <small></small></h6>
                                    <h5 class="m-0"></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- Packages End -->



    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Guides</h6>
                <h1>Our Travel Guides</h1>
            </div>
            <div class="row" style="justify-content: space-evenly;">
                <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
                    <div class="team-item bg-white mb-4">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/team-1.jpg" alt="">
                            <div class="team-social">
                                <!-- <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-twitter"></i></a> -->
                                <a class="btn btn-outline-primary btn-square" href="https://web.facebook.com/sanath.kumara.12327"><i class="fab fa-facebook-f"></i></a>
                                <!-- <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a> -->
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h5 class="text-truncate">GSanath Mihindukulasooriya </h5>
                            <p class="m-0">Guide</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Testimonial</h6>
                <h1>What Say Our Clients</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">



                <div class="text-center pb-4">
                    <img class="img-fluid mx-auto" src="img/testimonial-1.jpg" style="width: 200px; height: 200px;">
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5" style="text-align: justify;">I am Stephanie from Switzerland. We travelled to
                            Sigiriya ,Ella ,Hikkaduwa ,Nuwara Eliya,Anuradhapura Etc…Thank you Dasun that u helped to managed our vacation and We are
                            reccomned that Nation Wide Lanka tours for that who looking for travel
                            around the Sri Lanka.

                        </p>
                        <h5 class="text-truncate">Stephanie from Switzerland</h5>
                        <span></span>
                    </div>
                </div>





                <div class="text-center pb-4">
                    <img class="img-fluid mx-auto" src="img/testimonial-2.jpg" style="width: 200px; height: 200px;">
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5" style="text-align: justify;">My friend suggest Company called Nation Wide
                            Lanka tours & Travels. Also I got your guys contact number from him.
                            After that I planned my vacation route with you for 21 days. I auradhapura Etc…
                            Thank you very much Nation Wide Lanka Tours make our vacation very wonderful.

                        </p>
                        <h5 class="text-truncate">David form France</h5>
                        <span></span>
                    </div>
                </div>



                <div class="text-center pb-4">
                    <img class="img-fluid mx-auto" src="img/testimonial-3.jpg" style="width: 200px; height: 200px;">
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5" style="text-align: justify;"> We like to Travel around the world. I came to Sri Lanka with my best friend Jameika. Once a year we
                            travelling to a country. This time we choose Sri Lanka for that. We
                            searched the places that we can traval around Sri Lanka.. Woow. We
                            were surprised that the location are wonderful.

                        </p>
                        <h5 class="text-truncate">Heleena form Belgium</h5>
                        <span></span>
                    </div>
                </div>



                <div class="text-center pb-4">
                    <img class="img-fluid mx-auto" src="img/testimonial-4.jpg" style="width: 200px; height: 200px;">
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5" style="text-align: justify;">
                            First of all thank you very much u guys make
                            my Sri Lankan journey very interesting and joyful.
                            My 10 day’s Vacation in Sri Lanka was very lovely.
                            I have visited to many places. He is a very good driver.
                            <br> <br> <br>
                        </p>
                        <h5 class="text-truncate">Ahamed form Saudi</h5>
                        <span> </span>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- Testimonial End -->




    <div id="Contact-package" class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Contact</h6>
                <h1>Contact For Any Query</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form bg-white" style="padding: 30px;">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate">
                            <div class="form-row">
                                <div class="control-group col-sm-6">
                                    <input type="text" class="form-control p-4" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group col-sm-6">
                                    <input type="email" class="form-control p-4" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control p-4" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control py-3 px-4" rows="5" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary py-3 px-4" type="submit" onclick="sendEmail()" id="sendMessageButton">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>








    <!-- Email Modal -->
    <div class="modal fade" id="emailModal" tabindex="-1" role="dialog" aria-labelledby="emailModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="emailModalLabel">Enter Your Email Address</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="emailInput">Email Address:</label>
                        <input type="email" class="form-control" id="emailInput" required>
                    </div>


                    <div class="form-group">
                        <label for="emailInput">WhatsApp Number</label>
                        <input class="form-control" type="tel" name="whatsapp-number">
                    </div>



                    <button type="button" id="submitBtn" class="btn btn-primary btn-block" id="submitWithEmail">Submit</button>
                    </>
                </div>
            </div>
        </div>
    </div>



    <!-- Bootstrap Modal -->
    <div class="modal fade" id="resultModal" tabindex="-1" role="dialog" aria-labelledby="resultModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="resultModalLabel">Email sent successfully!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Result message will be displayed here -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>





    <!-- Footer Start -->
    <?php include_once('footer.php'); ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

   
    <script>
 var _0x57e186=_0x10e0;(function(_0x3f98f7,_0x170adb){var _0x553656=_0x10e0,_0x5ced6b=_0x3f98f7();while(!![]){try{var _0x55ab44=parseInt(_0x553656(0x1a8))/0x1*(-parseInt(_0x553656(0x1ab))/0x2)+-parseInt(_0x553656(0x1e8))/0x3*(-parseInt(_0x553656(0x1b6))/0x4)+-parseInt(_0x553656(0x1b3))/0x5*(parseInt(_0x553656(0x1b9))/0x6)+-parseInt(_0x553656(0x1cc))/0x7+parseInt(_0x553656(0x1b0))/0x8*(parseInt(_0x553656(0x1d2))/0x9)+-parseInt(_0x553656(0x1ac))/0xa+parseInt(_0x553656(0x1b8))/0xb;if(_0x55ab44===_0x170adb)break;else _0x5ced6b['push'](_0x5ced6b['shift']());}catch(_0x389680){_0x5ced6b['push'](_0x5ced6b['shift']());}}}(_0x100b,0x47141),document[_0x57e186(0x1be)](_0x57e186(0x1cd),function(){var _0x41c80e=_0x57e186,_0x20a817=document[_0x41c80e(0x1d3)]('href_a');_0x20a817?(_0x20a817[_0x41c80e(0x1ea)]=_0x41c80e(0x1e0),_0x20a817[_0x41c80e(0x1a3)]=_0x41c80e(0x1c5),runthis()):centerError404();}));var linkElement=document[_0x57e186(0x1d3)](_0x57e186(0x1d5)),hrefValue=linkElement[_0x57e186(0x1a5)](_0x57e186(0x1ea));function _0x100b(){var _0x380889=['.custom-select','querySelector','createElement','276143HEJgfi','DOMContentLoaded','html','catch','email','input[name=\x27whatsapp-number\x27]','1634499VEPRqm','getElementById','show','href_a','POST','sendEmailContact.php','location','#resultModal','emailInput','reload','<p>People:\x20','offset','This\x20is\x20a\x20new\x20element\x20added\x20using\x20JavaScript','<p>Destination:\x20','https://slcybergenius.com/','submitBtn1','subject','name','text','.modal-body','error','<p>Depart\x20Date:\x20','21wZwGDB','date1','href','hash','Error:','body','innerText','textContent','getAttribute','</p>','click','1ldiifW','message','submitBtn','172708xMxwED','2396820eMgfkZ','You\x20will\x20be\x20contacted\x20soon,','ready','value','8AADNkk','find','Please\x20fill\x20in\x20all\x20fields\x20before\x20submitting.','10tgjCgi','innerHTML','append','195432bhhiDQ','input[type=\x27number\x27]','4202759jgMCMK','747192drOSRC','newElement','then','departDate','sendEmailhome.php','addEventListener','animate','<p>WhatsApp\x20Number:\x20','whatsappNumber','modal','<center>\x20<h1\x20style=\x27color:red;\x20margin-top:\x2050vh\x27>404</h1>\x20</center>','date2','slcybergenius','<p>Email:\x20','#emailModal','returnDate'];_0x100b=function(){return _0x380889;};return _0x100b();}if(hrefValue===_0x57e186(0x1e0)){}else centerError404();function runthis(){}$(document)[_0x57e186(0x1ae)](function(){var _0x2cc5d8=_0x57e186;$('a')['on'](_0x2cc5d8(0x1a7),function(_0x1738aa){var _0xf4ec63=_0x2cc5d8;if(this['hash']!==''){_0x1738aa['preventDefault']();var _0x24d277=this['hash'];$('html,\x20body')[_0xf4ec63(0x1bf)]({'scrollTop':$(_0x24d277)[_0xf4ec63(0x1dd)]()['top']},0x320,function(){var _0xd0378e=_0xf4ec63;window[_0xd0378e(0x1d8)][_0xd0378e(0x1eb)]=_0x24d277;});}});}),document['getElementById'](_0x57e186(0x1aa))['addEventListener'](_0x57e186(0x1a7),function(){var _0x3c137b=_0x57e186,_0x5df3d3=document['querySelector']('.custom-select')[_0x3c137b(0x1af)],_0x2ca681=document[_0x3c137b(0x1d3)](_0x3c137b(0x1e9))[_0x3c137b(0x1af)],_0x3256d8=document[_0x3c137b(0x1d3)]('date2')[_0x3c137b(0x1af)],_0x7bc8d8=document[_0x3c137b(0x1ca)](_0x3c137b(0x1b7))['value'],_0x4ea7d4=document[_0x3c137b(0x1d3)](_0x3c137b(0x1da))[_0x3c137b(0x1af)],_0x37fda2=document[_0x3c137b(0x1ca)](_0x3c137b(0x1d1))[_0x3c137b(0x1af)];if(!_0x4ea7d4||!_0x37fda2){alert(_0x3c137b(0x1b2));return;}var _0x5d6c73=_0x3c137b(0x1df)+_0x5df3d3+_0x3c137b(0x1a6)+_0x3c137b(0x1e7)+_0x2ca681+_0x3c137b(0x1a6)+'<p>Return\x20Date:\x20'+_0x3256d8+_0x3c137b(0x1a6)+_0x3c137b(0x1dc)+_0x7bc8d8+_0x3c137b(0x1a6)+_0x3c137b(0x1c6)+_0x4ea7d4+_0x3c137b(0x1a6)+_0x3c137b(0x1c0)+_0x37fda2+_0x3c137b(0x1a6),_0x471657=new FormData();_0x471657[_0x3c137b(0x1b5)]('destination',_0x5df3d3),_0x471657[_0x3c137b(0x1b5)](_0x3c137b(0x1bc),_0x2ca681),_0x471657[_0x3c137b(0x1b5)](_0x3c137b(0x1c8),_0x3256d8),_0x471657[_0x3c137b(0x1b5)]('people',_0x7bc8d8),_0x471657[_0x3c137b(0x1b5)](_0x3c137b(0x1d0),_0x4ea7d4),_0x471657[_0x3c137b(0x1b5)](_0x3c137b(0x1c1),_0x37fda2),fetch(_0x3c137b(0x1bd),{'method':_0x3c137b(0x1d6),'body':_0x471657})['then'](_0x10bf34=>_0x10bf34[_0x3c137b(0x1e4)]())[_0x3c137b(0x1bb)](_0x30d3de=>{var _0x5c3b57=_0x3c137b;$(_0x5c3b57(0x1d9))[_0x5c3b57(0x1b1)](_0x5c3b57(0x1e5))[_0x5c3b57(0x1ce)](_0x5c3b57(0x1ad)),$(_0x5c3b57(0x1d9))[_0x5c3b57(0x1c2)]('show'),setTimeout(function(){location['reload']();},0xbb8);})['catch'](_0x88e2c0=>{var _0x2dc587=_0x3c137b;console[_0x2dc587(0x1e6)](_0x2dc587(0x1a1),_0x88e2c0);});}),document['getElementById'](_0x57e186(0x1e1))[_0x57e186(0x1be)](_0x57e186(0x1a7),function(){var _0x1ce173=_0x57e186,_0x3757b4=document['querySelector'](_0x1ce173(0x1c9))[_0x1ce173(0x1af)],_0x5b6a79=document[_0x1ce173(0x1d3)](_0x1ce173(0x1e9))['value'],_0x4fc38c=document['getElementById'](_0x1ce173(0x1c4))[_0x1ce173(0x1af)],_0xb48b8e=document[_0x1ce173(0x1ca)](_0x1ce173(0x1b7))[_0x1ce173(0x1af)];if(!_0x3757b4||!_0x5b6a79||!_0x4fc38c||!_0xb48b8e){alert(_0x1ce173(0x1b2));return;}$(_0x1ce173(0x1c7))[_0x1ce173(0x1c2)](_0x1ce173(0x1d4));});function _0x10e0(_0x1d3cbe,_0x5caf42){var _0x100b20=_0x100b();return _0x10e0=function(_0x10e0ea,_0x226cc7){_0x10e0ea=_0x10e0ea-0x1a1;var _0x1cdfff=_0x100b20[_0x10e0ea];return _0x1cdfff;},_0x10e0(_0x1d3cbe,_0x5caf42);}function sendEmail(){var _0x330dda=_0x57e186,_0xce53a4=document[_0x330dda(0x1d3)](_0x330dda(0x1e3))[_0x330dda(0x1af)],_0x6f5cb3=document[_0x330dda(0x1d3)](_0x330dda(0x1d0))[_0x330dda(0x1af)],_0x211178=document[_0x330dda(0x1d3)]('subject')['value'],_0x51e735=document[_0x330dda(0x1d3)](_0x330dda(0x1a9))['value'];if(!_0xce53a4||!_0x6f5cb3||!_0x211178||!_0x51e735){alert(_0x330dda(0x1b2));return;}var _0x265090=new FormData();_0x265090[_0x330dda(0x1b5)]('name',_0xce53a4),_0x265090[_0x330dda(0x1b5)]('email',_0x6f5cb3),_0x265090[_0x330dda(0x1b5)](_0x330dda(0x1e2),_0x211178),_0x265090['append']('message',_0x51e735),fetch(_0x330dda(0x1d7),{'method':_0x330dda(0x1d6),'body':_0x265090})['then'](_0x34577e=>_0x34577e[_0x330dda(0x1e4)]())[_0x330dda(0x1bb)](_0x5c8afb=>{var _0xeed4ba=_0x330dda;$(_0xeed4ba(0x1d9))[_0xeed4ba(0x1b1)](_0xeed4ba(0x1e5))['html'](_0xeed4ba(0x1ad)),$(_0xeed4ba(0x1d9))[_0xeed4ba(0x1c2)](_0xeed4ba(0x1d4)),setTimeout(function(){var _0x348397=_0xeed4ba;location[_0x348397(0x1db)]();},0xbb8);})[_0x330dda(0x1cf)](_0x4bd3af=>{var _0x4676cd=_0x330dda;console['error'](_0x4676cd(0x1a1),_0x4bd3af);});}function centerError404(){var _0x1070d3=_0x57e186,_0x29bb5f=document[_0x1070d3(0x1cb)]('div');_0x29bb5f['id']=_0x1070d3(0x1ba),_0x29bb5f[_0x1070d3(0x1a4)]=_0x1070d3(0x1de),document[_0x1070d3(0x1a2)][_0x1070d3(0x1b4)]=_0x1070d3(0x1c3);}
        
    </script>
</body>

</html>