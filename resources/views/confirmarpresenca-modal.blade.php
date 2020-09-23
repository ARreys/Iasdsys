<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirmação de Presença</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
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

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
