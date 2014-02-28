<?php

/**
 * HTML Macro for managing sidebar menu in both Frontend & Backend
 * $linkAction = to define the link action method
 * $append = is to add the arrow <span class='selected'></span> if active
 */
HTML::macro('isActive', function($linkAction , $append = false)
{
    // explode current action into Back\Front and Controller and Get Request
    $currentAction = Route::current()->getActionName();
    $currentController = strtolower(GetBetween($currentAction,'\\','Controller'));
    $currentGet = strtolower(GetBetween($currentAction,'get',' '));

    // explode link action too
    $linkAction = explode(".", $linkAction);
    $linkController = $linkAction[1];
    $linkGet = isset($linkAction[2]) ? $linkAction[2] : null;

    if ($currentController === $linkController) 
    {
    	if(isset($linkGet)) 
    	{
    		// we have a children links
    		if($currentGet === $linkGet) 
    		{
    			return 'active';
    		}
    	}
    	else{
    		// we have a parent link
    		if ($append)
    		{
				return '<span class="selected"></span>';
    		} else {
    			return 'active';
    		}

    	}
    }
});

// Global Function to cut string between another string
function GetBetween($content,$start,$end)
{
    $r = explode($start, $content);
    if (isset($r[1])){
        $r = explode($end, $r[1]);
        return $r[0];
    }
    return '';
}