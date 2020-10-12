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
    <div id="parallax-image" style="background-image: url('{{ asset('img/img-telainicio.jpg')}}'); background-attachment: fixed; backgroun-position: center; background-repeat: no-repeat; background-size: cover;">
        <div class="tela-inicio container1 item-fluid">
            <div class="container text-white">
                <div class="content-telainicio row">
                    <div class="col-sm-12 text-center text-black my-5">
                        <h1 class="title-container">IASD Central de Parnaíba</h1>
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
                        <button type="button" class="btmarcar-presenca" data-toggle="modal" data-target="#modalpresenca">Marcar Presença ate dia {{ date('d/m/Y',strtotime($dia_agendar)) }}</button>
                        <a href="{{ asset('app/iasdcentralphb_1_1.0.apk') }}" download="" style="display: block; margin-top: 10px" target="_blank">
                            <img src="https://www.batball11.com/images/android_btn.png" class="img-fluid" width="200"/>
                        </a>
                    </div>
                </div>
                <div class="culto-ao-vivo row">
                    <div class="col-sm-12 text-center text-black my-5">
                        <h2 class="subtitle-container">Assistir culto ao vivo </h2>
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
                        <h1 class="title-container">Quem somos ?</h1>
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

    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center text-black mt-3">
                <h1 class="title-container" style="color: #153862;">Novo Tempo</h1>
            </div>
            <div class="col-md-12" style="height: 5px; background: #153862;"></div>
        </div>
        <div class="row">
            <div class="col-md-4 col1" style="padding: 5px">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="{{asset('img/cursobiblico.jpg')}}" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                    <div class="card-body">
                        <h2 class="subtitle-container">Estudo bíblico</h2>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <a onclick="window.open('https://biblia.com.br')">
                                <button type="button" class="crsbiblico">Pedir agora !</button>
                            </a>
                            <i data-feather="book"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col1" style="padding: 5px">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="{{asset('img/novotempo.jpg')}}" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                    <div class="card-body">
                        <h2 class="subtitle-container">Canal Novo Tempo</h2>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <a onclick="window.open('https://ntplay.com/aovivo')">
                                <button type="button" class="ntplay">Assistir ao vivo !</button>
                            </a>
                            <i data-feather="tv"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col1" style="padding: 5px">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="{{asset('img/radionovotempo.jpg')}}" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                    <div class="card-body">
                        <h2 class="subtitle-container">Rádio Novo Tempo</h2>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <a onclick="window.open('https://www.novotempo.com/radio/#onde-ouvir')">
                                <button type="button" class="ntplay">Ouvir ao vivo !</button>
                            </a>
                            <i data-feather="radio"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @component('componentes.footer')
    @endcomponent

    @component('componentes.modal', ['id' => 'modalpresenca', 'titulo' => 'Marcar Presença'])
        <form class="needs-validation text-black" novalidate method="POST" action="{{ route('pessoa.create.presenca') }}">
            @csrf
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
                        <label for="validationCustom02">Data Nascimento</label>
                         <input type="date" class="form-control" id="idade" placeholder="Insira sua idade" name="data_nasc" required>
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
                        <input type="number" class="form-control" id="qtdacompanhante" placeholder="Quantidade" name="quantidade" aria-describedby="inputGroupPrepend" disabled required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="acompanhante" onchange="habilitar()" >
                            <label class="form-label">Eu irei levar acompanhantes !</label>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12 mt-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="visitante" name="visita">
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
    <script>feather.replace();</script>
    @endcomponent
</body>
</html>
