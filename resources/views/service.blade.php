@extends('layouts.master')

@section('content')


<div class="panel panel-default">
                        <div class="panel-heading">
                            <center>Add Service</center>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">

                                <form id="myform" action="/service" method="POST" enctype="multipart/form-data">
                                @csrf
                                        <div class="form-group">
                                            <label><b>Name:</b></label>
                                            <input type="text"  name="name" placeholder="Enter name" value="{{old('name')}}"  class="form-control" />
                                            @if ($errors->first('name'))<div class="alert alert-danger">{!! $errors->first('name') !!}</div> @endif

                                        </div>



                                        <div class="form-group">
    <label>Details:</label>
    <textarea id="editor" name="details" placeholder="Enter description" class="form-control">{{ old('details') }}</textarea>
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
                                            <input type="file" name="photo" value="{{old('photo')}}" class="form-control" />
                                            @if ($errors->first('photo'))<div class="alert alert-danger">{!! $errors->first('photo') !!}</div> @endif
                                        </div>




                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>

                                    





    </div>






@endsection