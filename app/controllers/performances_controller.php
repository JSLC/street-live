<?php
class PerformancesController extends AppController {

	var $name = 'Performances';

	function index($type='done') {
		$this->Performance->recursive = 0;
		if($type=='done'){
			$this->paginate = array('conditions'=>array('is_done'=>1));
			$this->set('performances', $this->paginate());
			$this->render('done');
		}else{
			$this->paginate = array('conditions'=>array('is_done'=>0));
			$this->set('performances', $this->paginate());
			$this->render('booking');
		}
	}
	
	function done(){
		$this->Performance->recursive = 0;
		$this->set('performances', $this->paginate());
	}
	function booking(){
		$this->Performance->recursive = 0;
		$this->set('performances', $this->paginate());

	}


	function view($type='done',$id=0) {
		$this->set('performance', $this->Performance->read(null, $id));
		if($type=='done'){
			$this->render('done_view');
		}else{
			$this->render('booking_view');
		}
	}

	function save(){
			$this->Performance->create();
			if($this->Performance->save($this->data)){
			$this->set('message','スケジュールが保存されました。');
			}else{
			$this->set('message','スケジュール保存に失敗しました。');
			}


	}
	function confirm(){
			$this->data['performer_id']=1;
			$this->data['holdingdate']=
			$this->data['holdingdate']['year'].
			$this->data['holdingdate']['month'].
			$this->data['holdingdate']['day'].
			$this->data['holdingdate']['hour'].
			$this->data['holdingdate']['min'].
			'00';
			$this->set('userInput',$this->data);
			$this->render('confirm');
	}

	function add() {
		var_dump($this->data);
		if (!empty($this->data)) {
		$this->Performance->create();
			if ($this->Performance->save($this->data)) {
				$this->redirect(array('action' => 'index'));
			} else {
			}
		}
		$performers = $this->Performance->Performer->find('list');
		//$stages = $this->Performance->Stage->find('list');
		$performancetypes = $this->Performance->Performancetype->find('list');
		$this->set(compact('performers', 'performancetypes'));
	}

	function edit($id = null) {
		
		return;
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid performance', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Performance->save($this->data)) {
				$this->Session->setFlash(__('The performance has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The performance could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Performance->read(null, $id);
		}
		$performers = $this->Performance->Performer->find('list');
		$stages = $this->Performance->Stage->find('list');
		$performancetypes = $this->Performance->Performancetype->find('list');
		$this->set(compact('performers', 'stages', 'performancetypes'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for performance', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Performance->delete($id)) {
			$this->Session->setFlash(__('Performance deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Performance was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
