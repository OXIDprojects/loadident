<?php

$sMetadataVersion = '1.0';

$aModule = array(
    'id'           => 'agloadident',
    'title'        => 'LoadIdent Module',
    'description'  => 'Adds Load ID\'s for all type of oxbase objects',
    'thumbnail'    => 'loadident.png',
    'version'      => '1.0',
    'author'       => 'Aggrosoft',    
    'extend'      => array(
         'oxarticle' => 'agloadid/core/agloadident_oxarticle'
    ),
    'blocks' => array(
        array('template' => 'article_main.tpl', 'block'=>'admin_article_main_form', 'file'=>'article_main.tpl'),
        array('template' => 'category_main.tpl', 'block'=>'admin_category_main_form', 'file'=>'category_main.tpl'),       
        array('template' => 'user_main.tpl', 'block'=>'admin_user_main_form', 'file'=>'user_main.tpl')        
    ),
   
);
?>