<?php
class Session
{   
    private $id;
    private $title;
    private $doctor_name;
    private $date_start;
    private $max_patients;

    function __construct($title=null,$doctor_name=null,$date_start=null,$max_patients=null){

        $this->title=$title;
        $this->doctor_name=$doctor_name;
        $this->date_start=$date_start;
        $this->max_patients=$max_patients;
    }
}
