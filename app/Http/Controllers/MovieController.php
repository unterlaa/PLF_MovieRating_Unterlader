<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Movie;

use App\Http\Requests;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $movies = Movie::all();
        return view('movielist')->with(['movies' => $movies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("newmovie");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $genre = $request->get("genre");
        $title = $request->get("title");
        $description = $request->get("description");
        $year = $request->get("year");
        $runtime = $request->get("runtime");




        $movie = new Movie();
        $movie->genre = $genre;
        $movie->title = $title;
        $movie->description = $description;
        $movie->year = $year;
        $movie->runtime = $runtime;



        $movie->save();

        sleep(3);

        return response()->json(["message" => "saved"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $host = Movie::find($id);

        return response()->json($host);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $movie = Movie::find($id);
        return view('updatemovie')->with(['movie' => $movie]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $movie = Movie::find($id);

        if ($movie != null) {
            $genre = $request->get("genre");
            $title = $request->get("title");
            $description = $request->get("description");
            $year = $request->get("year");
            $runtime = $request->get("runtime");


            $movie->genre = $genre;
            $movie->title = $title;
            $movie->description = $description;
            $movie->year = $year;
            $movie->runtime = $runtime;


            $movie->save();

            return redirect(url("/movies"))
                ->with(["message" => "updates saved"]);
        } else {
            return redirect(url("movies"))
                ->with(["message" => "host not found"]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $movieToDestroy = Movie::find($id);

        if ($movieToDestroy != null) {
            $movieToDestroy->delete();

            return response()->json(["message" => "deleted"]);
        } else {
            return response()->json(["message" => "saved"], 404);
        }
    }
}
