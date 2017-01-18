@extends('layouts.medt')
@section('content')

    <form method="post" action="{{ url("/movies/" . $movie->id) }}">

        {{ csrf_field() }}
        {{ method_field("put") }}

        <div class="form-group">
            <label for="genre" class="control-label">Genre</label>
            <input type="text"
                   class="form-control"
                   id="genre"
                   name="genre"
                   placeholder="genre"
                   value="{{ $movie->genre or "" }}">
        </div>

        <div class="form-group">
            <label for="title" class="control-label">Title</label>
            <input type="text"
                   class="form-control"
                   id="title"
                   name="title"
                   value="{{ $movie->title or "" }}"
                   placeholder="Title">
        </div>

        <div class="form-group">
            <label for="description" class="control-label">Description</label>
            <input type="text"
                   class="form-control"
                   id="description"
                   name="description"
                   value="{{ $movie->description or "" }}"
                   placeholder="Description">
        </div>
        <div class="form-group">
            <label for="year" class="control-label">Year</label>
            <input type="text"
                   class="form-control"
                   id="year"
                   name="year"
                   value="{{ $movie->year or "" }}"
                   placeholder="Year">
        </div>

        <div class="form-group">
            <label for="runtime" class="control-label">Runtime</label>
            <input type="text"
                   class="form-control"
                   id="runtime"
                   name="runtime"
                   value="{{ $movie->runtime or "" }}"
                   placeholder="Runtime">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save Updates</button>
        </div>
    </form>
    <form method="post" action="{{ url('movies/' . $movie->id ) }}">
        {{ method_field("delete") }}
        {{ csrf_field() }}
        <button class="btn btn-danger btn-sm">Delete</button>
    </form>

@stop
