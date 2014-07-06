<?php

class EpisodesController extends AppController {
    public $helpers = array('Html', 'Form');

    public function index() {
         $this->set('episodes', $this->Episode->find('all'));
    }

    public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid episode'));
        }

        $episode = $this->Episode->findById($id);
        if (!$episode) {
            throw new NotFoundException(__('Invalid episode'));
        }
        $this->set('episode', $episode);
    }

    public function add($data) {
        //if ($this->request->is('post')) {
            $this->Episode->create();
            //if ($this->Episode->save($this->request->data)) {
            if ($this->Episode->save($data)) {
                $this->Session->setFlash(__('Your episode has been saved.'));
                //return $this->redirect(array('action' => 'index'));
            }
            //$this->Session->setFlash(__('Unable to add your episode.'));
        //}
    }

    public function getEpisodes($link){
        $episodes = $this->Episode->parseEpisodes($link);
        return $episodes;
    }
    
    public function edit($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid episode'));
        }

        $episode = $this->Episode->findById($id);
        if (!$episode) {
            throw new NotFoundException(__('Invalid episode'));
        }

        if ($this->request->is(array('episode', 'put'))) {
            $this->Episode->id = $id;
            if ($this->Episode->save($this->request->data)) {
                $this->Session->setFlash(__('Your episode has been updated.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to update your episode.'));
        }

        if (!$this->request->data) {
            $this->request->data = $episode;
        }
    }
    
    public function delete($id) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }

        if ($this->Episode->delete($id)) {
            $this->Session->setFlash(
                __('The episode with id: %s has been deleted.', h($id))
            );
            return $this->redirect(array('action' => 'index'));
        }
    }
}
