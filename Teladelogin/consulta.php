<?php
session_start();
include('verificar_login.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<title>Acesso ao Banco</title>
</head>
<body class="fadeIn">
<div>
		<p class="flu">Olá, <?php echo $_SESSION['usuario']; ?> &nbsp <span size="17">|</span> &nbsp <a href="logout.php" class="lk">Sair</a>&nbsp </p>
		</div>
	<div class="relacao">
		<form method="POST" action="consulta.php"><span>&nbsp</span>
		<input type="text" class="consu" name="consulta"/ > <input type="submit" name="enviar" value="Consultar" />
		</form>
		<?php 
		include('testedeconexao.php');
		$consulta = $_POST['consulta'];

		$query = "SELECT usuario_id, usuario FROM usuario WHERE usuario like '$consulta%'";
		$res = mysqli_query($conexao, $query);

		echo "<table id='customers'>";
		echo ' <tr>';
		echo ' <th> ID </th>';
		echo ' <th> USUARIO </th>';
		echo ' </tr>';
		
		while ($reg = mysqli_fetch_assoc($res)) {
			echo "<tr>";
			echo '<td>'.$reg["usuario_id"].'</td>';
			echo '<td>'.$reg["usuario"].'</td>';
			echo "</tr>";
		}
		echo "</table>";

		?>
	</div>
	
</body>
</html>