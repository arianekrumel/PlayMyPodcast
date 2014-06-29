<!-- File: /app/View/Podcasts/add.ctp -->

<h1>Add Podcast</h1>
<?php
echo $this->Form->create('Podcast');
echo $this->Form->input('title');
echo $this->Form->input('link', array('rows' => '3'));
echo $this->Form->end('Save Podcast');
?>