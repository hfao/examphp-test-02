<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Film\StoreRequest;
use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $films = Film::all();
        return view('admin.filmcategory.index',[
            'films' => $films
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.filmcategory.create-film');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $file = $request->file('image');
        $filename = $file->getClientOriginalName();
        $filename = time() . ' - '. $filename;
        $file->move(public_path('image/'), $filename);

        $films = new Film();
        $films->movieTitle = $request->movieTitle;
        $films->director = $request->director ;
        $films->description = $request ->description ;
        $films->genre = $request->genre;
        $films->status = $request->status;
        $films-> image = $filename;

        $films->save();

        return redirect()->route('admin.filmcategory.index')->with('Success', 'Thành công thêm phim');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
