<!-- File: /app/View/Episodes/index.ctp -->

<h1>Episodes</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Created</th>
    </tr>

    <!-- Here is where we loop through our $episodes array, printing out episode info -->

    <?php foreach ($episodes as $episode): ?>
    <tr>
        <td><?php echo $episode['Episode']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($episode['Episode']['title'],
array('controller' => 'episodes', 'action' => 'view', $episode['Episode']['id'])); ?>
        </td>
        <td><?php echo $episode['Episode']['created']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($episode); ?>
</table>