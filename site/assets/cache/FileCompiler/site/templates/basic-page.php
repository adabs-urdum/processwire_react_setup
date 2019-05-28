<?php var_dump($config->urls->templates); ?>
<?php include(\ProcessWire\wire('files')->compile($config->urls->templates . 'includes/header.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); ?>

		<h1><?php echo $page->title; ?></h1>
		<?php if($page->editable()) echo "<p><a href='$page->editURL'>Edit</a></p>"; ?>

	</body>
</html>
