@extends('layouts.app')

@section('content')



<div class="banner-area banner-bg-1">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="banner">
						<h2>Our Portfolio</h2>
						<ul class="page-title-link">
                        <li><a href="{{route('/')}}">Home</a></li>
                        <li><a href="{{route('about_us')}}">About Us</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

    <div id="portfolio" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Our Portfolio</h3>
                <p class="lead">We build professional website templates, web design projects, material designs and UI kits. <br>Some of our awesome completed projects in below.</p>
            </div><!-- end title -->
        </div><!-- end container -->

        
            <hr class="invis">

            <div id="da-thumbs" class="da-thumbs portfolio">
        @foreach($portfolios as $portfolio)
            <div class="post-media pitem item-w1 item-h1 cat{{ $portfolio->category }}">
                <a href="{{ asset('images/' . $portfolio->image) }}" data-rel="prettyPhoto[gal]">
                    <img src="{{ asset('images/' . $portfolio->image) }}" alt="{{ $portfolio->title }}" class="img-responsive">
                    <div>
                        <h3>{{ $portfolio->name }} <small>{{ $portfolio->category }}</small></h3>
                        <i class="flaticon-unlink"></i>
                    </div>
                </a>
            </div>
        @endforeach
               
            </div><!-- end portfolio -->
        </div><!-- end container -->
    </div><!-- end section -->
	
	





@endsection