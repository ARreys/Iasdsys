<head>
    {{-- Configurações da pagina  --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Fim configurações da pagina  --}}
    {{-- titulo da pagina  --}}
    <title>IASD - Central Parnaíba</title>
    <link rel="icon" href="{{asset('img/logo.jpg')}}" type=""/>
    {{-- bootstrap cdn  --}}
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" crossorigin="anonymous">
    {{-- css da pagina  --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    {{-- Jquery 3.5.1 versao comprimida  --}}
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="https://kit.fontawesome.com/100dc002c3.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    {{-- conteudo dinamico de cabeçalho  --}}
    {{$slot}}
    <script src="{{asset('js/main.js')}}"></script>
    <!-- Parallax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
