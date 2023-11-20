<x-app-layout>
    <!DOCTYPE html>
    <html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Recomendações - Casa do Confete</title>
    </head>
    <body>
        <table>
            <thead>
                <th>Recomendações</th>
            </thead>
            <tbody>
                @foreach($recommendations as $recommendation)            <!-- Display das recomendacoes -->
                    <tr>
                        <td>{!! $recommendation->body !!}</td>
                        <td>
                            <form action="{{  route('recommendations.edit', $recommendation->id) }}">
                                <button type="submit">Edit</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('recommendations.destroy', $recommendation->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Deletar</button>
                            </form></td>
                    </tr>
                @endforeach 
            </tbody>
        </table>

        <x-primary-button>
            <a href="{{ route('recommendations.create') }}">Adicionar Recomendações</a>
        </x-primary-button>
    </body>
    </html>
</x-app-layout>