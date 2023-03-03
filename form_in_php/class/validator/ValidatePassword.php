<?php

class ValidatePassword implements Validable
{
    private $password;
    private $message;
    private $hasMessage;
    private $valid;

    public function __construct($default_value = '', $message = 'è obbligatorio')
    {
        $this->password = $default_value;
        $this->valid = true;
        $this->message = $message;
    }
    public function isValid($password)
    {
        $strip_tag = strip_tags($password);
        $valueWidoutSpace = trim($strip_tag);
        if ($valueWidoutSpace == '') {
            $this->valid = false;
            return false;
        }
        $this->valid = true;
        $this->password = $valueWidoutSpace;
        return $valueWidoutSpace;
    }

    public function getValue()
    {
        return $this->password;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function getValid()
    {
        return $this->valid;
    }
    /*
        $test1 = htmlspecialchars($password);
        if(((!preg_match("/^[A-Za-z0-9]*$/", $test1)) ) || $test1 == null) {
            return false;
        } else {
            return true;
        }
    }
    */
}

?>