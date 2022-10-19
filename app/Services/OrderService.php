<?php

namespace App\Services;
use Illuminate\Http\Response;
use App\Models\Order;

class OrderService 
{
    protected $order;
    public function __construct(Order $order){
            $this->order = $order;        
    } 
    public function index($request)
    {    
        if ($request->filled('limit')) {
            if ($request->limit == '-1') {
                $data = $this->order->get();
            }
        } else {
            $data = $this->order->paginate(config('app.pageLimit'));
        }                                     
        $data = $this->order->all();
        return response()->json($data, Response::HTTP_OK );                
    }
    public function store($request)
    {        
        $dataFrom = $request->all();       
        try {        
            $data = $this->order->create($dataFrom);               
            return response()->json($data,Response::HTTP_CREATED ) ;
        } 
        catch (\Exception $e) {            
            return response()->json(["message"=>'Não foi possível cadastrar',"error"=>$e], Response::HTTP_NOT_ACCEPTABLE );
        }             
    }
    public function show($id)
    {
        $data = $this->order->find($id);
        if(!$data){
            return response()->json(['error'=>'Dados não encontrados'],Response::HTTP_NOT_FOUND) ;
        }
        return response()->json($data,Response::HTTP_OK ) ;
    }
    public function update($request, $id)
    { 
        $data = $this->order->find($id);  
        if(!$data){
            return response()->json(['error'=>'Dados não encontrados'],Response::HTTP_NOT_FOUND) ;
        }            
        $dataFrom = $request->all();       
        try {          
            $data->update($dataFrom);               
            return response()->json($data,Response::HTTP_OK ) ;    
            }
        catch (\Exception $e)
             {             
             return response()->json(["message"=>'Não foi possível atualizar',"error"=>$e], Response::HTTP_NOT_ACCEPTABLE );
            }                             
    }

    public function destroy($id)
    {
        $data = $this->order->find($id);
        if(!$data){
            return response()->json(['error'=>'Dados não encontrados'],Response::HTTP_NOT_FOUND) ;
        }        
         try {  
                $data->delete();                 
                return response()->json(['success'=>'Deletado com sucesso.'],Response::HTTP_OK ) ; 
         }
        catch (\Exception $e)
             {                
                return response()->json(["message"=>'Não foi possível excluir',"error"=>$e], Response::HTTP_NOT_ACCEPTABLE );
            }                
    }    
    
}
