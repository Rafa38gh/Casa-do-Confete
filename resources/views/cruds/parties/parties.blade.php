<h1>Visualização das Festas</h1>

<table>
    <thead>
        <th>Nome</th>
        <th>Idade</th>
        <th>Convidados</th>
        <th>Cardápio</th>
        <th>Data</th>
        <th>Status</th>
    </thead>
    <tbody>
        @foreach($parties as $party)            <!-- Display das festas marcadas -->
            <tr>
                <td>{{ $party->name }}</td>
                <td>{{ $party->age }}</td>
                <td>{{ $party->invites }}</td>
                <td>{{ $party->food }}</td>
                <td>{{ $party->date }}</td>
                <td>{{ $party->status }}</td>
            </tr>
        @endforeach 
    </tbody>
</table>
