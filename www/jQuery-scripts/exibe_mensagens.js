$(document).ready(function() {
    $.ajax({
        type: 'GET',
        url: 'consulta_mensagens.php',
        success: function(response) {
            let mensagemDiv = $('#mensagens');
            let parsed_data = JSON.parse(response);

            if (parsed_data.length > 0) {
                mensagemDiv.empty();

                parsed_data.forEach(function(user) {
                    let userDiv = $('<div class="user border m-4 p-4"></div>');

                    userDiv.click(function() {
                        $(this).toggleClass('expanded');
                    });

                    $('<p><strong>Nome: </strong> ' + user.nome + '</p>').appendTo(userDiv);

                    let detalhesDiv = $('<div class="detalhes"></div>');
                    $('<p><strong>Email: </strong> ' + user.email + '</p>').appendTo(detalhesDiv);
                    $('<p><strong>Telefone: </strong> ' + user.telefone + '</p>').appendTo(detalhesDiv);
                    $('<p><strong>Mensagem: </strong>' + user.mensagem + '</p>').appendTo(detalhesDiv);
                    detalhesDiv.appendTo(userDiv);
                    
                    userDiv.appendTo(mensagemDiv);
                    if (user.mensagem_lida === "0") {
                        userDiv.addClass('mensagem-nao-lida');
                    };
                });
            } else {
                mensagemDiv.html('<p class="m-3">Sem mensagens recebidas.</p>');
            }
        },
        error: function(xhr, status, error) {
            console.error('Erro ao obter mensagens:', error);
        }
    });
});
