<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public static function crud(){
        $posts = Post::orderBy('posted_on','DESC')->get();
    $i=0;
    $data='';
    foreach ($posts as $post) {
        $posts[$i]->comments=Post::find($post->id)->comments;
        $data.=$post[$i];
        $i++;
    }
        return view('crud', ['title' => 'CRUD','posts'=>$posts]);
    }
    public static function chart(){
        return view('chart',['title'=>'Chart']);
    }
}
