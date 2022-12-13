<?php
require_once '../includes/autoload.php';

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
// class Admin extends Person
// {  
    
    static public function  readSession($date=null,$doctor=null){ 
    $conn=Database::connect();
    if ($date==null&&$doctor==null){
        $sql="SELECT session.id,`title`, `date_start`, `max_patient`, `first_name`as `first_name_doctor`,`last_name`as `last_name_doctor` 
              FROM `session` 
              INNER JOIN doctor on id_doctor=doctor.id";
    }
    else {
        if($date==null) 
        {
            $sql="SELECT session.id,`title`, `date_start`, `max_patient`, `first_name`as `first_name_doctor`,`last_name`as `last_name_doctor` 
              FROM `session` 
              INNER JOIN doctor on session.id_doctor=doctor.id
              WHERE session.id_doctor=$doctor";
        }
        else{
            $sql="SELECT session.id,`title`, `date_start`, `max_patient`, `first_name`as `first_name_doctor`,`last_name`as `last_name_doctor` 
              FROM `session` 
              INNER JOIN doctor on session.id_doctor=doctor.id
              WHERE date_start='$date' ";
        }
    }
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    Database::disconnect();
    return $result;
    }

    public function  createSession($MySession){
        try {
            $conn=Database::connect();
            $sql="INSERT INTO `session`( `title`, `date_start`, `max_patient`, `id_doctor`) VALUES (?,?,?,?)";
            $stmt=$conn->prepare($sql);
            $stmt->execute([$MySession->title,$MySession->date_start,$MySession->max_patients,$MySession->doctor_id]);
            Database::disconnect();
            header('Location: ../admin-interfaces/admin-schedule.php');
        } catch (Exception $e) {
            die( 'Message: ' .$e->getMessage());
        }
    }

    public function  deleteSession($id){
        try {
        $conn=Database::connect();
        $sql="DELETE FROM `session` WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id]);
        Database::disconnect();
        header('Location: ../admin-interfaces/admin-schedule.php');
        } 
        catch (Exception $e) {
            echo 'Message: ' .$e->getMessage();
        }
    } 
    public function getAllDoctors(){
        $conn = Database::connect();     // :: ->  for static methods or properties 
        $requete = "SELECT * FROM doctor"; 
        $res = $conn->query($requete);
        return $res->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function deleteDoctor($id){
        try {
            $conn=Database::connect();
            $sql="DELETE FROM `doctor` WHERE id=?";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$id]);
            Database::disconnect();
            header('Location: ../admin-interfaces/admin-schedule.php');
            } 
            catch (Exception $e) {
                echo 'Message: ' .$e->getMessage();
            }
    }

}
                // // *********test*********
                // $obj = new Admin (null,'namedoc', 'lndoc', 'doc2@doddcor.com', '123', 'admin');
                // $doc = new Doctor (null,'tessst', 'doc', 'doc2@dddoctr.com', '123', 'doctor',3);
                // $obj->addDoctor($doc);


