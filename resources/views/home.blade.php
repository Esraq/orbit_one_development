
@extends('layouts.app')

@section('content')


<script>
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            autoplay: true,
            autoplayTimeout: 3000,
            responsive: {
                0: { items: 1 },
                600: { items: 1 },
                1000: { items: 1 }
            }
        });
    });
</script>



<div class="slider-area">
    <div class="slider-wrapper owl-carousel">
        @foreach($banners as $banner)
            <div class="slider-item home-one-slider-otem slider-item-four slider-bg-one" 
                 style="background-image: url('{{ asset('images/' . $banner->image) }}'); background-size: cover; background-position: center;">
                <div class="container">
                    <div class="row">
                        <div class="slider-content-area">
                            <div class="slide-text">
                                <h1 class="homepage-three-title">{{ $banner->title }}</h1>
                                <h2>{{ $banner->slogan }}</h2>
                                <div class="slider-content-btn">
                                    <a class="button btn btn-light btn-radius btn-brd" href="{{route('about_us')}}">Read More</a>
                                    <a class="button btn btn-light btn-radius btn-brd" href="{{route('contact')}}">Contact</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>










<div id="about" class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">
                        <h4>About Us</h4>
                        <h2>Welcome to Orbit One Solutions</h2>
                       

                        <p> {{$about_us->description}}</p>

                        <a href="{{route('about_us')}}" class="btn btn-light btn-radius btn-brd grd1">Learn More</a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="post-media wow fadeIn">
                    <img src="{{ asset('uploads/about_01.jpg') }}" alt="About Image" class="img-responsive img-rounded">

                        <a href="http://www.youtube.com/watch?v=nrJtHemSPW4" data-rel="prettyPhoto[gal]" class="playbutton"><i class="flaticon-play-button"></i></a>
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->

            <hr class="hr1"> 

            <div class="row">
				<div class="col-md-6">
                    <div class="post-media wow fadeIn">
                    <img src="{{ asset('uploads/about_02.jpg') }}" alt="About Image" class="img-responsive img-rounded">

                    </div><!-- end media -->
                </div><!-- end col -->
				
                <div class="col-md-6">
                    <div class="message-box">
                        <h4>Who We are</h4>
                        <h2>We you should choose us</h2>
                        <p>{{$choose->description}}</p>

                        
                        <a href="{{route('about_us')}}" class="btn btn-light btn-radius btn-brd grd1">Learn More</a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
	
	<div class="parallax section parallax-off" data-stellar-background-ratio="0.9" style="background-image:url('uploads/parallax_04.jpg');">
        <div class="container">
            <div class="row text-center stat-wrap">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <span data-scroll class="global-radius icon_wrap effect-1"><i class="flaticon-briefcase"></i></span>
                    <p class="stat_count">{{$completed_project->description}}</p>
                    <h3>Complated Projects</h3>
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <span data-scroll class="global-radius icon_wrap effect-1"><i class="flaticon-happy"></i></span>
                    <p class="stat_count">{{$happy_client->description}}</p>
                    <h3>Happy Clients</h3>
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <span data-scroll class="global-radius icon_wrap effect-1"><i class="flaticon-idea"></i></span>
                    <p class="stat_count">{{$customer_service->description}}</p>
                    <h3>Customer Services</h3>
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <span data-scroll class="global-radius icon_wrap effect-1"><i class="flaticon-customer-service"></i></span>
                    <p class="stat_count">{{$employees->description}}</p>
                    <h3>Employees</h3>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div id="services" class="parallax section lb">
    <div class="container">
        <div class="section-title text-center">
            <h3>Our Projects</h3>
            <p class="lead">
                Our Service offers unlimited solutions to all your business needs. In the installation package, we prepare search engine optimization, social media support, and provide corporate identity and graphic design services.
            </p>
        </div><!-- end title -->

        <div class="owl-services owl-carousel owl-theme">
            @foreach($services as $service)
                <div class="service-widget">
                    <div class="post-media wow fadeIn">
                        <a href="{{ asset('images/' . $service->image) }}" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius">
                            <i class="flaticon-unlink"></i>
                        </a>
                        <img src="{{ asset('images/' . $service->image) }}" alt="{{ $service->name }}" class="img-responsive img-rounded" style="width: 300px; height: 200px; object-fit: cover;">
                    </div>
                    <div class="service-dit">
                        <h3>{{ $service->name }}</h3>
                        <a href="/projects/{{$service->id}}" class="btn text-dark" style="background-color: rgb(153, 204, 255); border-color: #99ccff;">
                            Details
                        </a>
                    </div>
                </div>
            @endforeach
        </div><!-- end row -->
    </div>
</div>


           
    <div id="features" class="section lb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Features & Overviews</h3>
                <p class="lead">A modern system offering seamless integration, automation, real-time analytics, security, and an intuitive user experience for optimized performance. </p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <ul class="features-left">
                        <li class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                            <i class="flaticon-wordpress-logo"></i>
                            <div class="fl-inner">
                                <h4>WordPress Installation</h4>
                                <p>Empowering Innovation
                                Through cutting-edge technology</p>
                            </div>
                        </li>
                        <li class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                            <i class="flaticon-windows"></i>
                            <div class="fl-inner">
                                <h4>Browser Compatible</h4>
                                <p>Empowering Innovation
                                Through cutting-edge technology </p>
                            </div>
                        </li>
                        <li class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.4s">
                            <i class="flaticon-price-tag"></i>
                            <div class="fl-inner">
                                <h4>eCommerce Ready</h4>
                                <p>Empowering Innovation
                                Through cutting-edge technology </p>
                            </div>
                        </li>
                        <li class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                            <i class="flaticon-new-file"></i>
                            <div class="fl-inner">
                                <h4>Easy to Customize</h4>
                                <p>Empowering Innovation
                                Through cutting-edge technology. </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 hidden-xs hidden-sm">
                <img src="{{ asset('uploads/ipad.jpg') }}" class="img-center img-responsive" alt="iPad Image" style="height: 100%;">


                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <ul class="features-right">
                        <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                            <i class="flaticon-pantone"></i>
                            <div class="fr-inner">
                                <h4>Limitless Colors</h4>
                                <p>Empowering Innovation
                                Through cutting-edge technology </p>
                            </div>
                        </li>
                        <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                            <i class="flaticon-cloud-computing"></i>
                            <div class="fr-inner">
                                <h4>Lifetime Update</h4>
                                <p>Empowering Innovation
                                Through cutting-edge technology. </p>
                            </div>
                        </li>
                        <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.4s">
                            <i class="flaticon-line-graph"></i>
                            <div class="fr-inner">
                                <h4>SEO Friendly</h4>
                                <p>Empowering Innovation
                                Through cutting-edge technology </p>
                            </div>
                        </li>
                        <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                            <i class="flaticon-coding"></i>
                            <div class="fr-inner">
                                <h4>Simple Clean Code</h4>
                                <p>Empowering Innovation
                                Through cutting-edge technology </p>
                            </div>
                        </li>
                    </ul>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    
   
    

    @endsection