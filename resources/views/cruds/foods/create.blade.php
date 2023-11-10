<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

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
    <input type="text" placeholder="Título do Cardápio" name="name" size="30" value="{{ old('name') }}">
    <textarea name="body" id="body" cols="100" rows="30" placeholder="Conteúdo do cardápio"></textarea>
    <textarea name="drink" id="drink" cols="50" rows="20" placeholder="Bebidas"></textarea>
    <input type="number" placeholder="Preço por pessoa" name="price" value="{{ old('price') }}">

    <button type="submit">Enviar</button>
</form>
    
<script>
    ClassicEditor
        .create( document.querySelector( '#body' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<script>
    ClassicEditor
        .create( document.querySelector( '#drink' ) )
        .catch( error => {
            console.error( error );
        } );
    </script>