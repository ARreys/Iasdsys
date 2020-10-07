<html lang="pt-br">
    @component('componentes.head')
    @endcomponent
    @component('componentes.header')
    @endcomponent
<body class="anuncios" id="anuncios">
    <div class="containeranuncios">
        <div class="content">
            <div class="container text-black">
                <h3 style="color: white">Anúncios</h3>
                @include('includes.anuncios')
            </div>
        </div>
    </div>

    @component('componentes.footer')
    @endcomponent

    @component('componentes.modal', ['id' => 'modalpresenca', 'titulo' => 'Marcar Presença'])
        <form action="" method="Post">
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Insira o email">
                <small id="emailHelp" class="form-text text-muted">Nunca compartilharemos seu email com ninguém.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Senha</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Mantenha-me conectado</label>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="button" type="submit" class="btn btn-primary">Entrar</button>
            </div>
        </form>
    @endcomponent
    @component('componentes.scripts')
    @endcomponent
</body>
</html>
