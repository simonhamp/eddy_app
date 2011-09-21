<?php
	namespace Controllers;
	
	class Default_Controller extends \EddyController {
		public function index() {
			$this->data[ 'welcome' ] = 'Hello, world!';
		}
	}