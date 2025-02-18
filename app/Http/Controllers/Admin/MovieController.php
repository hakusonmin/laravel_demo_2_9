<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMovieRequest;
use App\Http\Requests\UpdateMovieRequest;
use App\Models\Movie;


class MovieController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $movies = Movie::all();
    return view('web.admin.movie.index', compact('movies'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('web.admin.movie.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(StoreMovieRequest $request)
  {
    //
  }

  /**
   * Display the specified resource.
   */
  public function show($id)
  {
    $movie = Movie::find($id);
    return view('web.admin.movie.show', compact('movie'));
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Movie $movie)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(UpdateMovieRequest $request, Movie $movie)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Movie $movie)
  {
    //
  }
}
