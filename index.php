<?php
/**
 * 1.这是一套由 Noisky 修改的基于 Rozv 的简洁的响应式模板，支持 Typecho 1.0
 * 2.适配了移动端页面
 * 3.底部输出独立页面
 * 4.去除了侧边栏
 * @package Rozv
 * @author Noisky
 * @version 1.2
 * @link http://www.noisky.cn
 * @原作者 摄氏度
 */
$this->need('header.php');
?>
<?php while($this->next()): ?>
	<section class="post">
		<header class="post_head">
			<h2><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
			<p><?php $this->date('Y-m-d'); ?> &bull; <?php $this->category(','); ?> &bull; <a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('暂无评论', '1 条评论', '%d 条评论'); ?></a></p>
		</header>
		<article class="post_artice">
			<?php $this->content('阅读更多...'); ?>
		</article>
	</section>
<?php endwhile; ?>
<?php $this->pageNav(); ?>
<?php $this->need('footer.php'); ?>
