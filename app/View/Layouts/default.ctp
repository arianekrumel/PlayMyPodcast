<?php
$siteDescription = 'PlayMyPodcast';
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $siteDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('jquery.mobile-1.4.2.min.css');
		echo $this->Html->script('http://code.jquery.com/jquery-1.9.1.min.js');
		echo $this->Html->script('jquery.mobile-1.4.2.min.js');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body class="ui-mobile-viewport ui-overlay-a">
	<div id="container" data-role="page">
		<div id="header" data-role="header" data-add-back-btn="true">
			<h1><?php echo $this->Html->link($siteDescription, array('action' => 'home', 'controller' => 'pages')); ?></h1>
		</div>
		<div id="content" role="main" class="ui-content">
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer" data-role="footer" data-position="fixed">
		  <div data-role="navbar" data-iconpos="top">
      	<ul>
      		<li><?php echo $this->Html->link('Now Playing', array('action' => 'home', 'controller' => 'pages'), array('data-icon' => 'audio'))?></li>
      		<li><?php echo $this->Html->link('Stations', array('action' => 'index', 'controller' => 'podcasts'), array('class' => array('ui-btn-active', 'ui-state-persist'), 'data-icon' => 'grid'))?></li>
      		<li><a data-icon="star" href="c.html">Favorites</a></li>
      		<li><a data-icon="gear" href="d.html">Settings</a></li>
      	</ul>
      </div><!-- /navbar -->
		</div>
	</div>
</body>
</html>
