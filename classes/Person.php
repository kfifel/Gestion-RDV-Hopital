<?php

abstract class Person
{

    protected int $id;
    protected string $first_name;
    protected string $last_name;
    protected string $email;
    protected string $password;
    protected string $role;

    public function __construct(int $id, string $first_name, string $last_name, string $email, string $password, string $role)
    {
        $this->id = $id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
    }

}
