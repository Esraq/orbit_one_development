


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



<th><center>ID<center></th>
<th><center>Title<center></th>
<th><center>Placement</center></th>




<th colspan="2"><center></center></th>
</tr>

@foreach($contents as $content)
<tr>
<td><center>{{$content->id}}</center></td>
<td><center>{{$content->title}}</center></td>

<td><center>{{$content->slogan}}</center></td>


<td colspan="2">
                   <center>
      
     
                    
      
     <a class="btn btn-primary" href="{{ route('content.edit',$content->id) }}">Edit</a>

     

</center>

          </td>

<!-- Modal content -->

</tr>
@endforeach
</table>





</div>
    </div>


    {{ $contents->links() }} 










@endsection