<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="anuncios-ativos" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Título</th>
                    <th scope="col">Texto</th>
                </tr>
            </thead>
            <tbody>
                @forelse($eventos as $e)
                <tr>
                    <td>{{ $e->id }}</td>
                    <td>{{ $e->titulo }}</td>
                    <td>{{ $e->descricao }}</td>
                    <td>
                        <a data-toggle="modal" href="#confirmarexclusao">
                            <button type="button" class="btn btn-danger">Remover</button>
                        </a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="3">Banco Vazio</td>
                </tr>
                @endforelse
            </tbody>
            <!-- FIM DO ELEMENTO -->
        </table>
    </div>
    {{ $eventos->links() }}
</div>
