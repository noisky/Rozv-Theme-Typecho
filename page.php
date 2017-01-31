<?php 
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php'); ?>
<section class="post">
	<header class="post_head">
		<h2><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
	</header>
	<article class="post_artice">
		<?php $this->content(); ?>
	</article>
</section>
<?php $this->need('comments.php'); ?>
<?php $this->need('footer.php'); ?>
