<x-app-layout>
<title>Cardápios</title>

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
                    <form action="{{ route('foods.destroy', $food->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Deletar</button>
                    </form>
                </td>
            </tr>
        @endforeach 
    </tbody>
</table>
<x-primary-button>
    <a href="{{ route('foods.create') }}">Novo cardápio</a>
</x-primary-button>
</x-app-layout>