<?php
    include_once '../includes/autoload.php';


    if (isset($_POST["login"])) Authentification::login();

    if (isset($_POST["save"])) {
        $me = new Patient(1, $_POST["first_name"], $_POST["last_name"], $_POST["email"], $_POST["password"], "patient", "2022-12-12");
        $me->addPatient();
    }

class Authentification
{

    public static function login()
    {
        $conn = Database::connect();
        $email = $_POST['user'];
        $password = $_POST['password'];
        $sql = "select * from (
                         select d.id as id, d.role as role  from doctor  d where   d.email = :email AND d.password = :password 
                  UNION  select p.id as id, p.role as role  from Patient p where   p.email = :email AND p.password = :password
                  UNION  select a.id as id, a.role as role  from Admin   a where   a.email = :email AND a.password = :password       
                ) as user";
        $sth = $conn->prepare($sql);
        $sth->bindValue(':password', $password);
        $sth->bindValue(':email', $email);
        $sth->execute();
        $res = $sth->fetch(PDO::FETCH_ASSOC);

        if (count($res)) {
            $query = "SELECT * FROM ".$res['role']." as u where u.id = ".$res['id'];

            $result = $conn->query($query)->fetch(PDO::FETCH_ASSOC);
            if ($result['role'] == "admin") {
                $_SESSION['admin']= new Admin($result['id'], $result['first_name'], $result['last_name'], $result['email'], $result['password'], $result['role']);

                header('location: ../SingUp.php');// localiser vers dashboard admin
            } else if ($result['role'] == "patient") {
                $_SESSION['user']= new Patient($result['id'], $result['first_name'], $result['last_name'], $result['email'], $result['password'], $result['role'], $result['date_of_birth']);

                header('location: ../SingUp.php');// localiser vers dashboard patient
            } else if ($result['role'] == "doctor") {
                $_SESSION['doctor']= new Doctor($result['id'], $result['first_name'], $result['last_name'], $result['email'], $result['password'], $result['role'], $result['speciality']);

                header('location: ../SingUp.php'); // localiser vers dashboard doctor
            }
        } else {
            $_SESSION['message'] = 'password or email are incorrect';
            header('location: ../SingIn.php');
        }
    }
}