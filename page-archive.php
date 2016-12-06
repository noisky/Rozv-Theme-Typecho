<?php    
   /**  
    * archive
    * @package custom   
    */    
Typecho_Widget::widget('Widget_Stat')->to($stat);
?>
<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php');?>   
<section class="post">
<section id="posts" class="posts-collapse">
<span class="archive-move-on"></span>
<?php $this->widget('Widget_Contents_Post_Recent', 'pageSize=10000')->to($archives);   
            $year=0; $mon=0; $i=0; $j=0;   
            $output = '<span class="archive-page-counter">       
      好! 目前共计 '.$stat->publishedPostsNum.' 篇日志。 继续努力。
    </span>
';   
            while($archives->next()):
            $year_tmp = date('Y',$archives->created);
             $mon_tmp = date('m',$archives->created);
             $y=$year; $m=$mon;
             if ($year != $year_tmp) {   
                 $year = $year_tmp;   
                 //输出年份   
                 $output .= '<div class="collection-title">
          <h2 class="archive-year motion-element" id="archive-year-'.$year.'">'.$year.'</h2>
        </div>
        '; //输出年份   
           }   
             //输出文章日期和标题   
            $output .='
    <header class="post-header">
      <hac class="post-title">
            <a class="post-title-link" href="'.$archives->permalink .'" itemprop="url">
                <span itemprop="name">'. $archives->title .'</span>
            </a>
      </hac>
      <div class="post-meta">
      <time class="post-time" itemprop="dateCreated" datetime="'.date('c',$archives->created).'" content="'.date('yy-m-d',$archives->created).'">
            '.date('m-d',$archives->created).'
          </time>
      </div>
    </header>
 
  ';
        endwhile;   
        echo $output;   
        ?>
		</section>
</section>
<?php $this->need('footer.php'); ?>
