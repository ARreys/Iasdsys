<html lang="pt-br">
    @component('componentes.head')
    @endcomponent

    <body class="anuncios" id="anuncios">
        @component('componentes.header')
        @endcomponent
        <div class="container text-black">
            <h3 style="color: white">Anúncios</h3>
            <div class="jumbotron">
                <h2>Anuncio 1</h2>
                <div class="row">
                    <div class="col-md-6">
                        <img src="https://via.placeholder.com/1280x720/3da2d1/FFFFFF?text=16:9" alt="imagem" class="img-thumbnail">
                    </div>
                    <div class="col-md-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eleifend augue eget felis accumsan, id egestas augue laoreet. Etiam bibendum lectus enim, eget facilisis sapien laoreet eget. Praesent vel urna congue, tincidunt justo sit amet, fermentum urna. Phasellus vel arcu ut leo aliquet ullamcorper sed ut neque. Quisque efficitur metus id sapien blandit, id varius tellus interdum. Pellentesque ante elit, placerat vel urna non, dictum sollicitudin purus. Nullam sit amet feugiat eros, at porta sapien. Fusce pretium erat ut metus tincidunt, ac cursus lectus feugiat.
                    </div>
                </div>
            </div>
            <div class="jumbotron">
                <h2>Anuncio 2</h2>
                <div class="row">
                    <div class="col-md-6">
                        <img src="https://via.placeholder.com/1280x720/3da2d1/FFFFFF?text=16:9" alt="imagem" class="img-thumbnail">
                    </div>
                    <div class="col-md-6">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eleifend augue eget felis accumsan, id egestas augue laoreet. Etiam bibendum lectus enim, eget facilisis sapien laoreet eget. Praesent vel urna congue, tincidunt justo sit amet, fermentum urna. Phasellus vel arcu ut leo aliquet ullamcorper sed ut neque. Quisque efficitur metus id sapien blandit, id varius tellus interdum. Pellentesque ante elit, placerat vel urna non, dictum sollicitudin purus. Nullam sit amet feugiat eros, at porta sapien. Fusce pretium erat ut metus tincidunt, ac cursus lectus feugiat.</p>
                    </div>
                </div>
            </div>
        </div>

        <footer class="page-footeranuncios font-small blue pt-4">
            <div class="footer-copyright text-center text-white py-3">
                Copyright &copy; <a style="color: white;" href="/">Igreja Adventista do Sétimo dia - Central - Parnaíba</a>
            </div>
        </footer>
        <!-- Copyright -->
        @component('componentes.modal', ['id' => 'modalpresenca', 'titulo' => 'Marcar Presença'])
        <form action="" method="Post">
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Insira o email">
                <small id="emailHelp" class="form-text text-muted">Nunca compartilharemos seu email com ninguém.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Senha</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Mantenha-me conectado</label>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="button" type="submit" class="btn btn-primary">Entrar</button>
            </div>
        </form>
        @endcomponent

        @component('componentes.scripts')
        @endcomponent
    </body>
</html>
