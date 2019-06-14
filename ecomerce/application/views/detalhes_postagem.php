
	<div class="container">
		<h1>Meu Blog</h1>
		<h2><?= $postagem_d[0]->titulo_postagem ?></h2>
		<p><?= $postagem_d[0]->texto_postagem ?></p>
		<p><?= $postagem_d[0]->data_postagem ?></p>
		<div class="row">
			
			<div class="col-1">
				<a id="detalhes" class="btn btn-info btn-centralizar" href="<?= base_url("") ?>">Voltar</a>
			</div>
			<div class="col"></div>
		</div>
	</div>
