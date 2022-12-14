<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request, User $user)
    {
        $posts = $user->posts;
        return ['count' => count($posts), 'posts' => $posts];
    }
}
