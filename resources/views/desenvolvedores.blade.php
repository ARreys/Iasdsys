<html lang="pt-br">
@component('componentes.head')
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
@endcomponent
    @component('componentes.header')
    @endcomponent
<body>
    <div class="container-fluid text-white desenvolvedores">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mt-3" style="background: #121212;">
                    <h1 class="title-container">Desenvolvedores</h1>
                </div>
                <div class="col-md-12" style="height: 5px; background: #3d8fb1;"></div>
            </div>
            <div class="row">
                <div class="col-md-6 col-dev">
                    <div class="card text-center" style="background: #121212;">
                        <div class="card-block" >
                            <img class="rounded-circle rounded-circledev" src="{{asset('img/arthur.jpg')}}" alt="dev-image">
                            <h4 class="card-title mt-4">Arthur Alves Reis</h4>
                            <small class="stack">Desenvolvedor Front end</small>
                            <div class="midia-socialdev mt-4">
                                <ul>
                                    <li>
                                        <a onclick="window.open('https://t.me/it_sarthuralves/')">
                                            <button class="rounded-circle social-mediadev-telegram" style="background: #242424; height: 35px;">
                                                <i class="fab fa-telegram-plane"></i>
                                            </button>
                                        </a>
                                    </li>
                                    <li>
                                        <a onclick="window.open('https://instagram.com/_arthur.alves_')">
                                            <button class="rounded-circle social-mediadev-instagram" style="background: #242424; height: 35px;">
                                                <i class="fab fa-instagram"></i>
                                            </button>
                                        </a>
                                    </li>
                                    <li>
                                        <a onclick="window.open('https://arreys.github.io')">
                                            <button class="rounded-circle social-mediadev-website" style="background: #242424; height: 35px;">
                                                <i class="fas fa-code"></i>
                                            </button>
                                        </a>
                                    </li>
                                    <li>
                                        <a onclick="window.open('https://github.com/ARreys')">
                                            <button class="rounded-circle social-mediadev-github" style="background: #242424; height: 35px;">
                                                <i data-feather="github"></i>
                                            </button>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-5 col-dev">
                    <div class="card text-center" style="background: #121212;">
                        <div class="card-block">
                            <img class="rounded-circle rounded-circledev" src="{{asset('img/tiago.jpg')}}" alt="dev-image">
                            <h4 class="card-title mt-4">Tiago Alves dos Santos</h4>
                            <small class="stack">Desenvolvedor Back end</small>
                            <div class="midia-socialdev mt-4">
                                <ul>
                                    <li>
                                        <a onclick="window.open('https://t.me/TiagoAlves2001')">
                                            <button class="rounded-circle social-mediadev-telegram" style="background: #242424; height: 35px;">
                                                <i class="fab fa-telegram-plane"></i>
                                            </button>
                                        </a>
                                    </li>
                                    <li>
                                        <a onclick="window.open('https://www.instagram.com/tiagooliveiraaso/')">
                                            <button class="rounded-circle social-mediadev-instagram" style="background: #242424; height: 35px;">
                                                <i class="fab fa-instagram"></i>
                                            </button>
                                        </a>
                                    </li>
                                    <li>
                                        <a onclick="window.open('https://github.com/Tiago-Alves-dos-Santos')">
                                            <button class="rounded-circle social-mediadev-github" style="background: #242424; height: 35px;">
                                                <i data-feather="github"></i>
                                            </button>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @component('componentes.scripts')
    <script>feather.replace();</script>
    @endcomponent
</body>
</html>
