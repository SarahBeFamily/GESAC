<?php
/**
 * Breadcrumbs Component
 */
if ($include != true)
	$var = 'Page Title';
?>

<div class="breadcrumbs">
	<a href="/">Home</a> / <a href="#">1° Livello</a> / <a href="#">2° Livello</a> / <a class="current"><?php echo $var; ?></a>
</div>