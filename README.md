# Desafio Web Brain ->

## Documentação ->

### Desenvolver uma página para contato, contendo nome, telefone, email, mensagem e link para o whatsapp. Cada campo de entrada de dados do formulário deverá ser devidamente validado

### Rodando o projeto ->

#### Para rodar o projeto, certifique-se de ter o Docker instalado no pc. Uma vez instalado, no terminal, a partir da raiz do projeto, executar o seguinte comando ->

```bash
    docker-compose up -d
```

#### Uma vez que os conteiners estejam prontos, para acessar a página de contato, basta acessar no navegador através da seguinte url ->

```bash
    http://docker.localhost:8080/
```

#### Para visualizar as mensagens, basta acessar a seguinte url ->

```bash
    http://docker.localhost:8080/exibe_mensagens.php/
```

### Atenção: o banco de dados estará acessível através da porta 3307

#### Tecnologias utilizadas ->

- Front-end - Bootstrap, jQuery, CSS;
- Back-end - PHP 8-fpm (PDO), ngnix, MySQL 8;
