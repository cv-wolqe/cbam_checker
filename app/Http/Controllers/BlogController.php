<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request) {
        $postId = $request->query('post');
        switch($postId){
            case '1':
                return view('blog/post_1');
            case '2':
                return view('blog/post_2');
            case '3':
                return view('blog/post_3');
            default:
                return view('blog/post_1');
        }
    }
}
