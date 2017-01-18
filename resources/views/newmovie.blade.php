@extends('layouts.medt')
@section('content')

    <form method="post" action="{{ url("movies") }}">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="genre" class="control-label">Genre</label>
            <input type="text" class="form-control" id="genre" name="genre" placeholder="Genre">
        </div>

        <div class="form-group">
            <label for="title" class="control-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Title">
        </div>

        <div class="form-group">
            <label for="description" class="control-label">Description</label>
            <input type="text" class="form-control" id="description" name="description" placeholder="description">
        </div>

        <div class="form-group">
            <label for="year" class="control-label">Year</label>
            <input type="text" class="form-control" id="year" name="year" placeholder="year">
        </div>

        <div class="form-group">
            <label for="runtime" class="control-label">Runtime</label>
            <input type="text" class="form-control" id="runtime" name="runtime" placeholder="runtime">
        </div>


        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
    <th>
        <a href="{{ url('/movies') }}" class="btn btn-info btn-sm" role="button">Übersichtsseite</a>
    </th>

@stop