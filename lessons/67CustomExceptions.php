<?php

$name = "Brian";
$email = "";

class NameException extends Exception
{
    public function showNameError()
    {
        return 'Error on Line ' . $this->getLine() . ' in ' . $this->getFile();
    }
}

class EmailException extends Exception
{
    public function showEmailError()
    {
        return 'Error on Line ' . $this->getLine() . ' in ' . $this->getFile();
    }
}

try {
    if ($name == "") {
        throw new NameException();
    } elseif ($email == "") {
        throw new EmailException();
    } else {
        echo "Values sent!";
    }
} catch (NameException $n) {
    echo $n->showNameError();
}
catch (EmailException $e) {
    echo $e->showEmailError();
}


