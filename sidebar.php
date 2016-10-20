<div id="sidebar">
    <div class="side_box side_1">
        <ul>
            <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
            <?php while($pages->next()): ?>
                <li><a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></li>
            <?php endwhile; ?>
        </ul>
    </div>
    <div class="side_box side_2">
        <h3>关于我</h3>
        <?php $this->user->gravatar(); ?>
        <?php if ($this->options->aboutText): ?>
            <p><?php $this->options->aboutText() ?></p>
        <?php else : ?>
            <p>这是一段自我介绍，请在博客后台的设置外观页面下进行修改。</p>
        <?php endif; ?>
    </div>
    <div class="side_box side_3">
        <ul>
            <li>
                <?php if ($this->options->weibo): ?>
                    <div class="icon weibo"><a href="<?php $this->options->weibo() ?>" title="新浪微博" target="_blank">新浪微博</a></div>
                <?php endif; ?>
                <?php if ($this->options->tqq): ?>
                    <div class="icon tqq"><a href="<?php $this->options->tqq() ?>" title="腾讯微博" target="_blank">腾讯微博</a></div>
                <?php endif; ?>
            </li>
            <li>
                <div class="rss">
                    <?php if ($this->options->rssUrl): ?>
                        <a href="<?php $this->options->rssUrl() ?>">文章RSS</a>
                    <?php else : ?>
                        <a href="<?php $this->options->feedUrl(); ?>">文章RSS</a>
                    <?php endif; ?>
                </div>
                <div class="rss"><a href="<?php $this->options->commentsFeedUrl(); ?>">评论RSS</a></div>
            </li>
            <li>
                <?php if($this->user->hasLogin()): ?>
                    <a href="<?php $this->options->adminUrl(); ?>">博客管理</a> | <a href="<?php $this->options->logoutUrl(); ?>">退出</a>
                <?php else: ?>
                    <a href="<?php $this->options->adminUrl('login.php'); ?>">登录</a>
                <?php endif; ?>
            </li>
        </ul>
    </div>
</div>
