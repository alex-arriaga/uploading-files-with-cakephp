<?php
class ContenidosController extends AppController {

	var $name = 'Contenidos';

	function index() {
		$this->Contenido->recursive = 0;
		$this->set('contenidos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid contenido', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('contenido', $this->Contenido->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Contenido->create();
			// Para upload
			if (isset($this->data['File'])){
				$pathFolderImg = 'img/Contenido';
				$fileOK  = $this->uploadFiles($pathFolderImg, $this->data['File']);
				$pathImg = 'Contenido/' . $this->data['File']['img_url']['name']; // Ruta relativa a  APP/webroot/img
				$this->data['Contenido']['img_url'] = $pathImg;
			}
			//
			if ($this->Contenido->save($this->data)) {
				$this->Session->setFlash(__('The contenido has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contenido could not be saved. Please, try again.', true));
			}
		}
		$categorias = $this->Contenido->Categoria->find('list');
		$estados = $this->Contenido->Estado->find('list');
		$this->set(compact('categorias', 'estados'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid contenido', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Contenido->save($this->data)) {
				$this->Session->setFlash(__('The contenido has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contenido could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Contenido->read(null, $id);
		}
		$categorias = $this->Contenido->Categoria->find('list');
		$estados = $this->Contenido->Estado->find('list');
		$this->set(compact('categorias', 'estados'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for contenido', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Contenido->delete($id)) {
			$this->Session->setFlash(__('Contenido deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Contenido was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
