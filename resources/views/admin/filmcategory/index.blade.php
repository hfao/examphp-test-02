@extends('admin.master')
@section('title', 'index')
@section('content-tble')
    <!-- Movie List -->
    <table class="table table-striped">
        @csrf
        <thead>
            <tr>
                <th>Title</th>
                <th>Director</th>
                <th>Description</th>
                <th>Image</th>
                <th>Genre</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($films as $item)
                @php
                    $image = file_exists(public_path('image/'.$item->image)) ? asset('image/'.$item->image) : asset('image/404.jpeg')
                @endphp
                <tr>
                    <td>{{$item->movieTitle }}</td>
                    <td>{{$item->director}}</td>
                    <td>{{$item->description}}</td>
                    <td><img src="{{$image}}" width="50px" alt=""></td>
                    <td>{{$item->genre}}</td>
                    <td>{{$item->status}}</td>
                    <td><button class="btn btn-sm btn-info">Edit</button> <button class="btn btn-sm btn-danger">Delete</button></td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
