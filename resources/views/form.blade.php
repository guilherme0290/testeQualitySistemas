@extends('cabeca')

@section('content')
    

<div id="listaPessoas">

    <h1>Incluindo um Novo Cadastro</h1>
   
<form id="formCadastrar" method="post" enctype="multipart/form-data" action="/ClienteNovo" >
 

    {{csrf_field()}}
        <label for="cNome">Nome</label><br />
        <input id="cNome" name="cNome" /><br />

        <label for="cDataNasc">Data de Nascimento</label><br />
        <input id="cDataNasc" name="cDataNasc" /><br />

        <label for="cEmail">E-Mail</label><br />
        <input id="cEmail" name="cEmail" /><br />
		
        <label for="cFoto">Foto</label><br />
        <input id="cFoto" name="cFoto" type="file"/><br />        
        <button type="submit"  class="btPadrao" >Salvar </button>
    </form>
    
    

</div>

@endsection
@extends('rodape')


