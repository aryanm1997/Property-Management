<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Properties extends Model
{
    protected $table = 'properties';
     protected $fillable = ['id','title','description','type','price','location','region_id','status','featured_image'];
}
