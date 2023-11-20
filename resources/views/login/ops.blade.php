<x-app-layout>
    <!DOCTYPE html>
    <html lang="pt">
    <head>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Operacional - Casa do Confete</title>
    </head>

    <body>
    <div class="titleFaixa">
        <h1>Área Logada - Operacional</h1>
        <div class="green-band"></div>
    </div>

    <!-- Exibição de festas -->
    <table>
        <thead>
            <th>Festas</th>
            <th>Idade</th>
            <th>Convidados</th>
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

                        <td><a class="botao" href="{{ route('ops.show', $party->id) }}">Informações</a></td>
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>


        <!-- Rodapé -->
        <footer class="moreSpace">
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