<!-- File: /app/View/Episodes/edit.ctp -->

<h1>Edit Episode</h1>
<?php
echo $this->Form->create('Episode');
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->input('name');
echo $this->Form->input('pubdate');
echo $this->Form->input('url');
echo $this->Form->input('description', array('rows' => '3'));
echo $this->Form->end('Save Episode');
?>