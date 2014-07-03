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
  public function search($link) {
    $xml = Xml::build($link);
    
   $i=0;
   foreach($xml->channel->item as $item){
     if($i==10) break;
     $episodes[] = array('Episode' => array(
        'title' => (string)$item->title,
        'imageurl' => (string)$item->imageurl,
        'uploaded' => (string)$item->pubDate,
        'description' => (string)$item->description,
        'url' => (string)$item->enclosure->attributes()->url
     ));
     $i++;
   }
   
   return $episodes;
 }
    public function storeEpisodes($id, $link){
        //parse episodes and save in database
    }
}
