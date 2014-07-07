<?php

App::import('Model', 'Episode');
$Episode = new Episode();

class Podcast extends AppModel {
  public $validate = array(
      'title' => array(
          'rule' => 'notEmpty'
      ),
      'link' => array(
          'rule' => 'notEmpty'
      )
  );
}
