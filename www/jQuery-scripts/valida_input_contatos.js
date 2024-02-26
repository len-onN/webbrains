$(document).ready(function() {
    $('form').submit(function(e) {
        e.preventDefault();

        var isValid = true;
        $('#validate').empty();

        var nome = $('input[name="nome"]').val().trim();
        if (nome === '') {
            isValid = false;
            $('<p class="error">Por favor, digite seu nome</p>').appendTo('#validate');
        }

        var email = $('input[name="email"]').val().trim();
        var emailRegex = /^[^\s@]+@[^\s@]+\.(com)$/;
        if (email === '' || !emailRegex.test(email)) {
            isValid = false;
            $('<p class="error">Por favor, digite um email válido</p>').appendTo('#validate');
        }

        var telefone = $('input[name="telefone"]').val().trim();
        var telefoneRegex = /^\d{11,14}$/;
        if (telefone === '' || !telefoneRegex.test(telefone)) {
            isValid = false;
            $('<p class="error">Por favor, digite um telefone válido</p>').appendTo('#validate');
        }

        var mensagem = $('textarea[name="mensagem"]').val().trim();
        if (mensagem === '') {
            isValid = false;
            $('<p class="error">Por favor, digite sua mensagem</p>').appendTo('#validate');
        }

        if (isValid) {
            $.ajax({
                type: 'POST',
                url: 'registro_de_usuarios.php',
                data: $('form').serialize(),
                success: function(response) {
                    $('#validate').html(response);
                }
            });
        }
    });
    
    $('input, textarea').on('input', function() {
        $('#validate').empty();
    });
});
