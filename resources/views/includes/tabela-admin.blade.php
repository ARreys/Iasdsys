<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="tabela-admin" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Senha</th>
                </tr>
            </thead>
            <!-- ELEMENTO DE TABELA (PUXAR DO BANCO DE DADOS) -->
            <tbody>
                @forelse($usuarios as $u)
                <tr>
                    <td>{{ $u->id }}</td>
                    <td>{{ $u->telefone }}</td>
                    <td>{{ $u->senha }}</td>
                    @if(App\Classes\Configuracao::ADMIN == session('id') && $u->id != session('id'))
                    <td>
                        <a data-toggle="modal" href="#confirmarexclusao">
                            <button type="button" class="btn btn-danger">Remover</button>
                        </a>
                    </td>
                    @endif
                </tr>
                @empty
                <tr>
                    <td colspan="3">Banco Vazio</td>
                    @endif
                </tr>
                @endforelse
            </tbody>
            <!-- FIM DO ELEMENTO -->
        </table>
    </div>
    {{ $usuarios->links() }}
</div>
