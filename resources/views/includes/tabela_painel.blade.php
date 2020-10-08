<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome Completo</th>
                    <th scope="col">Idade</th>
                    <th scope="col">Contato</th>
                    <th scope="col">Acompanhantes</th>
                    <th scope="col">Visita</th>
                    <th scope="col">Agendado</th>
                </tr>
            </thead>
            <tbody>
                @forelse($pessoa as $pessoas)
                    <tr>
                        <td>{{$pessoas->id}}</td>
                        <td>{{$pessoas->nome}}</td>
                        <td>{{$pessoas->data_nasc}}</td>
                        <td>{{$pessoas->telefone}}</td>
                        <td>{{$pessoas->quantidade_marcada}}</td>
                        <td>{{($pessoas->visitante)?"Sim":"Não"}}</td>
                        <td>{{date('d/m/Y', strtotime($pessoas->dia_presenca))}}</td>
                        <td>
                            <a data-toggle="modal" href="#confirmarexclusao">
                                <button type="button" class="btn btn-danger">Remover</button>
                            </a>
                            {{--  <a data-toggle="modal" href="#alterarpessoa">
                                <button type="button" class="btn btn-primary">Alterar</button>
                            </a>  --}}
                        </td>
                    </tr>
                @empty
                <tr>
                    <td colspan="7">Nenhum dado</td>
                </tr>
                @endforelse

            </tbody>
        </table>

            {{ $pessoa->links() }}

    </div>
</div>
