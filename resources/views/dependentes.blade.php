 
@extends('cabeca')

@section('content')
    

        	
            <div id="listaPessoas">
            	<h1>Dependentes</h1>
                
                <div id="infoDep">

                    <div id="fotoCadastro">
                        <img {{ asset('images/fotoCadastro.png') }} width="77" height="77" />
                    </div> 
                    
                    <table id="tListaCad" cellpadding="0" cellspacing="0" border:0 px>
                     
                        <tr>
                            <td class="tituloTab">Nome</td>  
                             <td>{{ $cli[0]->nomecliente }}</td>    
                        </tr>              
                        <tr bg-color="#cddeeb">
                            <td class="tituloTab">Data de Nascimento</td>    
                        <td>{{ $cli[1]->datacli }}</td>    
                        </tr>              
                        <tr>
                            <td class="tituloTab">Email</td>    
                        <td>{{ $cli[2]->emailcli }}</td>    
                        </tr>      
                             
                    </table>

                  {{--   ->select('clientes.id as idcliente','clientes.nome as nomecliente','clientes.datanasc as datacli','clientes.email as emailcli',
                        'dependentes.nome as depnome','dependentes.datanasc as depdatanasc','dependentes.id_cliente as id_cliente')
                         ->join('dependentes','dependentes.id_cliente','=','clientes.id')
                         ->where('clientes.id','=', $id)
                         ->get(); --}}

                         <form id="frmAdicionaDep" method="post" enctype="multipart/form-data" action="/novodependente/{{ $cli[0]->idcliente }}">

                            @if ($errors->any())
                               <div class="alert alert-danger">
                                   <ul>
                                       @foreach ($errors->all() as $error)
                                           <li>{{ $error }}</li>
                                       @endforeach
                                   </ul>
                               </div>
                           @endif
                    
                
                        
                        {{csrf_field()}}
                        <div class="agrupa mB mR">
                            <label for="cNomeDep">Nome</label><br />
                            <input type="text" name="cNomeDep" id="cNomeDep" />
                        </div>    
                        <div class="agrupa">
                            <label for="cDataNasc">Data de Nascimento</label><br />
                            <input type="text" name="cDataNasc" id="cDataNasc" />
                        </div>                            

                    
                     <button type="submit" class="btPadrao">Salvar</button>

                    </form>
                    
                    
                    <table id="tLista" cellpadding="0" cellspacing="0" border ="0">
                        <tr>
                            <th width="60%" class="tL">Nome do Dependente</th>
                            <th width="33%">Data de Nascimento</th>
                            <th></th>
                        </tr> 
                        @foreach ($cli as $c)                                            
                            <tr bg-color="#cddeeb">
                                <td>{{$c->depnome}}</td>
                                <td aling="center">{{$c->depdatanasc}}</td>
                                <td aling="center"><a href="" class="btRemover"></a></td>
                            </tr> 
                        @endforeach  
                    </table>
                    
                    
                </div>
                
            </div>    

            @endsection

@extends('rodape')
