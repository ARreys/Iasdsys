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
                <div class="row linhamapa">
                    <div class="col-sm-12">
                        <div id="map" class="map"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="midia-social col-sm-12 text-center text-white">
                        <p>Rua D. Pedro II Nº 1261 - Centro, Parnaíba - PI, 64200-475</p>
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
            <footer class="page-footercontato-localizacao">
                <div class="footer-copyright text-center text-white py-3">
                    Copyright &copy; <a style="color: white;" href="/">Igreja Adventista do Sétimo Dia - Central - Parnaíba</a>
                </div>
            </footer>
        <!-- Copyright -->
        </div>
    </div>
    <script>feather.replace();</script>
    <script>
          var map = new ol.Map({
            target: 'map',
            layers: [
            new ol.layer.Tile({
                source: new ol.source.OSM()
            })
            ],
            view: new ol.View({
                center: ol.proj.fromLonLat([-41.7796553, -2.9064952]),
                zoom:15
            })
        });
    </script>
    @component('componentes.scripts')
    @endcomponent
</body>
</html>
