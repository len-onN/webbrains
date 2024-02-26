<!DOCTYPE html>
<html>
<head>
    <title>Contato</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="style/pagina_contato.css" rel="stylesheet">
</head>
<body>
    <div class="container custom-container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <form method="post">
                    <h2 class="mt-2 mb-2">Contato:</h2>
                    <div class="mb-3">
                        <label for="wpp" class="form-label">Whatsapp:</label>
                        <div id="wpp" class="border text-center rounded p-3 mb-3">
                            <a class="ml-auto linkwpp" href="https://wa.me/5548991894646">
                                <img class="wpp" src="whatsapp-svgrepo-com.svg" alt="Ícone do WhatsApp" style="width: 44px; height: 44px;">
                            </a>
                        </div>
                        <div>
                            <label for="nome" class="form-label">Nome: </label>
                            <input id="nome" class="form-control" name="nome" type="text" placeholder="Digite seu nome">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email: </label>
                        <input id="email" class="form-control" name="email" type="email" placeholder="Digite seu e-mail">
                    </div>
                    <div class="mb-3">
                        <label for="telefone" class="form-label">Telefone: </label>
                        <input id="telefone" class="form-control" name="telefone" type="tel" placeholder="Digite seu telefone. Ex: (89) 9394-23-23">
                    </div>
                    <div class="mb-3">
                        <label for="mensagem" class="form-label">Mensagem: </label>
                        <textarea id="mensagem" class="form-control" name="mensagem" placeholder="Digite sua mensagem"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
                    </div>
                    <div id="validate" class="mt-3"></div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./jQuery-scripts/valida_input_contatos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
