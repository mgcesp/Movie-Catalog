<?php

class FilmsController extends AppController {

	public $helpers = array('Html', 'Form', 'Session');
	public $components = array('Session');

	public function index(){
		// set is the main way to send data to the view
		$this->set('films', $this->Film->find('all'));
	}

	public function add(){
		if ($this->request->is('post')) {
			$this->Film->create();
			if ($this->Film->save($this->request->data)) {
				$this->Session->setFlash(_('Your film has been saved'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->SetFlash(_('Unable to save Film'));
		}
	}

}
?>