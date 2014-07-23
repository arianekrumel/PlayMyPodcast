<h1>Podcast
	<?php echo $this->Form->postLink(
 		'Delete', 
 		array(
 			'controller' => 'podcasts', 
 			'action' => 'delete', 
 			$podcast['Podcast']['id']
 		), 
 		array(
 			'class' => array(
 				'ui-btn', 
 				'ui-corner-all', 
 				'ui-mini', 
 				'ui-btn-inline', 
 				'ui-icon-delete', 
 				'ui-btn-icon-right'
 			),
 			'style' => 'float: right;'
 		),
 		"Are you sure you wish to delete this podcast?"
 	); ?>
	<?php echo $this->Html->link(
 		'Refresh', 
 		"#", 
 		array(
 			'class' => array(
 				'ui-btn', 
 				'ui-corner-all', 
 				'ui-mini', 
 				'ui-btn-inline', 
 				'ui-icon-refresh', 
 				'ui-btn-icon-right'
 			),
 			'style' => 'float: right;'
 		)
 	); ?>
</h1>

<p><?php echo h($podcast['Podcast']['title']); ?></p>

<ul data-role="listview" data-inset="true" data-filter="true" data-filter-placeholder="Search episode titles">
	<?php
	foreach($episodes as $episode){
		if($episode['Episode']['url']){
			echo '<li>';
			echo $this->Html->link(
				$episode['Episode']['name'], 
				array(
					'controller' => 'episodes', 
					'action' => 'view', 
					$episode['Episode']['id']
				)
			);
			echo '</li>';
		}
	}
	?>
</ul>
