<x-app-layout>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Admin</title>
</head>

<body>
    <div class="titleFaixa">
        <h1>Área Logada - Admin</h1>
        <div class="green-band"></div>
    </div>

    <div class="flex-col min-h-screen items-center justify-center grid grid-flow-row auto-rows-max mt-5">

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

    <footer class="mt-auto">
            <div class="footerLeft">
                <p>Casa do Confete</p>
                <p>Rua das Flores, 456</p>
                <p>Bairro do Bosque</p>
                <p>CEP: 12345-678</p>
                <p>Cidade Serena, Estado Tranquilo</p>
            </div>

            <div class="footerRight">
                <p>Contate-nos: contato@casadoconfete.com.br</p>
                <p>©Copyright 2023 - Casa do Confete, Todos os direitos reservados</p>
            </div>
    </footer>
</body>
</html>
</x-app-layout>
