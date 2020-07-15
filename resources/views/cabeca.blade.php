
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Cadastro de Pessoas</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{asset('css/principal.css')}}" />  

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>

<body>

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

  
<main>
  @yield('content')
</main>


    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <script id="__bs_script__">//<![CDATA[
        document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.18.7'><\/script>".replace("HOST", location.hostname));
      //]]></script>
</body>
</html>
