<?php
class PagesController extends AppController{

	public $uses = array('Post');

	function index(){
		$d['pages'] = $this->Post->find('all',array(
			'conditions'=>array('type'=>'page')
		));
		$this->set($d);
	}

	function edit($id=null){
		if($this->request->is('put') || $this->request->is('post')){
			if($this->Post->save($this->request->data)){;
			$this->Session->setFlash("Le contenu a bien été modifié");
			$this->redirect(array('action'=>'index'));
			}
		}elseif($id){		
		$this->Post->id=$id;
		$this->request->data=$this->Post->read();
		}
		
	}

	function delete($id){
		$this->Session->setFlash('La page a bien été supprimée');
		$this->Post->delete($id);
		$this->redirect($this->referer());
	}
}
?>