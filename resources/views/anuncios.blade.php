<html lang="pt-br">
    @component('componentes.head')
    @endcomponent
    @component('componentes.header')
    @endcomponent
<body class="anuncios" id="anuncios">
    <div class="containeranuncios">
        <div class="content">
            <div class="container text-black">
                <h1 class="title-container text-center" style="color: white">Anúncios</h1>
                @include('includes.anuncios')
            </div>
        </div>
    </div>
    @component('componentes.footer')
    @endcomponent
    @component('componentes.scripts')
    @endcomponent
</body>
</html>
