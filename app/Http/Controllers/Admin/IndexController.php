<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class IndexController extends CommonController
{
    //
    public function index()
    {

        return view('layouts.index');

    }
    public function blog()
    {

        return view('blog.blog');

    }

    public function feadback()
    {
        return view('Test.sweetalert');
    }
}
