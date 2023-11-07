<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard - Casa do Confete</title>
</head>

<body>
    <h1>Área Logada</h1>

    <ul>
        <li><a href="{{ route('parties.create') }}">Agende uma festa</a></li>
    </ul>

    <table>
    <thead>
        <th>Recomendações</th>
    </thead>
    <tbody>
        @foreach($recommendations as $recommendation)            <!-- Display das recomendacoes -->
            <tr>
                <td>{{ $recommendation->body }}</td>
            </tr>
        @endforeach 
    </tbody>
</table>

</body>
</html>