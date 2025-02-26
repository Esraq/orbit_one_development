<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>Orbit</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
   <!-- Favicon -->
<link rel="shortcut icon" href="{{ asset('images/logos/logo.png') }}" type="image/x-icon">
<link rel="apple-touch-icon" href="{{ asset('images/logos/logo.png') }}">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<!-- Site CSS -->
<link rel="stylesheet" href="{{ asset('style.css') }}">
<!-- Responsive CSS -->
<link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
<!-- Custom CSS -->
<link rel="stylesheet" href="{{ asset('css/custom.css') }}">

<!-- Modernizer for Portfolio -->
<script src="{{ asset('js/modernizer.js') }}"></script>


    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


    <script>
    document.addEventListener("DOMContentLoaded", function () {
        let currentPath = window.location.pathname;

        if (currentPath === "/") {
            document.getElementById("home-link").classList.add("active");
        } else if (currentPath === "/about_us") {
            document.getElementById("about-link").classList.add("active");
        } else if (currentPath === "/services") {
            document.getElementById("services-link").classList.add("active");
        } else if (currentPath === "/portfolio") {
            document.getElementById("portfolio-link").classList.add("active");
        } else if (currentPath === "/contact") {
            document.getElementById("contact-link").classList.add("active");
        }
    });
</script>


<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

<script>
    tinymce.init({
        selector: '#editor',
        height: 300,
        plugins: 'advlist autolink lists link charmap print preview anchor image imagetools media table code',
        toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
        branding: false
    });
</script>

</head>
<body>

    <!-- LOADER -->
    <div id="preloader">
        <div class="loader">
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__ball"></div>
		</div>
    </div><!-- end loader -->
    <!-- END LOADER -->
    
	<div class="top-bar" style="background-color: #020079; padding: 10px 0;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="left-top" style="display: flex; align-items: center; gap: 20px;">
                    <div class="email-box">
                        <a href="#" style="color: #ffffff; text-decoration: none;">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i> {{$email->description}}
                        </a>
                    </div>
                    <div class="phone-box">
                        <a href="tel:1234567890" style="color: #ffffff; text-decoration: none;">
                            <i class="fa fa-phone" aria-hidden="true"></i> {{$phone->description}}
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="right-top" style="text-align: right;">
                    <div class="social-box">
                        <ul style="list-style: none; padding: 0; margin: 0; display: flex; gap: 15px; justify-content: flex-end;">
                            <li><a href="{{$fb->description}}" style="color: #ffffff; font-size: 20px;"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                            <li><a href="{{$insta->description}}" style="color: #ffffff; font-size: 20px;"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="{{$ld->description}}" style="color: #ffffff; font-size: 20px;"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                            <li><a href="{{$twitter->description}}" style="color: #ffffff; font-size: 20px;"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <header class="header header_style_01">
        <nav class="megamenu navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ url('/') }}">
    <img src="{{ asset('images/logos/logo.png') }}" height="60px" width="120px" alt="image">
</a>

                </div>
                <div id="navbar" class="navbar-collapse collapse">
    <ul class="nav navbar-nav navbar-right">
        <li><a href="{{route('/')}}" id="home-link">Home</a></li>
        <li><a href="{{route('about_us')}}" id="about-link">About us</a></li>
        <li><a href="{{route('services')}}" id="services-link">Our Services</a></li>
        <li><a href="{{route('portfolio')}}" id="portfolio-link">Portfolio</a></li>
        <li><a href="{{route('contact')}}" id="contact-link">Contact</a></li>
    </ul>
</div>
            </div>
        </nav>
    </header>
	
	

   @yield('content')


   <footer class="footer" style="background-color: #020079; color: #ffffff; padding: 50px 0;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="widget clearfix">
                    <div class="widget-title">
                    <img src="{{ asset('images/logos/logo.png') }}" height="60" width="120" alt="Logo">

                    </div>
                    <p style="color: #d1d1d1;"><b>Kirkdale House, Kirkdale Road E11 1HP London UK</b><br>
<b>Phone: 07935390848</b><br>
<b>Email: info@theorbit.one</b></p>
                    
                </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="widget clearfix">
                    <div class="widget-title">
                        <h3 style="color: #ffffff;">Important Link</h3>
                    </div>

                    <ul class="footer-links hov" style="list-style: none; padding: 0;">
                        <li><a href="https://www.theorbit.one/" style="color: #ffffff; text-decoration: none;">Orbit Media Solutions <span class="icon icon-arrow-right2"></span></a></li>
                        <li><a href="https://ecostructiveit.com/" style="color: #ffffff; text-decoration: none;">Ecostructive IT <span class="icon icon-arrow-right2"></span></a></li>
                        <li><a href="https://shulovmart.com/" style="color: #ffffff; text-decoration: none;">Ecommerece <span class="icon icon-arrow-right2"></span></a></li>
                        
                    </ul>
                </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="footer-distributed widget clearfix">
                    <div class="widget-title">
                        <h3 style="color: #ffffff;">Orbit</h3>
                        <p style="color: #d1d1d1;">

                        At Orbit Media Solutions, we are dedicated to crafting innovative digital strategies that drive results and build lasting partnerships. Your success is our mission, and we’re here to help your business reach for the stars.


                        </p>
                    </div>

                    <div class="footer-right">
                        
                    </div>                        
                </div>
            </div>
        </div>
    </div>
</footer>


<div class="copyrights" style="background-color: #020079; padding: 15px 0; text-align: center;">
    <div class="container">
        <div class="footer-distributed">
            <div class="footer-left">                   
                <p class="footer-company-name" style="color: #ffffff; font-size: 14px; margin: 0;">
                    All Rights Reserved. &copy; 2025
                    <a href="https://www.theorbit.one/" style="color: #fcbf02; text-decoration: none;">Orbit One</a> Design By : 
                    <a href="https://ecostructiveit.com/" style="color: #fcbf02; text-decoration: none;">Ecostructive IT</a>
                </p>
            </div>
        </div>
    </div>
</div>


<a href="#" id="scroll-to-top" class="dmtop global-radius">
    <i class="fa fa-angle-up"></i>
</a>

<!-- ALL JS FILES -->
<script src="{{ asset('js/all.js') }}"></script>
<!-- ALL PLUGINS -->
<script src="{{ asset('js/custom.js') }}"></script>
<script src="{{ asset('js/portfolio.js') }}"></script>
<script src="{{ asset('js/hoverdir.js') }}"></script>
 

</body>
</html>