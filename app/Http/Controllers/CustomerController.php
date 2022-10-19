<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Http\Requests\CustomerRequest;
use App\Services\CustomerService;

class CustomerController extends Controller
{
    protected $customer_service;
    public function __construct(CustomerService $customer_service){
        $this->customer_service = $customer_service;        
    } 

    public function index(Request $request)
    {    
         return $this->customer_service->index($request);              
    }

    public function store(CustomerRequest $request)
    {        
        return $this->customer_service->store($request);   
    }

    public function show($id)
    {
        return $this->customer_service->show($id);       
    }

    public function update(CustomerRequest $request, $id)
    { 
        return $this->customer_service->update($request,$id);           
    }

    public function destroy($id)
    {
        return $this->customer_service->destroy($id);              
    }    
    
}
