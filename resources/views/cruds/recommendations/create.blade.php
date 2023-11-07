<h1>Nova Recomendação</h1>

<!-- Verificação de erros -->
@if ($errors->any())
    @foreach ($errors->all() as $error)
        <ul>
            <li>{{ $error }}</li>
        </ul>
    @endforeach
@endif

<form action="{{ route('recommendations.store') }}" method="POST">
    @csrf
    <textarea name="body" cols="100" rows="30" placeholder="Escreva as recomendações aqui"></textarea>

    <button type="submit">Enviar</button>
</form>