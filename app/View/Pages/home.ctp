<br />
<br />
<br />
<br />
<br />

<h1 style="text-align: center;">PlayMyPodcast</h1>

<p><?php echo $this->Html->link(
  'View My Podcasts', 
  array('controller' => 'podcasts', 'action' => 'index'), 
  array('class' => array('ui-btn', 'ui-icon-plus', 'ui-btn-b', 'ui-corner-all'), 
  	'data-icon' => 'grid', 
  	'data-mini' => 'true')
  ); ?></p>

<p><?php echo $this->Html->link(
  'Add New Podcast', 
  array('action' => 'add'), 
  array('class' => array('ui-btn', 'ui-icon-plus', 'ui-btn-c', 'ui-corner-all'))
  ); ?></p>