


<?php

// Inicia a sessão
session_start();

// Verifica se o formulário foi submetido
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    // Define as mensagens de erro
    $errors = array();
    $campo_obrigatorio = array('nome', 'nickname', 'foto', 'nascimento', 'bio', 'genero');
    
    // Valida os campos obrigatórios
    foreach ($campo_obrigatorio as $campo) {
        if (empty($_POST[$campo])) {
            $errors[$campo] = 'Este campo é obrigatório.';
        }
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
            'genero' => $_POST['genero']);
        }
    }

?>
</head>
<body>
<h1>Cadastro do tinder</h1>
<div> Nome = <?php echo $_POST("nome"); ?>.</div>
<div> Nickname = <?php echo $_POST("nickname"); ?>.</div>
<div> Data de nascimento = <?php echo $_POST("nascimento"); ?>.</div>
<div> Biografia = <?php echo $_POST("bio"); ?>.</div>
<div> Foto = <?php echo $_POST("foto"); ?>.</div>
<div> Genero = <?php echo $_POST("genero"); ?>.</div>
</body>
</html>