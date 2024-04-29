<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $experiences = Experience::all();
        return view('pages.backend.experience', compact('experiences'));
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
        if (Experience::count() >= 8) {
            return redirect()->route('experience')->with('status', 'error')->with('message', 'You can upload a maximum of 8 images.');
        }

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->file('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->extension();
            $imagePath = public_path('/uploads/experience/');
            $image->move($imagePath, $imageName);

            $slider = new Experience();
            $slider->image = $imageName;
            $slider->save();

            return redirect()->route('experience')->with('status', 'success')->with('message', 'Image uploaded successfully.');
        }
        return redirect()->route('experience')->with('status', 'error')->with('message', 'No image file uploaded.');
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
        $experience = Experience::find($id);

        if (!$experience) {
            return redirect()->route('experience')->with('status', 'error')->with('message', 'No image file uploaded.');
        }
        $imagePath = public_path('uploads/experience/' . $experience->image);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
        $experience->delete();

        return redirect()->route('experience')->with('status', 'success')->with('message', 'Image deleted successfully.');
    }
}
