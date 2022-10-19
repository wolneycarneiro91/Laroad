<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Product extends Model
{
    use SoftDeletes;
    protected $table ='product';
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];
    protected $fillable = ["name", "price", "size", "weight", "country_id"];


}
