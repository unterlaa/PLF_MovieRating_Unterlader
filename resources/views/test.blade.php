@extends('layouts.medt')

@section('content')
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Movie Details</h3>
        </div>
        <div class="panel-body">
            ID: {{ $movies->id }} <br>
            Genre: {{ $movies->genre }} <br>
            Title: {{ $movies->title }} <br>
            Description: {{ $movies->description }} <br>
            Year: {{ $movies->year }} <br>
            Runtime: {{ $movies->runtime }} <br>
            Created_at: {{ $movies->created_at }} <br>
            Updated_at: {{$movies->updated_at}} <br>


        </div>
    </div>

@stop
