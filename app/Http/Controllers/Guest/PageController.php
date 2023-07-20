<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Movie;

class PageController extends Controller
{
    public function getData(){
        $movies = Movie::where('id', '>', 0)->orderBy('title', 'asc')->get();

        return view('welcome', compact('movies'));
    }
}
