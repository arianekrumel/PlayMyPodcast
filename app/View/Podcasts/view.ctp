<!-- File: /app/View/Podcasts/view.ctp -->

<h1><?php echo h($podcast['Podcast']['title']); ?></h1>

<p><?php echo h($podcast['Podcast']['link']); ?></p>

<ul data-role="listview" data-inset="true" data-filter="true" data-input="#filter-for-listview">
  <li>Episode 10</li>
  <li>Episode 9</li>
  <li>Episode 8</li>
  <li>Episode 7</li>
  <li>Episode 6</li>
  <li>Episode 5</li>
</ul>