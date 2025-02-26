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
    <link rel="shortcut icon" href="images/logos/logo.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/logos/logo.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>

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
                            <i class="fa fa-phone" aria-hidden="true"></i> +1 234 567 890
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="right-top" style="text-align: right;">
                    <div class="social-box">
                        <ul style="list-style: none; padding: 0; margin: 0; display: flex; gap: 15px; justify-content: flex-end;">
                            <li><a href="#" style="color: #ffffff; font-size: 20px;"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                            <li><a href="#" style="color: #ffffff; font-size: 20px;"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="#" style="color: #ffffff; font-size: 20px;"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                            <li><a href="#" style="color: #ffffff; font-size: 20px;"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                            <li><a href="#" style="color: #ffffff; font-size: 20px;"><i class="fa fa-rss-square" aria-hidden="true"></i></a></li>
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
                    <a class="navbar-brand" href="/"><img src="images/logos/logo.png" height="60px" width="120px"    alt="image"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
    <ul class="nav navbar-nav navbar-right">
        <li><a href="/" id="home-link">Home</a></li>
        <li><a href="/about_us" id="about-link">About us</a></li>
        <li><a href="/services" id="services-link">Our Services</a></li>
        <li><a href="/portfolio" id="portfolio-link">Portfolio</a></li>
        <li><a href="/contact" id="contact-link">Contact</a></li>
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
                        <img src="images/logos/logo.png" height="60px" width="120px"  />
                    </div>
                    <p style="color: #d1d1d1;">Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis montes.</p>
                    <p style="color: #d1d1d1;">Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis montes.</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="widget clearfix">
                    <div class="widget-title">
                        <h3 style="color: #ffffff;">Pages</h3>
                    </div>

                    <ul class="footer-links hov" style="list-style: none; padding: 0;">
                        <li><a href="#" style="color: #ffffff; text-decoration: none;">Home <span class="icon icon-arrow-right2"></span></a></li>
                        <li><a href="#" style="color: #ffffff; text-decoration: none;">Blog <span class="icon icon-arrow-right2"></span></a></li>
                        <li><a href="#" style="color: #ffffff; text-decoration: none;">Pricing <span class="icon icon-arrow-right2"></span></a></li>
                        <li><a href="#" style="color: #ffffff; text-decoration: none;">About <span class="icon icon-arrow-right2"></span></a></li>
                        <li><a href="#" style="color: #ffffff; text-decoration: none;">Faq <span class="icon icon-arrow-right2"></span></a></li>
                        <li><a href="#" style="color: #ffffff; text-decoration: none;">Contact <span class="icon icon-arrow-right2"></span></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="footer-distributed widget clearfix">
                    <div class="widget-title">
                        <h3 style="color: #ffffff;">Subscribe</h3>
                        <p style="color: #d1d1d1;">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which one know this tricks.</p>
                    </div>

                    <div class="footer-right">
                        <form method="get" action="#" style="position: relative;">
                            <input placeholder="Subscribe our newsletter.." name="search" style="width: 100%; padding: 10px; border: none; border-radius: 5px;">
                            <i class="fa fa-envelope-o" style="position: absolute; right: 15px; top: 50%; transform: translateY(-50%); color: #020079;"></i>
                        </form>
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
                    All Rights Reserved. &copy; 2018 
                    <a href="#" style="color: #fcbf02; text-decoration: none;">GoodWEB</a> Design By : 
                    <a href="https://html.design/" style="color: #fcbf02; text-decoration: none;">html design</a>
                </p>
            </div>
        </div>
    </div>
</div>


    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
    <script src="js/portfolio.js"></script>
    <script src="js/hoverdir.js"></script>    

</body>
</html>