<?php

function themeConfig($form) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点LOGO地址'), _t('在这里填入一个图片URL地址, 以在网站标题前加上一个LOGO'));
    $form->addInput($logoUrl);

    $rssUrl = new Typecho_Widget_Helper_Form_Element_Text('rssUrl', NULL, NULL, _t('自定义RSS地址'), _t('在这里填入自定义的RSS地址，比如通过FeedSky烧录的地址以方便统计数据'));
    $form->addInput($rssUrl);

	$miibeian = new Typecho_Widget_Helper_Form_Element_Text('miibeian', NULL, NULL, _t('备案号'), _t('在这里填入天朝备案号，不显示则留空，例如：豫ICP备XXXXXXXX号-1'));
    $form->addInput($miibeian);
}
