<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    //
    protected $table = 'articles';
    protected $primaryKey = 'id';
    protected $fillable = ['art_title','art_tag','art_description','art_thumb','art_content','art_editor','art_view'];
    public $timestamps = true;
}
