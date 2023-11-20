<x-app-layout>
<!DOCTYPE html>
<html lang="pt">
<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard - Casa do Confete</title>
</head>

<body>
<div class="titleFaixa">
    <h1>Área Logada</h1>
    <div class="green-band"></div>
    <div class="rightFaixa">
        <a href="{{ route('parties.create') }}">Agende sua Festa!</a>
    </div>
</div>


    <!-- Exibe informações da festa -->
<div class="suaFesta">

    <h1>Sua Festa</h1>
    @if($party)
        <ul>
            <li>Aniversariante: {{ $party->name }}</li>
            <li>Idade: {{ $party->age }}</li>
            <li>Convidados: {{ $party->invites }}</li>
            <li>Cardápio: {{ $chosenFood->name }}</li>
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

                        <td>
                            <form action="{{ route('change.food', $party->id) }}">
                                <button type="submit">Alterar Cardápio</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>

            <!-- Pesquisa de satisfação -->
            <p>Conte-nos sobre suas experiências no buffet, responda nossa: <a href="{{ route('research.create') }}">Pesquisa de Satisfação</a></p>
        @endif
        
    @else
        <h2>- Informações sobre sua festa irão aparecer aqui... -</h2>
    @endif
</div>
    <table class="recommendations">
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


    <!-- Rodapé -->
<footer>
    <div class="footerLeft">
        <p>Casa do Confete</p>
        <p>Rua das Flores, 456</p>
        <p>Bairro do Bosque</p>
        <p>CEP: 12345-678</p>
        <p>Cidade Serena, Estado Tranquilo</p>
    </div>

    <div class="footerRight">
        <p>Contate-nos: contato@casadoconfete.com.br</p>
        <p>©Copyright 2023 - Casa do Confete, Todos os direitos reservados</p>
    </div>
</footer>
</body>
</html>
</x-app-layout>