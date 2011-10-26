<<<<<<< HEAD
<?
/**
 * Base controller class
 *
 * Provides basic error handling that helps passing messages between requests
 *
 * @package BakedCarrot
 * @author Yury Vasiliev
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 *
 */
=======
<?php
>>>>>>> dev
class Controller
{
	protected $errors = null;
	

	protected function hasErrors()
	{
		return isset($this->errors) && count($this->errors);
	}

	
	protected function getErrors()
	{
		return isset($this->errors) ? $this->errors : null;
	}


	protected function getLastError()
	{
		return isset($this->errors) ? end($this->errors) : null;
	}
	

	protected function checkForError($expr, $error_message, $error_field = null)
	{
		if($expr == true) {
			$this->addError($error_message, $error_field);
		}
		
		return $expr == true;
	}
	
	
	protected function addError($error_message, $error_field = null)
	{
		$this->errors[] = array('message' => $error_message, 'field' => $error_field);
	}
	
	
	protected function clearErrors()
	{
		$this->errors = null;
	}
}	

