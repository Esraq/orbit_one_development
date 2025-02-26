@extends('layouts.app')

@section('content')


<div id="services" class="parallax section lb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Our Service</h3>
                <p class="lead">Our Service unlimited solutions to all your business needs. in the installation package we prepare search engine optimization, social media support, we provide corporate identity and graphic design services.</p>
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

                <!-- end service -->

               
                <!-- end service -->
            </div><!-- end row -->

            <hr class="hr1">

            <div class="text-center">
                <a data-scroll href="{{route('portfolio')}}" class="btn btn-light btn-radius btn-brd">View Our Portfolio</a><br><br>
            </div>
        </div><!-- end container -->
    </div><!-- end section -->














@endsection