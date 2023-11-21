<x-app-layout>
    <!DOCTYPE html>
    <html lang="pt">
    <head>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Nova Agenda - Casa do Confete</title>
    </head>

    <body>
        
        <div class="titleFaixa">
            <h1>Nova Data</h1>
            <div class="green-band"></div>
        </div>

        <form action="{{ route('booking.store') }}" method="POST" class="flex flex-col items-center mt-10">
            @csrf
            <div class="mt-4">
                <label for="date">Insira uma data:</label> <br>
                <input type="datetime-local" id="date" name="date" value="{{ old('date') }}">
            </div>

            <button type="submit" class="botaoCenter">Adicionar Data</button>
        </form>
    </body>
    </html>
</x-app-layout>