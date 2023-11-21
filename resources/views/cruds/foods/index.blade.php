<x-app-layout>
    <!DOCTYPE html>
    <html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <title>Cardápios - Casa do Confete</title>
    </head>

    <body>
        <div class="titleFaixa">
            <h1>Cardápios</h1>
            <div class="green-band"></div>
        </div>
        <div class="suaFesta">
        <table>
            <thead>
                <th>Nome do Cardápio</th>
                <th>Conteúdo</th>
                <th>Bebidas</th>
                <th>Preço por pessoa</th>
            </thead>
            <tbody>
                @foreach($foods as $food)            <!-- Display das festas marcadas -->
                    <tr>
                        <td>{{ $food->name }}</td>
                        <td>{!! $food->body !!}</td>
                        <td>{!! $food->drink !!}</td>
                        <td>{{ $food->price }}</td>

                        <td>
                            <form action="{{ route('foods.edit', $food->id) }}">
                                <button type="submit" class="botao">Editar</button>
                            </form>
                        </td>

                        <td>
                            <form action="{{ route('foods.destroy', $food->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="botao">Deletar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach 
            </tbody>
        

        </table>
        </div>
            <form action="{{ route('foods.create') }}">
                <button type="submit" class="botaoCenter">Novo Cardápio</button>
            </form>



    </body>
    </html>
</x-app-layout>