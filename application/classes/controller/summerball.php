<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Summerball extends Controller_Template {

    public $template = 'events/main';

	public function action_index()
	{
		$this->template->message = new View('events/itinerary');
	}

    public function action_moredetails()
    {
        $this->template->message = new View('events/details');
    }

    public function action_book()
    {
        $this->template->message = new View('events/book');
    }

    public function action_thanks()
    {
        $this->template->message = new View('events/thanks');
    }

} // End Welcome
