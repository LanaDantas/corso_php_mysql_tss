<?php
namespace validator;

class ValidateName implements Validable {

    private $value;
    private $message ;
    private $hasMessage;
    /** se il valore è valido e se devo visualizzare il messaggio  */
    private $valid;
    
    public function __construct($default_value='',$message='è obbligatorio') {
      $this->value = $default_value;
      $this->valid = true;
      $this->message = $message;
    }

    public function isValid($value) {
        if((!preg_match("/^[a-zA-z]*$/", $value)) || $value == null) {
            $this->valid = false;
        } else {
            $this->valid = true;
            $this->value = $value;
            return $value;         }
    }

    public function getValue()
    {
      return $this->value;
    }
   
    public function getMessage()
    {
      return $this->message;
    }
   
    public function getValid()
    {
      return $this->valid;
    }
}

?>