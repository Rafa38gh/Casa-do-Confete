<x-app-layout>
    <!DOCTYPE html>
    <html lang="pt">
    <head>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Cardápio - Casa do Confete</title>
    </head>
    <body>

    <div class="titleFaixa">
        <h1>Cardápio</h1>
        <div class="green-band"></div>
    </div>

        <main>
            <div class="text">
                <p>
                    Na Casa do Confete, oferecemos uma variedade de seleções de cardápios
                    que transformam cada festa em uma experiência gastronômica única,
                    desde opções saudáveis e deliciosas até iguarias indulgentes que certamente 
                    farão todos os convidados sorrir.
                </p>
            </div>

            <div class="table-container">
                <table class="table table-bordered table-striped mx-auto">
                    <thead class="bg-green-200">
                        <th class="border-l border-t border-r">Opções</th>
                        <th class="border-l border-t border-r">Comidas</th>
                        <th class="border-l border-t border-r">Bebidas</th>
                    </thead>
                    <tbody>
                        @foreach($foods as $food)
                            <tr>
                                <td class="border-l border-r">{{ $food->name }}</td>
                                <td class="border-l border-r">{!! $food->body !!}</td>
                                <td class="border-l border-r">{!! $food->drink !!}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </main>

        <!-- Rodapé -->
        <footer>
            <div class="footerLeft">
                <p>Casa do Confete</p>
                <p>Rua das Flores, 456</p>
                <p>Bairro do Bosque</p>
                <p>CEP: 12345-678</p>
                <p>Cidade Serena, Estado Tranquilo</p>
            </div>

            <div class="footerRight">
                <p>Contate-nos: contato@casadoconfete.com.br</p>
                <p>©Copyright 2023 - Casa do Confete, Todos os direitos reservados</p>
            </div>
        </footer>
    </body>
    </html>
</x-app-layout>