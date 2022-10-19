<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Order extends Model
{
    use SoftDeletes;      
    protected $table ='order';      
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];
    protected $fillable = ["product_id","payment_method","amount"];
    public function product(){
        return $this->belongsTo(Product::class,'product_id','id');
    }    
}
