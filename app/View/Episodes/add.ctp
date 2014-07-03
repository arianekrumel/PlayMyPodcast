<!-- File: /app/View/Episodes/add.ctp -->

<h1>Add Episode</h1>
<?php
echo $this->Form->create('Episode');
echo $this->Form->input('title');
echo $this->Form->input('body', array('rows' => '3'));
echo $this->Form->end('Save Episode');
?>