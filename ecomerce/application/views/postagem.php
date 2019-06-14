
	<div class="container">
		<!-- EXIBINDO TODAS AS POSTAGENS -->
		<h1>Meu Blog</h1>
		<!--<table class="table table-hover">
			<thead>
				<tr>
					<th>Id</th>
					<th>Titulo</th>
					<th>Texto</th>
					<th>Data</th>
				</tr>
			</thead>
			<tbody>
				<?php// foreach($postagem as $p){ ?>
				<tr>
					<td><?= $p->id_postagem ?></td>
					<td><?= $p->titulo_postagem ?></td>
					<td><?= $p->texto_postagem ?></td>
					<td><?= $p->data_postagem ?></td>
				</tr>
				<?php// } ?>
			</tbody>
		</table>
		<br class="my-4"> -->
		
		<!-- CRIANDO UM LINK PARA ABRIR UMA POSTAGEM EM OUTRA PÁGINA -->
		<h2>Segundo teste</h2>
		<h3>Postagens Recentes</h3>

		<?php 
			foreach($postagem as $p){
				//$lista_urls[] = anchor(base_url("welcome/detalhes/".$p->id_postagem),$p->titulo_postagem);
				//Url amigável abaixo e completa acima
				$lista_urls[] = anchor(base_url("detalhes/".$p->id_postagem),$p->titulo_postagem);
			}
			echo ul($lista_urls);
		?>
	</div>
