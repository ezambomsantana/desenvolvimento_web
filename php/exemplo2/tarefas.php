<?php session_start(); 

if (array_key_exists('nome', $_GET)) {
	$_SESSION['lista'][] = $_GET['nome'];
}

$lista_tarefas = [];
if (array_key_exists('lista', $_SESSION)) {
	$lista_tarefas = $_SESSION['lista'];
}

include "template.php";

?>
