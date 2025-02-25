@extends('layouts.master')

@section('content')


<div class="panel panel-default">
                        <div class="panel-heading">
                            <center>Add Banner</center>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">

                                <form id="myform" action="/banner" method="POST" enctype="multipart/form-data">
                                @csrf
                                        <div class="form-group">
                                            <label><b>Serial No:</b></label>
                                            <input type="text"  name="serial_no" placeholder="Enter weight of banner" value="{{old('serial_no')}}"  class="form-control" />
                                            @if ($errors->first('serial_no'))<div class="alert alert-danger">{!! $errors->first('serial_no') !!}</div> @endif

                                        </div>



                                        <div class="form-group">
                                            <label>Title:</label>
                                            <input type="text"  name="title" placeholder="Enter title of banner" value="{{old('title')}}" class="form-control" />
                                            @if ($errors->first('title'))<div class="alert alert-danger">{!! $errors->first('title') !!}</div> @endif

                                        </div>




                                        <div class="form-group">
                                        <label>Slogan:</label>
                                            <input type="text"  name="slogan" value="{{old('slogan')}}" placeholder="Enter slogan of banner" class="form-control" />
                                            @if ($errors->first('slogan'))<div class="alert alert-danger">{!! $errors->first('slogan') !!}</div> @endif
                                        </div>



                                        <div class="form-group">
                                        <label>Upload Photo:</label>
                                            <input type="file" name="photo" value="{{old('photo')}}" class="form-control" />
                                            @if ($errors->first('photo'))<div class="alert alert-danger">{!! $errors->first('photo') !!}</div> @endif
                                        </div>




                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>

                                    





    </div>






@endsection