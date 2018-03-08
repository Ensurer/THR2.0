<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Admin\CommonController;
use App\Http\Models\Articles;
use Illuminate\Http\Request;

class ArticlesController extends CommonController
{
    //
    public function index()
    {
        $article = Articles::orderBy('id','desc')->paginate(4);
        for($art= 0;$art< $article->count();$art++){
            $article[$art]['year'] = (int)substr($article[$art]->created_at,0,4);
            $article[$art]['month'] = (int)substr($article[$art]->created_at,5,2);
            $article[$art]['day'] = (int)substr($article[$art]->created_at,8,2);
        }
        return view('blog.blog',compact('article'));
    }
}
