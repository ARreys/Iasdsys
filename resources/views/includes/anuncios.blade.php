@forelse($eventos as $e)
<div class="jumbotron">
    <h2>{{$e->titulo}}</h2>
    <div class="row">
        <div class="col-md-6">
            <img src="data:image/jpeg;base64,{{ base64_encode($e->foto) }}" alt="imagem" class="img-thumbnail">
            {{--  {{ $e->foto}}  --}}
        </div>
        <div class="col-md-6">
            <p>
                {{$e->descricao}}
            </p>
        </div>
    </div>
</div>
@empty
<div class="jumbotron">
    <h2>Sem Anuncios</h2>
    <div class="row">
        <div class="col-md-6">
            <img src="https://via.placeholder.com/1280x720/3da2d1/FFFFFF?text=16:9" alt="imagem" class="img-thumbnail">
        </div>
        <div class="col-md-6">
            Sem anuncios no momento
        </div>
    </div>
</div>
@endforelse

{{ $eventos->links() }}
