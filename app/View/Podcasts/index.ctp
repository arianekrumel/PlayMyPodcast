<!-- File: /app/View/Podcasts/index.ctp  (edit links added) -->

<h1>Blog podcasts</h1>
<p><?php echo $this->Html->link('Add Podcast', array('action' => 'add')); ?></p>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Actions</th>
        <th>Created</th>
    </tr>

<!-- Here's where we loop through our $podcasts array, printing out podcast info -->

    <?php foreach ($podcasts as $podcast): ?>
    <tr>
        <td><?php echo $podcast['Podcast']['id']; ?></td>
        <td>
            <?php
                echo $this->Html->link(
                    $podcast['Podcast']['title'],
                    array('action' => 'view', $podcast['Podcast']['id'])
                );
            ?>
        </td>
        <td>
            <?php
                echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $podcast['Podcast']['id']),
                    array('confirm' => 'Are you sure?')
                );
            ?>
            <?php
                echo $this->Html->link(
                    'Edit', array('action' => 'edit', $podcast['Podcast']['id'])
                );
            ?>
        </td>
        <td>
            <?php echo $podcast['Podcast']['created']; ?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>