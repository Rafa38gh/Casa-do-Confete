<x-app-layout>
    <!DOCTYPE html>
    <html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Festas - Casa do Confete</title>
    </head>
    <body>
        <h1>Visualização das Festas</h1>

        <table>
            <thead>
                <th>Nome</th>
                <th>Idade</th>
                <th>Convidados</th>
                <th>Cardápio</th>
                <th>Data</th>
                <th>Status</th>
                <th>Alterar Status</th>
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

                        <td>
                            <form action="{{ route('parties.update', $party->id) }}" method="POST">
                                @csrf
                                @method('PATCH')

                                <select name="status">
                                    <option value="em espera">Em Espera</option>
                                    <option value="aprovado">Aprovado</option>
                                    <option value="negado">Negado</option>
                                </select>

                                <button type="submit">Enviar</button>
                            </form>
                        </td>

                        <td>
                            <form action="{{ route('parties.destroy', $party->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Deletar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach 
            </tbody>
        </table>
    </body>
    </html>
</x-app-layout>