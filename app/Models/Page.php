<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\Page AS VoyagerPageModel;

class Page extends VoyagerPageModel
{
    use HasFactory;
    protected $fillable = ["id","author_id","title","short_description","body","image","slug","redirect_to","external_link","meta_description","meta_keywords","status"];

    public static function findBySlug($slug){
        return static::where('slug', $slug)->first();
    }
}
