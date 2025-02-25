


@extends('layouts.master')

@section('content')








<div class="panel panel-default">
                        <div class="panel-heading">
                            <center>Service List</center>
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
<th><center>Image</center></th>
 <th><center>Name</center></th>
 <th><center>Description</center></th>
</tr>





@foreach($services as $service)
<tr>


<td><center><img src="/images/{{$service->image}}" alt="" height="60px" width="90"></center></td>
<td><center>{{$service->name}}</center></td>
<td><center>
    

<?php

echo $service->details;

?>

</center></td>


<td colspan="2">
                   <center>
        <form action="{{ route('service.destroy',$service->id) }}" method="POST">
     
                    
      
     <a class="btn btn-primary" href="{{ route('service.edit',$service->id) }}">Edit</a>

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



    {{ $services->links() }} 









@endsection