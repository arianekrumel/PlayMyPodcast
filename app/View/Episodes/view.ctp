<!-- File: /app/View/Episodes/view.ctp -->

<h1>Episode
  <?php echo $this->Form->postLink(
    'Delete', 
    array(
      'controller' => 'episodes', 
      'action' => 'delete', 
      $episode['Episode']['id']
    ), 
    array(
      'class' => array(
        'ui-btn', 
        'ui-corner-all', 
        'ui-mini', 
        'ui-btn-inline', 
        'ui-icon-delete', 
        'ui-btn-icon-right'
      ),
      'style' => 'float: right;'
    ),
    "Are you sure you wish to delete this episode?"
  ); ?>
</h1>

<h2><?php echo h($episode['Episode']['name']); ?></h2>

<div class="ui-corner-all custom-corners">
  <div class="ui-bar ui-bar-a">
    <h3 style="text-align: right"><?php echo $episode['Episode']['pubdate']; ?></h3>
  </div>
  <div class="ui-body ui-body-a">
  	<p><strong>Description</strong><br />
    <?php echo h($episode['Episode']['description']); ?></p>
  </div>
</div>

<p>
	<a href="<?php echo h($episode['Episode']['url']); ?>" class="ui-shadow-icon ui-btn ui-shadow ui-corner-all ui-btn-b ui-btn-icon-bottom ui-icon-carat-r">
		Play Episode
	</a>
</p>