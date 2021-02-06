<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'addresses';


    public function user(){
        return $this->belongsTo(related:User::class, foreignKey:'user', ownerKey:'id');
    }

}
