@extends('app')


@section('content')
    

<div id="conteudoGeral">

    <div id="topoGeral">
    	<div id="logoTopo" onclick="location.href='index.php'" style="cursor:pointer;"></div>
    	<div id="dirTopo"></div>
    </div>
    
    <div id="baixoGeral">
    
    	<div id="menuEsq">
            <div id="titMenu">Menu de Opções</div>
            <a href="/">Início</a> 
            <a href="/listar">Listar Cadastros</a>
            <a href="/form">Incluir Novo</a>
        </div>
        
        <div id="conteudoDir">

            @endsection

