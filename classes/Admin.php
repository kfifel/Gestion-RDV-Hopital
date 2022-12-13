<?php
require_once '../includes/autoload.php';
include 'Database.php';

class Admin extends Person{

    public function __construct(?int $id, string $first_name, string $last_name, string $email, string $password, string $role='Admin')
    {
        $this->conn = Database::connect();
        parent::__construct($id, $first_name, $last_name, $email, hash("sha256", $password), $role);
    }

    public function addDoctor(Doctor $doc){
        $conn =  Database::connect();
        $spec = $doc->getSpeciality();
        $query1= "INSERT INTO doctor (`first_name`, `last_name`, `email`, `password`, `role`, `speciality`) VALUES (?,?,?,?,?,? )";
        $sth = $conn->prepare($query1);
        $res = $sth->execute(array( $doc->first_name, $doc->last_name, $doc->email, $doc->password, 'doctor', $spec ));
        return $res;
        
    }

    // public function  getAllDoctors(int $id){
    //     $conn = Database::connect();
    //     $res = $conn->query("SELECT * FROM doctor WHERE id = $id");
    //     $res = $res->fetchAll(PDO::FETCH_ASSOC);

    // }

    // public function editDoctor (Doctor $doc){
    //     $conn = Database::connect();
    //     $query= "UPDATE `doctor` SET `first_name` = ?, `last_name`=?, email = ?, `password` = ?, `speciality` = ? 
    //                              WHERE `id` = $doc->id";
    //     echo $query;
    //     $ud = $conn->prepare($query);
    //     $res = $ud->execute(array($$doc->first_name, $doc->last_name, $doc->email, $doc->password, $doc->speciality));
    //     Database::disconnect();
    //     $conn = null;
    //     return $res;
    // }
}
                // // *********test*********
                // $obj = new Admin (null,'namedoc', 'lndoc', 'doc2@doddcor.com', '123', 'admin');
                // $doc = new Doctor (null,'tessst', 'doc', 'doc2@dddoctr.com', '123', 'doctor',3);
                // $obj->addDoctor($doc);


