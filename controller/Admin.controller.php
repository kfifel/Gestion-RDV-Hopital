<?php 
require('../includes/autoload.php');

// include ('../admin-interfaces/admin-doctors.php');
// ROUTING
if( isset($_POST['add_doctor']) )  addDoctor();

if( isset($_POST['create-session']) )  createSession();
if( isset($_GET['delete-session']) )  deteSession();
if( isset($_GET['deletebutton']) )  deleteDoctor();

// $res=$doc->getAllDoctors();

function addDoctor(){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $speciality = $_POST['speciality'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $Admin = new Admin (1,'admin', 'ADMIN', 'admin@gmail.com', '123', 'admin'); 
    $doc = new Doctor (null,$first_name, $last_name, $email, $password, 'doctor',$speciality);
    $addDoc=$Admin->addDoctor($doc);
    // if($addDoc){
        // echo "<h1 style='background-color:green;text:center;'>doctor has added <h1>";
    // }
    }
    function getAllDoctor(){
        $doctor = new Admin (1,'admin', 'ADMIN', 'admin@gmail.com', '123', 'admin'); 
        return $doctor->getAllDoctors();

        // foreach($doctor as $row){
        //     echo `<tr class="bg-white border-b text-base font-medium text-black ">
        //     <th scope="row" class="py-4 px-6 font-medium ">
        //        `.$row['first_name'].`
        //     </th>
        //     <td class="py-4 px-6 text-center">
        //     `.$row['email'].`
    
        //     </td>
        //     <td class="py-4 px-6 text-center">
        //     `.$row['speciality'].`
    
        //     </td>
        //     <td class="flex items-center justify-center py-4 px-6 space-x-3">
        //         <a href=""><div class="flex justify-center items-center bg-blue-200 text-blue-600 rounded-md w-[7rem] h-[2.5rem] text-lg font-medium"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#1b62b3"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M14.06 9.02l.92.92L5.92 19H5v-.92l9.06-9.06M17.66 3c-.25 0-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.2-.2-.45-.29-.71-.29zm-3.6 3.19L3 17.25V21h3.75L17.81 9.94l-3.75-3.75z"/></svg><span>Edit</span></div></a>
        //         <a href=""><div class="flex justify-center items-center bg-blue-200 text-blue-600 rounded-md w-[7rem] h-[2.5rem] text-lg font-medium"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#1b62b3"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 6c3.79 0 7.17 2.13 8.82 5.5C19.17 14.87 15.79 17 12 17s-7.17-2.13-8.82-5.5C4.83 8.13 8.21 6 12 6m0-2C7 4 2.73 7.11 1 11.5 2.73 15.89 7 19 12 19s9.27-3.11 11-7.5C21.27 7.11 17 4 12 4zm0 5c1.38 0 2.5 1.12 2.5 2.5S13.38 14 12 14s-2.5-1.12-2.5-2.5S10.62 9 12 9m0-2c-2.48 0-4.5 2.02-4.5 4.5S9.52 16 12 16s4.5-2.02 4.5-4.5S14.48 7 12 7z"/></svg><span>View</span></div></a>
        //         <a href=""><div class="flex justify-center items-center bg-blue-200 text-blue-600 rounded-md w-[7rem] h-[2.5rem] text-lg font-medium"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#1b62b3"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16 9v10H8V9h8m-1.5-6h-5l-1 1H5v2h14V4h-3.5l-1-1zM18 7H6v12c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7z"/></svg><span>Remove</span></div></a>
        //     </td>
        // </tr>`;
        // }
     }

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
                    <a href="">
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
    $Admin = new Admin (1,'admin', 'ADMIN', 'admin@gmail.com', '123', 'admin'); 
    $Admin->deleteDoctor($_GET['deletebutton']);
}