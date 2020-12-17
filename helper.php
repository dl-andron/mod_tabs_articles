<?php

defined('_JEXEC') or die('Restricted access');

class ModTabsArticlesHelper
{
    public static function getArticles($ids)
    {
        $db = JFactory::getDbo();
        
        $query = $db->getQuery(true);        
      
        $query->select($db->quoteName(array('title', 'introtext', 'fulltext')));
        $query->from($db->quoteName('#__content'));
        $query->where("id IN (" . implode(',', $db->q($ids)) . ")");
        $query->order('ordering ASC');       
     
        $db->setQuery($query);        
       
        return $db->loadObjectList();
    }
}