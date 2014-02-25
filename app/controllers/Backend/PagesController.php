<?php namespace Backend;
use Mr2all\Pages\PagesInterface;
use View;

class PagesController extends BaseController {

    /**
     * inject the PagesInterface
     * @param Pages $pages
     */
    public function __construct( PagesInterface $pages )
    {
        $this->pages = $pages;
    }

	/**
	 * Index all Pages
	 * @return View
	 */
	public function getIndex() 
	{
		// Get all the pages from Page Repository
		$pages = $this->pages->all();
		
		return View::make('Backend\Pages\index', compact('pages'));
	}

}