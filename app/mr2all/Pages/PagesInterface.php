<?php namespace Mr2all\Pages;

interface PagesInterface {

	/**
	 * Get All pages
	 * @return pages 
	 */
	public function all();

	/**
	 * Get page by its ID
	 * @param  integer $id
	 * @return page
	 */
	public function find($id);

}