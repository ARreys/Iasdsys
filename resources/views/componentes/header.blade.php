<header>

    @component('componentes.head')
    @endcomponent
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <!-- Navbar brand -->
        <img class="rounded-circle" src="{{asset('./img/logo.jpg')}}" alt="logo da igreja"></div>

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">

            <!-- Links -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item" id="inicio">
                    <a class="nav-link" href="/">Início</a>
                </li>
                <li class="nav-item" id="anuncios">
                    <a class="nav-link" href="{{route('anuncio')}}">Anúncios</a>
                </li>
                <li class="nav-item" id="contato-localizacao">
                    <a class="nav-link" href="/contato-localizacao">Contatos e Localização</a>
                </li>
                <li class="nav-item" id="contato-localizacao">
                    <a class="nav-link" href="{{route('painel')}}">painel</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <button class="nav-link waves-effect waves-light" data-toggle="modal" data-target="#loginorganizacao">Organização</button>
                </li>
            </ul>
            <!-- Links -->
        </div>
        <!-- Collapsible content -->
    </nav>
    @component('componentes.modal', ['id' => 'loginorganizacao', 'titulo' => 'Login Organização'])
        <form action="{{route('organizacao')}}" method="Post">
                <div class="modal-body">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">ID</label>
                    <input type="text" class="form-control" name="id" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Insira seu ID">
                </div>
                <div class="form-group">
                    <label for="inputFone">Senha</label>
                    <input type="text" class="form-control" name="senha" id="inputFone" placeholder="Insira sua senha">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Mantenha-me conectadoo</label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary">Entrar</button>
            </div>
        </form>
    @endcomponent
</header>

