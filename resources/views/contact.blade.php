@extends('layouts.app')

@section('content')




<div id="contact" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Get in touch</h3>
               
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="contact_form">
                        <div id="message"></div>
                        <iframe src="https://www.google.com/maps?q=Kirkdale+House,+Kirkdale+Road,+E11+1HP,+London,+UK&output=embed" frameborder="0" style="border:0; width: 100%; height: 312px;" allowfullscreen></iframe>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
			
			<div class="row">
				<div class="col-md-offset-1 col-sm-10 col-md-10 col-sm-offset-1 pd-add">
					<div class="address-item">
						<div class="address-icon">
							<i class="icon icon-location2"></i>
						</div>
						<h3>Headquarters</h3>
						<p>{{$items->description}} 
							</p>
					</div>
					<div class="address-item">
						<div class="address-icon">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</div>
						<h3>Email Us</h3>
						<p>{{$email->description}}
							</p>
					</div>
					<div class="address-item">
						<div class="address-icon">
							<i class="icon icon-headphones"></i>
						</div>
						<h3>Call Us</h3>
						<p>{{$phone->description}}
							</p>
					</div>
				</div>
			</div><!-- end row -->
			
        </div><!-- end container -->
    </div><!-- end section -->












@endsection