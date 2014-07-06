<!-- File: /app/View/Episodes/add.ctp -->

<h1>Add Episode</h1>
<?php
echo $this->Form->create('Episode');
echo $this->Form->input('name');
echo $this->Form->input('pubdate');
echo $this->Form->input('url');
echo $this->Form->input('description', array('rows' => '3'));
echo $this->Form->end('Save Episode');
?>