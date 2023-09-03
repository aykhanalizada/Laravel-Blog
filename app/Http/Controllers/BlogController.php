<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Tag;


class BlogController extends Controller
{

public function index(){
    $articles=Blog::paginate(3);
    $tags = Tag::all();
    return view('index',['articles'=>$articles,'tags'=>$tags]);



}


public function search(Request $request){

$query=$request->input('query');
$tags=Tag::all();
$articles = Blog::where('header', 'like', "%$query%")->orWhere('content', 'like', "%$query%")->paginate(1);
return view('search_results', compact('articles','tags'));

}


public function store(Request $request)
{
    $blog = new Blog;
    $blog->title = $request->title;
    $blog->content = $request->content;
    $blog->save();

    $tags = explode(',', $request->tags);
    foreach ($tags as $tagName) {
        $tag = Tag::firstOrCreate(['name' => $tagName]);
        $blog->tags()->attach($tag->id);
    }

    return redirect()->route('blog.index');
}



public function getPostsByTag(Tag $tagName)
{

    $articles = $tagName->blogs()->paginate(10);
    $tags = Tag::all();
    return view('index',['articles'=>$articles,'tags'=>$tags]);
}

public function show($id){
$contents=Blog::find($id);
$tags=Tag::all();
$currentPostId = $contents->id;

$otherPosts = Blog::where('id', '!=', $currentPostId)->limit(5)->get();

return view('articles.show',compact('contents','tags','otherPosts'));
}

}
