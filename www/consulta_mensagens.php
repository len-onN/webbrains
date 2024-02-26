<?php
include 'db.php';

try {
    $stmt = $conn->query("SELECT u.nome, u.email, u.telefone, m.created_at, m.mensagem_lida, m.mensagem
                          FROM usuarios u
                          INNER JOIN mensagens m ON u.id = m.user_id
                          ORDER BY m.created_at DESC");

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($result);
} catch (PDOException $e) {
    echo "Erro ao obter mensagens: " . $e->getMessage();
}
?>
