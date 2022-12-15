<?php 
require('../includes/autoload.php');
// ROUTING
if( isset($_POST['create-session']) )  createSession();
if( isset($_GET['delete-session']) )  deteSession();
if( isset($_GET['view-session']) )  viewSession();


function createSession(){
    $title=$_POST['session-title'];
    $doctor_id=$_POST['session-doctor'];
    $date=$_POST['session-date'];
    $max_patients=$_POST['session-patients'];
    $MySession= new Session($title,$doctor_id,$date,$max_patients);
    $admin= new Admin(1,"Mohamed","Amine","amineelaabdi@gmail.com","123","admin");
    $admin->createSession($MySession);
}

function deteSession(){
    $admin=new Admin(1,"Mohamed","Amine","amineelaabdi@gmail.com","123","admin");
    $admin->deleteSession($_GET['delete-session']);
}

function readSession(){
    $date = isset($_POST['session-date-filter']) ? $_POST['session-date-filter'] : null;
    $doctor = isset($_POST['session-doctor-filter']) ? $_POST['session-doctor-filter'] : null;
    $MyData=Admin::readSession($date,$doctor);
    // var_dump($MyData);
    // die;
    foreach ($MyData as $row)
    {
        echo '<tr class="bg-white border-b  font-medium text-black ">
                <th scope="row" class="py-3 px-6 font-medium">
                    '.$row['title'].'
                </th>
                <td class="py-4 px-6">
                    '.$row['last_name_doctor']." ".$row['first_name_doctor'].'
                </td>
                <td class="py-4 px-6">
                    '.$row['date_start'].'
                </td>
                <td class="py-4 px-6">
                    '.$row['max_patient'].'
                </td>
                <td class="flex items-center py-4 px-6 space-x-3">
                    <a href="?view-session='.$row['title'].'">
                        <div class="flex justify-center items-center bg-blue-200 text-blue-600 rounded-md w-[7rem] h-[2.5rem] text-lg font-medium">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#1b62b3"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 6c3.79 0 7.17 2.13 8.82 5.5C19.17 14.87 15.79 17 12 17s-7.17-2.13-8.82-5.5C4.83 8.13 8.21 6 12 6m0-2C7 4 2.73 7.11 1 11.5 2.73 15.89 7 19 12 19s9.27-3.11 11-7.5C21.27 7.11 17 4 12 4zm0 5c1.38 0 2.5 1.12 2.5 2.5S13.38 14 12 14s-2.5-1.12-2.5-2.5S10.62 9 12 9m0-2c-2.48 0-4.5 2.02-4.5 4.5S9.52 16 12 16s4.5-2.02 4.5-4.5S14.48 7 12 7z"/></svg><span>View</span>
                        </div>
                    </a>

                    <a href="../controller/Admin.controller.php?delete-session='.$row['id'].'">
                        <div class="flex justify-center items-center bg-blue-200 text-blue-600 rounded-md w-[7rem] h-[2.5rem] text-lg font-medium">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#1b62b3"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16 9v10H8V9h8m-1.5-6h-5l-1 1H5v2h14V4h-3.5l-1-1zM18 7H6v12c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7z"/></svg><span>Remove</span>
                        </div>
                    </a>
                </td>
            </tr>';
    }
    unset($_POST['session-date-filter']);
    unset($_POST['session-doctor-filter']);
}
function setDoctorAsOptions(){
    $admin=new Admin(1,"Mohamed","Amine","amineelaabdi@gmail.com","123","admin");
    $MyDoctors=$admin->getAllDoctors();
    foreach($MyDoctors as $doctor)
    {   
        $doctorFullName=$doctor['first_name']." ".$doctor['last_name'];
        echo '<option value="'.$doctor['id'].'">'.$doctorFullName.'</option>';
    }
}
function deleteDoctor(){
    $admin= new Admin(1,"Mohamed","Amine","amineelaabdi@gmail.com","123","admin");
    $admin->deleteDoctor(2);
}

function viewSession(){
    $session=strtolower($_GET['view-session']);
    $admin=new Admin(1,"Mohamed","Amine","amineelaabdi@gmail.com","123","admin");
    $MyAppoits=$admin->getAllAppointments();
    echo '  <div id="view-sessionn-modal" class="">
                <div id="modal-background" class="w-screen h-screen fixed top-0 left-0 z-30"style="background-color:RGBA(0,0,0,0.57);"></div>
                <div id="modal-content" class=" w-[30rem] fixed top-0  mt-[10rem] bg-white rounded-lg z-40 h-96" style="left:35%;">
                        <div id="modal-header"class="text-center font-semibold text-xl p-2 pt-4 ">
                            '.$_GET['view-session'].'
                        </div>  ';
    echo '              <div class="flex flex-col justify-between h-24" style="border :solid red;">';
    echo  '                 <div>';
    foreach ($MyAppoits as $row) {

        if($row['title']==$session )
        {   
            echo '<span class="font-semibold">Patient :</span>  ';
            echo'<span>'.$row["last_name"]." ".$row["first_name"].'</span>';
            echo'<br>'; 
            echo '<span class="font-semibold">Date :</span>  ';
            echo'<span>'.$row["date"].'</span>';
            echo'<br>';                   
        }
    }
    echo  '                 </div>';
    echo '                  <button class="flex justify-between bg-red-600 rounded-md text-white p-1 pl-3 pr-3 w-[5rem] ml-6 font-semibold">Cancel</button>
                        </div>
                </div>
            </div>';
    unset($_GET['view-session']);
}

// foreach ($MyAppoits as $row) {

//     if($row['title']==$session )
//     {   
//         echo '<span class="font-semibold">Patient :</span>  ';
//         echo'<span>'.$row["last_name"]." ".$row["first_name"].'</span>';
//         echo'<br>'; 
//         echo '<span class="font-semibold">Date :</span>  ';
//         echo'<span>'.$row["date"].'</span>';
//         echo'<br>';                   
//     }
// }