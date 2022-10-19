<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Contact extends Model
{
    use SoftDeletes;      
    protected $table ='contact';      
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];
    protected $fillable = ["customer_id","contact_type","contact"];
}
