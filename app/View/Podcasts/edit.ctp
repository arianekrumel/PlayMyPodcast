<!-- File: /app/View/Podcasts/edit.ctp -->

<h1>Edit Podcast</h1>
<?php
echo $this->Form->create('Podcast');
echo $this->Form->input('title');
echo $this->Form->input('link', array('rows' => '3'));
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('Save Podcast');
?>