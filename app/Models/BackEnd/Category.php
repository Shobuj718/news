<?php

namespace App\Models\BackEnd;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = ['category_name', 'slug', 'parent_category_id', 'status' ];

    public function sub_categories(){
          return $this->hasMany(Category::class,'parent_category_id','id');
    }
}
