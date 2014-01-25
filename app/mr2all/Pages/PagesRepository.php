<?php namespace mr2all\Pages;

class PagesRepository implements PagesInterface
{

    /**
     * inject the Shit
     * @param Pages $pages
     */
    public function __construct( Pages $pages )
    {
        $this->pages = $pages;
    }

}