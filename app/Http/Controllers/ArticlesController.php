<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;
use Carbon\Carbon;


class ArticlesController extends Controller
{
    public function __construct(){
        $this->middleware('auth', ['only' => 'create']);
    }
    

    public function index(){
        $latest = Article::latest()->first();
        $articles = Article::latest()->published()->get();
        return view('articles.article', compact('articles', 'latest'));
    }
   
    public function show(Article $article){
        return view('articles.show', compact('article'));
    }

    public function create(){
        $tags = \App\Tag::pluck('name', 'id');
        return view('articles.create', compact('tags'));
    }

    public function store(ArticleRequest $request){
        $this->createArticle($request);
        flash()->success('Your Article has been created');
        return redirect('articles');
    }

    public function edit(Article $article){
        $tags = \App\Tag::pluck('name', 'id');
        return view('articles.edit', compact('article', 'tags'));
    }
  
    public function update(Article $article, ArticleRequest $request){
        $article->update($request->all());
        $this->syncTags($article, $request->input('tag_list'));
        return redirect('articles');
    }
 
    private function syncTags(Article $article, $tags){
        $article->tags()->sync((array) $tags);
    }

    private function createArticle(ArticleRequest $request){
        $article = \Auth::user()->articles()->create($request->all());
        $this->syncTags($article, $request->input('tag_list'));
    }
}
