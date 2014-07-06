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

	public function parseEpisodes($link) {
		$xml = Xml::build($link);

		$i=0;
		foreach($xml->channel->item as $item){
			if($i==2) break;
			$episodes[] = array(
				'Episode' => array(
					'name' => (string)$item->title,
					'pubdate' => (string)$item->pubDate,
					'description' => (string)$item->description,
					'url' => (string)$item->enclosure->attributes()->url
				)
			);
			$i++;
		}

		return $episodes;
	}
}
