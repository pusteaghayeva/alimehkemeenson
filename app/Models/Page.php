<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
use TCG\Voyager\Models\Page AS VoyagerPageModel;
use TCG\Voyager\Traits\Translatable;

class Page extends VoyagerPageModel
{
    use HasFactory, Translatable;
    protected $fillable = ["id","author_id","title","short_description","body","image","slug","redirect_to","external_link","meta_description","meta_keywords","status"];
    protected $translatable = ['title',"short_description","body",'slug'];
    public static function findBySlug($slug){
        return static::withTranslations(Session::get('locale'))->where('slug', $slug)->first();
    }
}
