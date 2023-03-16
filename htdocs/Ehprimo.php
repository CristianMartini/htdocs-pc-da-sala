
<!DOCTYPE HTML>
<?php
	function eh_primo($numero){
		if ($numero <2) return False;
		for ($i =2; $i < sqrt($numero);$i++){
		if($numero % $i == 0) return False;
		}
		return True;
	}
	?>
<html>
	<head>
		<title>numeros Primos.</title>
	</head>
	<body>
		<h1>Numeros primos de 1  ate 1000</h1>
		<ul>
			<?php 
			for ($i =1 ; $i <=1000; $i ++){
			if (eh_primo($i))echo  "<li>".$i. "</li>";
			}
			?>
		</ul>
	</body>
</html>