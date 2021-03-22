<!-- Bootstrap -->
<html lang="pt">
<head>
	<?php echo $this->Html->charset(); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Postagens</title>
	<!-- Bootstrap core CSS -->
	<?php 
	echo $this->Html->css('bootstrap.min.css'); 
	echo $this->Html->css('starter-template.css');
	echo $this->Html->css('fontawesome.min.css');
	?>

</head>
<body>

	<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">Blog</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarsExampleDefault">
				<ul class="navbar-nav me-auto mb-2 mb-md-0">
					<li class="nav-item">
						<?php 
						echo $this->Html->link('Postagens', '/posts', array('class' => 'nav-link'));	
						?>
					</li>
					<li class="nav-item">
						<?php 
						echo $this->Html->link('Adicionar postagem', '/posts/add', array('class' => 'nav-link', 'controller'=>'posts'));	
						?>
					</li>
					<li class="nav-item">
						<?php 
						echo $this->Html->link('Teste', '/posts', array('class' => 'nav-link disabled'));	
						?>
					</li>

					<!--<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
						<ul class="dropdown-menu" aria-labelledby="dropdown01">
							<li><a class="dropdown-item" href="#">Action</a></li>
							<li><a class="dropdown-item" href="#">Another action</a></li>
							<li><a class="dropdown-item" href="#">Something else here</a></li>
						</ul>
					</li>-->

					<!--<?php

						//Menu Dropdown - Primeira tentativa
						$lista = array(

							$this->Html->link('Action', '#' ,array('class'=>'dropdown-item')),
							$this->Html->link('Another action', '#' ,array('class'=>'dropdown-item')),
							$this->Html->link('Something else here', '#' ,array('class'=>'dropdown-item')),
						);
						echo $this->Html->nestedList($lista,array('class'=>'dropdown-menu'),array('class'=>'dropdown-item'),'ul');
						
						//Menu Dropdown - Segunda tentativa
						echo $this->Html->tag('li',array('class'=>'nav-item dropdown',
							$this->Html->link('','#',array('class'=>'nav-link dropdown-toggle','data-bs-toggle'=>'dropdown'))).$this->Html->tag('ul',array('class'=>'dropdown-menu'),$this->Html->nestedList($lista)));
							?>-->	
						</ul>
					</div>
				</div>
			</nav>

			<main role="main" class="container">
				<?php echo $this->Flash->render(); 

				echo $this->fetch('content'); ?>
			</main>

			<?php
			echo $this->Html->script('jquery-3.6.0.min.js');
			echo $this->Html->script('bootstrap.bundle.min.js');
			echo $this->Html->script('fontawesome.min.js');
			?>
		</body>
		</html>
