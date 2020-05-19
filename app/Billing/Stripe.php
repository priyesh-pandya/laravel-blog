<?php 

namespace App\Billing;

/**
* Billing Stipe 
*/
class Stripe 
{

	protected $key;
	
	function __construct($key)
	{
		$this->key = $key;
	}
}