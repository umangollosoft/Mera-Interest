 <!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Mera Interest</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" integrity="sha512-/zs32ZEJh+/EO2N1b0PEdoA10JkdC3zJ8L5FTiQu82LR9S/rOQNfQN7U59U9BC12swNeRAz3HSzIL2vpp4fv3w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mystyle.css">

    <!-- Responsive Stylesheet -->
    <link rel="stylesheet" href="css/responsive.css">
    <style>
        .shrink_logo{
            display: none;
        }
        .shrink .main_logo{
            display: none;
        }
        .shrink .shrink_logo{
            display: block;
        }
    </style>
</head>

<body class="light-version">
    <!-- Preloader -->
    <div id="preloader">
        <div class="preload-content">
            <div id="loader-load"></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <nav class="navbar navbar-expand-md navbar-white fixed-top" id="banner">
        <div class="container">
            <!-- Brand -->
            <a class="navbar-brand" href="#"><span>
                <img src="img/core-img/logo_white.png" alt="logo" style="width: 60px;margin-top: 10px;" class="main_logo"></span>
                <img src="img/core-img/logo.png" alt="logo" style="width: 50px;" class="shrink_logo"></span>
            </a>

            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                        <!-- <div class="dropdown-menu">
                            <a class="dropdown-item" href="index-demo-1.html">Home style 1</a>
                            <a class="dropdown-item" href="index-demo-2.html">Home style 2</a>
                            <a class="dropdown-item" href="index-demo-3.html">Home style 3</a>
                            <a class="dropdown-item" href="index-demo-4.html">Home style 4</a>
                        </div> -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">How It Works</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Help</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="contact-us.html">Contact</a>
                    </li> -->
                    <li class="lh-55px"><a href="#" class="open-popup-link btn login-btn ml-50" data-toggle="modal" data-target="#login_modal">Login</a></li>
                    <!-- <li class="lh-55px"><a href="#" class="open-signup-link btn register-btn" data-toggle="modal" data-target="#signup_modal" style="margin-left: 30px;">Register</a></li> -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- ##### Header Area End ##### -->

    <!-- Login popup form  -->
    <!-- The Modal -->
    <div class="modal fade user_modal" id="login_modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            
                <!-- Modal Header -->
                <div class="modal-header">
                <h4 class="modal-title">Login Form</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                    <form action="#" method="post" id="main_login_form" novalidate="">
                        <div class="row">
                        
                        <div class="col-12 col-md-12">
                                <div class="group">
                                    <input type="text" name="name" id="name0" required="">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Email</label>
                                </div>
                            </div>
                            <div class="col-12 col-md-12">
                                <div class="group">
                                    <input type="password" name="name" id="name1" required="">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Password</label>
                                </div>
                            </div>
                            
                            <div class="col-12 col-sm-5 text-left ">
                                <button type="submit" class="btn more-btn">Login</button>
                            </div>
                            <div class="col-12 col-sm-7 text-left">
                                <p class="mb-0 mt-10">Don't have an account? <a href="#" onclick="loginClose()">Sign up</a></p>
                            </div>
                        </div>
                    </form>
            
                    <div class="other-accounts text-center">
                        <p class="w-text">Login with other account</p>
                        <div class="footer-social-info">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"> <i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </div>  

    <!-- signup popup form so: -->
    <div class="modal fade user_modal" id="signup_modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
        
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Sign Up Form</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
            
                <!-- Modal body -->
                <div class="modal-body">
                    <form action="#" method="post" id="main_Signup_form" novalidate="">
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <div class="group">
                                    <input type="text" name="name" id="name3" required="">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Name</label>
                                </div>
                            </div>
                            <div class="col-12 col-md-12">
                                <div class="group">
                                    <input type="text" name="name" id="name4" required="">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Email</label>
                                </div>
                            </div>
                            <div class="col-12 col-md-12">
                                <div class="group">
                                    <input type="password" name="name" id="name5" required="">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Password</label>
                                </div>
                            </div>
                            <div class="col-12 col-md-12">
                                <div class="group">
                                    <input type="password" name="name" id="name6" required="">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Confirm Password</label>
                                </div>
                            </div>

                            <div class="col-12 col-sm-5 text-left ">
                                <button type="submit" class="btn more-btn">Sign Up</button>
                            </div>
                            <div class="col-12 col-sm-7 text-left">
                                <p class="mb-0 mt-10">Don't have an account? <a href="#" onclick="signupClose()">Login</a></p>
                            </div>
                        </div>
                    </form>
            
                    <div class="other-accounts text-center">
                        <p class="w-text">Sign up with other account</p>
                        <div class="footer-social-info">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"> <i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </div>
    

    <!-- ##### Welcome Area Start ##### -->
    <section class="hero-section ico-bg4 relative section-padding" id="home">

        <div class="hero-section-content">
            
            <div class="container-fluid h-100">
                <div class="row h-100 mb-50 align-items-center">

                    <!-- Welcome Content -->
                    <div class="col-12 col-lg-6 col-md-12">
                        <div class="welcome-content">
                            <p class="gradient-text cyan wow fadeInUp" data-wow-delay="0.3s">Open FD with any bank</p>
                            <!-- <p class="wow fadeInUp" data-wow-delay="0.3s">Open FD with any bank</p> -->
                            <div class="rates_container">
                                <div class="rate">
                                    <span>7%</span>
                                    <span>1 Year</span>
                                </div>
                                <div class="rate">
                                    <span>7.5%</span>
                                    <span>2 Years</span>
                                </div>
                                <div class="rate">
                                    <span>8%</span>
                                    <span>3 Years</span>
                                </div>
                                <div class="rate">
                                    <span>9%</span>
                                    <span>5 Years</span>
                                </div>
                            </div>
                            <ul>
                                <li><svg viewBox="0 -10 511.98685 511" xmlns="http://www.w3.org/2000/svg"><path d="m114.59375 491.140625c-5.609375 0-11.179688-1.75-15.933594-5.1875-8.855468-6.417969-12.992187-17.449219-10.582031-28.09375l32.9375-145.089844-111.703125-97.960937c-8.210938-7.167969-11.347656-18.519532-7.976562-28.90625 3.371093-10.367188 12.542968-17.707032 23.402343-18.710938l147.796875-13.417968 58.433594-136.746094c4.308594-10.046875 14.121094-16.535156 25.023438-16.535156 10.902343 0 20.714843 6.488281 25.023437 16.511718l58.433594 136.769532 147.773437 13.417968c10.882813.980469 20.054688 8.34375 23.425782 18.710938 3.371093 10.367187.253906 21.738281-7.957032 28.90625l-111.703125 97.941406 32.9375 145.085938c2.414063 10.667968-1.726562 21.699218-10.578125 28.097656-8.832031 6.398437-20.609375 6.890625-29.910156 1.300781l-127.445312-76.160156-127.445313 76.203125c-4.308594 2.558594-9.109375 3.863281-13.953125 3.863281zm141.398438-112.875c4.84375 0 9.640624 1.300781 13.953124 3.859375l120.277344 71.9375-31.085937-136.941406c-2.21875-9.746094 1.089843-19.921875 8.621093-26.515625l105.472657-92.5-139.542969-12.671875c-10.046875-.917969-18.6875-7.234375-22.613281-16.492188l-55.082031-129.046875-55.148438 129.066407c-3.882812 9.195312-12.523438 15.511718-22.546875 16.429687l-139.5625 12.671875 105.46875 92.5c7.554687 6.613281 10.859375 16.769531 8.621094 26.539062l-31.0625 136.9375 120.277343-71.914062c4.308594-2.558594 9.109376-3.859375 13.953126-3.859375zm-84.585938-221.847656s0 .023437-.023438.042969zm169.128906-.0625.023438.042969c0-.023438 0-.023438-.023438-.042969zm0 0"/></svg>Choose best FD rate</li>
                                <li><svg viewBox="0 -10 511.98685 511" xmlns="http://www.w3.org/2000/svg"><path d="m114.59375 491.140625c-5.609375 0-11.179688-1.75-15.933594-5.1875-8.855468-6.417969-12.992187-17.449219-10.582031-28.09375l32.9375-145.089844-111.703125-97.960937c-8.210938-7.167969-11.347656-18.519532-7.976562-28.90625 3.371093-10.367188 12.542968-17.707032 23.402343-18.710938l147.796875-13.417968 58.433594-136.746094c4.308594-10.046875 14.121094-16.535156 25.023438-16.535156 10.902343 0 20.714843 6.488281 25.023437 16.511718l58.433594 136.769532 147.773437 13.417968c10.882813.980469 20.054688 8.34375 23.425782 18.710938 3.371093 10.367187.253906 21.738281-7.957032 28.90625l-111.703125 97.941406 32.9375 145.085938c2.414063 10.667968-1.726562 21.699218-10.578125 28.097656-8.832031 6.398437-20.609375 6.890625-29.910156 1.300781l-127.445312-76.160156-127.445313 76.203125c-4.308594 2.558594-9.109375 3.863281-13.953125 3.863281zm141.398438-112.875c4.84375 0 9.640624 1.300781 13.953124 3.859375l120.277344 71.9375-31.085937-136.941406c-2.21875-9.746094 1.089843-19.921875 8.621093-26.515625l105.472657-92.5-139.542969-12.671875c-10.046875-.917969-18.6875-7.234375-22.613281-16.492188l-55.082031-129.046875-55.148438 129.066407c-3.882812 9.195312-12.523438 15.511718-22.546875 16.429687l-139.5625 12.671875 105.46875 92.5c7.554687 6.613281 10.859375 16.769531 8.621094 26.539062l-31.0625 136.9375 120.277343-71.914062c4.308594-2.558594 9.109376-3.859375 13.953126-3.859375zm-84.585938-221.847656s0 .023437-.023438.042969zm169.128906-.0625.023438.042969c0-.023438 0-.023438-.023438-.042969zm0 0"/></svg>No need to open bank saving account</li>
                                <li><svg viewBox="0 -10 511.98685 511" xmlns="http://www.w3.org/2000/svg"><path d="m114.59375 491.140625c-5.609375 0-11.179688-1.75-15.933594-5.1875-8.855468-6.417969-12.992187-17.449219-10.582031-28.09375l32.9375-145.089844-111.703125-97.960937c-8.210938-7.167969-11.347656-18.519532-7.976562-28.90625 3.371093-10.367188 12.542968-17.707032 23.402343-18.710938l147.796875-13.417968 58.433594-136.746094c4.308594-10.046875 14.121094-16.535156 25.023438-16.535156 10.902343 0 20.714843 6.488281 25.023437 16.511718l58.433594 136.769532 147.773437 13.417968c10.882813.980469 20.054688 8.34375 23.425782 18.710938 3.371093 10.367187.253906 21.738281-7.957032 28.90625l-111.703125 97.941406 32.9375 145.085938c2.414063 10.667968-1.726562 21.699218-10.578125 28.097656-8.832031 6.398437-20.609375 6.890625-29.910156 1.300781l-127.445312-76.160156-127.445313 76.203125c-4.308594 2.558594-9.109375 3.863281-13.953125 3.863281zm141.398438-112.875c4.84375 0 9.640624 1.300781 13.953124 3.859375l120.277344 71.9375-31.085937-136.941406c-2.21875-9.746094 1.089843-19.921875 8.621093-26.515625l105.472657-92.5-139.542969-12.671875c-10.046875-.917969-18.6875-7.234375-22.613281-16.492188l-55.082031-129.046875-55.148438 129.066407c-3.882812 9.195312-12.523438 15.511718-22.546875 16.429687l-139.5625 12.671875 105.46875 92.5c7.554687 6.613281 10.859375 16.769531 8.621094 26.539062l-31.0625 136.9375 120.277343-71.914062c4.308594-2.558594 9.109376-3.859375 13.953126-3.859375zm-84.585938-221.847656s0 .023437-.023438.042969zm169.128906-.0625.023438.042969c0-.023438 0-.023438-.023438-.042969zm0 0"/></svg>One place to see all your FD's</li>
                            </ul>
                            <!-- <div class="promo-section">
                                <h3 class="special-head gradient-text cyan">Make your Online Payment Easier & Comfortable</h3>
                            </div> -->
                            <!-- <h1 class="w-text wow fadeInUp" data-wow-delay="0.2s">Open a high rate FD with a leading bank
                            </h1> -->
                            <div class="info-btn-group wow fadeInUp" data-wow-delay="0.4s" id="link-nav">
                                <a href="#investment" class="btn more-btn mr-3" >Calculate Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        
                    </div>
                   
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Welcome Area End ##### -->


    <div class="clearfix"></div>


    <!-- <section class="section-padding-0-0 relative clearfix" style="margin-top:-120px">
    <div class="container">
        <div class="has-shadow agency-sec">
            <div class="row">
                <div class="col-sm-12 rates_box">
                    <h3>Today’s best Fixed Deposit rates</h3>
                    <p>Rs. 5 lacs of FD is insured under the RBI deposit insurance scheme*</p>
                    <div class="rates_container">
                        <div class="rate">
                            <span>7%</span>
                            <span>1 Year</span>
                        </div>
                        <div class="rate">
                            <span>7.5%</span>
                            <span>2 Years</span>
                        </div>
                        <div class="rate">
                            <span>8%</span>
                            <span>3 Years</span>
                        </div>
                        <div class="rate">
                            <span>9%</span>
                            <span>5 Years</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section> -->

    <div class="clearfix"></div>

    <section class="relative section-padding-100-70 ">
         <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 offset-lg-0 col-md-12 no-padding-left">
                    <div class="ab-wrapper">
                        <img class="abso-img1" src="img/core-img/about-11.png" alt="">
                        <img class="wow abso-img2 fadeInUp floating animated" data-wow-delay="0.2s" src="img/core-img/about-12.png" alt="">
                        <img class="abso-img3" src="img/core-img/dotted1.svg" alt="">
                    </div> 
                </div>
                <div class="col-12 col-lg-6 offset-lg-0">
                    <div class="who-we-contant mt-s">
                        <div class="mb-15 text-left fadeInUp" data-wow-delay="0.2s">
                            <span class="gradient-text blue">Reliable Online Payment Platform</span>
                        </div>
                        <h4 class="fadeInUp" data-wow-delay="0.3s">Transfer and Deposite your money anytime, anywhere in the world</h4>
                        <p class="fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit eum illum tempora? Ducimus eum culpa voluptates dolorem dolorum et sit nisi, mollitia animi porro fuga sequi, molestias repellat excepturi nobis eum culpa voluptates dolorem dolorum et.</p>
                        <div class="services-block-four v2 mt-30">
                            <div class="inner-box">
                                <div class="icon-font-box">
                                    <i class="fa fa-check"></i>
                                </div>
                                <h3><a href="#">Powerfull Mobile And Online App</a></h3>
                                <div class="text width-80">Lorem ipsum dolor sit amet, conse ctetur dolor adipisicing elit alias officia aperiam.</div>
                            </div>
                        </div>
                        <div class="services-block-four v2">
                            <div class="inner-box">
                                <div class="icon-font-box">
                                    <i class="fa fa-check"></i>
                                </div>
                                <h3><a href="#">Brings More Transparency And Speed</a></h3>
                                <div class="text width-80">Lorem ipsum dolor sit amet, conse ctetur dolor adipisicing elit alias officia aperiam.</div>
                            </div>
                        </div>
                        <div class="services-block-four v2">
                            <div class="inner-box">
                                <div class="icon-font-box">
                                    <i class="fa fa-check"></i>
                                </div>
                                <h3><a href="#">Special For Multiple Use Capabilities</a></h3>
                                <div class="text width-80">Lorem ipsum dolor sit amet, conse ctetur dolor adipisicing elit alias officia aperiam.</div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </section>

    
    <section class="section-padding-100-70 relative sky-bg" id="feat">
        <div class="container">
            
            <div class="section-heading text-center">
                
                <div class="mb-15 justify-content-center fadeInUp" data-wow-delay="0.2s">
                    <span class="gradient-text blue">OUR FEATURES</span>
                </div>
                <h2 class="fadeInUp" data-wow-delay="0.3s"> Why Choose Us</h2>
                <p class="fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo.</p>
            </div>
                

            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-left mb-100 fadeInUp" data-wow-delay="0.2s">
                        <!-- Icon -->
                        <div class="service_icon">
                            <img src="img/icons/w4.png" alt="">
                        </div>
                        <h6>Low Transaction Fee</h6>
                        <p>Lorem ipsum dolor sit amet, adipiscing elit. Nulla neque quam, maxi ut ac cu msan ut, posuere sit Lorem ipsum qu.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-left mb-100 fadeInUp" data-wow-delay="0.3s">
                        <!-- Icon -->
                        <div class="service_icon">
                            <img src="img/icons/w5.png" alt="">
                        </div>
                        <h6>Fast Payment Method</h6>
                        <p>Lorem ipsum dolor sit amet, adipiscing elit. Nulla neque quam, maxi ut ac cu msan ut, posuere sit Lorem ipsum qu.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-left mb-100 fadeInUp" data-wow-delay="0.4s">
                        <!-- Icon -->
                        <div class="service_icon">
                            <img src="img/icons/w6.png" alt="">
                        </div>
                        <h6>Dedicated Support Team</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur elit. Nulla neque quam, maxi ut ac cu msan ut, posuere sit Lorem ipsum qu.</p>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <section class="about-us-area special section-padding-100 clearfix cir-right">
        <div class="container">
            <div class="section-heading text-center">
                
                <div class="mb-15 justify-content-center fadeInUp" data-wow-delay="0.2s">
                    <span class="gradient-text blue">How IT Works</span>
                </div>
                <h2 class="fadeInUp" data-wow-delay="0.3s"> How Our Platform Works</h2>
                <p class="fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo.</p>
            </div>
            <div class="row align-items-center">
                
                <div class="services-column col-lg-6 col-xs-12">
                    <!--Services Block Four-->
                    <div class="services-block-four how">
                        <div class="inner-box">
                            <div class="step">1</div>
                            <h3><a class="normal" href="#">Register / Login to our Platform</a></h3>
                            <!-- <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium modi assumenda beatae nonic.</div> -->
                            
                        </div>
                    </div>

                    <!--Services Block Four-->
                    <div class="services-block-four how">
                        <div class="inner-box">
                            <div class="step">2</div>
                            <h3><a class="normal" href="#">Open an FD digital directly on banks website.</a></h3>
                            <!-- <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium modi assumenda beatae nonic.</div> -->
                        </div>
                    </div>
                    
                    <!--Services Block Four-->
                    <div class="services-block-four how">
                        <div class="inner-box">
                            <div class="step">3</div>
                            <h3><a class="normal" href="#">Transfer money directly to the bank.</a></h3>
                            <!-- <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium modi assumenda beatae nonic.</div> -->
                        </div>
                    </div>

                    <!--Services Block Four-->
                    <div class="services-block-four how" style="margin-bottom:0">
                        <div class="inner-box">
                            <div class="step">4</div>
                            <h3><a class="normal" href="#">Manage all your money on our platform.</a></h3>
                            <!-- <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium modi assumenda beatae nonic.</div> -->
                        </div>
                    </div>
                    
                </div>
                <div class="col-12 col-lg-6 mt-s">
                    <div class="service-img-wrapper">
                        <div class="image-box">
                            <img src="img/core-img/appo.png" class="center-block img-responsive phone-img" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="about-us-area special section-padding-100 clearfix cir-right" id="investment">
        <div class="container">
            <div class="section-heading text-center">
                
                <div class="mb-15 justify-content-center fadeInUp" data-wow-delay="0.2s">
                    <span class="gradient-text blue">Investment Offer</span>
                </div>
                <h2 class="fadeInUp" data-wow-delay="0.3s">OUR INVESTMENT PLANS</h2>
                <p class="fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo.</p>
            </div>
            <!-- <div class="calculate-wrapper">
                <div class="calculate--area">
                    <div class="calculate-area">
                        <div class="calculate-item">
                            <h5 class="title" data-serial="01">Select the amount</h5>
                            <div class="invest-range-area">
                                <div class="main-amount">
                                    <input type="text" class="calculator-invest" id="cal-amount" readonly>
                                </div>
                                <div class="invest-amount" data-min="0 INR" data-max="100000 INR">
                                    <div id="cal-range" class="invest-range-slider"></div>
                                </div>
                            </div>
                        </div>
                        <div class="calculate-item">
                            <h5 class="title" data-serial="02">Select the year</h5>
                            <div class="invest-range-area">
                                <div class="main-amount">
                                    <input type="text" class="calculator-invest" id="cal-year" readonly>
                                </div>
                                <div class="invest-amount" data-min="0 Year" data-max="10 Year">
                                    <div id="cal-year-range" class="invest-range-slider"></div>
                                </div>
                            </div>
                        </div>
                        <div class="calculate-item">
                            <h5 class="title" data-serial="03">Select the month</h5>
                            <div class="invest-range-area">
                                <div class="main-amount">
                                    <input type="text" class="calculator-invest" id="cal-month" readonly>
                                </div>
                                <div class="invest-amount" data-min="0 Month" data-max="12 Month">
                                    <div id="cal-month-range" class="invest-range-slider"></div>
                                </div>
                            </div>
                        </div>
                        <div class="calculate-item">
                            <h5 class="title" data-serial="04">Senior Citizen</h5>
                            <label class="toggleSwitch">
                                <input type="checkbox" checked />
                                <span>
                                    <span>NO</span>
                                    <span>YES</span>
                                </span>
                                <a></a>
                            </label>
                        </div>
                    </div>
                     <button type="submit" class="custom-button">Calculate</button>
                </div>
            </div> -->

            <!--Calculator Design Two-->
            <div class="calculate-wrapper">
                <div class="calculate--area">
                    <div class="calculate-area design_two">
                        <div>
                            <h5 class="title" data-serial="01">Select the amount</h5>
                            <div class="invest-range-area">
                                <div class="main-amount">
                                    <div class="input_box">
                                        <input type="number" class="calculator-invest" id="cal-amount">
                                        <span>INR</span>
                                    </div>
                                </div>
                                <div class="invest-amount" data-min="0 INR" data-max="100000 INR">
                                    <div id="cal-range" class="invest-range-slider"></div>
                                </div>
                            </div>

                            <h5 class="title" data-serial="02">Select the year</h5>
                            <div class="invest-range-area">
                                <div class="main-amount">
                                    <div class="input_box">
                                        <input type="number" class="calculator-invest" id="cal-year" style="width: 50px;">
                                        <span>Year</span>
                                    </div>
                                </div>
                                <div class="invest-amount" data-min="0 Year" data-max="10 Year">
                                    <div id="cal-year-range" class="invest-range-slider"></div>
                                </div>
                            </div>
                            
                            <h5 class="title" data-serial="03">Select the month</h5>
                            <div class="invest-range-area">
                                <div class="main-amount">
                                    <div class="input_box">
                                        <input type="number" class="calculator-invest" id="cal-month" style="width: 50px;">
                                        <span>Month</span>
                                    </div>
                                </div>
                                <div class="invest-amount" data-min="0 Month" data-max="12 Month">
                                    <div id="cal-month-range" class="invest-range-slider"></div>
                                </div>
                            </div>
                            
                            <div class="citizen">
                                <h5 class="title" data-serial="04">Senior Citizen</h5>
                                <label class="toggleSwitch">
                                    <input type="checkbox" checked />
                                    <span>
                                        <span>NO</span>
                                        <span>YES</span>
                                    </span>
                                    <a></a>
                                </label>
                            </div>

                        </div>
                        <div>
                            <!-- <canvas id="myChart" style="width: 100%;height:calc(100% - 140px)"></canvas> -->
                            <div class="info_container">
                                <div class="info_box">
                                    <p>Amount</p>
                                    <p>100,000</p>
                                </div>
                                <div class="info_box">
                                    <p>Tenure</p>
                                    <p>12</p>
                                </div>
                            </div>
                            <table class="table table-striped best_table">
                                <thead>
                                    <tr>
                                        <th>Bank</th>
                                        <th>Credit Rating</th>
                                        <th>Interest Rate</th>
                                        <th>Interest Earend</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>RBL Bank</td>
                                        <td>AA</td>
                                        <td>8.75%</td>
                                        <td>8,750</td>
                                    </tr>
                                    <tr>
                                        <td>IndusInd Bank</td>
                                        <td>A+</td>
                                        <td>8.60%</td>
                                        <td>8,600</td>
                                    </tr>
                                    <tr>
                                        <td>AU Small Finance Bank</td>
                                        <td>A+</td>
                                        <td>8.50%</td>
                                        <td>8,500</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                     <button type="submit" class="custom-button">Calculate</button>
                </div>
            </div>


            <div class="offer-wrapper">
                <div class="offer-item">
                    <div class="offer-header">
                        <h3 class="title">6%</h3>
                    </div>
                    <div class="offer-body">
                        <span class="bal-shape"></span>
                        <div class="item first">
                            <div class="item-thumb">
                                <img src="./img/icons/bank.svg" alt="offer">
                            </div>
                            <div class="item-content">
                                <h5 class="title">Bank</h5>
                                <h5 class="subtitle">RBL</h5>
                            </div>
                        </div>
                        <span class="bal-shape"></span>
                        <div class="item first">
                            <div class="item-thumb">
                                <img src="./img/icons/money.svg" alt="offer">
                            </div>
                            <div class="item-content">
                                <h5 class="title">Interest Amount</h5>
                                <h5 class="subtitle">6000</h5>
                            </div>
                        </div>
                        <span class="bal-shape"></span>
                        <div class="item">
                            <div class="item-thumb">
                                <img src="./img/icons/calendar.svg" alt="offer">
                            </div>
                            <div class="item-content">
                                <h5 class="title">Tenure</h5>
                                <h5 class="subtitle">13 months</h5>
                            </div>
                        </div>
                    </div>
                    <div class="offer-footer">
                        <a href="#0" class="custom-button">invest now</a>
                    </div>
                </div>
                <div class="offer-item">
                    <div class="offer-header">
                        <h3 class="title">6%</h3>
                    </div>
                    <div class="offer-body">
                        <span class="bal-shape"></span>
                        <div class="item first">
                            <div class="item-thumb">
                                <img src="./img/icons/bank.svg" alt="offer">
                            </div>
                            <div class="item-content">
                                <h5 class="title">Bank</h5>
                                <h5 class="subtitle">RBL</h5>
                            </div>
                        </div>
                        <span class="bal-shape"></span>
                        <div class="item first">
                            <div class="item-thumb">
                                <img src="./img/icons/money.svg" alt="offer">
                            </div>
                            <div class="item-content">
                                <h5 class="title">Interest Amount</h5>
                                <h5 class="subtitle">6000</h5>
                            </div>
                        </div>
                        <span class="bal-shape"></span>
                        <div class="item">
                            <div class="item-thumb">
                                <img src="./img/icons/calendar.svg" alt="offer">
                            </div>
                            <div class="item-content">
                                <h5 class="title">Tenure</h5>
                                <h5 class="subtitle">13 months</h5>
                            </div>
                        </div>
                    </div>
                    <div class="offer-footer">
                        <a href="#0" class="custom-button">invest now</a>
                    </div>
                </div>
                <div class="offer-item">
                    <div class="offer-header">
                        <h3 class="title">6%</h3>
                    </div>
                    <div class="offer-body">
                        <span class="bal-shape"></span>
                        <div class="item first">
                            <div class="item-thumb">
                                <img src="./img/icons/bank.svg" alt="offer">
                            </div>
                            <div class="item-content">
                                <h5 class="title">Bank</h5>
                                <h5 class="subtitle">RBL</h5>
                            </div>
                        </div>
                        <span class="bal-shape"></span>
                        <div class="item first">
                            <div class="item-thumb">
                                <img src="./img/icons/money.svg" alt="offer">
                            </div>
                            <div class="item-content">
                                <h5 class="title">Interest Amount</h5>
                                <h5 class="subtitle">6000</h5>
                            </div>
                        </div>
                        <span class="bal-shape"></span>
                        <div class="item">
                            <div class="item-thumb">
                                <img src="./img/icons/calendar.svg" alt="offer">
                            </div>
                            <div class="item-content">
                                <h5 class="title">Tenure</h5>
                                <h5 class="subtitle">13 months</h5>
                            </div>
                        </div>
                    </div>
                    <div class="offer-footer">
                        <a href="#0" class="custom-button">invest now</a>
                    </div>
                </div>
                <div class="offer-item">
                    <div class="offer-header">
                        <h3 class="title">6%</h3>
                    </div>
                    <div class="offer-body">
                        <span class="bal-shape"></span>
                        <div class="item first">
                            <div class="item-thumb">
                                <img src="./img/icons/bank.svg" alt="offer">
                            </div>
                            <div class="item-content">
                                <h5 class="title">Bank</h5>
                                <h5 class="subtitle">RBL</h5>
                            </div>
                        </div>
                        <span class="bal-shape"></span>
                        <div class="item first">
                            <div class="item-thumb">
                                <img src="./img/icons/money.svg" alt="offer">
                            </div>
                            <div class="item-content">
                                <h5 class="title">Interest Amount</h5>
                                <h5 class="subtitle">6000</h5>
                            </div>
                        </div>
                        <span class="bal-shape"></span>
                        <div class="item">
                            <div class="item-thumb">
                                <img src="./img/icons/calendar.svg" alt="offer">
                            </div>
                            <div class="item-content">
                                <h5 class="title">Tenure</h5>
                                <h5 class="subtitle">13 months</h5>
                            </div>
                        </div>
                    </div>
                    <div class="offer-footer">
                        <a href="#" class="custom-button">invest now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=" section-padding-100-70 d-sec">
        <div class="container">
            
            <div class="section-heading text-center">
                
                <div class="mb-15 justify-content-center fadeInUp" data-wow-delay="0.2s">
                    <span class="gradient-text blue">OUR SERVICES</span>
                </div>
                <h2 class="wow fadeInUp w-text" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">Our Core Services</h2>
                <p class="wow fadeInUp g-text" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo.</p>
            </div>
                

            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-center mb-100 fadeInUp" data-wow-delay="0.2s">
                        <!-- Icon -->
                        <div class="service_icon">
                            <img src="img/icons/s1.png" alt="">
                        </div>
                        <h6 class="bold">Secure Payment Service</h6>
                        <p>Lorem ipsum dolor sit amet, adipiscing elit. Nulla neque quam, maxi ut ac cu msan ut, posuere sit Lorem ipsum qu.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-center mb-100 fadeInUp" data-wow-delay="0.3s">
                        <!-- Icon -->
                        <div class="service_icon">
                            <img src="img/icons/s2.png" alt="">
                        </div>
                        <h6 class="bold">Real Time Money Tracking</h6>
                        <p>Lorem ipsum dolor sit amet, adipiscing elit. Nulla neque quam, maxi ut ac cu msan ut, posuere sit Lorem ipsum qu.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-center mb-100 fadeInUp" data-wow-delay="0.4s">
                        <!-- Icon -->
                        <div class="service_icon">
                            <img src="img/icons/s3.png" alt="">
                        </div>
                        <h6 class="bold">Low Cost and Fast transfer</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur elit. Nulla neque quam, maxi ut ac cu msan ut, posuere sit Lorem ipsum qu.</p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-center mb-100 fadeInUp" data-wow-delay="0.2s">
                        <!-- Icon -->
                        <div class="service_icon">
                            <img src="img/icons/s4.png" alt="">
                        </div>
                        <h6 class="bold">Mobile Banking &amp; Payment</h6>
                        <p>Lorem ipsum dolor sit amet, adipiscing elit. Nulla neque quam, maxi ut ac cu msan ut, posuere sit Lorem ipsum qu.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-center mb-100 fadeInUp" data-wow-delay="0.3s">
                        <!-- Icon -->
                        <div class="service_icon">
                            <img src="img/icons/s5.png" alt="">
                        </div>
                        <h6 class="bold">Money Investment</h6>
                        <p>Lorem ipsum dolor sit amet, adipiscing elit. Nulla neque quam, maxi ut ac cu msan ut, posuere sit Lorem ipsum qu.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-center mb-100 fadeInUp" data-wow-delay="0.4s">
                        <!-- Icon -->
                        <div class="service_icon">
                            <img src="img/icons/s6.png" alt="">
                        </div>
                        <h6 class="bold">Online Marketplace</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur elit. Nulla neque quam, maxi ut ac cu msan ut, posuere sit Lorem ipsum qu.</p>
                    </div>
                </div>
                
            </div>
        </div>
    </section>



    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area bg-img">

        <!-- ##### team Area Start ##### -->
        <div class="striples-bg">
            <div class="faq-timeline-area transparent section-padding-100-85" id="faq">
                <div class="container">
                    <div class="section-heading text-center">
                        
                        <div class="mb-15 justify-content-center fadeInUp" data-wow-delay="0.2s">
                            <span class="gradient-text blue">Our Platform FAQ</span>
                        </div>
                        <h2 class="fadeInUp" data-wow-delay="0.3s">  Frequently Questions</h2>
                        <p class="fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo.</p>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-6 col-md-12">
                            <div class="wrapper-counter">
                                <img src="img/core-img/about-2.png" alt="">
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-md-12">
                            <div class="faq-area mt-s ">
                                <dl style="margin-bottom:0">
                                    <!-- Single FAQ Area -->
                                    <dt class="wave fadeInUp" data-wow-delay="0.2s">What are the objectives of this Platform?</dt>
                                    <dd class="fadeInUp" data-wow-delay="0.3s">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore omnis quaerat nostrum, pariatur ipsam sunt accusamus enim necessitatibus est fugiat, assumenda dolorem, deleniti corrupti cupiditate ipsum, dolorum voluptatum esse error?</p>
                                    </dd>
                                    <!-- Single FAQ Area -->
                                    <dt class="wave fadeInUp" data-wow-delay="0.3s">What is the best features and services we deiver?</dt>
                                    <dd>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore omnis quaerat nostrum, pariatur ipsam sunt accusamus enim necessitatibus est fugiat, assumenda dolorem, deleniti corrupti cupiditate ipsum, dolorum voluptatum esse error?</p>
                                    </dd>
                                    <!-- Single FAQ Area -->
                                    <dt class="wave fadeInUp" data-wow-delay="0.4s">Why this Platform important to me?</dt>
                                    <dd>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore omnis quaerat nostrum, pariatur ipsam sunt accusamus enim necessitatibus est fugiat, assumenda dolorem, deleniti corrupti cupiditate ipsum, dolorum voluptatum esse error?</p>
                                    </dd>
                                    <!-- Single FAQ Area -->
                                    <dt class="wave fadeInUp" data-wow-delay="0.5s">how may I take part in and purchase this Platform?</dt>
                                    <dd>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore omnis quaerat nostrum, pariatur ipsam sunt accusamus enim necessitatibus est fugiat, assumenda dolorem, deleniti corrupti cupiditate ipsum, dolorum voluptatum esse error?</p>
                                    </dd>
                                    <!-- Single FAQ Area -->
                                    <dt class="wave fadeInUp" data-wow-delay="0.3s">What is the best features and services we deiver?</dt>
                                    <dd>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore omnis quaerat nostrum, pariatur ipsam sunt accusamus enim necessitatibus est fugiat, assumenda dolorem, deleniti corrupti cupiditate ipsum, dolorum voluptatum esse error?</p>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- ##### Team Area Start ##### -->
            <section class="our_team_area section-padding-0-70 clearfix" id="team">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-heading text-center">
                                
                                <div class="mb-15 justify-content-center fadeInUp" data-wow-delay="0.2s">
                                    <span class="gradient-text blue">Our Creative Team</span>
                                </div>
                                <h2 class="fadeInUp" data-wow-delay="0.3s">Our Awesome Team</h2>
                                <p class="fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo. </p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Single Team Member -->
                        <div class="col-12 col-sm-6 col-lg-3">
                           <div class="our-team ico-team">
                                <div class="team_img">
                                    <img src="img/team-img/member1.png" class="mt-30 width-80" alt="chef-1">
                                    <ul class="social">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                                <div class="team-content">
                                    <h4 class="title">Randy crishen</h4>
                                    <span class="post">Company CEO</span>
                                </div>
                            </div>
                        </div>

                        <!-- Single Team Member -->
                        <div class="col-12 col-sm-6 col-lg-3">
                           <div class="our-team ico-team">
                                <div class="team_img">
                                    <img src="img/team-img/member2.png" class="mt-30 width-80" alt="chef-1">
                                    <ul class="social">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                                <div class="team-content">
                                    <h4 class="title">Monica Ashker</h4>
                                    <span class="post">Web Designer</span>
                                </div>
                            </div>
                        </div>

                        <!-- Single Team Member -->
                        <div class="col-12 col-sm-6 col-lg-3">
                           <div class="our-team ico-team">
                                <div class="team_img">
                                    <img src="img/team-img/member3.png" class="mt-30 width-80" alt="chef-1">
                                    <ul class="social">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                                <div class="team-content">
                                    <h4 class="title">Tollay Ramzomi</h4>
                                    <span class="post">Web Developer</span>
                                </div>
                            </div>
                        </div>

                        <!-- Single Team Member -->
                        <div class="col-12 col-sm-6 col-lg-3">
                           <div class="our-team ico-team">
                                <div class="team_img">
                                    <img src="img/team-img/member4.png" class="mt-30 width-80" alt="chef-1">
                                    <ul class="social">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                                <div class="team-content">
                                    <h4 class="title">Jacke Wilson</h4>
                                    <span class="post">Marketing Specialist</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!-- ##### Team Area End ##### -->

            <!-- ##### Testimonial Area Start ##### -->
            <section class="clients_testimonials_area bg-img section-padding-0-0" id="test">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-heading text-center">
                                <div class="mb-15 justify-content-center fadeInUp" data-wow-delay="0.2s">
                                        <span class="gradient-text blue">Our Testimonials</span>
                                    </div>
                                <h2 class="bl-text wow fadeInUp" data-wow-delay="0.3s">Loved By Our Clients</h2>
                                <p class="wow fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cotainer-fluid">
                    <div class="row justify-content-center wow fadeInUp" data-wow-delay="0.4s">
                        <div class="col-12 col-md-10 col-xs-10 offset-xs-1">
                            <div class="client_slides owl-carousel">

                                <!-- Single Testimonial -->
                                <div class="single-testimonial text-center">
                                    <!-- Testimonial Image -->
                                    <div class="testimonial_image">
                                        <img src="img/test-img/1.jpg" alt="">
                                    </div>
                                    <!-- Testimonial Feedback Text -->
                                    <div class="testimonial-description">
                                        <div class="testimonial_text">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis magni, quisquam, accusantium dolores atque, doloribus odit minus maiores sunt mollitia consequatur, soluta quasi.</p>
                                        </div>

                                        <!-- Admin Text -->
                                        <div class="admin_text">
                                            <h5>Sunny Khan</h5>
                                            <p>Head of Design, Company CEO</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Testimonial -->
                                <div class="single-testimonial text-center">
                                    <!-- Testimonial Image -->
                                    <div class="testimonial_image">
                                        <img src="img/test-img/2.jpg" alt="">
                                    </div>
                                    <!-- Testimonial Feedback Text  -->
                                    <div class="testimonial-description">
                                        <div class="testimonial_text">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error nostrum adipisci porro quisquam. Rem, earum, tenetur? Architecto et, earum repudiandae.</p>
                                        </div>

                                        <!-- Admin Text -->
                                        <div class="admin_text">
                                            <h5>Ajoy Das</h5>
                                            <p>Head of Idea, Company CEO</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Testimonial -->
                                <div class="single-testimonial text-center">
                                    <!-- Testimonial Image -->
                                    <div class="testimonial_image">
                                        <img src="img/test-img/3.jpg" alt="">
                                    </div>
                                    <!-- Testimonial Feedback Text  -->
                                    <div class="testimonial-description">
                                        <div class="testimonial_text">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et delectus, nam repudiandae repellat id placeat molestias consequuntur, laudantium dolorem nesciunt sit.</p>
                                        </div>
                                        <!-- Admin Text -->
                                        <div class="admin_text">
                                            <h5>Jebin Khan</h5>
                                            <p>Head of Marketing, Company CEO</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <!-- ##### Testimonial Area End ##### -->

            <section class="our-partners clearfix section-padding-100-70">
                <div class="container">
                    <div class="section-heading text-center">
                        
                        <div class="mb-15 justify-content-center fadeInUp" data-wow-delay="0.2s">
                            <span class="gradient-text blue">Our Main Partners</span>
                        </div>
                        <h2 class="fadeInUp" data-wow-delay="0.3s">Our powerful Partners</h2>
                        <p class="fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo. </p>
                    </div>
                    <div class="row">
                        
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="team-member ">
                                <div class="rating">AA</div>
                                <div class="team-img">
                                    <img class="img-responsive center-block" src="img/partners/1.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="team-member ">
                                <div class="rating">AAA</div>
                                <div class="team-img">
                                    <img class="img-responsive center-block" src="img/partners/2.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="team-member ">
                                <div class="rating">AA</div>
                                <div class="team-img">
                                    <img class="img-responsive center-block" src="img/partners/3.png" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="team-member ">
                                <div class="rating">A+</div>
                                <div class="team-img">
                                    <img class="img-responsive center-block" src="img/partners/4.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="team-member ">
                                <div class="rating">AAA</div>
                                <div class="team-img">
                                    <img class="img-responsive center-block" src="img/partners/5.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="team-member ">
                                <div class="rating">AA</div>
                                <div class="team-img">
                                    <img class="img-responsive center-block" src="img/partners/6.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6   col-xs-12">
                            <div class="team-member ">
                                <div class="rating">A</div>
                                <div class="team-img">
                                    <img class="img-responsive center-block" src="img/partners/7.png" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="team-member ">
                                <div class="rating">AA+</div>
                                <div class="team-img">
                                    <img class="img-responsive center-block" src="img/partners/8.png" alt="">
                                </div>
                            </div>
                        </div>
                        

                        
                    </div>
                </div>
            </section>
        </div>
        <!-- ##### team Area End ##### -->

        <div class="footer-content-area mt-0">
            <div class="container">
                <div class="row ">
                    <div class="col-12 col-lg-4 col-md-6">
                        <div class="footer-copywrite-info">
                            <!-- Copywrite -->
                            <div class="copywrite_text fadeInUp" data-wow-delay="0.2s">
                                <div class="footer-logo">
                                    <a href="#"><img src="img/core-img/logo.png" alt="logo"> Mera Interest </a>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit ducimus voluptatibus neque illo id repellat quisquam? Autem expedita earum quae laborum ipsum ad.</p>
                            </div>
                            <!-- Social Icon -->
                            <div class="footer-social-info fadeInUp" data-wow-delay="0.4s">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"> <i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-3 col-md-6">
                        <div class="contact_info_area d-sm-flex justify-content-between">
                            <!-- Content Info -->
                            <div class="contact_info mt-x text-center fadeInUp" data-wow-delay="0.3s">
                                <h5>PRIVACY & TOS</h5>
                                <a href=""><p>Advertiser Agreement</p></a>
                                <a href=""><p>Acceptable Use Policy</p></a>
                                <a href=""><p>Privacy Policy</p></a>
                                <a href=""><p>Technology Privacy</p></a>
                                <a href=""><p>Developer Agreement</p></a>
                            </div>
                        </div>
                    </div>
                      
                    <div class="col-12 col-lg-2 col-md-6 ">
                        <!-- Content Info -->
                        <div class="contact_info_area d-sm-flex justify-content-between">
                            <div class="contact_info mt-s text-center fadeInUp" data-wow-delay="0.2s">
                                <h5>NAVIGATE</h5>
                                <a href=""><p>Advertisers</p></a>
                                <a href=""><p>Developers</p></a>
                                <a href=""><p>Resources</p></a>
                                <a href=""><p>Company</p></a>
                                <a href=""><p>Connect</p></a>
                            </div>
                        </div>
                    </div>
                    

                    <div class="col-12 col-lg-3 col-md-6 ">
                        <div class="contact_info_area d-sm-flex justify-content-between">
                            <!-- Content Info -->
                            <div class="contact_info mt-s text-center fadeInUp" data-wow-delay="0.4s">
                                <h5>CONTACT US</h5>
                                <p>Mailing Address:xx00 E. Union Ave</p>
                                <p>Suite 1100. Denver, CO 80237</p>
                                <p>+999 90932 627</p>
                                <p>support@yourdomain.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ########## All JS ########## -->
    <!-- jQuery js -->
    <script src="js/jquery.min.js"></script>
    <!-- jQuery ui js -->
    <script src="js/jquery-ui.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins.js"></script>

    <script src="js/jquery.syotimer.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" integrity="sha512-s+xg36jbIujB2S2VKfpGmlC3T5V2TF3lY48DX7u2r9XzGzgPsa6wTpOQA7J9iffvdeBN0q9tKzRxVxw1JviZPg==" crossorigin="anonymous"></script>
    <!-- script js -->
    <script src="js/script.js"></script>
    <!--my script js -->
    <script src="js/myscript.js"></script>
    <script>
        var ctx = document.getElementById('myChart');
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                datasets: [{
                    data: [100000, 19562],
                    backgroundColor: [
                        '#495afb',
                        '#ed684f',
                    ],
                }],
                
                labels: [
                    'Investment',
                    'Interest'
                ]
            },
            options: {
                    segmentShowStroke: false,
                    responsive: true,
                    legend: {
                        position: 'bottom',
                    },
                    animation: {
                        animateScale: true,
                        animateRotate: true
                    }
                }
        });

        function signupClose(){
            $('#signup_modal').modal('hide');
            setTimeout(() => {
                $('#login_modal').modal('show')
            }, 400);
        }

        function loginClose(){
            $('#login_modal').modal('hide');
            setTimeout(() => {
                $('#signup_modal').modal('show')
            }, 400);
        }
    </script>
</body>

</html>