<!-- File: /app/View/Podcasts/index.ctp  (edit links added) -->

<h1>Stations</h1>

<!-- Here's where we loop through our $podcasts array, printing out podcast info -->
<ul data-role="listview" data-inset="true" data-filter="true" data-input="#filter-for-listview" data-split-icon="edit">
    <?php foreach ($podcasts as $podcast): ?>
    <li>
            <?php
                echo $this->Html->link(
                    $podcast['Podcast']['title'],
                    array('action' => 'view', $podcast['Podcast']['id'])
                );
            ?>
            <?php
                /*echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $podcast['Podcast']['id']),
                    array('confirm' => 'Are you sure?')
                );*/

                echo $this->Html->link(
                    'Edit', array('action' => 'edit', $podcast['Podcast']['id'])
                );
            ?>
    </li>
    <?php endforeach; ?>
</ul>

<p><?php echo $this->Html->link(
  'Add Podcast', 
  array('action' => 'add'), 
  array('class' => array('ui-btn', 'ui-icon-plus'))
  ); ?></p>
