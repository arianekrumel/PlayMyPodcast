<?php

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
