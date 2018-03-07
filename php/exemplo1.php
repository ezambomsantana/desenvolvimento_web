<?php session_start(); ?>
<html>
    <head>
        <title></title>
    </head>
    <body>

    <form>
		<fieldset>
			<legend>
				Nova tarefa
			</legend>
			<label>
				Tarefa:
				<input type="text" name="nome" />
			</label>
			<input type="submit" value="Cadastrar" />
		</fieldset>
	</form>	

		<?php


			if (array_key_exists('nome', $_GET)) {
				echo "oi";
				$_SESSION['lista'][] = $_GET['nome'];
			}

			$lista_tarefas = [];
			if (array_key_exists('lista', $_SESSION)) {
				$lista_tarefas = $_SESSION['lista'];
			}
		?>


		<table>
			<?php foreach ($lista_tarefas as $tarefa) { ?>
				<tr>
					<td><?php echo $tarefa; ?></td>
				</tr>
			<?php } ?>

		</table>

    </body>
<html>
