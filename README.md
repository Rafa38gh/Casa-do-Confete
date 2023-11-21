# Casa do Confete - Website

Olá, seja bem-vindo ao repositório do website Casa do Confete.
Aqui iremos explicar o passo-a-passo para o setup do projeto.

# Requerimentos

1. Docker: https://www.docker.com/
2. Node.js: https://nodejs.org/en
3. MySQL Workbench: https://www.mysql.com/products/workbench/
4. Visual Studio Code: https://code.visualstudio.com/

# Tutorial
1. Abra o aplicativo do Docker e o MySQL Workbench

2. Abra o prompt de comando do seu computador.

3. Navegue para o diretório desejado
```sh
cd {caminho-do-diretoria}
```

4. Clone os repositório
```sh
git clone https://github.com/Rafa38gh/Casa-do-Confete.git
```

5. Após clonar o repositório, navegue para os arquivos do projeto
```sh
cd Casa-do-Confete
```

6. Abra o projeto no VS Code
```sh
code .
```

7. Abra o terminal do VS Code: Ctrl + J

8. No terminal, crie o arquivo .env
```sh
cp .env.example .env
```

9. Suba os containeres do projeto
```sh
docker-compose up -d
```

10. Enquanto sobe os containeres, inicie um novo terminal: Ctrl+Shift+'

11. No novo terminal, instale o npm
```sh
npm install
```

12. Após instalado o npm, rode o comando
```sh
npm run dev
```

13. Volte para o terminal onde subiu os containeres do Docker

14. Acesse o bash do container
```sh
docker-compose exec app bash
```

15. Instale o composer
```sh
composer install
```

16. Após instalado o composer, gere a key do projeto
```sh
php artisan key:generate
```

17. Suba as migrations
```sh
php artisan migrate
```

18. Rode os seeders
```sh
php artisan db:seed
```

19. Acesse o site: http://localhost:8989

20. Aproveite :)


