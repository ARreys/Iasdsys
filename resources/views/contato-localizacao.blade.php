<html lang="pt-br">
    @component('componentes.head')
    @endcomponent
    @component('componentes.header')
    @endcomponent
    <body id="contato-localizacao">
        <div class="contatos-localizacao">
            <div class="content">
                <div class="container text-white">
                    <h3 class="title-container">Contato e localização</h1>
                    <div class="row">
                        <div class="col-sm-6 text-center text-white my-5">
                            <!-- <a href="https://www.google.com.br/maps/place/Igreja+Adventista+do+S%C3%A9timo+Dia/@-2.922131,-41.7882545,13z/data=!4m8!1m2!2m1!1sigreja+adventista+do+setimo+dia+central+parnaiba!3m4!1s0x0:0x439b183412118d43!8m2!3d-2.907564!4d-41.787765">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalpresenca">Me leve até lá !</button>
                            </a> -->
                            <p>Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco
                                laboris nisi ut aliqu
                            ex ea commodo consequat.</p>
                        </div>
                        <div class="midia-social col-sm-6 text-center text-white my-5">
                            <ul>
                                <li><a onclick="window.open('tel:55-5555-12345')" class="social-media"><i data-feather="phone"></i></a></li>
                                <li><a onclick="window.open('')" class="social-media"><i data-feather="mail"></i></a></li>
                                <li><a onclick="window.open('https://pt-br.facebook.com/centralparnaiba')" class="social-media"><i data-feather="facebook"></i></a></li>
                                <li><a onclick="window.open('https://www.instagram.com/iasdcentralparnaiba/')" class="social-media"><i data-feather="instagram"></i></a></li>
                                <li><a onclick="window.open('https://www.youtube.com/c/iasdcentralparnaiba')" class="social-media"><i data-feather="youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="page-footercontato-localizacao">
            <div class="footer-copyright text-center text-white py-3">
                Copyright &copy; <a style="color: white;" href="/">Igreja Adventista do Sétimo Dia - Central - Parnaíba</a>
            </div>
            </footer>
            <!-- Copyright -->
        </div>
        <script>feather.replace();</script>

    @component('componentes.scripts')
    @endcomponent

    </body>
</html>
