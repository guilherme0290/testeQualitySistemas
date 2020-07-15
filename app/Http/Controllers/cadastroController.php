<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;





class cadastroController extends Controller
{
    
    public function index()
    {
        return view('form');
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $validator = $request->validate([
            'cNome' =>'required|string',
            'cEmail'=>'required|email',
            'cFoto' => 'size:200',
            'cDataNasc' => 'required|date|before:120 years'
        ]);

    

        $cli = new Cliente();    
        $cli ->nome = $request->input('cNome');
        $date=  $request->input('cDataNasc');
        $cli ->datanasc = date('y-m-d',$date);

        $cli ->email = $request->input('cEmail');

        if ($request->file('cFoto') != '') {
             $cli->foto = base64_encode(file_get_contents($request->file('cFoto')));
        }
        else{
            $cli->foto = '';
        }
       

        $cli->save();

        return redirect('/listar');

        

    }

    
    //public function show($id)
    public function show()
    {
        $cli = Cliente::paginate(4);

        return view('lista',compact('cli'));
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
