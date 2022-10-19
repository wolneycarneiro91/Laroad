<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Services\ProductService;

class ProductController extends Controller
{
    protected $product_service;
    public function __construct(ProductService $product_service){
        $this->product_service = $product_service;        
    } 

    public function index(Request $request)
    {    
         return $this->product_service->index($request);              
    }

    public function store(ProductRequest $request)
    {        
        return $this->product_service->store($request);   
    }

    public function show($id)
    {
        return $this->product_service->show($id);       
    }

    public function update(ProductRequest $request, $id)
    { 
        return $this->product_service->update($request,$id);           
    }

    public function destroy($id)
    {
        return $this->product_service->destroy($id);              
    }    
    
}
