<?php

require_once(__DIR__.'/../CITestCase.php');

class WelcomeTest  extends CITestCase{


 
	public function testIndex(){

		$this->requireController('Welcome'); // assuming you have a applications/controllers/Home.php
		$CI = new Welcome();
		$result = $CI->index();



		// Call the controllers method
		//$this->CI->index();
		
		// Fetch the buffered output
		//$out = output();
		
		// Check if the content is OK
		//$this->assertSame(0, preg_match('/(error|notice)/i', $out));
	}


}
