@extends('layouts.master')

@section('content')


<div class="panel panel-default">
                        <div class="panel-heading">
                            <center>Add Admin</center>
                        </div>


                        @if (session()->has('success'))


@endif







                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">

                                <form id="myform" action="/admin" method="POST" enctype="multipart/form-data">
                                @csrf
                                        <div class="form-group">
                                            <label><b>Name:</b></label>
                                            <input type="text"  name="name" placeholder="Enter name"  class="form-control" />
                                            @if ($errors->first('name'))<div class="alert alert-danger">{!! $errors->first('name') !!}</div> @endif

                                        </div>

                                        <div class="form-group">
                                            <label><b>Email:</b></label>
                                            <input type="text"  name="email" placeholder="Enter email"  class="form-control" />
                                            @if ($errors->first('email'))<div class="alert alert-danger">{!! $errors->first('email') !!}</div> @endif

                                        </div>



                                        <div class="form-group">
                                            <label>New Password:</label>
                                            <input type="text"  name="password" placeholder="Enter new password" value="{{old('password')}}" class="form-control" />
                                            @if ($errors->first('password'))<div class="alert alert-danger">{!! $errors->first('password') !!}</div> @endif

                                        </div>




                                       



                                      



                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>

                                    





    </div>






@endsection