<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Blog Administração</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/estilo.css') ?>">
	
</head>
<body>
	<nav class="navbar">
		<?php 
			echo anchor(base_url(),"Home");
			echo anchor(base_url('postagens'),"Postagem");
			echo anchor(base_url('fale_conosco'),"Fale Conosco");
			echo anchor(base_url('postagens/logout'),"Logout");
		?>
	</nav>