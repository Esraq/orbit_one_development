@extends('layouts.master')

@section('content')


<div class="panel panel-default">
                        <div class="panel-heading">
                            <center>Update Content</center>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">

                                <form action="{{ route('content.update',$content->id) }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')
                                        <div class="form-group">
                                            <label><b>Title:</b></label>
                                            <input type="text"  name="title" placeholder="Enter title of content" value="{{$content->title}}"  class="form-control" />
                                            @if ($errors->first('title'))<div class="alert alert-danger">{!! $errors->first('title') !!}</div> @endif

                                        </div>



                                        <div class="form-group">
                                            <label>Slogan:</label>
                                            <input type="text"  name="slogan" placeholder="Enter slogan of content" value="{{$content->slogan}}" class="form-control" />
                                            @if ($errors->first('slogan'))<div class="alert alert-danger">{!! $errors->first('slogan') !!}</div> @endif

                                        </div>




                                        <div class="form-group">
    <label>Value:</label>
    <textarea name="description" placeholder="Enter description" class="form-control">{{$content->description}}</textarea>
    @if ($errors->first('description'))
        <div class="alert alert-danger">{!! $errors->first('description') !!}</div>
    @endif
</div>



                                    




                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>

                                    





    </div>






@endsection