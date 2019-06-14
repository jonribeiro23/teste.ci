<div class="row my-5">
	<div class="col-2"></div>
	<div class="col">
		<form action="<?= base_url('postagens/salvar_alteracao/'.$postagem[0]->id_postagem) ?>" method="post">
			<input type="hidden" name="id_postagem" value="<?= $postagem[0]->id_postagem ?>">
			<input class="my-3 form-control" type="text" name="titulo_postagem" value="<?= $postagem[0]->titulo_postagem ?>">
			<textarea id="txt-alterar" class="my-3 form-control" name="texto_postagem"><?= $postagem[0]->texto_postagem ?></textarea>
			<button class="my-3 btn-centralizar btn btn-info" type="submit">Salvar alterações</button>
		</form>
	</div>
	<div class="col-2"></div>
</div>