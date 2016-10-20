<footer id="footer">
<!--底部输出独立页面-->
<nav>
<?php $this->widget('Widget_Contents_Page_List')->to($pages); ?> 
<?php while($pages->next()): ?><a href="<?php $pages->permalink(); ?>"><?php $pages->title(); ?></a>
<?php endwhile; ?>
</nav>
&copy; <?php _e(date('Y')) ?> <a href="<?php $this->options->siteurl(); ?>"><?php $this->options->title(); ?></a> | Powered by <a href="http://www.typecho.org" target="_blank">Typecho)))</a></footer>
<?php $this->footer(); ?>
</body>
</html>
