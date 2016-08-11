<!DOCTYPE html>
<html>
<head>
<title>Foodent</title>
<meta name="viewport" content="width=device-width, initial-scale=1">



<link rel="stylesheet" type="text/css" href="{{ URL::to('css/bootstrap.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::to('css/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::to('css/animate.css') }}">


<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lobster+Two:400,400italic,700,700italic' rel='stylesheet' type='text/css'>



</head>
<body>
    <!-- header-section-starts -->
    <div class="header">
        <div class="container">
            <div class="top-header">
                <div class="logo">
                    <a href="index.html"><img src="{{ URL::to('images/logo.png') }}" class="img-responsive" alt="" /></a>
                </div>
                <div class="queries">
                    <p>Questions? Call us Toll-free!<span>1800-0000-7777 </span><label>(11AM to 11PM)</label></p>
                </div>
                <div class="header-right">
                        <div class="cart box_1">
                            <a href="checkout.html">
                                <h3> <span class="simpleCart_total"> $0.00 </span> (<span id="simpleCart_quantity" class="simpleCart_quantity"> 0 </span> items)<img src="{{ URL::to('images/bag.png') }}" alt=""></h3>
                            </a>    
                            <p><a href="javascript:;" class="simpleCart_empty">Empty card</a></p>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                <div class="clearfix"></div>
            </div>
        </div>
            <div class="menu-bar">
            <div class="container">
                <div class="top-menu">
                    <ul>
                        <li class="active"><a href="#Home" class="scroll">Home</a></li>|
                        <li><a href="popular-restaurents.html">Popular Restaurants</a></li>|
                        <li><a href="order.html">Order</a></li>|
                        <li><a href="contact.html">contact</a></li>
                        <div class="clearfix"></div>
                    </ul>
                </div>
                <div class="login-section">
                    <ul>
                        <li><a href="login.html">Login</a>  </li> |
                        <li><a href="register.html">Register</a> </li> |
                        <li><a href="#">Help</a></li>
                        <div class="clearfix"></div>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>


            @yield('content')

        <div class="contact-section" id="contact">
            <div class="container">
                <div class="contact-section-grids">
                    <div class="col-md-3 contact-section-grid wow fadeInLeft" data-wow-delay="0.4s">
                        <h4>Site Links</h4>
                        <ul>
                            <li><i class="point"></i></li>
                            <li class="data"><a href="#">About Us</a></li>
                        </ul>
                        <ul>
                            <li><i class="point"></i></li>
                            <li class="data"><a href="#">Contact Us</a></li>
                        </ul>
                        <ul>
                            <li><i class="point"></i></li>
                            <li class="data"><a href="#">Privacy Policy</a></li>
                        </ul>
                        <ul>
                            <li><i class="point"></i></li>
                            <li class="data"><a href="#">Terms of Use</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 contact-section-grid wow fadeInLeft" data-wow-delay="0.4s">
                        <h4>Site Links</h4>
                        <ul>
                            <li><i class="point"></i></li>
                            <li class="data"><a href="#">About Us</a></li>
                        </ul>
                        <ul>
                            <li><i class="point"></i></li>
                            <li class="data"><a href="#">Contact Us</a></li>
                        </ul>
                        <ul>
                            <li><i class="point"></i></li>
                            <li class="data"><a href="#">Privacy Policy</a></li>
                        </ul>
                        <ul>
                            <li><i class="point"></i></li>
                            <li class="data"><a href="#">Terms of Use</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 contact-section-grid wow fadeInRight" data-wow-delay="0.4s">
                        <h4>Follow Us On...</h4>
                        <ul>
                            <li><i class="fb"></i></li>
                            <li class="data"> <a href="#">  Facebook</a></li>
                        </ul>
                        <ul>
                            <li><i class="tw"></i></li>
                            <li class="data"> <a href="#">Twitter</a></li>
                        </ul>
                        <ul>
                            <li><i class="in"></i></li>
                            <li class="data"><a href="#"> Linkedin</a></li>
                        </ul>
                        <ul>
                            <li><i class="gp"></i></li>
                            <li class="data"><a href="#">Google Plus</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 contact-section-grid nth-grid wow fadeInRight" data-wow-delay="0.4s">
                        <h4>Subscribe Newsletter</h4>
                        <p>To get latest updates and food deals every week</p>
                        <input type="text" class="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
                        <input type="submit" value="submit">
                        </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-section-ends -->
    <!-- footer-section-starts -->
    <div class="footer">
        <div class="container">
            <p class="wow fadeInLeft" data-wow-delay="0.4s">&copy; 2016  All rights  Reserved</p>
        </div>
    </div>
    <!-- footer-section-ends -->
   <script type="text/javascript" src="{{ URL::to('js/jquery.min.js') }}"></script>
   <script type="text/javascript" src="{{ URL::to('js/simpleCart.min.js') }}"></script>
   <script type="text/javascript" src="{{ URL::to('js/move-top.js') }}"></script>
   <script type="text/javascript" src="{{ URL::to('js/easing.js') }}"></script>
   <script type="text/javascript" src="{{ URL::to('js/wow.min.js') }}"></script>
   <script type="text/javascript" src="{{ URL::to('js/classie.js') }}"></script>
   <script type="text/javascript" src="{{ URL::to('js/jquery.carouFredSel-6.1.0-packed.js') }}"></script>
   <script type="text/javascript" src="{{ URL::to('js/jquery.flexisel.js') }}"></script>
   <script type="text/javascript" src="{{ URL::to('js/tms-0.4.1.js') }}"></script>
   <script type="text/javascript" src="{{ URL::to('js/jquery.easydropdown.js') }}"></script>
   <script type="text/javascript" src="{{ URL::to('js/uisearch.js') }}"></script>
   <script type="text/javascript" src="{{ URL::to('js/custom.js') }}"></script>
    
    
    
    
    
    
      
    <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</body>
</html>