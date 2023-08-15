<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Tag;


class BlogController extends Controller
{

public function index(){
    $articles=Blog::paginate(1);

    return view('index',['articles'=>$articles]);
}


public function search(Request $request){

$query=$request->input('query');

$articles = Blog::where('header', 'like', "%$query%")->orWhere('content', 'like', "%$query%")->paginate(1);
return view('search_results', compact('articles'));

}


public function store(Request $request)
{
    $blog = new Blog;
    $blog->title = $request->title;
    $blog->content = $request->content;
    $blog->save();

    $tags = explode(',', $request->tags); // Etiketleri virgülle ayırdıysanız
    foreach ($tags as $tagName) {
        $tag = Tag::firstOrCreate(['name' => $tagName]);
        $blog->tags()->attach($tag->id);
    }

    return redirect()->route('blog.index');
}



public function getPostsByTag(Tag $tagName)
{

    $articles = $tagName->blogs()->paginate(10);
    return view('index', compact('articles'));
}

public function show($id){
$contents=Blog::find($id);
return view('articles.show',compact('contents'));
}

}
