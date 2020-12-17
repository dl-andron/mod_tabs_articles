<?php

defined( '_JEXEC' ) or die;

JPluginHelper::importPlugin('content');

?>

<div class="tabwrap">
    <?php $i = 0; ?>
    <ul class="tabs nav nav-tabs" id="articles_tab">
        <?php foreach ($articles as $article) : ?>
            <li class="tabs__item <?php if($i == 0):?> active <?php endif;?>">
                <a class="tabs__link" href="#tab<?php echo $i ?>" data-toggle="tab"><?php echo $article->title ?></a>
            </li>
            <?php $i++; ?>  
        <?php endforeach; ?>                    
    </ul> 

	<div class="tab-content">
        <?php $y = 0; ?>
        <?php foreach ($articles as $article) : ?>
            <div class="tab-pane<?php if($y == 0):?> active <?php endif;?>" id="tab<?php echo $y ?>">                
                <div class="introtext"><?php echo JHtml::_('content.prepare', $article->introtext) ?></div>
                <div class="fulltext"><?php echo JHtml::_('content.prepare', $article->fulltext) ?></div>                
            </div>	
            <?php $y++; ?>
        <?php endforeach; ?> 	
	</div>                 
</div>

            