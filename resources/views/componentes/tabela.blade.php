<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="{{$idtabela}}" width="100%" cellspacing="0">
            @component('componentes.indicetabela', ['indicetabela' => 'tabelapresennca', 'primeirocampo' => 'ID', 'segundocampo' => 'Nome Completo', 'terceirocampo' => 'Idade', 'quartocampo' => 'Contato', 'quintocampo' => 'Acompanhantes', 'sextocampo' => 'Visitante'])
            @endcomponent
            <thead>
                <tr>
                    <td>{{$idvisitante}}</td>
                    <td>{{$nomecompleto}}</td>
                    <td>{{$idade}}</td>
                    <td>{{$contato}}</td>
                    <td>{{$quantidadeacompanhante}}</td>
                    <td>{{$visitante}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

