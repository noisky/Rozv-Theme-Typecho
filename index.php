<?php
/**
 * 1.这是一套由 Noisky 修改的基于 Rozv 的模板，支持 Typecho 1.0
 * 2.顶部菜单栏使用了分类和独立页面。
 * 3.底部的友情链接只有在安装了 <a href="http://www.noisky.cn/" target="_blank">Noisky</a> 修改的 <a href="https://github.com/noisky/Links-for-Rozv-Theme" target="_blank">Links插件</a> 才可显示,未安装不影响使用。 
 * @package Rozv
 * @author Noisky
 * @version 1.1
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
<?php// $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
