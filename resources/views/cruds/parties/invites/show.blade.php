<h1>Informações da Festa</h1>

<!-- Informações Gerais -->
<ul>
    <li>Aniversariante: {{ $party->name }}</li>
    <li>Idade a ser comemorada: {{ $party->age }}</li>
    <li>Data: {{ $party->date }}</li>
</ul>

<!-- Controle de Convidados -->
<table>
    <thead>
        <th>Convidados</th>
        <th>CPF</th>
        <th>Idade</th>
    </thead>
    <tbody>
        @foreach($invites as $invite)
            @if($invite->party_id == $party->id)
                <tr>
                    <td>
                        <input type="checkbox" id="invited" value="{{ $invite->id }}">
                        <label for="invited">{{ $invite->name }}</label>
                    </td>
                    <td>{{ $invite->cpf }}</td>
                    <td>{{ $invite->age }}</td>
                </tr>
            @endif
        @endforeach
    </tbody>
</table>