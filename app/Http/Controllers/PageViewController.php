<?php

namespace App\Http\Controllers;

use App\Models\Cardimage;
use App\Models\Experience;
use App\Models\Photogallery;
use App\Models\Slider;
use App\Models\Videogallery;

class PageViewController extends Controller
{
    public function home() {
        $sliders = Slider::all();
        $experiences = Experience::all();
        $photos = Cardimage::all();
        return view('pages.frontend.home', compact('sliders', 'experiences', 'photos'));
    }

    public function photogallery() {
        $photos = Photogallery::all();
        return view('pages.frontend.photo_gallery', compact( 'photos'));
    }

    public function video_gallery() {
        $videos = Videogallery::all();
        return view('pages.frontend.video_gallery', compact( 'videos'));
    }
}
