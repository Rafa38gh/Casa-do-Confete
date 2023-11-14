<h1>Área Operacional</h1>

<!-- Exibição de festas -->
<table>
    <thead>
        <th>Festas</th>
        <th>Convidados Confirmados</th>
        <th>Pacote de Comida</th>
        <th>Data</th>
    </thead>
    <tbody>
        @foreach($parties as $party)
            @if($party->status == 'aprovado')
                <tr>
                    <td>{{ $party->name }}</td>
                    <td>{{ $party->age }}</td>
                    <td>{{ $party->invites }}</td>
                    <td>{{ $party->food }}</td>
                    <td>{{ $party->date }}</td>

                    <td><a href="{{ route('ops.show', $party->id) }}">Informações</a></td>
                </tr>
            @endif
        @endforeach
    </tbody>
</table>