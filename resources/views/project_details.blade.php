@extends('layouts.app')

@section('content')




<div id="contact" class="section wb">
        <div class="container">
            <div class="section-title text-center">
            <h3>{{$projects->name}}</h3>
            <p class="lead"><?php 
            
            
               echo $projects->details;
               ?>
               
               </p>




               
            </div><!-- end title -->
</div>
         

@endsection