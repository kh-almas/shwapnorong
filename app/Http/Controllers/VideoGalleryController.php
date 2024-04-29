<?php

namespace App\Http\Controllers;

use App\Models\Videogallery;
use Illuminate\Http\Request;

class VideoGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videos = Videogallery::all();
        return view('pages.backend.videogallery', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'link' => 'required|string',
        ]);
        $gallery = new Videogallery();
        $gallery->link = $request->link;
        $gallery->save();

        return redirect()->route('gallery.video')->with('status', 'success')->with('message', 'Link uploaded successfully.');
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
        $video = Videogallery::find($id);
        $video->delete();
        return redirect()->route('gallery.video')->with('status', 'success')->with('message', 'Video deleted successfully.');
    }
}
