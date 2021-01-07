<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Traits\ApiResponser;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class PostController extends Controller
{
   use ApiResponser;

   public function index() {
       $posts = Post::all();
       return $this->successResponse($posts);
   }
   
}
