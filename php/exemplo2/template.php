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
			</label>s
			<input type="submit" value="Cadastrar" />
		</fieldset>
	</form>	

	<table>
		<?php foreach ($lista_tarefas as $tarefa) { ?>
			<tr>
				<td><?php echo $tarefa; ?></td>
			</tr>
		<?php } ?>
		</table>
    </body>
<html>
