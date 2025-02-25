@extends('layouts.master')

@section('content')







<div class="panel panel-default">
                        <div class="panel-heading">
                            <center>Update Service</center>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">

                                <form action="{{ route('service.update',$service->id) }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')
                                        <div class="form-group">
                                            <label>Name:</label>
                                            <input type="text"  name="name" value="{{$service->name}}" placeholder="Enter name"  class="form-control" />
                                            @if ($errors->first('name'))<div class="alert alert-danger">{!! $errors->first('name') !!}</div> @endif

                                        </div>



                                        <div class="form-group">
    <label>Details:</label>
    <textarea id="editor" name="details" placeholder="Enter description" class="form-control">{{$service->details}}</textarea>
    @if ($errors->first('details'))
        <div class="alert alert-danger">{!! $errors->first('details') !!}</div>
    @endif
</div>


<script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>

<script>
    CKEDITOR.replace('editor', {
        width: '100%'  // Ensures full width
    });
</script>






                                        



                                        <div class="form-group">
                                        <label>Upload Photo:</label>
                                        <input type="file" name="image" />




                                        <input type="hidden" name="hidden_image" value="{{ $service->image}}" />
                                            @if ($errors->first('photo'))<div class="alert alert-danger">{!! $errors->first('photo') !!}</div> @endif
                                        </div>

                                        <div class="form-group">
                                            <label>Previous Image:</label>
                                            <img src="{{ asset('images/' . $service->image) }}" alt="" height="90px" width="120">

                                            </div>


                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>



    </div>













@endsection