<x-app-layout>
    <!DOCTYPE html>
    <html lang="pt">
    <head>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Recomendações - Casa do Confete</title>
    </head>
    <body>
    <div class="titleFaixa">
        <h1>Recomendações</h1>
        <div class="green-band"></div>
    </div>
        <table>
            <tbody>
                @foreach($recommendations as $recommendation)            <!-- Display das recomendacoes -->
                    <tr>
                        <td>{!! $recommendation->body !!}</td>
                        <td>
                            <form action="{{  route('recommendations.edit', $recommendation->id) }}">
                                <button class="botao" type="submit">Editar</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('recommendations.destroy', $recommendation->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="botao" type="submit">Deletar</button>
                            </form></td>
                    </tr>
                @endforeach 
            </tbody>
        </table>

        <form action="{{ route('recommendations.create') }}">
            <button class="botaoCenter" type="submit">Adicionar Recomendações</button>
        </form>

    </body>
    </html>
</x-app-layout>