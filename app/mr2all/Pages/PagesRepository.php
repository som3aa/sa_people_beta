<?php namespace Mr2all\Pages;

class PagesRepository implements PagesInterface
{

    /**
     * inject the Pages Model
     * @param Pages $pages
     */
    public function __construct( Pages $pages )
    {
        $this->pages = $pages;
    }

    /**
	 * Get All pages
	 * @return pages 
	 */
	public function all() 
	{
        return $this->pages->all();
	}

    /**
     * Get page by its ID
     * @param  integer $id
     * @return page
     */
    public function find($id)
    {
        return $this->pages->find($id);  
    }

}