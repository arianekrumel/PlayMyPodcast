<?php

class Episode extends AppModel {
	public $validate = array(
		'name' => array(
			'rule' => 'notEmpty'
		),
		'pubdate' => array(
			'rule' => 'notEmpty'
		),
		'url' => array(
			'rule' => 'notEmpty'
		)    ,
  	'description' => array(
  		'rule' => 'notEmpty'
  	)
	);
}
