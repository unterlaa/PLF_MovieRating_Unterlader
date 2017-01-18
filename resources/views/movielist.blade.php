@extends("layouts.medt")

@section('content')

    <table class="table table-condensed">
        <thead>
        <th>ID</th>
        <th>Genre</th>
        <th>Title</th>
        <th>Description</th>
        <th>Year</th>
        <th>Runtime</th>
        <th>Durchschnittsrating</th>
        <th>
            <a href="{{ url('movies/create') }}" class="btn btn-warning btn-sm" role="button">New Movie</a>
        </th>



        </thead>
        @foreach($movies as $movie)
            <tr>
                <td>{{ $movie->id }}</td>
                <td>{{ $movie->genre }}</td>
                <td>{{ $movie->title }}</td>
                <td>{{ $movie->description }}</td>
                <td>{{ $movie->year }}</td>
                <td>{{ $movie->runtime }}</td>
                <td>( {{ (count($movie->ratings))/5 }} ) </td>
                <td>
                    <a href="{{ url('movies/' . $movie->id . "/edit") }}" class="btn btn-warning btn-sm" role="button">Detail</a>
                </td>
            </tr>
        @endforeach
    </table>

@stop

