<?php function threadedComments($comments, $options) {
    $commentClass = '';
    if ($comments->authorId) {
        if ($comments->authorId == $comments->ownerId) {
            $commentClass .= ' comment-by-author';
        } else {
            $commentClass .= ' comment-by-user';
        }
    }
 
    $commentLevelClass = $comments->levels > 0 ? ' comment-child' : ' comment-parent';
?>
 
<li id="li-<?php $comments->theId(); ?>" class="comment-body<?php 
if ($comments->levels > 0) {
    echo ' comment-child';
    $comments->levelsAlt(' comment-level-odd', ' comment-level-even');
} else {
    echo ' comment-parent';
}
$comments->alt(' comment-odd', ' comment-even');
echo $commentClass;
?>">
    <div id="<?php $comments->theId(); ?>">
        <div class="comment-author">
            <?php $comments->gravatar('32', ''); ?>
            <cite class="fn"><?php $comments->author(); ?></cite>
        </div>
        <div class="comment-meta">
            <a href="<?php $comments->permalink(); ?>"><?php $comments->date('Y-m-d H:i'); ?></a>
            <span class="comment-reply"><?php $comments->reply(); ?></span>
        </div>
        <?php $comments->content(); ?>
    </div>
<?php if ($comments->children) { ?>
    <div class="comment-children">
        <?php $comments->threadedComments($options); ?>
    </div>
<?php } ?>
</li>
<?php } ?>

<article id="comments">
    <?php $this->comments('comment')->to($comments); ?>
    <?php if($this->allow('comment')): ?>
        <div id="<?php $this->respondId(); ?>" class="respond">
            <div class="cancel-comment-reply"><?php $comments->cancelReply(); ?></div>
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
