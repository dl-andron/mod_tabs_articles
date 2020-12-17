<?php

defined('_JEXEC') or die('Restricted access');

JFormHelper::loadFieldClass('list');

class JFormFieldArticles extends JFormFieldList
{
	protected $type = 'Articles';

	public function getOptions() {        
       
        $db = JFactory::getDbo();

        $query = $db->getQuery(true);

        $query->select($db->quoteName(array('id', 'title')));
        $query->from($db->quoteName('#__content'));       
        $query->order('id DESC');        
        
        $db->setQuery($query);        
        
        $results = $db->loadObjectList();

        foreach($results as $res){
            $articles[] = array('value' => $res->id, 'text' => $res->title);
        }             
        
		$options = array_merge(parent::getOptions(), $articles);
        
        return $options;
	}
}