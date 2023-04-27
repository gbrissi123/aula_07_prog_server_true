<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    function mostrarPosts()
    {
        $post = Post::where('id', '>', 0)->update([
            'conteudo' => 'matheus'
        ]);

        // update posts set conteudo = 'matheus' where id > 0

        return Post::get();
    }
}
