<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requets;
use App\Tag;


class TagsController extends Controller
{
    public function show(Tag $tag){
        $articles =  $tag->articles;
        return view('articles.article', compact('articles'));
    }
}
