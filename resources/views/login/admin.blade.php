<x-app-layout>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>

<body>
    <h1>Área do Admin</h1>

    <a href="{{ route('admin.parties') }}">Visualizar Festas</a>
    <br>
    <a href="{{ route('admin.recommendations') }}">Visualizar Recomendações</a>
    <br>
    <a href="{{ route('admin.foods') }}">Visualizar Cardápio</a>
</body>
</html>
</x-app-layout>
