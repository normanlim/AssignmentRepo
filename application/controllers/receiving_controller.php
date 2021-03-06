<?php

/*
 * The receiving page shows a complete list of supplies used by the resturant.
 * Needs to have a way to specifying how many receiving units are being accepted
 * into stock. (need to get the receiving units from the supplies model and
 * update the currAvail in the stock model). Could do a number field beside 
 * and a prompt for the update?
 *
 * @author Manveer Bhangu
*/

defined('BASEPATH') OR exit('No direct script access allowed');

class receiving_controller extends Application
{

	public function index()
	{			
		//view we want to show
		$this->data['pagebody'] = 'recieving_view';

		// build the list of authors, to pass on to our view
		$source = $this->supplies_model->all();
		$items = array ();
		foreach ($source as $record)
		{
			$items[] = array ('id' => $record['id'], 'name' => $record['name'], 'Desc' => $record['Desc'], 'receiving_unit' => $record['receiving_unit']);
		}
		$this->data['items'] = $items;

		$this->render();
		//$this->data = array_merge($this->data, $items);

	}
}
