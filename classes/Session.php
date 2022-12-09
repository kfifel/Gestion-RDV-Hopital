<?php
class Session
{

    private function createSession (){
        
    }

    public function showSessions()
    {   
        $conn=Database::connect();
        $sql="SELECT `title`, `date_start`, `max_patient`, `first_name`as `first_name_doctor`,`last_name`as `last_name_doctor` FROM `session` INNER JOIN doctor on id_doctor=doctor.id";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // echo "<pre>";
        //     var_dump($result);
        // echo "</pre>";
        // die;
        Database::disconnect();
        return $result;
    }
}
