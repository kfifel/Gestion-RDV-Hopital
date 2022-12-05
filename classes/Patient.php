<?php

require "../includs/autoload.php";

class Patient extends Person
{
    private string $date_of_birth;
    private $conn;

    public function __construct(int|null $id, string $first_name, string $last_name, string $email, string $password, string $role, string $date_of_birth)
    {
        $this->conn = Database::connect();
        $this->date_of_birth = $date_of_birth;
        parent::__construct($id, $first_name, $last_name, $email, hash("sha256", $password), $role);
    }

    function deleteMyAccount()
    {
        // TODO implement here
    }

    public function takeAppointment()
    {
        // TODO implement here
    }

    public function createPatient(): array
    {
        $query = "INSERT INTO Person ( `first_name`, `last_name`, `email`, `password`, `role`) VALUES (?, ?, ?, ?, ?)";
        $sth = $this->conn->prepare($query);
        $resp = $sth->execute(array( $this->first_name, $this->last_name, $this->email,$this->password, $this->role ));
        if($resp){
            $query1 = "SELECT `id` from `person` where `email` = '$this->email' and `password` = '$this->password'";
            $sth1 = $this->conn->prepare($query1);
            $sth1->execute();
            $resp1 = $sth1->fetch();
            $id_Person_added = $resp1['id'];
            $query2 = "INSERT INTO Patient (id, date_of_birth) VALUES ( $id_Person_added,'$this->date_of_birth') ";
            $sth2 = $this->conn->prepare($query2);
            $res = $sth2->execute();
            if($res)
                return (array(true));
            else
                return array(false ,$sth->errorInfo());
        }
        return array(false ,$sth->errorInfo());
    }

    public static function getAllPatients(){
        $conn = Database::connect();
        
        $query = "SELECT pr.*, pt.date_of_birth FROM patient pt inner join person pr on pt.id = pr.id";
        $sth = $conn->query($query);
        return ($sth->fetchAll(PDO::FETCH_ASSOC));
    }

}
