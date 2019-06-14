
<div class="container">
	<h1>Novas postagens</h1>
	<div class="row mt-5">
		<div class="col-2"></div>
		<div class="col">
			<form method="post" action="<?= base_url('postagens/adicionar') ?>">
				<label for="txt_titulo">Título</label>
				<input class="form-control" type="text" name="txt_titulo" id="txt_titulo">
				<label for="txt_post">Texto</label>
				<textarea class="form-control" name="txt_post" id="txt_post"></textarea>
				<input class="my-3 btn-centralizar btn btn-success" type="submit" name="enviar" value="Postar" >
			</form>
		</div>
		<div class="col-2"></div>
	</div>

	<div class="row">
		<table class="table">
			<thead>
				<tr>
					<th>Titulo</th>
					<th>Data</th>
					<th>Ação</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($postagens as $p){ ?>
				<tr>
					<td><?= $p->titulo_postagem ?></td>
					<td><?= date("d/m/Y", strtotime($p->data_postagem)) ?></td>
					<td>
						<a class="mx-4" href='<?= "postagens/excluir/".$p->id_postagem ?>'>Excluir</a>
						<a class="mx-4" href='<?= "postagens/alterar/".$p->id_postagem ?>'>Alterar</a>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>
