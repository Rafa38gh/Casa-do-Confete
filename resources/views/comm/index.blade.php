<h1>Área Comercial</h1>

<!-- Tabela de festas -->
<table>
    <thead>
        <th>Nome</th>
        <th>Data</th>
        <th>Idade</th>
        <th>Status</th>
    </thead>
    <tbody>
        @foreach($parties as $party)            <!-- Display das festas marcadas -->
            <tr>
                <td>{{ $party->name }}</td>
                <td>{{ $party->date }}</td>
                <td>{{ $party->age }}</td>
                <td>{{ $party->status }}</td>
            </tr>
        @endforeach 
    </tbody>
</table>