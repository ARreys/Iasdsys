<html lang="pt-br">
@component('componentes.head')
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
@endcomponent
        @component('componentes.header')
        @endcomponent
    <body id="inicio">
            <div class="tela-inicio">
                <div class="tela-inicio container-fluid text-white">
                    <div class="item-fluid">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 text-center text-black my-5">
                                    <h1> Qualquer Título</h1>
                                    <div class="my-4 mx-5">
                                        <div class="text-center text-black my-5">
                                            <p>Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit,
                                            sed do eiusmod tempor incididunt
                                            ut labore et dolore magna aliqua.
                                            Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco</p>
                                        </div>
                                    </div>
                                    <button type="button" class="btmarcar-presenca" data-toggle="modal" data-target="#modalpresenca">Marcar Presença</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid text-center pedir-estudo">
                <div class="container">
                    <div class="row" style="margin-bottom: 15px">
                        <div class="col-md-12">
                            <h1>Projetos</h1>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 30px">
                        <div class="col-md-6 img-legenda-container mt-2 mb-2">
                            <div class="caption-imagem">
                                <img src="https://source.unsplash.com/random/420x254" class="img-fluid"/>
                                <div class="texto-caption">
                                    <h2>Nome Projeto</h2>
                                    <a href="">Saiba mais</a>
                                </div>
                            </div>
                            <div class="legenda-imagem">
                                <h4>Legenda</h4>
                                <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor</p>
                            </div>
                        </div>
                        <div class="col-md-6 img-legenda-container mt-2 mb-2">
                            <div class="caption-imagem">
                                <img src="https://source.unsplash.com/random/420x254" class="img-fluid"/>
                                <div class="texto-caption">
                                    <h2>Nome Projeto</h2>
                                    <a href="">Saiba mais</a>
                                </div>
                            </div>
                            <div class="legenda-imagem">
                                <h4>Legenda</h4>
                                <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-center">
                            <a href="" class="btn btn-azul">Ver Todos +</a>
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
        <form class="needs-validation" novalidate>
            <div class="form-column">
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="validationCustom01">Nome Completo</label>
                        <input type="text" class="form-control" id="nome-completo" placeholder="Insira o seu nome completo" required>
                        <div class="valid-feedback">Tudo certo!</div>
                        <div class="invalid-feedback">Ops, seu nome.</div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom02">Idade</label>
                        <input type="text" class="form-control" id="idade" placeholder="Insira sua idade" required>
                        <div class="valid-feedback">Tudo certo!</div>
                        <div class="invalid-feedback">Ops, sua idade.</div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="mb-3">
                            <label for="validationCustom03">Contato</label>
                            <input type="text" class="form-control" id="contato" placeholder="(com DDD)*" required>
                            <div class="valid-feedback">Tudo certo!</div>
                            <div class="invalid-feedback">Ops, seu contato.</div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <input type="text" class="form-control" id="qtdacompanhante" placeholder="Quantidade" aria-describedby="inputGroupPrepend" disabled required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="acompanhante" onchange="habilitar()" required>
                            <label class="form-label">Eu irei levar acompanhantes !</label>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12 mt-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="visitante" required>
                            <label class="form-label">Sou visitante</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-label" for="invalidCheck">Eu li e concordo com os termos de segurança para estar na igreja durante este período :)</label>
                        <div class="invalid-feedback">Você deve ler e concordar com os termos de segurança para estar na igreja durante este período :( </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary">Confirmar Presença</button>
            </div>
        </form>
        @endcomponent

        @component('componentes.scripts')
        @endcomponent
    </body>
</html>
