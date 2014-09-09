<?php

class AdminController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			//$i = 
			$this->layout = View::make($this->layout);
		}
	}

}
