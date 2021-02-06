<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";

    public function posts(){
        return $this->belongsToMany(related:Post::class, table:'posts_categories',foreignPivotKey:'category',relatedPivotKey:'post');
    }
}
