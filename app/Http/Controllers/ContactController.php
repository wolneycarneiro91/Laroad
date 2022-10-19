<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Services\ContactService;

class ContactController extends Controller
{
    protected $contact_service;
    public function __construct(ContactService $contact_service){
        $this->contact_service = $contact_service;        
    } 

    public function index(Request $request)
    {    
         return $this->contact_service->index($request);              
    }

    public function store(ContactRequest $request)
    {        
        return $this->contact_service->store($request);   
    }

    public function show($id)
    {
        return $this->contact_service->show($id);       
    }

    public function update(ContactRequest $request, $id)
    { 
        return $this->contact_service->update($request,$id);           
    }

    public function destroy($id)
    {
        return $this->contact_service->destroy($id);              
    }    
    
}
