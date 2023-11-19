<x-app-layout>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operacional - Casa do Confete</title>
</head>

<body>
  <h1>Área Operacional</h1>

  <!-- Exibição de festas -->
  <table>
      <thead>
          <th>Festas</th>
          <th>Convidados Confirmados</th>
          <th>Pacote de Comida</th>
          <th>Data</th>
      </thead>
      <tbody>
          @foreach($parties as $party)
              @if($party->status == 'aprovado')
                  <tr>
                      <td>{{ $party->name }}</td>
                      <td>{{ $party->age }}</td>
                      <td>{{ $party->invites }}</td>
                      <td>{{ $party->food }}</td>
                      <td>{{ $party->date }}</td>

                      <td><a href="{{ route('ops.show', $party->id) }}">Informações</a></td>
                  </tr>
              @endif
          @endforeach
      </tbody>
  </table>
  
</body>

</html>
</x-app-layout>