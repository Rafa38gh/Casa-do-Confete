<x-app-layout>
    <!DOCTYPE html>
    <html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Comercial - Casa do Confete</title>
    </head>

    <body>
        <ul>
        <x-primary-button>
            <li> <a href="{{ route('comm.parties') }}">Visualizar Festas</a> </li>
        </x-primary-button>
        <x-primary-button>
            <li> <a href="{{ route('comm.foods') }}">Visualizar Cardápios</a> </li>
        </x-primary-button>
        <x-primary-button>
            <li> <a href="{{ route('comm.recommendations') }}">Recomendações do Buffet</a> </li>
        </x-primary-button>
        <x-primary-button>
            <li> <a href="{{ route('commBooking.show') }}">Agenda do Buffet</a> </li>
        </x-primary-button>
        </ul>
        

    </body>
    </html>
</x-app-layout>