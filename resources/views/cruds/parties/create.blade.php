<x-app-layout>
<title>Agendamento de Festa</title>

<!-- Verificação de erros -->
@if ($errors->any())
    @foreach ($errors->all() as $error)
        <ul>
            <li>{{ $error }}</li>
        </ul>
    @endforeach
@endif

<form action="{{ route('parties.store') }}" method="POST">
    @csrf
    <input type="text" placeholder="Nome do Aniversariante" name="name" size="30" value="{{ old('name') }}">
    <input type="number" placeholder="Idade a ser comemorada" name="age"  value="{{ old('age') }}">
    <input type="number" placeholder="Quantidade de convidados" name="invites" value="{{ old('invites') }}">

    <div>
        @foreach($foods as $food)
        <input type="radio" id="option{{ $loop->iteration }}" name="food" value="{{ $food->id }}">
        <label for="option{{ $loop->iteration }}">{{ $food->name }}</label>
        @endforeach
    </div>

    <div>
        <input type="datetime-local" name="date" value="{{ old('date') }}">
    </div>

    <button type="submit">Agendar Festa</button>
</form>
</x-app-layout>