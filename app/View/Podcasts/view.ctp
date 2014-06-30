<!-- File: /app/View/Podcasts/view.ctp -->

<h1><?php echo h($podcast['Podcast']['title']); ?></h1>

<p><?php echo h($podcast['Podcast']['link']); ?></p>

<ul data-role="listview" data-inset="true" data-filter="true" data-input="#filter-for-listview">
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