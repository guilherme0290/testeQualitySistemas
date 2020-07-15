@extends('cabeca')
      @section('content')
          
         
            <div id="listaPessoas">
            	<h1>Cadastros</h1>

		<a href="javascript:;" class="btPadraoExcluir">Excluir</a>
                
                <table id="tLista" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                        <th width="5%"><input type="checkbox" /></th>
                        <th width="10%">ID</th>
                        <th class="tL">Nome</th>
                        <th width="20%">Data de Nascimento</th>
                        <th width="10%">Dep</th>
                        <th width="8%">Status</th>
                    </tr>

                    @foreach ($cli as $c)
                        
                    
                        <tr>
                            <td align="center" style="border-left:0;"><input type="checkbox" /></td>
                            <td align="center">{{$c->id}}</td>
                            <td><a href="editar.php" class="linkUser">{{$c->nome}}</a></td>
                            <td align="center">{{$c->datanasc}}</td>
                        <td align="center"><a href="/dependente/{{$c->id}}" class="btAdicionar"></a></td>
                            <td align="center"><a href="javascript:;" class="btCinza"></a></td>
                        </tr>
                    @endforeach
                    
		    
                </table>
            	
            </div>
             

            <div id="paginacao">
            <a href="" class="btSeta1"></a> <div id="pags">{{$cli->count()}} de {{$cli->total()}}</div> <a href="" class="btSeta2"></a> 
                <select id="paginas">

                @foreach ($cli as $p)                
                
                <option value="{{ $cli->links() }}">{{ $cli->links() }}</option>
                @endforeach
                   
                    
                  
                </select>
            </div>
    
            @endsection 
@extends('rodape')