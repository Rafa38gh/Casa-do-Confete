<h1>Cardápios</h1>

<table>
    <thead>
        <th>Nome do Cardápio</th>
        <th>Conteúdo</th>
    </thead>
    <tbody>
        @foreach($foods as $food)            <!-- Display das festas marcadas -->
            <tr>
                <td>{{ $food->name }}</td>
                <td>{{ $food->body }}</td>
            </tr>
        @endforeach 
    </tbody>
</table>