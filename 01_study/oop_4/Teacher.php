<?php

require_once __DIR__ . '/Person.php';

class Teacher extends Person
{
    private $school_name;

    public function __construct($family_name, $first_name, $school_name)
    {
        // $this->family_name = $family_name;
        // $this->first_name = $first_name;
        parent::__construct($family_name, $first_name);
        $this->school_name = $school_name;
    }

    public function setSchoolName($school_name)
    {
        $this->school_name = $school_name;
    }

    public function getSchoolName()
    {
        return $this->school_name;
    }

    public function selfIntroduction()
    {
        return '私の名前は' .
                $this->getFullName() . "です\n" .
                $this->school_name . "で勤務しています\n";
    }

}