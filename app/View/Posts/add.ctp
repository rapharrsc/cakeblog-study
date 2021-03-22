<h1>Adicionar Postagem</h1>

<p>
	<!--<?php  echo $this->Html->link('Cancelar','/posts',array('class'=>'btn btn-danger','controller'=>'posts','type'=>'button'));?>-->
</p>

<?php


echo $this->Form->create('Post');
echo $this->Form->input('title',array(
	'type'=>'text',
	'class'=>'form-control',
	'placeholder'=>'Título',
	'required'=>'Necessário preencher este campo',
	'label'=>array('text'=>'Título', 'class'=>'form-label')));
echo '<br>';
echo $this->Form->input('body',array('class'=>'form-control','rows'=>'3','required'=>'Necessário preencher este campo'));
echo '<br>';

echo 
$this->Html->div('d-flex flex-row-reverse bd-highlight',
	$this->Html->div('p-2 bd-highlight').
	$this->Form->button('Salvar',array('type'=>'submit','class'=>'btn btn-primary')).
	$this->Html->tag('span','&nbsp&nbsp').
	$this->Html->link('Cancelar', '/posts', array('class'=>'btn btn-danger align-self-end','controller'=>'posts','action'=>'index')));
	?>
