<h1><?php echo h($podcast['Podcast']['title']); ?> Episodes</h1>

<ul data-role="listview" data-inset="true" data-filter="true" data-filter-placeholder="Search episode titles">
	<?php
	foreach($episodes as $episode){
		if($episode['Episode']['url']){
			echo '<li>';
			echo $this->Html->link($episode['Episode']['title'], $episode['Episode']['url']);
			echo '</li>';
		}
	}
	?>
</ul>