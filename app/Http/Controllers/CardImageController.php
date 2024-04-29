<?php

namespace App\Http\Controllers;

use App\Models\Cardimage;
use Illuminate\Http\Request;

class CardImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $photos = Cardimage::all();
        return view('pages.backend.cardimage', compact('photos'));
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
        //
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
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust max file size as needed
        ]);

        $prev = Cardimage::where('serial', $id)->first();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $imagePath = public_path('/uploads/cards/');

            if ($prev->image) {
                unlink($imagePath . $prev->image);
            }

            $image->move($imagePath, $imageName);

            $prev->image = $imageName;
            $prev->save();
            return redirect()->route('card.photo')->with('status', 'success')->with('message', 'Image uploaded successfully.');
        }

        return redirect()->route('card.photo')->with('status', 'error')->with('message', 'No image file uploaded.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
