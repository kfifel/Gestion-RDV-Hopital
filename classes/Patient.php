<?php

use Cassandra\Date;

class Patient extends Person
{
    public date $date_of_birth;

    public function __construct(int $id, string $first_name, string $last_name, string $email, string $password, string $role,date $date_of_birth)
    {
        $this->date_of_birth = $date_of_birth;
        parent::__construct($id, $first_name, $last_name, $email, $password, $role);
    }

    function deleteMyAccount()
    {
        // TODO implement here
    }

    public function takeAppointment()
    {
        // TODO implement here
    }

}
