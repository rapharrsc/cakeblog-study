<h1>Editar Postagem</h1>

<?php
echo 
$this->Form->create('Post');
echo 
$this->Html->div('container',$this->Html->div('mb-3').
	$this->Form->input('title',array('class'=>'form-control','label'=>array('text'=>'Título','class'=>'form-label'))).
	$this->Html->div('mb-3').
	$this->Html->tag('br').
	$this->Form->input('body',array('class'=>'form-control','rows'=>'3','label'=>array('text'=>'Corpo','class'=>'form-label')))
);

echo 

$this->Html->div('d-flex flex-row-reverse bd-highlight',
	$this->Html->div('p-2 bd-highlight').
	$this->Form->button('Salvar',array('type'=>'submit','class'=>'btn btn-primary')).
	$this->Html->tag('span','&nbsp&nbsp').
	$this->Html->link('Cancelar', '/posts', array('class'=>'btn btn-danger align-self-end','controller'=>'posts','action'=>'index')));

	?>