<?php
namespace validator;

class ValidateDate implements Validable {
    
    private $date;
    private $message ;
    private $hasMessage;
    private $valid;

    public function __construct($default_value='',$message='è obbligatorio') {
        $this->date = $default_value;
        $this->valid = true;
        $this->message = $message;
      }

    public function isValid($date)
    {
        $sanitize = trim(strip_tags($date));
        $valueWithoutSpace = trim($sanitize);
        $dt = \DateTime::createFromFormat('d/m/Y',$sanitize);
        if($dt && $dt->format('d/m/Y') === $sanitize && $valueWithoutSpace == '') {
            $this->valid = false;

            return $dt->format('d/m/Y');
        }

        $this->valid = true;
        $this->date = $sanitize;
        return $sanitize;    

        }
        
        public function getValue()
        {
            return $this->date;
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