<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Sale extends Model
{
    use SoftDeletes;    
    protected $table ='sale';        
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];
    protected $fillable = ["order_id","customer_id","sale_date"];
}
//     public function hasMany(){
//         return $this->belongsToMany(Order::class,'sale');
//     }    
// }
