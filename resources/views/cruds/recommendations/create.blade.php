<!-- Script para usar o CKEditor -->
<x-app-layout>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

<title>Nova Recomendação</title>

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
    <textarea name="body" id="body" cols="100" rows="30" placeholder="Escreva as recomendações aqui"></textarea>

    <button type="submit">Enviar</button>
</form>

<script>
    ClassicEditor
        .create( document.querySelector( '#body' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
</x-app-layout>