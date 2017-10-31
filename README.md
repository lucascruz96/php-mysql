# PHP e MySQL

# Como usar

Se você já possui um servidor web que interprete php e uma conexão com o banco de dados MySQL. Altere as configurações de conexão em src/conexao.php e no MySQL importe o arquivo .data/tmp/teste.sql para criar as tabelas necessárias

Se você não possui um servidor web com uma conexão com bancod e dados MySQL, recomendamos que instaleo [Docker](https://store.docker.com/editions/community/docker-ce-desktop-windows) e execute os passos adiante para ter sua aplicação funcionando:

* Na pasta do projeto, execute ``docker-compose up -d`` para levantar os seviços
