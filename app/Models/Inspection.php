<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Inspection extends Model
{
    use SoftDeletes;            
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];
    protected $table ='inspection';
    protected $fillable = ["user_id","event_type","old_value","table_name","new_value","url","ip_address","user_agent"];
}
