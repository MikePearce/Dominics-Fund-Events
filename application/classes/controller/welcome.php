<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
        $this->request->redirect('http://www.dominicsfund.co.uk/fundraising/events', 301);
	}

} // End Welcome