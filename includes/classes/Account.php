<?php 

class Account {

	private $errorMessage;

	public function __construct() {
		$this->errorMessage = array();
	}

	public function register($username, $fname, $lname, $email1, $email2, $pass1, $pass2) {
		$this->validateUsername($username);
		$this->validateFirstname($fname);
		$this->validateLastname($lname);
		$this->validateEmails($email1, $email2);
		$this->validatePassword($pass1, $pass2);
	}

	private function validateUsername($item) {
		// check length
		if ((strlen($item) < 5) || (strlen($item) > 20) {
			array_push($this->errorMessage, " Username must be between 6-20 characters");
			return;
		}

	}

	private function validateFirstName($item) {

	}

	private function validateLastName($item) {

	}

	private function validateEmails($item1, $item2) {

	}

	private function validatePassword($item1, $item2) {

	}
	

}
?>