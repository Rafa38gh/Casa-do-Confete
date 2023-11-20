<x-app-layout>
    <!DOCTYPE html>
    <html lang="pt">
    <head>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Agendas - Casa do Confete</title>
    </head>

    <body>

        <div class="titleFaixa">
            <h1>Agendas do Buffet</h1>
            <div class="green-band"></div>
        </div>

        <div class="suaFesta">
            <table>
                <thead>
                    <th>Data e Hora</th>
                    <th>Status</th>
                </thead>
                <tbody>
                    @foreach($bookings as $booking)
                        <tr>
                            <td class="status {{ $booking->status == 'livre' ? 'bg-green-200' : 'bg-red-200' }}">{{ $booking->date }}</td>
                            <td class="status {{ $booking->status == 'livre' ? 'bg-green-200' : 'bg-red-200' }}">{{ $booking->status }}</td>

                            <td>
                                <form action="{{ route('booking.edit', $booking->id) }}">
                                    <button type="submit">Editar</button>
                                </form>
                            </td>

                            <td>
                                <form action="{{ route('booking.destroy', $booking->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Deletar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <form action="{{ route('booking.create') }}">
                <button type="submit">Nova Data</button>
            </form>
        </div>
    </body>
    </html>
</x-app-layout>