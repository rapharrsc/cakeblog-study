<h1>Postagens</h1>
<p>
	<!--<?php echo $this->Html->link('Add blog',
	array('controller'=>'posts','action'=>'add')); ?>-->
</p>

<!--<?php print_r($posts); ?>-->

<table class="table">
	<thead class="table-dark">
		<tr>
			<th style="display: none">Id</th>
			<th>Título</th>
			<th>Ação</th>
			<th>Data de Criação</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($posts as $post): ?>
			<tr>
				<td style="display: none"><?php echo $post['Post']['id']; ?></td>
				<td><?php echo $this->Html->link($post['Post']['title'],array('controller'=>'posts','action'=>'view',$post['Post']['id'])); ?></td>
				<td>
					<?php 
						echo $this->Html->link('Editar',array('controller'=>'posts','action'=>'edit',$post['Post']['id']),array('class'=>'btn btn-primary')); 
						echo $this->Html->tag('span','&nbsp&nbsp');
						echo $this->Form->postLink('Deletar',array('action'=>'delete',$post['Post']['id']),array('class'=>'btn btn-danger','controller'=>'posts'),_('Tem certeza?')); 
					?>
				</td>
				<td><?php echo substr($post['Post']['created'],0,10); ?></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>