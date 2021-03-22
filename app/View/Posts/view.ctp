<?php
$tituloPostagem = $post['Post']['title'];
$corpoPostagem = $post['Post']['body'];
$criacaoPostagem = $post['Post']['created'];

echo 
$this->Html->div('container',
	$this->Html->div('row',
		$this->Html->div('col-sm-12',
			$this->Html->div('card',
				$this->Html->div('card-body').
				$this->Html->tag('h5', $tituloPostagem, array('class'=>'display-4')).
				$this->Html->tag('br').
				$this->Html->tag('p',$corpoPostagem,array('class'=>'card-text')).
				$this->Html->tag('br').
				$this->Html->tag('small',$criacaoPostagem,array('class'=>'form-text')).
				$this->Html->tag('br').
				$this->Html->div('d-flex flex-row-reverse bd-highlight',
					$this->Html->div('p-2 bd-highlight').
					$this->Html->link('Voltar','/posts',array('class'=>'btn btn-primary')).
					$this->Html->tag('span','&nbsp&nbsp').
					$this->Html->link('Editar','/posts/edit/' . $post['Post']['id'],array('class'=>'btn btn-outline-primary')).
					$this->Html->tag('span','&nbsp&nbsp').
					$this->Form->postLink('Deletar',array('action'=>'delete',$post['Post']['id']),array('class'=>'btn btn-danger','controller'=>'posts'),_('Tem certeza?'))
				)
			))));
			?>