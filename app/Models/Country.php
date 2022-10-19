<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Country extends Model
{
    use SoftDeletes;
    protected $table ='country';
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];
    protected $fillable = ["name"];


}
