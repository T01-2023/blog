<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostFormRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class StoreController extends Controller
{
    /**
     * Handle the incoming request.
     * 
     */
    public function __invoke(PostFormRequest $request, Post $post)
    {
        $validated = $request->validated();

        $validated['excerpt'] = Str::limit($validated['content'], 150);

        $post = Post::create($validated);


        return to_route('posts')->with('status', 'post c est super '.$post->title.' bien créé');
    }
}

