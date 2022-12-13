<?php
require_once '../includes/autoload.php';


class Admin extends Person
{
    public function cancelAppointment($id_appointment):bool{
        //when we cancel an appointment we should update Session available places
        //the function returns false if something went wrong true otherwise
        try {
            $req = Database::connect()->query("SELECT id_session from appointment where id like $id_appointment");
            $result_id_session = $req->fetchAll(PDO::FETCH_ASSOC);
            isset($result_id_session[0]['id_session']) ? $id_session = $result_id_session[0]['id_session'] : $id_session = null;
    
            Database::connect()->query("UPDATE Session SET `max_patient` = max_patient+1 WHERE `id` like $id_session");
            Database::connect()->query("DELETE from appointment where id like $id_appointment");
            Database::disconnect();

            return true;
        } catch (Exception $e) {
            Database::disconnect();
            return false;
        }

    }
    
}

// test 
// $Admin = new Admin(null,'fn','ln','email','pass','admin');
// echo $Admin->cancelAppointment(16);



