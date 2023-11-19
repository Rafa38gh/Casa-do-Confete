<x-app-layout>
    <!DOCTYPE html>
    <html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Modificar Cardápio - Casa do Confete</title>
    </head>

    <body>

        <!-- Opções de cardápio -->
        <h1>Opções de Cardápios</h1>

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
                            <button type="submit" name="food" value="{{ $food->id }}">Trocar Cardápio</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
    </html>
</x-app-layout>