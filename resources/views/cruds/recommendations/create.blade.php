<!-- Script para usar o CKEditor -->
<x-app-layout>
    <!DOCTYPE html>
    <html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

        <title>Criar Recomendação - Casa do Confete</title>
    </head>

    <body>
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
    </body>
    </html>

</x-app-layout>