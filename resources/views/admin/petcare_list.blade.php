@extends('layouts.app_without_navbar')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-2 col-sm-2">
            @include('includes.sidebar')
        </div>

        <div class="col-lg-9 col-sm-15 content-padding">
            <div class="header">
                <div class="row">
                    <div class="col-md-1">
                        <a href="{{ route('admin.index') }}" class="btn btn-secondary mb-3">Back</a>
                    </div>
                    <div class="col-md-6">
                        <h2>Petcares</h2>
                    </div>
                </div>
            </div>

            <div class="col-lg-9 col-sm-9">
                <div class="container">
                    <div class="row">
                        <div class="col-md-11">
                            <!-- Display the list of petcares -->
                            <table class="table">
    <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($petcares as $petcare)
        <tr>
            <td>{{ $petcare->title }}</td>
            <td>{{ $petcare->description }}</td>
            <td>
                @if ($petcare->image != null )
                <img src="{{ asset('images/' . $petcare->image) }}" class="image_size" alt="Petcare Image">
                @else
                 <img src="{{ asset('images/noImage.png')}}" class="image_size" alt="Petcare Image">
                @endif
            </td>
            <td>
                <a href="{{ route('admin.petcare.edit', $petcare->id) }}" class="btn btn-primary">Edit</a>
                <form action="{{ route('admin.petcare.destroy', $petcare->id) }}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this petcare?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
