<!-- File: /app/View/Podcasts/view.ctp -->

<h1><?php echo h($podcast['Podcast']['title']); ?></h1>

<p><small>Created: <?php echo $podcast['Podcast']['created']; ?></small></p>

<p><?php echo h($podcast['Podcast']['link']); ?></p>