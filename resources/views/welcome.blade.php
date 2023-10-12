<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home - Casa do Confete</title>
</head>

<body>
    <!-- Cabeçalho -->
    <header>
        <ul>
            <li>Home</li>
            <li>Sobre</li>
            <li>Cardápio</li>
            <li>Login</li>
            <li>Cadastro</li>
        </ul>
    </header>

    <!-- Título -->
    <div id="title">
        <div class="topBand">
            <h1>Casa do Confete</h1>
        </div>

        <img src="{{ URL::asset('images/header.png') }}" alt="Imagem de capa">

    </div>

    <!-- Corpo principal da página -->
    <main>
        <div class="mainTitle">
            <h2>A maior festa infantil do mundo!!</h2>
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
                <p>Confira nossos cardápios</p>     <!-- Link para a página 'Cardápios' -->
            </figcaption>
        </figure>
    </main>

    <!-- Avaliações dos clientes -->
    <div class="mainTitle">
        <h2>Avaliações de Clientes</h2>
    </div>
    <div class="score">
        <h3>Ana G.</h3>
        <p>
            "A Casa do Confete tornou o aniversário do meu filho uma experiência inesquecível! A equipe foi incrível, a decoração estava 
            deslumbrante, e as crianças se divertiram muito. Mal podemos esperar para a próxima festa!"
        </p>

        <h3>Luís F.</h3>
        <p>
            "Eu não poderia estar mais satisfeito com a Casa do Confete. Eles cuidaram de todos os detalhes da festa do meu filho, desde a 
            seleção do tema até a comida deliciosa. Foi uma celebração sem preocupações, e as crianças adoraram."
        </p>

        <h3>Juliana M.</h3>
        <p>
            "A Casa do Confete fez um trabalho excepcional na festa da minha filha. A decoração era mágica, o entretenimento cativante, e a 
            equipe muito atenciosa. Minha filha e seus amigos tiveram o melhor dia de todos!"
        </p>

        <h3>Mariana S.</h3>
        <p>
            "Minha filha teve o aniversário dos seus sonhos na Casa do Confete. A equipe fez um trabalho incrível, e a festa superou todas 
            as expectativas. Estou muito grata pela dedicação e profissionalismo."
        </p>
    </div>

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