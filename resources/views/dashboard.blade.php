<x-app-layout>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard - Casa do Confete</title>
</head>


<body>
    <x-primary-button>
    <ul>
        <li><a href="{{ route('parties.create') }}">Agende uma festa</a></li>
    </ul>
    
    </x-primary-button>

  <!-- Exibe informações da festa -->
    <h1>Sua Festa</h1>
    @if($party)
        <ul>
            <li>Aniversariante: {{ $party->name }}</li>
            <li>Idade: {{ $party->age }}</li>
            <li>Convidados: {{ $party->invites }}</li>
            <li>Cardápio: {{ $party->food }}</li>
            <li>Data: {{ $party->date }}</li>
            <li>Status: {{ $party->status }}</li>
        </ul>
        <form action="{{ route('parties.destroy', $party->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Cancelar Festa</button>
        </form>

        @if($party->status == 'aprovado')
            <h2>Sua festa foi aprovada!!</h2>
            <p>Link de Convite: <a href="{{ route('invite.create', ['id' => $party->id]) }}">{{ route('invite.create', ['id' => $party->id]) }}</a></p>

            <table>
                <thead>
                    <th>Convidados Confirmados</th>
                    <th>CPF</th>
                    <th>Idade</th>
                </thead>
                <tbody>
                    @foreach($invites as $invite)
                        @if($invite->party_id == $party->id)
                        <tr>
                            <td>{{ $invite->name }}</td>
                            <td>{{ $invite->cpf }}</td>
                            <td>{{ $invite->age }}</td>
                        

                            <td>
                                <form action="{{ route('invite.delete', $invite->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Deletar</button>
                                </form>
                            </td>
                        </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        @endif
        
    @else
        <h2>- Informações sobre sua festa irão aparecer aqui... -</h2>
    @endif

    <table>
        <thead>
            <th>Recomendações</th>
        </thead>
        <tbody>
            @foreach($recommendations as $recommendation)            <!-- Display das recomendacoes -->
                <tr>
                    <td>{!! $recommendation->body !!}</td>
                </tr>
            @endforeach 
        </tbody>
    </table>

</body>
</html>
</x-app-layout>