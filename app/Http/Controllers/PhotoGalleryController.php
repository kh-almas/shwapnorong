<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\Photogallery;
use Illuminate\Http\Request;

class PhotoGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $photos = Photogallery::all();
        return view('pages.backend.photogallery', compact('photos'));
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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->file('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->extension();
            $imagePath = public_path('/uploads/photo/');
            $image->move($imagePath, $imageName);

            // Save image name to database
            $slider = new Photogallery();
            $slider->image = $imageName;
            $slider->save();

            return redirect()->route('gallery.photo')->with('status', 'success')->with('message', 'Image uploaded successfully.');
        }
        return redirect()->route('gallery.photo')->with('status', 'error')->with('message', 'No image file uploaded.');
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
        $photo = Photogallery::find($id);

        if (!$photo) {
            return redirect()->route('gallery.photo')->with('status', 'error')->with('message', 'No image file uploaded.');
        }
        $imagePath = public_path('uploads/photo/' . $photo->image);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
        $photo->delete();

        return redirect()->route('gallery.photo')->with('status', 'success')->with('message', 'Image deleted successfully.');
    }
}
