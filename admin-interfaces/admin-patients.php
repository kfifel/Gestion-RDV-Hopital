<!doctype html>
<html lang="en">
<?php
$GLOBALS['page_title']="All patient";
require "../includes/head.php";
?>
<body>
<?php
$GLOBALS['current_page'] = 'patients';
include('../includes/admin-sidebar.php');
?>
<main class="ml-64 p-6 admin-dashboard flex flex-col gap-3">
    <div class="header flex justify-between">
        <div class="flex gap-2 items-center">
            <button class=" flex gap-2 px-4 py-1 text-blue-600 rounded-md font-bold bg-blue-100">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#1b62b3"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"/></svg>
                Back
            </button>
        </div>
        <form class="search flex gap-2 items-center w-100">
            <div class="border-2 rounded p-1 px-3 flex items-center ">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#616161"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/></svg>
                <input class="p-2 h-7 border-0 rounded w-full focus:outline-0" type="text" name="search" placeholder="Search patient name or email">
            </div>
            <button class="bg-blue-600  px-4 h-8 rounded text-white" type="submit" name="search" >Search</button>
        </form>
        <div class="date flex gap-2">
            <div class="font-bold">
                <small class="block text-slate-500 text-right">Today's Date</small>
                <span class="">2022-20-11</span>
            </div>
            <div class="h-11 w-11 flex justify-center items-center border-2 rounded bg-slate-100">
                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><g><rect fill="none" height="24" width="24"/></g><g><path d="M19,4h-1V2h-2v2H8V2H6v2H5C3.89,4,3.01,4.9,3.01,6L3,20c0,1.1,0.89,2,2,2h14c1.1,0,2-0.9,2-2V6C21,4.9,20.1,4,19,4z M19,20 H5V10h14V20z M19,8H5V6h14V8z M9,14H7v-2h2V14z M13,14h-2v-2h2V14z M17,14h-2v-2h2V14z M9,18H7v-2h2V18z M13,18h-2v-2h2V18z M17,18 h-2v-2h2V18z"/></g></svg>
            </div>
        </div>
    </div>

    <h6 class ="font-bold m-4 p-2">
        All Patients <span>(2)</span>
    </h6>

    <section>
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full">
                            <thead class="bg-white border-b-4 border-sky-400 font-bold">
                            <tr>
                                <th scope="col" class="text-sm text-gray-900 px-6 py-4 text-left ">
                                    First Name
                                </th>
                                <th scope="col" class="text-sm text-gray-900 px-6 py-4 text-left">
                                    Last name
                                </th>
                                <th scope="col" class="text-sm text-gray-900 px-6 py-4 text-left">
                                    Email
                                </th>
                                <th scope="col" class="text-sm text-gray-900 px-6 py-4 text-left">
                                    Date of Birth
                                </th>
                                <th scope="col" class="text-sm text-gray-900 px-6 py-4 text-left">
                                    Events
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    patient name
                                </td>
                                <td class="text-sm text-gray-900 font-medium  px-6 py-4 whitespace-nowrap">
                                    patient email
                                </td>
                                <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                    Speciality
                                </td>
                                <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                    2000-01-09
                                </td>
                                <td class="flex text-sm gap-4 px-5 text-gray-900 font-light px-4 py-4 whitespace-nowrap">
                                    <button onclick="show_addSession_modal()" class="px-4 flex gap-4 items-center py-2 text-blue-600 rounded-md font-bold bg-blue-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#1b62b3"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 6c3.79 0 7.17 2.13 8.82 5.5C19.17 14.87 15.79 17 12 17s-7.17-2.13-8.82-5.5C4.83 8.13 8.21 6 12 6m0-2C7 4 2.73 7.11 1 11.5 2.73 15.89 7 19 12 19s9.27-3.11 11-7.5C21.27 7.11 17 4 12 4zm0 5c1.38 0 2.5 1.12 2.5 2.5S13.38 14 12 14s-2.5-1.12-2.5-2.5S10.62 9 12 9m0-2c-2.48 0-4.5 2.02-4.5 4.5S9.52 16 12 16s4.5-2.02 4.5-4.5S14.48 7 12 7z"/></svg>
                                        Overview
                                    </button>
                                </td>
                            </tr>
                            <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    patient name
                                </td>
                                <td class="text-sm text-gray-900 font-medium  px-6 py-4 whitespace-nowrap">
                                    patient Email
                                </td>
                                <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                    speciality
                                </td>
                                <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                    2000-01-09
                                </td>
                                <td class="flex text-sm gap-4 px-5 text-gray-900 font-light px-4 py-4 whitespace-nowrap">
                                    <a href="./admin-patients.php?id=2">
                                        <button class="px-4 flex gap-4 items-center py-2 text-blue-600 rounded-md font-bold bg-blue-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#1b62b3"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 6c3.79 0 7.17 2.13 8.82 5.5C19.17 14.87 15.79 17 12 17s-7.17-2.13-8.82-5.5C4.83 8.13 8.21 6 12 6m0-2C7 4 2.73 7.11 1 11.5 2.73 15.89 7 19 12 19s9.27-3.11 11-7.5C21.27 7.11 17 4 12 4zm0 5c1.38 0 2.5 1.12 2.5 2.5S13.38 14 12 14s-2.5-1.12-2.5-2.5S10.62 9 12 9m0-2c-2.48 0-4.5 2.02-4.5 4.5S9.52 16 12 16s4.5-2.02 4.5-4.5S14.48 7 12 7z"/></svg>
                                            Overview
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<div id="modal-container" class="" style="display:none;">
    <div id="modal-background" class="w-screen h-screen fixed top-0 left-0 z-30"style="background-color:RGBA(0,0,0,0.57);"></div>
    <div id="modal-content" class=" w-[50rem] fixed top-0  mt-[5rem] bg-white rounded-lg z-40" style="left:20%;">
        <div id="modal-header"class="text-center font-semibold text-xl p-2 pt-4 ">
            Overview patient
        </div>
        <hr>
        <div class="overflow-y-auto  h-96">
            <div id="modal-header"class="text-start font-semibold text-l p-2 pt-4 ">
                Detail patient :
            </div>
            <div class="flex flex-col p-5 pb-0 ml-6">
                <div class="flex flex-row mb-5">
                    <label class="text-sm text-slate-600 font-semibold mb-1">First Name: </label>
                    <label class="text-sm text-slate-900 font-semibold mb-1 mx-4"> Khalid</label>
                </div>
                <div class="flex flex-row mb-5">
                    <label class="text-sm text-slate-600 font-semibold mb-1">Last name: </label>
                    <label class="text-sm text-slate-900 font-semibold mb-1 mx-4"> FIFEL</label>
                </div>
                <div class="flex flex-row mb-5">
                    <label class="text-sm text-slate-600 font-semibold mb-1">Email: </label>
                    <label class="text-sm text-slate-900 font-semibold mb-1 mx-4"> Khalid.fifel.official@gmail.com</label>
                </div>
                <div class="flex flex-row mb-5">
                    <label class="text-sm text-slate-600 font-semibold mb-1">Date of Birth: </label>
                    <label class="text-sm text-slate-900 font-semibold mb-1 mx-4"> 2022-01-09</label>
                </div>
            </div>
            <hr>
            <div class="flex flex-col p-5 pb-0 ml-6">
                <h2 class="text-start font-semibold text-l p-2 py-3">All session recorded :</h2>
                <div class="">
                    <table class="w-full text-left border border-slate-300 rounded-2" >
                        <thead class="border-b-4 border-blue-500">
                            <tr class="text-md text-black  font-medium p-3">
                                <th scope="col" class=" p-3">
                                    Session title
                                </th>
                                <th scope="col" class="p-3">
                                    Schedule Date & Time
                                </th>
                                <th scope="col" class="p-3 text-center">
                                    Max num
                                </th>
                            </tr>
                        </thead>
                        <tbody class="">
                        <tr class="bg-white border-b  font-medium text-black ">
                            <th scope="row" class="py-3 px-6 font-medium">
                                Test Session
                            </th>
                            <td class="py-4 px-6">
                                2030-01-01 18:00
                            </td>
                            <td class="py-4 px-6 text-center">
                                50
                            </td>
                        </tr>
                        <tr class="bg-white border-b  font-medium text-black ">
                            <th scope="row" class="py-3 px-6 font-medium">
                                Test Session
                            </th>
                            <td class="py-4 px-6">
                                2030-01-01 18:00
                            </td>
                            <td class="py-4 px-6 text-center">
                                50
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div id="modal-footer" class="flex justify-end bg-gray-200 border-t-2 p-2 rounded-b-lg">
            <button type="button" onclick="hide_addSession_modal()" class="bg-red-600 rounded-md w-24 h-[2.5rem] text-white">Cancel</button>
        </div>
    </div>
</div>

<script>
        function show_addSession_modal()
        {
            document.querySelector('#modal-container').removeAttribute("style");
        }
        function hide_addSession_modal()
        {
            document.querySelector('#modal-container').setAttribute("style","display:none;");
        }
</script>
</body>
</html>