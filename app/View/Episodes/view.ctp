<!-- File: /app/View/Episodes/view.ctp -->

<h1><?php echo h($episode['Episode']['name']); ?></h1>

<p><small>Created: <?php echo $episode['Episode']['created']; ?></small></p>

<p><?php echo h($episode['Episode']['pubdate']); ?></p>

<p><?php echo h($episode['Episode']['url']); ?></p>

<p><?php echo h($episode['Episode']['description']); ?></p>