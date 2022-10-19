<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Http\Requests\SaleRequest;
use App\Services\SaleService;

class SaleController extends Controller
{
    protected $sale_service;
    public function __construct(SaleService $sale_service){
        $this->sale_service = $sale_service;        
    } 

    public function index(Request $request)
    {    
         return $this->sale_service->index($request);              
    }

    public function store(SaleRequest $request)
    {        
        return $this->sale_service->store($request);   
    }

    public function show($id)
    {
        return $this->sale_service->show($id);       
    }

    public function update(SaleRequest $request, $id)
    { 
        return $this->sale_service->update($request,$id);           
    }

    public function destroy($id)
    {
        return $this->sale_service->destroy($id);              
    }    
    
}
