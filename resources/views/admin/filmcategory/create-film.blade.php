@extends('admin.master')

@section('title', 'create-film')

@section('content-create')
    <!-- Add Movie Form -->
    <form action="{{ route('admin.filmcategory.store') }}" method="POST" enctype="multipart/form-data" id="addMovieForm">
        @csrf
        <div class="form-group">
            <label for="movieTitle">Movie Title:</label>
            <input type="text" class="form-control" id="movieTitle" name="movieTitle" required>
        </div>
        <div class="form-group">
            <label for="director">Director:</label>
            <input type="text" class="form-control" id="director" name="director" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="content">Content:</label>
            <textarea class="form-control" id="content" name="content" rows="5"></textarea>
        </div>
        <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" class="form-control-file" id="image" name="image">
        </div>
        <div class="form-group">
            <label for="genre">Genre:</label>
            <select class="form-control" id="genre" name="genre">
                <option value="1">Action</option>
                <option value="2">Romance</option>
                <option value="3">Horror</option>
                <option value="4">Comedy</option>
                <!-- Add more genres here -->
            </select>
        </div>
        <div class="form-group">
            <label for="status">Status:</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status" id="visible" value="1" checked>
                <label class="form-check-label" for="visible">Visible</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status" id="hidden" value="2">
                <label class="form-check-label" for="hidden">Hidden</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Add Movie</button>
    </form>
@endsection
