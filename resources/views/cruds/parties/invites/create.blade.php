<x-app-layout>
    <!DOCTYPE html>
    <html lang="pt">
    <head>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Convite - Casa do Confete</title>
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
            <h1>Formulário de Convite</h1>
            <div class="green-band"></div>
        </div>
        <div class="formInvite">

            <form action="{{ route('invite.store', ['id' => $party->id]) }}" method="POST">
            @csrf
            <div id="guests">
                <input type="text" placeholder="Nome do Convidado" name="guests[0][name]" size="30" value="{{ old('guests[0][name]') }}" required>
                <input type="text" placeholder="CPF" name="guests[0][cpf]" value="{{ old('guests[0][cpf]') }}" required>
                <input type="number" placeholder="Idade" name="guests[0][age]" value="{{ old('guests[0][age]') }}" required>
            </div>
            <br>
            <button class="botao" type="button" onclick="newField()">Adicionar Convidado</button>
            <button class="botao" type="submit">Enviar</button>
            </form>
        </div>

        <script>
        var inviteCount = 1;

        function newField() 
        {
            var divInvites = document.getElementById('guests');
            var newInvite = document.createElement('div');

            newInvite.className = 'guest';
            newInvite.innerHTML = 
                '<input type="text" name="guests[' + inviteCount + '][name]" size="30" placeholder="Nome do Convidado" required>' +

                '<input type="text" name="guests[' + inviteCount + '][cpf]" placeholder="CPF" required>' +

                '<input type="number" name="guests[' + inviteCount + '][age]" placeholder="Idade" required>';
            divInvites.appendChild(newInvite);
            inviteCount++;
        }
        </script>
    </body>
    </html>
</x-app-layout>