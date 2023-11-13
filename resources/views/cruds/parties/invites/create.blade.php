<h1>Formulário de Convite</h1>

<form action="{{ route('invite.store', ['id' => $party->id]) }}" method="POST">
    @csrf
    <input type="text" placeholder="Nome do Convidado" name="name" size="30" value="{{ old('name') }}">
    <input type="text" placeholder="CPF" name="cpf" value="{{ old('cpf') }}">
    <input type="number" placeholder="Idade" name="age" value="{{ old('age') }}">

    <button type="submit">Enviar</button>
</form>