<x-app-layout>
    <!DOCTYPE html>
    <html lang="pt">
    <head>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Show - Convidados</title>
    </head>

    <body>
        <!-- Verificação de erros -->
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <ul>
                    <li>{{ $error }}</li>
                </ul>
            @endforeach
        @endif
        <div class="titleFaixa">
            <h1>Informações da Festa</h1>
            <div class="green-band"></div>
        </div>
        <div class="showConvidados">
        

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
                            <td>{{ $invite->name }}</td>
                            <td>{{ $invite->cpf }}</td>
                            <td>{{ $invite->age }}</td>

                            <td>
                                <form action="{{ route('invite.destroy', $party->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="botao" name="invite_id" value="{{ $invite->id }}">Confirmar Presença</button>
                                </form>
                            </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>

        <a class="botaoShow" href="{{ route('ops.create', $party->id) }}">Adicionar Convidado</a>

        <!-- Dados do Cardápio -->
        <table>
            <thead>
                <th>Cardápio</th>
                <th>Comidas</th>
                <th>Bebidas</th>
                <th>Preço por Pessoa</th>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $chosenFood->name }}</td>
                    <td>{!! $chosenFood->body !!}</td>
                    <td>{!! $chosenFood->drink !!}</td>
                    <td>{{ $chosenFood->price }}</td>
                </tr>
            </tbody>
        </table>
        </div>
    </body>
    </html>
</x-app-layout>