<!DOCTYPE html>
<html>
<head>
	<title>Mensagem do dia</title>
</head>
<body>
	<?php
		if(isset($_POST['dia'])) {
			$dia = $_POST['dia'];

			if($dia == 'segunda-feira') {
				echo "<h1>DD+CMS</h1>";
			}
			else if($dia == 'terça-feira') {
				echo "<h1>Banco de dados</h1>";
			}
			else if($dia == 'quarta-feira') {
				echo "<h1>ATÉ SEXTA-FEIRA</h1>";
			}
			else if($dia == 'quinta-feira') {
				echo "<h1>Projeto integrador</h1>";
			}
			else if($dia == 'sexta-feira') {
				echo "<h1>VAMOS VALIDAR OS FORMS COM JAVASCRIPT DAQUI HÁ DOIS DIAS</h1>";
			}
			else if($dia == 'sábado') {
				echo "<h1>Cerveja e churrasco</h1>";
			}
			else if($dia == 'domingo') {
				echo "<h1>Netflix</h1>";
			}
			else {
				echo "<h1>Dããh, era para digitar um dia da semana</h1>";
				echo "<a href='post_form4.php'>Voltar</a>";
			}
		}
	?>
</body>
</html>
