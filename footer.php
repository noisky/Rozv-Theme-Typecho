<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit;?>
<footer id="footer">
<!--底部输出独立页面-->
<br>
<nav>
<?php $this->widget('Widget_Contents_Page_List')->to($pages); ?> 
<?php while($pages->next()): ?><a href="<?php $pages->permalink(); ?>"><?php $pages->title(); ?></a>
<?php endwhile; ?>
</nav>
&copy; <?php _e(date('Y')) ?> <a href="<?php $this->options->siteurl(); ?>"><?php $this->options->title(); ?></a> | Powered by <a href="http://www.typecho.org" target="_blank">Typecho)))</a>
<?php if($this->options->miibeian) : ?>
<br><a href="http://www.miibeian.gov.cn" target="_blank" rel="nofollow"><?php echo $this->options->miibeian; ?></a>
<?php endif; ?>
</footer>
<?php $this->footer(); ?>
</div>
</body>
</html>
