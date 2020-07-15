<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dependente;
use App\Cliente;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class clienteDependente extends Controller
{
    
    public function index()
    {
        


        return view('dependentes');
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request,$id)
    {
        $validator = Validator::make($request->all(), [
            'cNomeDep' =>'required|string',
            'cDataNasc'=>'required|email',           
        ]);

        $dep = new Dependente();    
        $dep ->nome = $request->input('cNomeDep');
        $date=  $request->input('cDataNasc');

        $dep ->datanasc = date('y-m-d',$date);  
        $dep->id_cliente = $id;      

        $dep->save();


       return $this->show($id);

    }

    
    public function show($id)
    {
       
        //$cli = Cliente::find($id);
        //$dep = Dependente::where('id_cliente','=', $id);

         $cli = DB::table('clientes')
                        ->select('clientes.id as idcliente','clientes.nome as nomecliente','clientes.datanasc as datacli','clientes.email as emailcli',
                        'dependentes.nome as depnome','dependentes.datanasc as depdatanasc','dependentes.id_cliente as id_cliente')
                         ->join('dependentes','dependentes.id_cliente','=','clientes.id')
                         ->where('clientes.id','=', $id)
                         ->get(); 

         
             //return json_encode($cli);          

        

        if (isset($cli)){
            return view ('dependentes',compact('cli'));
           // dump($cli);
         }
        return redirect('lista'); 
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
