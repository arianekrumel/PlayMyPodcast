<!-- File: /app/View/Episodes/index.ctp  (edit links added) -->

<h1>Episodes</h1>
<p><?php echo $this->Html->link("Add Episode", array('action' => 'add')); ?></p>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Action</th>
        <th>Created</th>
    </tr>

<!-- Here's where we loop through our $episodes array, printing out episode info -->

<?php foreach ($episodes as $episode): ?>
    <tr>
        <td><?php echo $episode['Episode']['id']; ?></td>
        <td>
            <?php
                echo $this->Html->link(
                    $episode['Episode']['title'],
                    array('action' => 'view', $episode['Episode']['id'])
                );
            ?>
        </td>
        <td>
            <?php
                echo $this->Html->link(
                    'Edit',
                    array('action' => 'edit', $episode['Episode']['id'])
                );
            ?>
        </td>
        <td>
            <?php echo $episode['Episode']['created']; ?>
        </td>
    </tr>
<?php endforeach; ?>

</table>