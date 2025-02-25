
@extends('layouts.master')

@section('content')


<div class="panel panel-default">
                        <div class="panel-heading">
                            <center>Add User</center>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">

                                <form id="myform" action="/register" method="POST" enctype="multipart/form-data">
                                @csrf
                                        <div class="form-group">
                                            <label><b>Name:</b></label>
                                            <input type="text"  name="name" placeholder="Enter name" value="{{old('name')}}"  class="form-control" />
                                            @if ($errors->first('name'))<div class="alert alert-danger">{!! $errors->first('name') !!}</div> @endif

                                        </div>



                                        <div class="form-group">
                                            <label>Email:</label>
                                            <input type="text"  name="email" placeholder="Enter email" value="{{old('email')}}" class="form-control" />
                                            @if ($errors->first('email'))<div class="alert alert-danger">{!! $errors->first('email') !!}</div> @endif

                                        </div>




                                        <div class="form-group">
                                        <label>Password:</label>
                                            <input type="text"  name="password" value="{{old('password')}}" placeholder="Enter password" class="form-control" />
                                            @if ($errors->first('password'))<div class="alert alert-danger">{!! $errors->first('password') !!}</div> @endif
                                        </div>


                                        <div class="form-group">
                                        <label>Password Confirmation:</label>
                                            <input type="text"  name="password_confirmation" value="{{old('password_confirmation')}}" placeholder="Enter password" class="form-control" />
                                            @if ($errors->first('password_confirmation'))<div class="alert alert-danger">{!! $errors->first('password_confirmation') !!}</div> @endif
                                        </div>
                                        
                                        




                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>

                                    





    </div>
   
   
   
   
@endsection