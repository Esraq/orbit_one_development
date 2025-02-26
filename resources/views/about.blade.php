@extends('layouts.app')

@section('content')


<div class="banner-area banner-bg-1">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="banner">
						<h2>About Us</h2>
						<ul class="page-title-link">
							<li><a href="{{route('/')}}">Home</a></li>
							<li><a href="{{route('about_us')}}">About Us</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

    <div id="about" class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">
                       
                        <h2>Our Mission</h2>
                        <p>
          

    
                         {{$mission->description}}
   






                        </p>


                        <h2>Our Aim</h2>

                        <p> {{$aim->description}} </p>

                        <a href="{{route('services')}}" class="btn btn-light btn-radius btn-brd grd1">know More</a>
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
                      
                        <h2>Most Exclusive Service</h2>
                       

                        <p> {{$exclusive->description}} </p>

                        <a href="{{route('services')}}" class="btn btn-light btn-radius btn-brd grd1">Learn More</a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    






@endsection