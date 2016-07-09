<?php
namespace Auth;
abstract class auth
{
  protected $_email;
  protected $_password;

  public function __construct($email , $password)
  {
    $this->_email = $email;
    $this->_password = $password;
  }
  protected function validateEmail()
  {
    !filter_var($this->_email, FILTER_VALIDATE_EMAIL) ? 'Invalid email' : true;
  }
  protected abstract function authenticate();

}

?>