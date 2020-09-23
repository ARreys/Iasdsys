<html lang="pt-br">
@component('componentes.head')
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
@endcomponent
    <body class="tela-inicio" id="inicio">
        @component('componentes.header')
        @endcomponent
        <div class="container-fluid">
            <div class="item-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center text-white my-5">
                            <h1>Adventista do Sétimo dia</h1>
                            <div class="my-4 mx-5">
                                <p>Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit,
                                    sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco
                                    laboris nisi ut aliquip
                                    ex ea commodo consequat.</p>
                            </div>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalpresenca">Marcar minha presença</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="page-footer">
            <div class="footer-copyright text-center text-white py-3">
                Copyright &copy; <a style="color: white;" href="/">Igreja Adventista do Sétimo Dia - Central - Parnaíba</a>
            </div>
        </footer>
        <!-- Copyright -->

        @component('componentes.modal', ['id' => 'modalpresenca', 'titulo' => 'Marcar Presença'])
        <form action="" method="Post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nome Completo</label>
                        <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Insira o seu nome completo">
                    </div>
                    <div class="form-group">
                        <label for="inputFone">Contato</label>
                        <input type="text" class="form-control" id="inputFone" placeholder="Telefone (com DDD)">
                        <small id="emailHelp" class="form-text text-muted">Nunca compartilharemos seu telefone com ninguém.</small>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Mantenha-me conectado</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="button" type="submit" class="btn btn-primary">Confirmar Presença</button>
                </div>
            </form>
        @endcomponent

        @component('componentes.scripts')
        @endcomponent
    </body>
</html>
