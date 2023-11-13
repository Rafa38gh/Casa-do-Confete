<!-- Script para usar o CKEditor -->
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

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
    <textarea name="body" id="body" cols="100" rows="30" placeholder="Escreva as recomendações aqui">{{ old('body') }}</textarea>

    <button type="submit">Enviar</button>
</form>

<script>
    ClassicEditor
        .create( document.querySelector( '#body' ) )
        .catch( error => {
            console.error( error );
        } );
</script>