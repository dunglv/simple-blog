<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Article;
use App\Event;
use App\Http\Requests;
use App\Http\Requests\ArticleFormRequest;
class ArticlesController extends Controller
{
    public function __construct()
    {
        // $events = Event::all();
        // \View::composer(['partials.events', 'articles.index'], function($view){
        //     $view->with('events', $events);
        // });
        // \View::share('events', $events);
    }
    public function index()
    {
    	$articles = Article::paginate(10);
    	return view('articles.index', compact('articles'));
    }

    public function show($id)
    {
    	$article = Article::find($id);
    	return view('articles.show')->with('article', $article);
    }

    public function xxx()
    {
    	return view('articles.xxx');
    }

    public function create()
    {
    	return view('articles.create');
    }

    public function store(ArticleFormRequest $request)
    {
    	$title = $request->input('title');
    	$content = $request->input('content');
    	Article::create([
    		'title' => $title,
    		'content' => $content
    		]);

    	return redirect()->route('article.index');
    }

    public function edit($id)
    {
    	$article  = Article::find($id);
    	return view('articles.edit', compact('article'));
    }

    public static function update($id, ArticleFormRequest $request)
    {
    	$article  = Article::find($id);
    	$article->title = $request->input('title');
    	$article->content = $request->input('content');
    	$article->save();
    	return redirect()->route('article.show', $id);
    }

    public function destroy($id)
    {
    	$article = Article::find($id);
    	$article->delete();
    	return redirect()->route('article.index');
    }
}
