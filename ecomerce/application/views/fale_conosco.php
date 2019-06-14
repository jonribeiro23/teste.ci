<div class="container">
<?php 

	heading('Meu Blog',2);
	heading('Fale Conosco',3);
	$atributos = array(
		'name'=> 'formulario_contato',
		'id' => 'formulario_contato'
	);
	echo form_open(base_url('welcome/enviar_mensagem'),$atributos).
		 form_label('Nome: ','txt_nome') . br() .
		 form_input('txt_nome') . br() .
		 form_label('Email', 'txt_email') . br() .
		 form_input('txt_email') . br() .
		 form_label('Mensagem', 'txt_mensagem') . br() .
		 form_textarea('txt_mensagem') . br() .
		 form_submit('btn_enviar','Enviar Mensagen') . 
		 form_close();
?>
</div>