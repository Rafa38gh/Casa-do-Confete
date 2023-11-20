<x-app-layout>
<!DOCTYPE html>
<html lang="pt">
<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home - Casa do Confete</title>
</head>

<body>
    <!-- Título -->
    <figure class="titleLeft">
        <img src="{{ URL::asset('images/festa-infantil.png') }}" alt="Imagem de capa">
        <figcaption>
            <h1>Casa do Confete</h1>
            <h3>Festas Infantis</h3>
        </figcaption>
    </figure>

    <div class="lower"></div>
    <!-- Corpo principal da página -->
    <main>
        <div class="mainTitle">
            <p>A maior festa infantil do mundo!!</p>
            <p>Uma experiência mágica</p>
        </div>

        <figure class="figLeft">
            <img src="{{ URL::asset('images/home-img1.png') }}" alt="Fachada do buffet">
            <figcaption>
                <h3>Infraestrutura Excepcional</h3>
                <p>
                    A Casa do Confete é um lugar onde a imaginação se torna realidade. 
                    Com uma infraestrutura cuidadosamente projetada, oferecemos salões amplos, 
                    áreas de recreação seguras e decoração temática de tirar o fôlego. Aqui, cada 
                    detalhe foi planejado para criar um ambiente que cativa tanto crianças quanto adultos.
                </p>
            </figcaption>
        </figure>

        <figure class="figRight">
            <img src="{{ URL::asset('images/home-img2.png') }}" alt="Área interna do buffet">
            <figcaption>
                <h3>Organização Sem Estresse</h3>
                <p>
                    Sabemos que planejar uma festa infantil pode ser desafiador. Na Casa do Confete, tiramos o 
                    estresse do seu caminho. Desde a decoração até o entretenimento, nossa equipe altamente profissional 
                    cuidará de tudo para que você possa relaxar e aproveitar o dia ao máximo.
                </p>
            </figcaption>
        </figure>

        <figure class="figLeft">
            <img src="{{ URL::asset('images/home-img3.png') }}" alt="Mesa de festa com bolo">
            <figcaption>
                <h3>Os Melhores Quitutes</h3>
                <p>
                    Uma festa não está completa sem a comida. Oferecemos diferentes opções de cardápios para você escolher 
                    o que realmente se encaixa com a sua festa. Basta selecionar seus pratos favoritos e nossa equipe de chefs 
                    renomados cuidará do resto.
                </p>
                <p class="link"><a href="/cardapio">Confira nossos cardápios</a></p>
            </figcaption>
        </figure>
    </main>

    <!-- Avaliações dos clientes -->
    <div class="mainTitle">
        <p>Avaliações de Clientes<p>
    </div>
    <div class="score">
        <div class="item">
            <h3>Ana G.</h3>
            <p>
                "A Casa do Confete tornou o aniversário do meu filho uma experiência inesquecível! A equipe foi incrível, a decoração estava 
                deslumbrante, e as crianças se divertiram muito. Mal podemos esperar para a próxima festa!"
            </p>
        </div>
        <div class="item">
            <h3>Luís F.</h3>
            <p>
                "Eu não poderia estar mais satisfeito com a Casa do Confete. Eles cuidaram de todos os detalhes da festa do meu filho, desde a 
                seleção do tema até a comida deliciosa. Foi uma celebração sem preocupações, e as crianças adoraram."
            </p>
        </div>
        <div class="item">
            <h3>Juliana M.</h3>
            <p>
                "A Casa do Confete fez um trabalho excepcional na festa da minha filha. A decoração era mágica, o entretenimento cativante, e a 
                equipe muito atenciosa. Minha filha e seus amigos tiveram o melhor dia de todos!"
            </p>
        </div>
        <div class="item">
            <h3>Mariana S.</h3>
            <p>
                "Minha filha teve o aniversário dos seus sonhos na Casa do Confete. A equipe fez um trabalho incrível, e a festa superou todas 
                as expectativas. Estou muito grata pela dedicação e profissionalismo."
            </p>
        </div>
    </div>

    <!-- Rodapé -->
    <footer class="footerWelcome">
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