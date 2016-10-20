<footer id="footer">
<?php if (class_exists("Links_Plugin")) :?>
<div>
<?php Links_Plugin::output(); ?>
</div>
<?php endif; ?>
&copy; <?php _e(date('Y')) ?> <a href="<?php $this->options->siteurl(); ?>"><?php $this->options->title(); ?></a> | Powered by <a href="http://www.typecho.org" target="_blank">Typecho)))</a></footer>
<?php $this->footer(); ?>
</body>
</html>
