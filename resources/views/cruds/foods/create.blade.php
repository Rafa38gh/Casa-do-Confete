<x-app-layout>
    <!DOCTYPE html>
    <html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

        <title>Novo Cardápio - Casa do Confete</title>
    </head>
    <body>
        <div class="titleFaixa">
            <h1>Criar Cardápio</h1>
            <div class="green-band"></div>
        </div>

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <ul>
                    <li>{{ $error }}</li>
                </ul>
            @endforeach
        @endif


        <div>
        <form action="{{ route('foods.store') }}" method="POST">
            @csrf
            <input type="text" placeholder="Título do Cardápio" name="name" size="30" value="{{ old('name') }}">
            <textarea name="body" id="body" cols="70" rows="30" placeholder="Conteúdo do cardápio"><img src="{{ URL::asset('images/foods/coxinha.jpg') }}" alt="Coxinha" width="150" height="100"></textarea>
            <textarea name="drink" id="drink" cols="50" rows="20" placeholder="Bebidas"><img src="{{ URL::asset('images/foods/juice.webp') }}" alt="Sucos" width="150" height="100"></textarea>
            <input type="number" placeholder="Preço por pessoa" name="price" value="{{ old('price') }}">
            <button type="submit" class="botao">Enviar</button>
        </div>

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
    </body>
    </html>
</x-app-layout>