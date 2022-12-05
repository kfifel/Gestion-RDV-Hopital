<?php

abstract class Person
{

    Protected int|null $id;
    Protected string $first_name;
    Protected string $last_name;
    Protected string $email;
    Protected string $password;
    Protected string $role;

    public function __construct(int|null $id, string $first_name, string $last_name, string $email, string $password, string $role)
    {
        $this->id = $id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
    }

}
