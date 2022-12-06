<?php
require "../includes/autoload.php";

class Patient extends Person
{
    private string $date_of_birth;
    private $conn;

    public function __construct(int|null $id, string $first_name, string $last_name, string $email, string $password, string $date_of_birth, string $role='patient')
    {
        $this->conn = Database::connect();
        $this->date_of_birth = $date_of_birth;
        parent::__construct($id, $first_name, $last_name, $email, hash("sha256", $password), $role);
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
            $query1 = "SELECT `id` from `Person` where `email` = '$this->email' and `password` = '$this->password'";
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
        
        $query = "SELECT pr.*, pt.date_of_birth FROM Patient pt inner join Person pr on pt.id = pr.id";
        $sth = $conn->query($query);
        return ($sth->fetchAll(PDO::FETCH_ASSOC));
    }

    public function updatePatient(): bool
    {
        $query = "UPDATE Person  SET `first_name`=?, `last_name`=?, `email`=?, `password`=?, `role`=?";
        $sth = $this->conn->prepare($query);
        return $sth->execute(array($this->first_name, $this->last_name, $this->email, $this->password, $this->role));
    }

    public static function deletePatientById(int $id):bool{
        $conn = Database::connect();
        echo 'hi';
        $query = "DELETE * FROM `Patient` WHERE `id` = $id";
        $query1 = "DELETE * FROM `Person` WHERE `id` = $id";
        if($conn->query($query)){
            echo 'deleted1';
             if($conn->query($query1)){
                 echo 'deleted2';
                 return true;
             }
        }
        return false;
    }

}

//test :
$conn = Database::connect();
$khalid = new Patient(null, 'khalid2', "fifel2", "pp3@p.com", '123',"2000-01-09");
//print_r($khalid->createPatient());
echo "<pre>";
var_dump(Patient::deletePatientById(9));
echo "</pre>";

