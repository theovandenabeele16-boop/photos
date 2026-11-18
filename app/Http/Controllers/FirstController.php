<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;
use App\Models\Photo;

class FirstController extends Controller
{
    public function album(){
        $albums = Album::with('photos')->get();
        return view("album", compact ("albums"));
    }



    public function photo()
    {
        $photos = Photo::all();
        return view('album', compact('photos'));
    }
}
