<?php

function themeConfig($form) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点LOGO地址'), _t('在这里填入一个图片URL地址, 以在网站标题前加上一个LOGO'));
    $form->addInput($logoUrl);

    $rssUrl = new Typecho_Widget_Helper_Form_Element_Text('rssUrl', NULL, NULL, _t('自定义RSS地址'), _t('在这里填入自定义的RSS地址，比如通过FeedSky烧录的地址以方便统计数据'));
    $form->addInput($rssUrl);

    $aboutText = new Typecho_Widget_Helper_Form_Element_Textarea('aboutText', NULL, NULL, _t('自我介绍'), _t('在这里填写一段自我介绍的说明文字以显示在底部'));
    $form->addInput($aboutText);

    $weibo = new Typecho_Widget_Helper_Form_Element_Text('weibo', NULL, NULL, _t('新浪微博地址'));
    $form->addInput($weibo);

    $tqq = new Typecho_Widget_Helper_Form_Element_Text('tqq', NULL, NULL, _t('腾讯微博地址'));
    $form->addInput($tqq);

}
