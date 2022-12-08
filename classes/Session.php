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

    static public function  readSession($date=null,$doctor=null){ 
        $conn=Database::connect();
        if ($date==null&&$doctor==null){
            $sql="SELECT session.id,`title`, `date_start`, `max_patient`, `first_name`as `first_name_doctor`,`last_name`as `last_name_doctor` 
                  FROM `session` 
                  INNER JOIN doctor on id_doctor=doctor.id";
        }
        else {
            $sql="SELECT session.id,`title`, `date_start`, `max_patient`, `first_name`as `first_name_doctor`,`last_name`as `last_name_doctor` 
                  FROM `session` 
                  INNER JOIN doctor on session.id_doctor=doctor.id
                  WHERE date_start='$date' AND (first_name LIKE '%$doctor%' OR last_name LIKE '%$doctor%')";
        }
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        Database::disconnect();
        return $result;
    }

    public function  createSession(){
        try {
            $conn=Database::connect();
            $sql="INSERT INTO `session`( `title`, `date_start`, `max_patient`, `id_doctor`) VALUES (?,?,?,?)";
            $stmt=$conn->prepare($sql);
            $stmt->execute([$this->title,$this->date_start,$this->max_patients,'2']);
            Database::disconnect();
            header('Location: ../admin-interfaces/admin-schedule.php');
        } catch (Exception $e) {
            echo 'Message: ' .$e->getMessage();
        }
    }

    public function  deleteSession($id){
    try {
       $conn=Database::connect();
       $sql="DELETE FROM `session` WHERE id=$id";
       $stmt = $conn->prepare($sql);
       $stmt->execute();
       Database::disconnect();
       header('Location: ../admin-interfaces/admin-schedule.php');
    } 
    catch (Exception $e) {
        echo 'Message: ' .$e->getMessage();
    }
    }    
}
