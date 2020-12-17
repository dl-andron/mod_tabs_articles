<?php

defined('_JEXEC') or die;

require_once __DIR__ . '/helper.php';

$id_articles = $params->get("articles");

$articles = ModTabsArticlesHelper::getArticles($id_articles);

require JModuleHelper::getLayoutPath('mod_tabs_articles', $params->get('layout', 'default'));