<x-app-layout>
  <!DOCTYPE html>
  <html lang="pt">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

    <title>Editar Recomendação - Casa do Confete</title>
  </head>
  <body>
    <title>Editar Recomendação - Casa do Confete</title>
  
    <h1>Editar Recomendação</h1>

    <form action="{{ route('recommendations.update',['recommendation' => $recommendation->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <textarea name="body" id="body" cols="100" rows="30" placeholder="Escreva as recomendações aqui">{{ old('body') }}</textarea>

        <button type="submit">Atualizar</button>
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