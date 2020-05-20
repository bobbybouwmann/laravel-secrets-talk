<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

final class PublishPostController extends Controller
{
    public function show(Post $post): View
    {
        return view('publish', compact('post'));
    }

    public function store(Post $post): RedirectResponse
    {
        $post->publish();

        return redirect()->route('posts.publish.show', $post);
    }
}
