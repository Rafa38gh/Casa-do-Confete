<x-app-layout>
    <!DOCTYPE html>
    <html lang="pt">
    <head>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Agendamento de Festa - Casa do Confete</title>
    </head>
    <body>
         <!-- Verificação de erros -->
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <ul>
                        <li>{{ $error }}</li>
                    </ul>
                @endforeach
            @endif

            <div class="titleFaixa">
                <h1>Nova Festa</h1>
                <div class="green-band"></div>
            </div>

            <form action="{{ route('parties.store') }}" method="POST" class="flex flex-col items-center mt-10">
                @csrf
                <input type="text" placeholder="Nome do Aniversariante" name="name" size="30" value="{{ old('name') }}" class="mb-4">
                <input type="number" placeholder="Idade a ser comemorada" name="age"  value="{{ old('age') }}" class="mb-4">
                <input type="number" placeholder="Quantidade de convidados" name="invites" value="{{ old('invites') }}" class="mb-4">

                <div class="flex items-center">
                    @foreach($foods as $food)
                    <input type="radio" id="option{{ $loop->iteration }}" name="food" value="{{ $food->id }}" class="mr-2">
                    <label for="option{{ $loop->iteration }}" class="mr-2">{{ $food->name }}</label>
                    @endforeach
                </div>

                <div>
                    <select name="date" id="date-select">
                        <option value="">-- Escolha uma data --</option>

                        <!-- Exibe todas as datas disponíveis -->
                        @foreach($bookings as $booking)
                            @if($booking->status == 'livre')
                                <option value="{{ $booking->date }}">{{ $booking->date }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="botaoCenter">Enviar</button>
            </form>
    </body>
    </html>
</x-app-layout>