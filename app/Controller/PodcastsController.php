<?php

App::import('Controller', 'Episodes');

class PodcastsController extends AppController {
    public $helpers = array('Html', 'Form');

    public function index() {
         $this->set('podcasts', $this->Podcast->find('all'));
    }

    public function view($id = null) {
        $Episodes = new EpisodesController;
        $Episodes->constructClasses();

        if (!$id) {
            throw new NotFoundException(__('Invalid podcast'));
        }

        $podcast = $this->Podcast->findById($id);
        if (!$podcast) {
            throw new NotFoundException(__('Invalid podcast'));
        }
        $this->set('podcast', $podcast);
        
        $episodes = $Episodes->Episode->findAllByPodcast($podcast['Podcast']['link']);
        $this->set(compact('episodes'));
    }

    public function add() {
        $Episodes = new EpisodesController;
        $Episodes->constructClasses();

        if ($this->request->is('post')) {
            $this->Podcast->create();
            if ($this->Podcast->save($this->request->data)) {
                $this->Session->setFlash(__('Your podcast has been saved.'));

                // save all current episodes
                $episodes = $Episodes->Episode->parseEpisodes($this->request->data['Podcast']['link']);

                // send all episodes to podcast model
                foreach($episodes as $episode){
                    $data = Array(
                        'Episode' => Array
                            (
                                'name' => $episode['Episode']['name'],
                                'pubdate' => $episode['Episode']['pubdate'],
                                'url' => $episode['Episode']['url'],
                                'description' => $episode['Episode']['description'],
                                'podcast' => $this->request->data['Podcast']['link']
                            )
                    );
                    $Episodes->add($data);
                }
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to add your podcast.'));
        }
    }
    
    public function edit($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid podcast'));
        }

        $podcast = $this->Podcast->findById($id);
        if (!$podcast) {
            throw new NotFoundException(__('Invalid podcast'));
        }

        if ($this->request->is(array('podcast', 'put'))) {
            $this->Podcast->id = $id;
            if ($this->Podcast->save($this->request->data)) {
                $this->Session->setFlash(__('Your podcast has been updated.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to update your podcast.'));
        }

        if (!$this->request->data) {
            $this->request->data = $podcast;
        }
    }
    
    public function delete($id) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }

        if ($this->Podcast->delete($id)) {
            $this->Session->setFlash(
                __('The podcast with id: %s has been deleted.', h($id))
            );
            return $this->redirect(array('action' => 'index'));
        }
    }

    public function refresh($id) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }

        /*if ($this->Podcast->delete($id)) {
            $this->Session->setFlash(
                __('The podcast with id: %s has been deleted.', h($id))
            );
            return $this->redirect(array('action' => 'index'));
        }*/

        /*$Episodes = new EpisodesController;
        $Episodes->constructClasses();

        if ($this->request->is('post')) {
            $this->Podcast->create();
            if ($this->Podcast->save($this->request->data)) {
                $this->Session->setFlash(__('Your podcast has been saved.'));

                // save all current episodes
                $episodes = $Episodes->Episode->parseEpisodes($this->request->data['Podcast']['link']);

                // send all episodes to podcast model
                foreach($episodes as $episode){
                    $data = Array(
                        'Episode' => Array
                            (
                                'name' => $episode['Episode']['name'],
                                'pubdate' => $episode['Episode']['pubdate'],
                                'url' => $episode['Episode']['url'],
                                'description' => $episode['Episode']['description'],
                                'podcast' => $this->request->data['Podcast']['link']
                            )
                    );
                    $Episodes->add($data);
                }
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to add your podcast.'));
        }*/
    }

}
