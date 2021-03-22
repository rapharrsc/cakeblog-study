<?php
App::uses('AppController','Controller');

class PostsController extends AppController{
	public $helpers = array('Html','Form','Session');
	public $components = array('Session');
	public $layout ='bootstrap';

	//----Index
	public function index(){
		$this->set('posts',$this->Post->find('all'));
	}
	//----View
	public function view($id=null)
	{
		if (!$id) {
			throw new NotFoundException(__('Postagem invalida'));
		}
		$post = $this->Post->findById($id);

		if (!$post) {
			throw new NotFoundException(__('Postagem invalida'));
		}

		$this->set('post',$post);
	}
	//----Add
	public function add()
	{
		if ($this->request->is('POST')) {
			$this->Post->create();
			if ($this->Post->save($this->request->data)) {
				$this->Session->setFlash(__(
					'Registro adicionado'));
				
				return $this->redirect(array('action'=>'index'));
			}
			$this->Session->setFlash(__('Erro ao adicionar postagem'));
		}
	}
	//----Edit
	public function edit($id = null)
	{
		if (!$id) {
			# code...
			throw new NotFoundException(__('Invalid post.'));
		}
		$post = $this->Post->findById($id);
		if (!$post) {
			# code...
			throw new NotFoundException("Erro ao processas requisição", 1);
		}
		if ($this->request->is(array('post','put'))) {
			# code...
			$this->Post->id = $id;
			if ($this->Post->save($this->request->data)) {
				# code...
				$this->Session->setFlash(__('Postagem atualizada'));
				return $this->redirect(array('action'=>'index'));
			}
			$this->Session(__('Erro ao atualizar postagem'));
		}
		if (!$this->request->data) {
			# code...
			$this->request->data = $post;
		}
	}
	//----Delete
	public function delete($id)
	{
		if ($this->request->is('GET')) {
			# code...
			throw new MethodNotAllowedException("Erro ao processas requisição", 1);			
		}
		if ($this->Post->delete($id)) {
			# code..
			$this->Session->setFlash(__('Índice %s deletado',h($id)));
			return $this->redirect(array('action'=>'index'));
		}
	}
}

?>