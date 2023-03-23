<?php
namespace validator;
use DateTime;

class ValidateDate implements Validable {
    
    private $value;
    private $message ;
    private $hasMessage;
    private $valid;

    public function __construct($default_value='',$message='è obbligatorio') {
        $this->value = $default_value;
        $this->valid = true;
        $this->message = $message;
      }

    public function isValid($value)
    {
        $sanitize = trim(strip_tags($value));
        $dt = DateTime::createFromFormat('d/m/Y',$sanitize);
        if($dt && $dt->format('d/m/Y') === $sanitize) {
            $this->valid = false;

            return $dt->format('d/m/Y');
        }

        $this->valid = true;
        $this->value = $sanitize;
        return $sanitize;    
 
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