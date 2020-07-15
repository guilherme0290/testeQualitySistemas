

@extends('cabeca')

@section('content')
    

<div id="listaPessoas">

    <h1>Editando o Cadastro</h1>
   
    <form id="formCadastrar" method="post" enctype="multipart/form-data" action="actionForm.php">
        <label for="cNome">Nome</label><br />
        <input id="cNome" name="cNome" /><br />

        <label for="cDataNasc">Data de Nascimento</label><br />
        <input id="cDataNasc" name="cDataNasc" /><br />

        <label for="cEmail">E-Mail</label><br />
        <input id="cEmail" name="cEmail" /><br />
		
        <label for="cFoto">Foto</label><br />
        <input id="cFoto" name="cFoto" type="file"/><br />        
    </form>
    
    <a href="javascript:;" class="btPadrao">Salvar</a>

</div>
@endsection


@extends('rodape')