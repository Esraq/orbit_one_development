@extends('layouts.master')

@section('content')


<script>
    @if(Session::has('success'))
        toastr.success("{{ Session::get('success') }}");
    @endif

    @if(Session::has('error'))
        toastr.error("{{ Session::get('error') }}");
    @endif

    @if(Session::has('warning'))
        toastr.warning("{{ Session::get('warning') }}");
    @endif

    @if(Session::has('info'))
        toastr.info("{{ Session::get('info') }}");
    @endif
</script>








<div class="panel panel-default">
                        <div class="panel-heading">
                            <center>Update Password</center>
                        </div>


                        @if (session()->has('success'))


@endif







                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">

                                <form id="myform" action="/change_password" method="POST" enctype="multipart/form-data">
                                @csrf
                                        <div class="form-group">
                                            <label><b>Old Password:</b></label>
                                            <input type="text"  name="old_password" placeholder="Enter old password"  class="form-control" />
                                            @if ($errors->first('old_password'))<div class="alert alert-danger">{!! $errors->first('old_password') !!}</div> @endif

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