<?php
require_once '../includes/autoload.php';


class Admin extends Person
{  
    
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

    public function getAllAppointments(){
        $conn = Database::connect();     // :: ->  for static methods or properties 
        $requete = "SELECT appointment.id, appointment.order, appointment.date, patient.first_name,patient.last_name ,session.title  FROM `appointment` 
                    INNER JOIN `patient` on patient.id= appointment.id_patient
                    INNER JOIN `session` on appointment.id_session = session.id"    ; 
        $res = $conn->query($requete); 
        return $res->fetchAll(PDO::FETCH_ASSOC);
    }
}



