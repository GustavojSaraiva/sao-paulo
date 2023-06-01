
<!DOCTYPE html>
<!-- form_alteracao.html -->
<?php
 $id = $_GET["id"];
 $curso = urldecode($_GET["curso"]);
 $nr_carga_horaria = urldecode($_GET["nr_carga_horaria"]);
 $dt_inicio = urldecode($_GET["dt_inicio"]);
?>

<html>
	<head>
	  <title>Cadastro de curso</title>
	  <meta charset="utf-8">
	</head>
	<body>
		<h1>Atualizar curso</h1>
		<form action="alteracao_curso.php" 
		      method="GET">
			<label for="id_curso">
			Curso:
			</label>
			<input type="hidden" name="id" value="<?php echo $id;?>">
			<input type="text" name="curso" id="id_curso" value="<?php echo $curso;?>">
			<br>
                        <label for="id_carga_horaria">
			Carga Horária
			</label>
			<input type="text" name="nr_carga_horaria"
                               id="id_carga_horaria" value="<?php echo $nr_carga_horaria;?>">
			<br>
                        <label for="id_dt_inicio">
			Data Início
			</label>
                        <input type="date" name="dt_inicio" 
                               id="id_dt_inicio" value="<?php echo $dt_inicio;?>">
			<br>
			<input type="submit" value="Ok">
		</form>
	</body>
</html>