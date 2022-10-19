<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Customer extends Model
{
    use SoftDeletes;
    protected $table = 'customer';
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];
    protected $fillable = ["name", "identification_code"];
}
