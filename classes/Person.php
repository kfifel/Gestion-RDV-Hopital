<?php
require '../includes/autoload.php';

abstract class Person
{

    protected $id;
    protected string $first_name;
    protected string $last_name;
    protected string $email;
    protected string $password;
    protected string $role;

    public function __construct($id, string $first_name, string $last_name, string $email, string $password, string $role)
    {
        $this->id = $id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
    }

    public static function getStatistics(){
        //please use var dump on "$stats" to discover the associative array keys
        $stats = array();

        $req = Database::connect()->prepare('Select count(id) from doctor');
        $req->execute();
        $result = $req->fetchAll(PDO::FETCH_ASSOC);
        $stats['countDoctor'] = $result[0]['count(id)'];

        $req = Database::connect()->prepare('Select count(id) from patient');
        $req->execute();
        $result = $req->fetchAll(PDO::FETCH_ASSOC);
        $stats["countPatient"] = $result[0]['count(id)'];

        $req = Database::connect()->prepare('Select count(id) from appointment where booking_date like CURRENT_DATE()');
        $req->execute();
        $result = $req->fetchAll(PDO::FETCH_ASSOC);
        $stats['NewBooking'] = $result[0]['count(id)'];

        $req = Database::connect()->prepare('Select count(id) from session where date_start like CURRENT_DATE()');
        $req->execute();
        $result = $req->fetchAll(PDO::FETCH_ASSOC);
        $stats['todaySession'] = $result[0]['count(id)'];

        Database::disconnect();



        return $stats;
    }
}

// Person::getStatistics();

