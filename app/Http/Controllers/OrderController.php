<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest;
use App\Services\OrderService;

class OrderController extends Controller
{
    protected $order_service;
    public function __construct(OrderService $order_service){
        $this->order_service = $order_service;        
    } 

    public function index(Request $request)
    {    
         return $this->order_service->index($request);              
    }

    public function store(OrderRequest $request)
    {        
        return $this->order_service->store($request);   
    }

    public function show($id)
    {
        return $this->order_service->show($id);       
    }

    public function update(OrderRequest $request, $id)
    { 
        return $this->order_service->update($request,$id);           
    }

    public function destroy($id)
    {
        return $this->order_service->destroy($id);              
    }    
    
}
