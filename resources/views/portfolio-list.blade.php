


@extends('layouts.master')

@section('content')








<div class="panel panel-default">
                        <div class="panel-heading">
                            <center>Portfolio List</center>
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


<div class="text-right mb-3" style="padding-right: 20px;">
    <a href="{{ route('portfolios.create') }}" class="btn btn-success">Create</a>
</div>
<br>


<br>
<table class="table table-striped">
<thead>
<tr>





<th><center>Image</center></th>
<th><center>Name<center></th>
<th><center>Category</center></th>

<th><center></center></th>



<th colspan="2"><center></center></th>
</tr>

@foreach($portfolios as $portfolio)
<tr>


<td><center><img src="/images/{{$portfolio->image}}" alt="" height="60px" width="90"></center></td>
<td><center>{{$portfolio->name}}</center></td>
<td><center>{{$portfolio->category}}</center></td>


<td colspan="2">
                   <center>
        <form action="{{ route('portfolios.destroy',$portfolio->id) }}" method="POST">
     
                    
      
    

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