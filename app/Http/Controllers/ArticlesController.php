<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::orderBy('created_at', 'DESC')->paginate(9);
        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $articles = Article::all();
        return view('articles.create', compact('articles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Article $article)
    {
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image',
        ]);
    
            $imagePath = request('image')->store('uploads', 'public');
    
            // $imagePath = cloudinary()->upload($request->file('image')->getRealPath())->getSecurePath();
    
            auth()->user()->articles()->create([
                'title' => $data['title'],
                'description' => $data['description'],
                'image' => $imagePath,
            ]);
    
            return redirect('/articles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        return view('articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Article $article)
    {
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
    
    
        auth()->user()->articles()->update([
            'title' => $data['title'],
            'description' => $data['description'],
        ]);
    
        return redirect("articles/{$article->id}");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();

        return redirect('/articles');
    }

    public function editImage(Article $article) {
        return view('articles.image', compact('article'));
    }
    
    public function updateImage(Article $article) {
        $data = request()->validate([
            'image' => 'required|image',
        ]);
    
        $imagePath = request('image')->store('uploads', 'public');
    
        auth()->user()->articles()->update([
            'image' => $imagePath,
        ]);
    
        return redirect("articles/{$article->id}");
    }
}
