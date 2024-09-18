<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class PageController extends Controller
{
    public function index() {

        $title = 'Benvenuti nella mia zona fumetti';
        $num_comics = Comic::count();
        $last_add = Comic::orderBy('id', 'desc')->first();
        $last_comic_title = $last_add->title;

        return view('home', compact('title', 'num_comics', 'last_comic_title'));
    }
}
