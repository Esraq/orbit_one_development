@extends('layouts.master')

@section('content')


<div class="panel panel-default">
                        <div class="panel-heading">
                            <center>Add Portfolio</center>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">

                                <form id="myform" action="/portfolios" method="POST" enctype="multipart/form-data">
                                @csrf
                                        <div class="form-group">
                                            <label><b>Name:</b></label>
                                            <input type="text"  name="name" placeholder="Enter name " value="{{old('name')}}"  class="form-control" />
                                            @if ($errors->first('name'))<div class="alert alert-danger">{!! $errors->first('name') !!}</div> @endif

                                        </div>


                                        <div class="form-group">
                                            <label><b>Category:</b></label>
                                            <input type="text"  name="category" placeholder="Enter name " value="{{old('category')}}"  class="form-control" />
                                            @if ($errors->first('category'))<div class="alert alert-danger">{!! $errors->first('category') !!}</div> @endif

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