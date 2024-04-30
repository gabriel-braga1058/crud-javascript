<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('Photo.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Photo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)

    {
        dd($request->all());
        $photo = new PhotoController($request->all());

        $photo->create();

        return redirect()->back()->with('success', 'Produto criado com sucesso');

    }

    /**
     * Display the specified resource.
     */
    public function show(Photo $photo)
    {
        // $request = new Photo($photo->all());
        // $request ->save();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Photo $photo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Photo $photo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Photo $photo)
    {
        //
    }
}
