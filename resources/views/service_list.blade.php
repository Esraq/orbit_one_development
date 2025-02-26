


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

    <br>


<div class="text-right mb-3" style="padding-right: 20px;">
    <a href="{{ route('service.create') }}" class="btn btn-success">Create</a>
</div>
<br>


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
 
</tr>





@foreach($services as $service)
<tr>


<td><center><img src="{{ asset('images/' . $service->image) }}" alt="" height="60px" width="90">
</center></td>
<td><center>{{$service->name}}</center></td>



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