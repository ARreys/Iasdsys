<html lang="pt-br">
@component('componentes.head')
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
@endcomponent
    @component('componentes.header')
    @endcomponent
<body>
    @if(session()->has('msg'))
        @component('componentes.alertas', ['tipo' => session('msg.tipo')])
            {{ session('msg.texto') }}
        @endcomponent
    @endif
    <div class="tela-inicio container-fluid text-white" style="background: no-repeat center/cover url('{{ asset('img/img-telainicio.jpg')}}');">
        <div class="container1 item-fluid">
            <div class="container">
                <div class="content-telainicio row">
                    <div class="col-sm-12 text-center text-black my-5">
                        <h1 class="titulo">IASD Central de Parnaíba</h1>
                        <div class="my-4 mx-5">
                            <div class="text-center text-black">
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
                <div class="culto-ao-vivo row">
                    <div class="col-sm-12 text-center text-black my-5">
                        <h2 class="titulo">Assistir culto ao vivo </h2>
                        <a onclick="window.open('https://www.youtube.com/c/iasdcentralparnaiba')" class="social-media">
                            <button type="button" class="btplayculto"><i data-feather="youtube"></i></button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-center text-white sobreaigreja"style="background: no-repeat center/cover url('{{ asset('img/sobre.jpg')}}'); padding; 15px;">
        <div class="container2 container">
            <div class="row mb-15">
                <div class="row">
                    <div class="texto-caption">
                        <h1>Quem somos ?</h1>
                        <div class="legenda-imagem" style="margin-top: 15px;">
                            <h4>Quem são os adventistas ?</h4>
                            <p>Os adventistas do sétimo dia, com mais de 17 milhões de membros no mundo, são membros de uma igreja cristã protestante organizada em 1863 nos Estados Unidos.</p>
                        </div>
                        <div class="legenda-imagem" style="margin-top: 15px;">
                            <h4>Crenças</h4>
                            <p>Os adventistas consideram toda a Bíblia Sagrada como segura e única regra de fé e esperança. Suas doutrinas, portanto, seguem integralmente os ensinamentos bíblicos e nela estão fundamentadas. Estas crenças aqui expostas constituem a percepção e expressão que a Igreja sustém com respeito aos ensinos bíblicos.</p>
                        </div>
                        <div class="legenda-imagem" style="margin-top: 15px;">
                            <h4>Missão e Serviço</h4>
                            <p>A Igreja Adventista do Sétimo Dia crê na diversidade de dons e ministérios utilizados para cumprir com sua missão. Por essa razão, atua em diferentes áreas que realizam projetos, programas e ações estratégicas. Os ministérios, a partir da sede sul-americana adventista chamada Divisão Sul-Americana, são responsáveis pela produção de materiais, documentos oficiais e planejamentos gerais que beneficiam oito países.</p>
                        </div>
                        <a onclick="window.open('https://www.adventistas.org/pt/institucional/')">
                            <button type="button" class="sabermais">Saber Mais</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-center text-white mais-informacoes">
        <div class="row">
            <div class="col-md-12 mt-15 card-info">
                <div class="col-md-12 card-info-titulo">
                    <h1>Quero Estudar !</h1>
                    <div style="background-color: rgb(20, 69, 155); width: 100%; height: 3px;"></div>
                </div>
                <div class="row linha1">
                    <div class="col-md-6 img-legenda-container mt-2 mb-2">
                        <div class="caption-imagem">
                            <img src="{{asset('img/cursobiblico.jpg')}}" class="img-fluid"/>
                        </div>
                    </div>

                    <footer class="page-footer">
                        <div class="footer-copyright text-center text-white py-3">
                            Copyright &copy; <a style="color: white;" href="/">Igreja Adventista do Sétimo Dia - Central - Parnaíba</a>
                        </div>
                    </footer>
                    <!-- Copyright -->


                    <div class="col-md-6 img-legenda-container mt-2 mb-2">
                        <div class="caption-imagem">
                            <img src="{{asset('img/novotempo.jpg')}}" class="img-fluid"/>
                        </div>
                    </div>
                </div>
                <div class="row linha3">
                    <div class="col-md-6 img-legenda-container mt-2 mb-2">
                        <div class="caption-imagem">
                            <img src="{{asset('img/radionovotempo.jpg')}}" class="img-fluid"/>
                        </div>
                    </div>
                    <div class="col-md-6 mt-3">
                        <div class="texto-caption">
                            <h2>Rádio Novo Tempo</h2>
                            <a onclick="window.open('https://www.novotempo.com/radio/#onde-ouvir')">
                                <button type="button" class="ntplay">Ouvir ao vivo !</button>
                            </a>
                            <div class="legenda-imagem" style="margin-top: 15px;">
                                <h4>Legenda</h4>
                                <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="row linha4">
                    <div class="col-md-6 mt-3">
                        <div class="texto-caption">
                            <h2>Peça seu estudo bíblico</h2>
                            <a onclick="window.open('https://biblia.com.br')">
                                <button type="button" class="crsbiblico">Pedir agora !</button>
                            </a>
                        </div>
                        <div class="legenda-imagem" style="margin-top: 15px;">
                            <h4>Legenda</h4>
                            <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor</p>
                        </div>
                    </div>
                    <div class="col-md-6 img-legenda-container mt-2 mb-2">
                        <div class="caption-imagem">
                            <img src="{{asset('img/cursobiblico.jpg')}}" class="img-fluid"/>
                        </div>
                    </div>
                </div> -->
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
        <form class="needs-validation text-black" novalidate method="POST" action="{{ route('pessoa.create.presenca') }}">
            <div class="form-column">
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="validationCustom01">Nome Completo</label>
                        <input type="text" class="form-control" id="nome-completo" placeholder="Insira o seu nome completo" name="nome" required>
                        <div class="valid-feedback">Tudo certo!</div>
                        <div class="invalid-feedback">Ops, seu nome.</div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom02">Idade</label>
                         <input type="text" class="form-control" id="idade" placeholder="Insira sua idade" name="idade" required>
                        <div class="valid-feedback">Tudo certo!</div>
                        <div class="invalid-feedback">Ops, sua idade.</div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="mb-3">
                            <label for="validationCustom03">Contato</label>
                            <input type="text" class="form-control" id="contato" placeholder="(com DDD)*" name="telefone" required>
                            <div class="valid-feedback">Tudo certo!</div>
                            <div class="invalid-feedback">Ops, seu contato.</div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <input type="text" class="form-control" id="qtdacompanhante" placeholder="Quantidade" name="quantidade" aria-describedby="inputGroupPrepend" disabled required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="acompanhante" onchange="habilitar()"  required>
                            <label class="form-label">Eu irei levar acompanhantes !</label>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12 mt-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="visitante" name="visita" required>
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
