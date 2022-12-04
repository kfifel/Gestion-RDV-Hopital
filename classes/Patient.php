<?php
spl_autoload_register('autoload');

class Patient extends Person
{
    public string $date_of_birth;

    public function __construct(int|null $id, string $first_name, string $last_name, string $email, string $password, string $date_of_birth)
    {
        $this->date_of_birth = $date_of_birth;
        parent::__construct($id, $first_name, $last_name, $email, hash("sha256", $password), "patient");
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
        $conn = Database::connect();

        $query = "INSERT INTO Person ( `first_name`, `last_name`, `email`, `password`, `role`) VALUES (?, ?, ?, ?, ?)";
        $sth = $conn->prepare($query);
        $resp = $sth->execute(array( $this->first_name, $this->last_name, $this->email,$this->password, $this->role ));
        if($resp){
            $query1 = "SELECT `id` from `person` where `email` = '$this->email' and `password` = '$this->password'";
            $sth1 = $conn->prepare($query1);
            $sth1->execute();
            $resp1 = $sth1->fetch();
            $id_Person_added = $resp1['id'];
            $query2 = "INSERT INTO Patient (id, date_of_birth) VALUES ( $id_Person_added,'$this->date_of_birth') ";
            $sth2 = $conn->prepare($query2);
            $res = $sth2->execute();
            if($res)
                return (array(true));
            else
                return array(false ,$sth->errorInfo());
        }
        return array(false ,$sth->errorInfo());
    }

}

$conn = database::connect();
/*$req1 = "SELECT p.*, p2.date_of_birth  from `person` p join patient p2 on p.id = p2.id
           where `email` = 'khalid@gmail.com' and `password` = 'password'";

$query = "INSERT INTO Person ( first_name, last_name, email, password, role)
VALUES ('khalid', 'fifel', 'khalid@gmail.com', 'password', 'admin')";
$sth = $conn->prepare($req1);
$sth->execute();
//$sth->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Patient');
$res1 = $sth->fetchObject();

echo "<pre>";
var_dump($res1);
echo "</pre>";*/

$khalid = new Patient(null, 'khalid2', "fifel2", "p2@p.com", '123', "2000-01-09");
print_r($khalid->createPatient());


function autoload($className): void
{
    require_once "$className.php";
}