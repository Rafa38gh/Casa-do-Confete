<x-app-layout>
    <!DOCTYPE html>
    <html lang="pt">
    <head>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Modificar Cardápio - Casa do Confete</title>
    </head>

    <body>
        <div class="titleFaixa">
        <h1>Opções de Cardápios</h1>
        <div class="green-band"></div>
    </div>

        <table>
            <thead>
                <th>Cardápio</th>
                <th>Comidas</th>
                <th>Bebidas</th>
                <th>Preço por Pessoa</th>
            </thead>
            <tbody>
                @foreach($foods as $food)
                <tr>
                    <td>{{ $food->name }}</td>
                    <td>{!! $food->body !!}</td>
                    <td>{!! $food->drink !!}</td>
                    <td>{{ $food->price }}</td>

                    <td>
                        <form action="{{ route('update.food', $party) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button class="botao" type="submit" name="food" value="{{ $food->id }}">Trocar Cardápio</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
    </html>
</x-app-layout>