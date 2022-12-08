<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.4/dist/flowbite.min.css" />


<?php 
    $GLOBALS['page_title']="Admin Doctors";
    include '../includes/head.php';
    include '../classes/Database.php';
    $conn = Database::connect();
        var_dump($conn);
?>
<body>

    <div id="page-content" class="">

        <div id="sidebar" class="">
            <?php include '../includes/admin-sidebar.php';  ?>
        </div>

        <div class="p-5 pl-[18rem] w-full admin-schedule-content">
            <!-- TOP PAGE BAR GOES HERE -->
            <div id="top-bar" class="flex justify-between items-center">
                <div class="flex justify-start  w-5/6" >
                    <a href="" class="w-1/6">
                        <div class="flex justify-center items-center bg-blue-200 text-blue-600 rounded-md w-[7rem] h-[2.5rem] text-lg font-medium">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#1b62b3"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"/></svg><span class="m-[8px]">Back</span>
                        </div>
                    </a>
                    <form action="" class="flex justify-start ml-7 w-5/6" >

                        <div class="w-5/6" >
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#616161" class="fixed mt-2 ml-2 "><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/></svg>
                            <input type="text" placeholder="Search Doctor name or Email" class="border-[1px] rounded h-[2.5rem]  pl-[2rem] w-full" style="font-family:arial,fontawesome;">
                        </div>

                        <button class="flex justify-center items-center bg-blue-500 text-white rounded-md w-[7rem] h-[2.5rem] text-lg font-medium ml-6 w-1/6">
                            <span class="m-[8px]">Search</span>
                        </button>
                    </form>
                </div>
                <div class="flex justify-center content-end">

                    <div class="flex flex-col content-center mr-3">
                        <span class="text-zinc-400 text-end">Today's Date</span>
                        <span class="text-black text-2xl font-semibold">2022-11-01</span>
                    </div>
                    <div class="flex items-center justify-center border-[1px] border-neutral-200 bg-slate-100 rounded-md w-[3rem] h-[3.5rem]">
                        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><g><rect fill="none" height="24" width="24"/></g><g><path d="M19,4h-1V2h-2v2H8V2H6v2H5C3.89,4,3.01,4.9,3.01,6L3,20c0,1.1,0.89,2,2,2h14c1.1,0,2-0.9,2-2V6C21,4.9,20.1,4,19,4z M19,20 H5V10h14V20z M19,8H5V6h14V8z M9,14H7v-2h2V14z M13,14h-2v-2h2V14z M17,14h-2v-2h2V14z M9,18H7v-2h2V18z M13,18h-2v-2h2V18z M17,18 h-2v-2h2V18z"/></g></svg>
                    </div>
                    
                </div>
            </div>
            <!-- ADD DOCTOR  GOES HERE -->
            <div id="schedule-session" class="flex justify-between items-center mt-9">
                <h3 class="text-xl font-semibold">Add New Doctor</h3>
                
                    <div class="flex justify-around bg-blue-600 rounded-md text-white p-1 pl-3 pr-3 w-[8rem] mr-7">
                        <!-- <button data-toggle="modal" data-target="#doctormodal"> -->
                            <button type="button" data-modal-toggle="doctormodal">
                        <!-- <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"/></svg> -->
                        Add New
                        </button>
                    </div>
              
            </div>

                    <!--********** doctor modal here************** -->

                   
                    <!-- Modal toggle -->
                   

                    <!-- Main modal -->
                    <div id="doctormodal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                        <div class="relative w-full h-full max-w-md md:h-auto">
                            <!-- Modal content -->
                            <!-- <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="doctormodal">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                                <div class="px-6 py-6 lg:px-8">
                                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Sign in to our platform</h3>
                                    <form class="space-y-6" action="#">
                                        <div>
                                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                                            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
                                        </div>
                                        <div>
                                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
                                            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                                        </div>
                                        <div class="flex justify-between">
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800" required>
                                                </div>
                                                <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
                                            </div>
                                            <a href="#" class="text-sm text-blue-700 hover:underline dark:text-blue-500">Lost Password?</a>
                                        </div>
                                        <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login to your account</button>
                                        <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                                            Not registered? <a href="#" class="text-blue-700 hover:underline dark:text-blue-500">Create account</a>
                                        </div>
                                    </form>
                                </div>
                            </div> -->
                            <form action="">
        <div class="min-h-screen   flex flex-col justify-center ">
            <div class="relative py-3 max-w-xl sm:mx-auto">
            <div
                    class="absolute inset-0 bg-gradient-to-r from-blue-300 bto-blue-600 shadow-lg transform rounded-3xl">
                </div>
                <div class="relative   bg-white shadow-lg rounded-3xl sm:p-20">
                    <div class="max-w-md mx-auto">
                    <div>
                            <h1 class=" flex justify-center text-2xl font-semibold">Add new doctor </h1>
                        </div>
                        <div>
                        <h6 class=" mb-5 text-gray-500 text-center font-semibold">Add Personal Details </h6>
                        </div>
                        <div class="divide-y divide-gray-200">
                            <div class=" text-base  space-y-4 text-gray-700 text-lg leading-7">
                                <div class="relative">
                                    <input  id="first_name" name="first_name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 outline-none borer-rose-600" placeholder="Email address" />
                                    <label for="first_name" class="ml-4 absolute left-0 -top-3.5 text-gray-600 text-sm  peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">first name</label>
                                </div>
                                <div class="relative">
                                    <input  id="last_name" name="last_name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Email address" />
                                    <label for="last_name" class="ml-4 absolute left-0 -top-3.5 text-gray-600 text-sm  peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">last name</label>
                                </div>


                                <!-- <div class="relative">
                                    <input  id="last_name" name="last_name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Email address" />
                                    <label for="last_name" class="ml-4 absolute left-0 -top-3.5 text-gray-600 text-sm  peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Speciality</label>
                                </div> -->

                                <!--********* select********** -->

                                
<!-- <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an Speciality</label> -->
<select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  <option selected>Choose a speciality</option>
  <option value="US">United States</option>
  <option value="CA">Canada</option>
  <option value="FR">France</option>
  <option value="DE">Germany</option>
</select>

                                <div class="relative">
                                    <input  id="email" name="email" type="email" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Email address" />
                                    <label for="email" class=" ml-4 absolute left-0 -top-3.5 text-gray-600 text-sm  peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Email Address</label>
                                </div>
                                <div class="relative">
                                    <input  id="password" name="password" type="password" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none borer-rose-600" placeholder="Password" />
                                    <label class="ml-4 absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 text-sm">Password</label>
                                </div>
                                <div class="relative">
                                    <input  id="password" name="configpassword" type="password" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none borer-rose-600" placeholder="Password" />
                                    <label class="ml-4 absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 text-sm">Repaite Password</label>
                                </div>
                                <div class="relative">
                                    <button  type="submit" name="submit" class="bg-blue-300 text-blue-700 rounded-md px-4 py-1">Cancel</button>
                                    <button  type="submit" name="submit" class="bg-blue-500 text-white rounded-md px-4 py-1">ADD</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
                        </div>
                    </div> 



                    <!--**********  end modal here ******** -->

            <div class="overflow-x-auto relative shadow-md mt-6 rounded max-h-[35rem] min-h-[20rem] overflow-y-auto w-full m-auto">
                <h3 class="font-semibold text-lg mt-6">All Doctors (<span>3</span>)</h3>
                <table class="w-full text-left border border-slate-300 rounded">
                    <thead class="border-b-4 border-blue-500">
                        <tr class="text-lg text-black  font-medium">
                            <th scope="col" class="py-3 px-6 ">
                                Doctor Name
                            </th>
                            <th scope="col" class="py-3 px-6 text-center">
                                Email
                            </th>
                            <th scope="col" class="py-3 px-6 text-center">
                                Specialités
                            </th>
                            <th scope="col" class="py-3 px-6 text-center">
                                Events
                            </th>
                        </tr>
                    </thead>
                    <tbody class="">
                        <tr class="bg-white border-b text-base font-medium text-black ">
                            <th scope="row" class="py-4 px-6 font-medium ">
                                Test Doctor
                            </th>
                            <td class="py-4 px-6 text-center">
                                Email
                            </td>
                            <td class="py-4 px-6 text-center">
                                Specialités
                            </td>
                            <td class="flex items-center justify-center py-4 px-6 space-x-3">
                                <a href=""><div class="flex justify-center items-center bg-blue-200 text-blue-600 rounded-md w-[7rem] h-[2.5rem] text-lg font-medium"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#1b62b3"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M14.06 9.02l.92.92L5.92 19H5v-.92l9.06-9.06M17.66 3c-.25 0-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.2-.2-.45-.29-.71-.29zm-3.6 3.19L3 17.25V21h3.75L17.81 9.94l-3.75-3.75z"/></svg><span>Edit</span></div></a>
                                <a href=""><div class="flex justify-center items-center bg-blue-200 text-blue-600 rounded-md w-[7rem] h-[2.5rem] text-lg font-medium"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#1b62b3"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 6c3.79 0 7.17 2.13 8.82 5.5C19.17 14.87 15.79 17 12 17s-7.17-2.13-8.82-5.5C4.83 8.13 8.21 6 12 6m0-2C7 4 2.73 7.11 1 11.5 2.73 15.89 7 19 12 19s9.27-3.11 11-7.5C21.27 7.11 17 4 12 4zm0 5c1.38 0 2.5 1.12 2.5 2.5S13.38 14 12 14s-2.5-1.12-2.5-2.5S10.62 9 12 9m0-2c-2.48 0-4.5 2.02-4.5 4.5S9.52 16 12 16s4.5-2.02 4.5-4.5S14.48 7 12 7z"/></svg><span>View</span></div></a>
                                <a href=""><div class="flex justify-center items-center bg-blue-200 text-blue-600 rounded-md w-[7rem] h-[2.5rem] text-lg font-medium"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#1b62b3"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16 9v10H8V9h8m-1.5-6h-5l-1 1H5v2h14V4h-3.5l-1-1zM18 7H6v12c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7z"/></svg><span>Remove</span></div></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            
        </div>
    </div>

    <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
</body>
</html>
