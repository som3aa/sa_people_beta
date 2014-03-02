<?php namespace Mr2all\Helpers;
use Route;

class Check {

    /**
     * inject the Route Class
     * @param Route $route
     */
    public function __construct( $currentAction = null )
    {
        $this->currentAction = $currentAction ?: Route::current()->getActionName();
    }

	/**
	 * to check for specific route action & return specific value
	 * @param  string  $route  ex. 'backend.pages.edit'
	 * @param  string/boolen  $return
	 * @return string/boolean
	 */
    public function isActive($route,$return = true)
    {
	    // explode current action into Back\Front and Controller and Get Request
	    $currentController = strtolower($this->GetBetween($this->currentAction,'\\','Controller'));
	    $currentGet = strtolower($this->GetBetween($this->currentAction,'get',' '));

	    // explode link action too
	    $route = explode(".", $route);
	    $linkController = $route[0];
	    $linkGet = isset($route[1]) ? $route[1] : false;

	    if ($currentController === $linkController) 
	    {
	    	if($linkGet) 
	    	{
	    		// we have a children links additional condition
	    		if($currentGet === $linkGet) 
	    		{
	    			return $return;
	    		}
	    	}
	    	else{
	    		// we have a parent link
	    		return $return;
	    	}
	    }
	    return false;
    }

    // Global Function to cut string between another string
	protected function GetBetween($content,$start,$end)
	{
	    $r = explode($start, $content);
	    if (isset($r[1])){
	        $r = explode($end, $r[1]);
	        return $r[0];
	    }
	    return '';
	}

}