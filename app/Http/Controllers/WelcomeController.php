<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

#Models
use App\Models\Article;
use App\Models\Video;
use App\Models\Slide;

class WelcomeController extends Controller
{
    public function index()
    {
        $articles       = Article::get();
        $videos         = Video::get();
        $slider         = Slide::get();

        $args = array(
            'articles'  => $articles,
            'videos' => $videos,
            'slides' => $slider,
        );

        return view('welcome', $args);
    }
}
