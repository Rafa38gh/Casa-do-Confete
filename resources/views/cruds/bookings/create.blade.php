<x-app-layout>
    <!DOCTYPE html>
    <html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Nova Agenda - Casa do Confete</title>
    </head>

    <body>
        
        <h1 class="font-bold text-center text-4xl mt-10">Nova Data</h1>

        <form action="{{ route('booking.store') }}" method="POST" class="flex flex-col items-center mt-10">
            @csrf
            <div class="mt-4">
                <input type="datetime-local" name="date" value="{{ old('date') }}">
            </div>

            <button type="submit" class="bg-pink-400 hover:bg-pink-500 text-white font-bold py-2 px-4 rounded mt-4">Adicionar Data</button>
        </form>
    </body>
    </html>
</x-app-layout>