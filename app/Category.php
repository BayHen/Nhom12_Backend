<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'category_id';

    public function products()
    {
        return $this->belongsTo('App\Product', 'category_id');
    }
}
