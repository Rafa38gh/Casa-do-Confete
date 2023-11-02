<h1>Agendamento de Festa</h1>

<form action="{{ route('parties.store') }}" method="POST">
    @csrf
    <input type="text" placeholder="Nome do Aniversariante" name="name" size="30" required>
    <input type="number" placeholder="Idade a ser comemorada" name="age" required>
    <input type="number" placeholder="Quantidade de convidados" name="invites" required>

    <div>
        <input type="radio" id="option1" name="food" value="food1" checked>
        <label for="option1">Cardápio 1</label>

        <input type="radio" id="option2" name="food" value="food2">
        <label for="option2">Cardápio 2</label>

        <input type="radio" id="option3" name="food" value="food3">
        <label for="option3">Cardápio 3</label>

    </div>

    <div>
        <input type="datetime-local" name="date" required>
    </div>

    <button type="submit">Agendar Festa</button>
</form>