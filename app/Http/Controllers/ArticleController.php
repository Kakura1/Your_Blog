<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;
use App\Models\Tag;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        $tags = Tag::all();
        $categories = Category::all();
        return view('article', ['articles' => $articles, 'tags' => $tags , 'categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'banner_image' => 'required|image|max:2048',
            'content_image' => 'required|image|max:2048',
        ]);
        
        $imagenes_1 = $request->file('banner_image')->store('public/imagenes');
        $url_1 = Storage::url($imagenes_1);
        $imagenes_2 = $request->file('content_image')->store('public/imagenes');
        $url_2 = Storage::url($imagenes_2);

        $article = new Article();
        $article->title = $request->title;
        $article->content = $request->content;
        $article->banner_image = $url_1;
        $article->content_image = $url_2;
        $article->presentation = $request->presentation;
        $article->isPublic = true;
        $article->user_id = $request->id_user;
        $article->category_id = $request->id_category;
        $article->tag_id = $request->id_tag;
        return redirect(route('articles.index'))->with('message', 'Articulo registrado existosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('view-article', ['article' => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        if ($request->file() != null) {
            $request->validate([
                'changeImage_1' => 'required|image|max:2048',
                'changeImage_2' => 'required|image|max:2048',
            ]);
            $imagenes_1 = $request->file('changeImage_1')->store('public/imagenes');
            $url_1 = Storage::url($imagenes_1);
            $imagenes_2 = $request->file('changeImage_2')->store('public/imagenes');
            $url_2 = Storage::url($imagenes_2);
            Article::where('id', $id)->update([
                'title' => $request->title,
                'content' => $request->content,
                'banner_image' => $url_1,
                'content_image' => $url_2,
                'presentation' => $request->presentation,
            ]);            
        } else {
            Article::where('id', $id)->update([
                'title' => $request->title,
                'content' => $request->content,
                'presentation' => $request->presentation,
            ]); 
        }
        return redirect(route('articles.index'))->with('message', 'Articulo actualizado existosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();
        return redirect(route('articles.index'))->with('message', 'Articulo borrado existosamente');
    }
}
