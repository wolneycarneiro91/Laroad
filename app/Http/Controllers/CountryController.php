<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Http\Requests\CountryRequest;
use App\Services\CountryService;

class CountryController extends Controller
{
    protected $country_service;
    public function __construct(CountryService $country_service){
        $this->country_service = $country_service;        
    } 

    public function index(Request $request)
    {    
         return $this->country_service->index($request);              
    }

    public function store(CountryRequest $request)
    {        
        return $this->country_service->store($request);   
    }

    public function show($id)
    {
        return $this->country_service->show($id);       
    }

    public function update(CountryRequest $request, $id)
    { 
        return $this->country_service->update($request,$id);           
    }

    public function destroy($id)
    {
        return $this->country_service->destroy($id);              
    }    
    
}
