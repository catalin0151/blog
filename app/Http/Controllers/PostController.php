<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;


class PostController extends Controller
{

    public function index() {

        return view('posts.index', [
            'success' => true
        ]);
    }
}
