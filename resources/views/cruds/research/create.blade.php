<x-app-layout>
    <!DOCTYPE html>
    <html lang="pt">
    <head>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

        <title>Pesquisa de Satisfação - Casa do Confete</title>
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

        <form action="{{ route('research.store') }}" method="POST">
            @csrf
                <fieldset class="researchCreate">
                    <legend>Em uma nota de 1 a 5, quanto você recomendaria nosso buffet para outra pessoa?</legend>

                    <input type="radio" id="1" name="answer1" value="1">
                    <label for="1">1</label>

                    <input type="radio" id="2" name="answer1" value="2">
                    <label for="2">2</label>

                    <input type="radio" id="3" name="answer1" value="3">
                    <label for="3">3</label>

                    <input type="radio" id="4" name="answer1" value="4">
                    <label for="4">4</label>

                    <input type="radio" id="5" name="answer1" value="5" checked>
                    <label for="5">5</label>
                </fieldset>

                <fieldset class="researchCreate">
                    <legend>Insira uma nota, de 1 a 5, para a organização do buffet:</legend>

                    <input type="radio" id="org1" name="answer2" value="1">
                    <label for="org1">1</label>

                    <input type="radio" id="org2" name="answer2" value="2">
                    <label for="org2">2</label>

                    <input type="radio" id="org3" name="answer2" value="3">
                    <label for="org3">3</label>

                    <input type="radio" id="org4" name="answer2" value="4">
                    <label for="org4">4</label>

                    <input type="radio" id="org5" name="answer2" value="5" checked>
                    <label for="org5">5</label>
                </fieldset>

                <fieldset class="researchCreate">
                    <legend>Conte-nos mais sobre suas experiências com o buffet:</legend>
                    <textarea name="answer3" id="answer3" cols="30" rows="10"></textarea>
                </fieldset>

                <button class="botaoCenter" type="submit">Enviar</button>
        </form>

        <script>
            ClassicEditor
                .create( document.querySelector( '#answer3' ) )
                .catch( error => {
                    console.error( error );
                } );
        </script>
    </body>
    </html>
</x-app-layout>