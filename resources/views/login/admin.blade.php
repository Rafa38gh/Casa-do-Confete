<x-app-layout>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Admin</title>
</head>

<body>
    <div class=loginAdmin>
    <x-primary-button>
        <a href="{{ route('admin.parties') }}">Visualizar Festas</a>
    </x-primary-button>
        <br>
    <x-primary-button>
        <a href="{{ route('admin.recommendations') }}">Visualizar Recomendações</a>
    </x-primary-button>
        <br>
    <x-primary-button>
        <a href="{{ route('admin.foods') }}">Visualizar Cardápio</a>
    </x-primary-button>
        <br>    
    <x-primary-button>
            <a href="{{ route('booking.show') }}">Visualizar Agenda</a>
    </x-primary-button>
        <br>
    <x-primary-button>
        <a href="{{ route('research.index') }}">Pesquisas de Satisfação</a>
    </x-primary-button>

    </div>
</body>
</html>
</x-app-layout>
