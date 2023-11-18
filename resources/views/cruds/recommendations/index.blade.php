<x-app-layout>
<title>Recomendações</title>
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
</x-app-layout>