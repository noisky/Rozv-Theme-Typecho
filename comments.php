<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit;?>
<article id="comments">
    <?php $this->comments('comment')->to($comments); ?>
    <?php if($this->allow('comment')): ?>
        <div id="<?php $this->respondId(); ?>" class="respond">
            <div class="comment-head"><p>发表评论<span class="cancel-comment-reply"><?php $comments->cancelReply(); ?></span></p></div>
            <form method="post" action="<?php $this->commentUrl() ?>" id="comment_form">
                <?php if($this->user->hasLogin()): ?>
                <p><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="退出">退出</a></p>
                <?php else: ?>
                <ul class="login_meta">
                    <li>   
                        <input type="text" name="author" id="author" placeholder="称呼*" value="<?php $this->remember('author'); ?>" required/>
                        <input type="text" name="mail" id="mail" placeholder="电子邮件*" value="<?php $this->remember('mail'); ?>" required/>
                        <input type="text" name="url" id="url" placeholder="网站" value="<?php $this->remember('url'); ?>"/>
                    </li>
                </ul>
                <?php endif; ?>
                <p><textarea rows="3" cols="50" name="text" id="textarea" placeholder="添加一条评论" required ><?php $this->remember('text'); ?></textarea><div><button type="submit" class="submit">评 论</button></p></div>
            </form>
        </div>
    <?php else: ?>
    <div class="comments_state"><p>评论已关闭</p></div>
    <?php endif; ?>
    <?php if ($comments->have()): ?>
        <div class="comments_count"><?php $this->commentsNum(_t('当前暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?></div>
        <div class="comments_box">
            <?php $comments->listComments(); ?>
            <?php $comments->pageNav(); ?>
        </div>
    <?php endif; ?>
</article>
