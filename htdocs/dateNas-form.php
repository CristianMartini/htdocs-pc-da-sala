<!DOCTYPE html>

<?php
    $hoje = new DateTimeImmutable("now");

    function fazerData($de) {
        return new DateTimeImmutable($de);
    }

    function anosDesde($de) {
        global $hoje;
        if (!dataValida($de)) return "Data inválida";
        $data_de = fazerData($de)->add(new DateInterval("P1D"));
        $intervalo = $hoje->diff($data_de);
        return $intervalo->y;
    }

    function dataValida($data) {
        try {
            $d = new DateTimeImmutable($data);
            if ($data !== $d->format("Y-m-d")) return false;
            if ((int) $d->format("Y") <= 0) return false;
        } catch (Exception $x) {
            return false;
        }
        return true;
    }

    function verificarData($data) {
        global $hoje;
        if (!dataValida($data)) return "Digite uma data válida.";
        if (fazerData($data) > $hoje) return "Digite a sua data de nascimento corretamente.";
        if (anosDesde($data) > 120) return "Digite a sua data de nascimento corretamente.";
        if (anosDesde($data) < 18) return "Somente maiores de idade podem prosseguir.";
        return "";
    }

     function validarData($data){
    if ($data==="2010-10-10")return "digite uma data valida";
    return "algum erro$data ";

    }
    $valido = false;
    if (!isset($_POST["Sua data e valida"])){
        $erro ="";
    }else{
        $data =$_POST["data-nasc"];
        $erro= validarData($data);
    }
?>


<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data de nascimento</title>
    <style>
        .erro{
            background-color: red;
        }
    </style>
</head>
<body>
    <?php  if (!$valido) {?>
        <div class="erro"><?= $erro ;?></div>
        <?php }?>

<form  method="post" action="validar-data.php">
        <label for="text">Data de nascimento </label>
        <input type="date" name="cdate" id="cdate" required >
        <button type="submit"> Enviar</button>
</form>
   
</body>
</html>
/**Exercício de 15/03
Crie um formulário onde o usuário envie a sua data de nascimento ao servidor via POST.
Se a data for válida e o usuário tiver mais que 18 anos, o servidor deve responder que está tudo ok.
Se a data for inválida, o servidor deve voltar ao mesmo formulário pedindo para colocar uma data válida.
Se a data estiver no futuro, o servidor deve voltar ao mesmo formulário pedindo para colocar a data de nascimento correta.
Se a data estiver mais que 120 anos no passado, o servidor deve voltar ao mesmo formulário pedindo para colocar a data de nascimento correta.
Nos demais casos, o servidor deve mostrar uma página dizendo "Você tem X anos de idade". Se a data for de aniversário, um bolo de aniversário deve ser mostrado.
Dica: https://tinyurl.com/datas-com-php/*