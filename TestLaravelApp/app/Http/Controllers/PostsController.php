<?php

namespace App\Http\Controllers;

use DB;
use App\Post;

class PostsController
{
    public function show($slug){
        #$post = \DB::table('laravel')->where('slug', $slug)->first();
        $post = post::where('slug', $slug)->firstOrFail();        

        if (! $post) {
            abort(404);
        }
        return view('post', [
            'post' => $post
        ]);
    }
}