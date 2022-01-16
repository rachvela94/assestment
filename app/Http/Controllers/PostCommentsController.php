<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostCommentsController extends Controller
{
    /**
     * @return mixed
     */
    public function index()
    {
        return Post::paginate(15);
    }

}
