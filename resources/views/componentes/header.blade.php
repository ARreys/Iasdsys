<header>

    @component('componentes.head')
    @endcomponent
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <!-- Navbar brand -->
        <img class="rounded-circle" src="{{asset('./img/logo.jpg')}}" alt="logo_header"></div>

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
                    <a class="nav-link" href="{{route('anuncios')}}">Anúncios</a>
                </li>
                <li class="nav-item" id="contato-localizacao">
                    <a class="nav-link" href="{{route('contato_localizacao')}}">Contatos e Localização</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <button class="nav-link waves-effect waves-light" data-toggle="modal" data-target="#loginorganizacao">Administração</button>
                </li>
            </ul>
            <!-- Links -->
        </div>
        <!-- Collapsible content -->
    </nav>
    @component('componentes.modal', ['id' => 'loginorganizacao', 'titulo' => 'Login Organização'])
        <form action="{{route('user.login')}}" method="POST">
            <div class="modal-body">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">ID</label>
                    @if(App\Classes\Cookie::has('id'))
                        <input type="text" class="form-control" name="id" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Insira seu ID" value="{{ App\Classes\Cookie::get('id') }}">
                    @else
                        <input type="text" class="form-control" name="id" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Insira seu ID">
                    @endif
                </div>
                <div class="form-group">
                    <label for="inputFone">Senha</label>
                        @if(App\Classes\Cookie::has('senha'))
                            <input type="password" class="form-control" name="senha" id="inputFone" placeholder="Insira sua senha" value="{{ App\Classes\Cookie::get('senha') }}">
                        @else
                            <input type="password" class="form-control" name="senha" id="inputFone" placeholder="Insira sua senha">
                        @endif
                </div>
                <div class="form-check">
                    @if(App\Classes\Cookie::has('conectado'))
                        <input type="checkbox" checked name="conectado" value="1" class="form-check-input" id="exampleCheck1">
                    @else
                        <input type="checkbox" name="conectado" value="1" class="form-check-input" id="exampleCheck1">
                    @endif
                    <label class="form-check-label" for="exampleCheck1">Mantenha-me conectado</label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary">Entrar</button>
            </div>
        </form>
    @endcomponent
</header>

