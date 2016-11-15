<?php

namespace App\Http\Controllers;
use App\Article;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;
//use Request;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    public function __construct()
	{
		$this->middleware('admin', ['except' => ['index', 'show']]);
	}
	
	public function index()
	{
		$articles = Article::latest('published_at')->published()->get();
		
		return view('news.index', ['articles' => $articles]);
	}	
	
    public function show(Article $article)
	{
		return view('news.show', compact('article'));
	}		
	
	public function create()
	{
		return view('news.create');
	}

	
	//public function store(Request $request)
	public function store(ArticleRequest $request)
	{
		//$this->validate($request, ['title' => 'required|min:20', 'body' => 'required']);
		
		$article = new Article($request->all());
		
		Auth::user()->articles()->save($article);
				
		return redirect('news'); 
	}
	
	public function edit(Article $article)
	{
		return view('news.edit', compact('article'));
	}

	public function update(Article $article, ArticleRequest $request)
	{
		$article->update($request->all());
		
		return redirect('news');
	}
}
