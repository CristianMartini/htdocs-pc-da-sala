

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
function Testar($verifica) {
    if (isset($_GET[$verifica])) {
        return $_GET[$verifica];
    }
    else {
        return 'nao informado';
    }
}
?>
</head>
<body>
    


<h1>Voce digitou isto</h1>
<div> Seu email = <?php echo Testar("email"); ?>.</div>
<div> Seu telefone = <?php echo Testar("telefone"); ?>.</div>
<div> Seu endereço = <?php echo Testar("endereço"); ?>.</div>

</body>
</html>









<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Voce digitou isto</h1>
<div> Seu email = <?php echo $_POST["email"]; ?>.</div>
<div> Seu telefone = <?php echo $_POST["telefone"]; ?>.</div>
<div> Seu endereço = <?php echo $_POST["endereço"]; ?>.</div>

</body>
</html> -->



