<?php

// Inicia a sessão
session_start();

// Verifica se o formulário foi submetido
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    // Define as mensagens de erro
    $errors = array();
    $required_fields = array('nome', 'nickname', 'foto', 'nascimento', 'bio', 'genero');
    
    // Valida os campos obrigatórios
    foreach ($required_fields as $field) {
        if (empty($_POST[$field])) {
            $errors[$field] = 'Este campo é obrigatório.';
        }
    }
    
    // Valida a data de nascimento
    $nascimento = filter_input(INPUT_POST, 'nascimento', FILTER_VALIDATE_REGEXP, array(
        'options' => array('regexp' => '/^\d{2}\/\d{2}\/\d{4}$/')
    ));
    if (!$nascimento) {
        $errors['nascimento'] = 'Data de nascimento inválida.';
    }
    
    // Verifica se não houve erros de validação
    if (empty($errors)) {
        
        // Armazena os dados do usuário em uma variável
        $usuario = array(
            'nome' => $_POST['nome'],
            'nickname' => $_POST['nickname'],
            'foto' => $_POST['foto'],
            'nascimento' => $_POST['nascimento'],
            'bio' => $_POST['bio'],
            'genero' => $_POST['genero']
        );
        
        // Armazena os dados do usuário em uma "base de dados" (por enquanto apenas um array associativo)
        if (!isset($_SESSION['usuarios'])) {
            $_SESSION['usuarios'] = array();
        }
        $_SESSION['usuarios'][] = $usuario;
        
        // Redireciona o usuário para a página de busca de perfis
        header('Location: buscar_perfis.php');
        exit;
    }
    
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Usuário</title>
</head>
<body>
    
    <h1>Cadastro de Usuário</h1>
    
    <?php if (!empty($errors)): ?>
        <ul>
            <?php foreach ($errors as $error): ?>
                <li><?php echo $error; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    
    <form method="POST">
        
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="<?php echo htmlspecialchars($_POST['nome'] ?? ''); ?>">
        
        <label for="nickname">Nickname:</label>
        <input type="text" name="nickname" id="nickname" value="<?php echo htmlspecialchars($_POST['nickname'] ?? ''); ?>">
        
        <label for="foto">Foto:</label>
        <input type="text" name="foto" id="foto" value="<?php echo htmlspecialchars($_POST['foto'] ?? ''); ?>">
        
        <label for="nascimento">Data de Nascimento:</label>
        <input type="text" name="nascimento" id="nascimento" value="<?php echo htmlspecialchars($_POST['nascimento'] ?? ''); ?>">
        
        <label for="bio">Pequena Biografia:</label>
        <textarea name="bio" id=""
    
