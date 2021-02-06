<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    public function author(){
        return $this->belongsTo(related:User::class, foreignKey:'author', ownerKey:'id');
    }

    public function categories(){
        return $this->belongsToMany(related:Category::class, table:'posts_categories',foreignPivotKey:'post',relatedPivotKey:'category');
    }

}
