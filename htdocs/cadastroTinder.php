<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>Tinder</h1>
<form  method="post" action="tinder.php">
    <div>
        <label for="nome">Nome </label>
        <input type="text" name="nome" id="cnome" required>
    </div>
    <div>
    <label for="nickname">Nickname</label>
        <input type="text" name="nickname" id="cnickname" required >
    </div>
    <div>
    <label for="nascimento">Data de nascimento</label>
        <input type="date" name="nascimento" id="cdate" required >
    </div>
    <div>
    <label for="foto">Url da foto</label>
        <input type="url" name="foto" id="cfoto" required >
    </div>
    <div>
    <label for="bio">Digite sua biografia</label>
        <input type="textarea" name="bio" id="cbio" required >
    </div>
    <div>
     <label for="genero">Genero</label>
        <select id="genero"  value="Digite ">
            <option value=""> Selecione</option>
            <option value="masculino"> Masculino</option>
            <option value="femenino"> Femenino</option>
        </select>
    </div>
    </form>
    <br>
    <button type="submit" >Cadastrar</button>
</body>
</html>
