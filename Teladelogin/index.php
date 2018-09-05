<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<title>Sistema da BlackXipher</title>
	<script type="text/javascript">
		function att(){
			window.alert ('Usuário não autenticado!') 
		}
	</script>
</head>
<body class="fadeIn">
	<div class="box">
		<p>Tela de Login</p>
		<form method="POST" action="validar.php">
			<label class="lb">Login: <br></label><input value="" type="text" name="usuario"  /><br>
			<label class="lb">Senha: <br></label><input value="" type="password" name="senha"  /><br>
			<input type="submit" value="Logar" class="btv" /><br>
		</form>
		<?php  
		if (isset($_SESSION['nao_autenticado'])):
			?>

			<script>att();</script>
			
			<?php  
		endif;
		?>
	</div>
</body>
</html>