


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

 <th><center>Name</center></th>
 <th><center>Email</center></th>
</tr>





@foreach($users as $user)
<tr>



<td><center>{{$user->name}}</center></td>

<td><center>{{$user->email}}</center></td>


<td colspan="2">
                   <center>
        <form action="{{ route('admin.destroy',$user->id) }}" method="POST">
     
                    
      
    

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