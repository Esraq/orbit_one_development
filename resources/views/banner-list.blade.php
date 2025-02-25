


@extends('layouts.master')

@section('content')








<div class="panel panel-default">
                        <div class="panel-heading">
                            <center>Banner List</center>
                        </div>

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









<br>


<br>
<table class="table table-striped">
<thead>
<tr>




<th><center>Weight<center></th>
<th><center>Image</center></th>
<th><center>Title</center></th>
<th><center>Slogan</center></th>
<th><center></center></th>



<th colspan="2"><center></center></th>
</tr>

@foreach($banners as $banner)
<tr>

<td><center>{{$banner->serial_no}}</center></td>
<td><center><img src="/images/{{$banner->image}}" alt="" height="60px" width="90"></center></td>
<td><center>{{$banner->title}}</center></td>
<td><center>{{$banner->slogan}}</center></td>
<td><center><a class="btn btn-xs btn-warning" target="_blank"  href="/" role="button">view</a></center></td>

<td colspan="2">
                   <center>
        <form action="{{ route('banner.destroy',$banner->id) }}" method="POST">
     
                    
      
     <a class="btn btn-primary" href="{{ route('banner.edit',$banner->id) }}">Edit</a>

     @csrf
     @method('DELETE')

     <button type="submit" class="btn btn-danger">Delete</button>

</center>

          </td>

<!-- Modal content -->

</tr>
@endforeach
</table>





</div>
    </div>













@endsection