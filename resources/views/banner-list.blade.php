@extends('layouts.master')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading">
        <center>Banner List</center>
    </div>

    <!-- Success/Error Messages -->
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

    <!-- Create Button -->
    <div class="text-right mb-3" style="padding-right: 20px;">
    <a href="{{ route('banner.create') }}" class="btn btn-success">Create</a>
</div>

<br><br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th><center>Weight</center></th>
                <th><center>Image</center></th>
                <th><center>Title</center></th>
                <th><center>Slogan</center></th>
                <th><center>Actions</center></th>
            </tr>
        </thead>

        <tbody>
            @foreach($banners as $banner)
                <tr>
                    <td><center>{{ $banner->serial_no }}</center></td>
                    <td><center><img src="{{ asset('images/' . $banner->image) }}" alt="{{ $banner->image }}" height="60" width="90"></center></td>
                    <td><center>{{ $banner->title }}</center></td>
                    <td><center>{{ $banner->slogan }}</center></td>
                    <td>
                        <center>
                            
                            <a class="btn btn-primary" href="{{ route('banner.edit', $banner->id) }}">Edit</a>

                            <form action="{{ route('banner.destroy', $banner->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </center>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
