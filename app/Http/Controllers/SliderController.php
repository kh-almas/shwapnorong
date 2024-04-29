<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('pages.backend.slider', compact('sliders'));
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
            $imagePath = public_path('/uploads/');
            $image->move($imagePath, $imageName);

            // Save image name to database
            $slider = new Slider();
            $slider->image = $imageName;
            $slider->save();

            return redirect()->route('dashboard')->with('status', 'success')->with('message', 'Image uploaded successfully.');
        }
        return redirect()->route('dashboard')->with('status', 'error')->with('message', 'No image file uploaded.');
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
        $slider = Slider::find($id);

        if (!$slider) {
            return redirect()->route('dashboard')->with('status', 'error')->with('message', 'No image file uploaded.');
        }
        $imagePath = public_path('uploads/' . $slider->image);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        $slider->delete();

        return redirect()->route('dashboard')->with('status', 'success')->with('message', 'Image deleted successfully.');
    }
}
