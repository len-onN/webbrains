<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $mensagem = $_POST["mensagem"];
    
    $errors = [];

    if (empty($nome)) {
        $errors[] = "O campo nome é obrigatório";
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Por favor, insira um e-mail válido";
    }

    if (empty($telefone) || !preg_match('/^\d{11,14}$/', $telefone)) {
        $errors[] = "Por favor, insira um número de telefone válido (entre 11 e 14 dígitos)";
    }

    if (empty($mensagem)) {
        $errors[] = "O campo mensagem é obrigatório";
    }

    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo '<p class="error">' . $error . '</p>';
        }
    } else {
        include 'db.php';

        try {
            $stmt = $conn->prepare("SELECT id FROM usuarios WHERE email = :email");
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$row) {
                $stmt = $conn->prepare("INSERT INTO usuarios (nome, email, telefone) VALUES (:nome, :email, :telefone)");
                $stmt->bindParam(':nome', $nome);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':telefone', $telefone);
                $stmt->execute();
                $userId = $conn->lastInsertId();
            } else {
                $userId = $row['id'];
            }

            $stmt = $conn->prepare("INSERT INTO mensagens (user_id, mensagem) VALUES (:userId, :mensagem)");
            $stmt->bindParam(':userId', $userId);
            $stmt->bindParam(':mensagem', $mensagem);
            $stmt->execute();

            echo "Mensagem enviada com sucesso!";
        } catch (PDOException $e) {
            echo "Erro ao enviar mensagem: " . $e->getMessage();
        }
    }
} else {
    header("Location: index.php");
    exit;
}
?>
