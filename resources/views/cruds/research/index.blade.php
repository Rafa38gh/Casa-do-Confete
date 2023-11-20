<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Pesquisas de Satisfação - Casa do Confete</title>
    </head>

    <body>
    <div class="titleFaixa">
            <h1>Pesquisas de Satisfação</h1>
            <div class="green-band"></div>
        </div>

        <table>
            <thead>
                <th>Questão 1</th>
                <th>Questão 2</th>
                <th>Questão 3</th>
            </thead>
            <tbody>
                @foreach($researches as $research)
                <tr>
                    <td>{{ $research->answer1 }}</td>
                    <td>{{ $research->answer2 }}</td>
                    <td>{!! $research->answer3 !!}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
    </html>

</x-app-layout>