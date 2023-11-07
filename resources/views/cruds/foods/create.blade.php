<h1>Novo Cardápio</h1>


@if ($errors->any())
    @foreach ($errors->all() as $error)
        <ul>
            <li>{{ $error }}</li>
        </ul>
    @endforeach
@endif

<form action="{{ route('foods.store') }}" method="POST">
    @csrf
    <input type="text" placeholder="Título do Cardápio" name="name" size="30">
    <textarea name="body" cols="100" rows="30" placeholder="Conteúdo do cardápio"></textarea>
    <textarea name="drink" cols="50" rows="20" placeholder="Bebidas"></textarea>
    <input type="number" placeholder="Preço por pessoa" name="price">

    <button type="submit">Enviar</button>
</form>