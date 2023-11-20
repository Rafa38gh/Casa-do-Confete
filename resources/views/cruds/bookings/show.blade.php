<x-app-layout>
    <!DOCTYPE html>
    <html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Agendas - Casa do Confete</title>
    </head>

    <body>
        <a href="{{ route('booking.create') }}">Nova Data</a>
        <table>
            <thead>
                <th>Data e Hora</th>
                <th>Status</th>
            </thead>
            <tbody>
                @foreach($bookings as $booking)
                    <tr>
                        <td>{{ $booking->date }}</td>
                        <td>{{ $booking->status }}</td>

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
        
    </body>
    </html>
</x-app-layout>