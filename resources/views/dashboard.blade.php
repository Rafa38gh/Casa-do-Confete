<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard - Casa do Confete</title>
</head>

<body>
    <h1>Área Logada</h1>

    <ul>
        <li><a href="{{ route('parties.create') }}">Agende uma festa</a></li>
    </ul>

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