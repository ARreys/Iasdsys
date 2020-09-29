//Formulário
//Validação do formulário
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
//Desabilitar o campo quantidade, se o checkbox ("vou levar acompanhantes!") tiver desabilitado
function habilitar() {
    if (document.getElementById('acompanhante').checked) {
        document.getElementById('qtdacompanhante').removeAttribute("disabled");
    } else {
        document.getElementById('acompanhante').value = ''; //Evita que o usuário defina um texto e desabilite o campo após realiza-lo
        document.getElementById('qtdacompanhante').setAttribute("disabled", "disabled");
    }
}
//!Formulário


//Header
// let id = $('body').attr('id');
// for (const element of document.getElementsByTagName('li')) {
//     if (element.id == id) {
//         element.classList.add('active');
//     }
// }
//!Header

//(Para o parallax) - Carrega as fotos primeiro
// setTimeout(function() {
//     $('#inicio-parallax').parallax({ imageSrc: "{{asset('img/img-telainicio.jpg')}}" });
// }, 200);
//!Parallax