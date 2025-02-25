@extends('layouts.master')

@section('content')







<div class="panel panel-default">
                        <div class="panel-heading">
                            <center>Update Banner</center>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">

                                <form action="{{ route('banner.update',$banner->id) }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')
                                        <div class="form-group">
                                            <label>Weight:</label>
                                            <input type="text"  name="serial_no" value="{{$banner->serial_no}}" placeholder="Enter weight of banner"  class="form-control" />
                                            @if ($errors->first('serial_no'))<div class="alert alert-danger">{!! $errors->first('serial_no') !!}</div> @endif

                                        </div>



                                        <div class="form-group">
                                            <label>Slogan:</label>
                                            <input type="text"  name="slogan" value="{{$banner->slogan}}" placeholder="Enter title of banner"  class="form-control" />
                                            @if ($errors->first('slogan'))<div class="alert alert-danger">{!! $errors->first('slogan') !!}</div> @endif

                                        </div>




                                        <div class="form-group">
                                        <label>Title:</label>
                                            <input type="text"  name="title" value="{{$banner->title}}" placeholder="Enter title of banner" class="form-control" />
                                            @if ($errors->first('title'))<div class="alert alert-danger">{!! $errors->first('title') !!}</div> @endif
                                        </div>



                                        <div class="form-group">
                                        <label>Upload Photo:</label>
                                        <input type="file" name="image" />




                                        <input type="hidden" name="hidden_image" value="{{ $banner->filename}}" />
                                            @if ($errors->first('photo'))<div class="alert alert-danger">{!! $errors->first('photo') !!}</div> @endif
                                        </div>

                                        <div class="form-group">
                                            <label>Previous Image:</label>
                                            <img src="{{ asset('images/' . $banner->image) }}" alt="" height="90px" width="120">

                                            </div>


                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>



    </div>













@endsection