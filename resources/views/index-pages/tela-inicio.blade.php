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
                                <div class="col-sm-12 text-center text-black my-5">
                                    <h1> Qualquer Título</h1>
                                    <div class="my-4 mx-5">
                                        <div class="text-center text-black my-5">
                                            <h3>Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit,
                                            sed do eiusmod tempor incididunt
                                            ut labore et dolore magna aliqua.
                                            Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco
                                            laboris nisi ut aliquip
                                            ex ea commodo consequat. Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit,
                                            sed do eiusmod tempor incididunt
                                            ut labore et dolore magna aliqua.
                                            Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco
                                            laboris nisi ut aliquip
                                            ex ea commodo consequat.</h3>
                                    </div>
                                </div>
                                <button type="button" class="btsubmeter-campanha" data-toggle="modal" data-target="#modalpresenca">Marcar Presença</button>
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
        <form class="needs-validation" novalidate>
                <div class="form-column">
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom01">Nome Completo</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Insira seu nome completo" required>
                            <div class="invalid-feedback">
                                Ops, seu nome.
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationCustomUsername">Idade</label>
                            <input type="text" class="form-control" id="validationCustomUsername" placeholder="Idade" aria-describedby="inputGroupPrepend" required>
                            <div class="invalid-feedback">
                                Ops, sua idade.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="mb-3">
                                <label for="validationCustom03">Contato</label>
                                <input type="text" class="form-control" id="validationCustom03" placeholder="(com DDD)*" required>
                                <div class="invalid-feedback">
                                    Ops, seu contato.
                                </div>
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
                        <div class="col-md-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="visitante" required>
                                <label class="form-label">Sou visitante</label>
                            </div>
                        </div>
                   </div>
                    <div class="form-group">
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                            <label class="form-label">Eu li os termos de segurança para estar na igreja durante este período :)</label>
                            <div class="invalid-feedback">Você deve ler os termos de segurança para estar na igreja durante este período :( </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="button" type="submit" class="btn btn-primary">Confirmar Presença</button>
                </div>
        </form>

            <script>
            // Exemplo de JavaScript inicial para desativar envios de formulário, se houver campos inválidos.
            (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Pega todos os formulários que nós queremos aplicar estilos de validação Bootstrap personalizados.
                var forms = document.getElementsByClassName('needs-validation');
                // Faz um loop neles e evita o envio
                var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
                });
            }, false);
            })();
            </script>
            <script>
                function habilitar(){
                    if(document.getElementById('acompanhante').checked){
                        document.getElementById('qtdacompanhante').removeAttribute("disabled");
                    }
                    else {
                        document.getElementById('acompanhante').value=''; //Evita que o usuário defina um texto e desabilite o campo após realiza-lo
                        document.getElementById('qtdacompanhante').setAttribute("disabled", "disabled");
                    }
                }
            </script>

        @endcomponent

        @component('componentes.scripts')
        @endcomponent
    </body>
</html>
