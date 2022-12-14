<!doctype html>
<html lang="en">
<?php
$GLOBALS['page_title']="My booking";
require "../includes/head.php";
?>

<body>
<?php
$GLOBALS['current_page'] = 'my_bookings';
include('../includes/paitent-sidebar.php');
?>
<main class="ml-64 p-6 admin-dashboard flex flex-col gap-3">
    <div class="flex   justify-between gap-5">
        <div class="flex gap-2 items-center">
            <button class=" flex gap-2 pl-2 pr-4 py-1 text-blue-600 rounded-md font-bold bg-blue-100">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#1b62b3"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"/></svg>
                Back
            </button>
            <h1 class="text-xl semi-bold"> Booking Manager</h1>
        </div>
        <div class="date flex gap-2">
            <div class="font-bold">
                <small class="block text-slate-500 text-right">Today's Date</small>
                <span class=""><?=date('Y-m-d')?></span>
            </div>
            <div class="h-11 w-11 flex justify-center items-center border-2 rounded bg-slate-100">
                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><g><rect fill="none" height="24" width="24"/></g><g><path d="M19,4h-1V2h-2v2H8V2H6v2H5C3.89,4,3.01,4.9,3.01,6L3,20c0,1.1,0.89,2,2,2h14c1.1,0,2-0.9,2-2V6C21,4.9,20.1,4,19,4z M19,20 H5V10h14V20z M19,8H5V6h14V8z M9,14H7v-2h2V14z M13,14h-2v-2h2V14z M17,14h-2v-2h2V14z M9,18H7v-2h2V18z M13,18h-2v-2h2V18z M17,18 h-2v-2h2V18z"/></g></svg>
            </div>
        </div>
    </div>
    <div>
        <i class="bx bx-calendar"></i>
    </div>
    <h6 class ="font-bold m-4 p-2">
        All Bookings <span>(2)</span>
    </h6>
    <form action="#" method="post">
        <div class="flex items-center ml-2 border rounded p-1">
            <div class ="border-[1px] rounded w-5/6 h-[2.6rem]">
                <label for="date" class="ml-16"> Date:</label>
                <input class="py-1 px-10 border rounded " type="date" name="date" id="date">
            </div>
            <div class="ml-auto">
                <button type="submit" class=" flex gap-2 px-8 py-2 text-blue-600 rounded-md font-bold bg-blue-100" >
                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#1b62b3"><g><path d="M0,0h24 M24,24H0" fill="none"/><path d="M7,6h10l-5.01,6.3L7,6z M4.25,5.61C6.27,8.2,10,13,10,13v6c0,0.55,0.45,1,1,1h2c0.55,0,1-0.45,1-1v-6 c0,0,3.72-4.8,5.74-7.39C20.25,4.95,19.78,4,18.95,4H5.04C4.21,4,3.74,4.95,4.25,5.61z"/><path d="M0,0h24v24H0V0z" fill="none"/></g></svg>
                    Filter
                </button>
            </div>
        </div>
    </form>
    <section>
        <div class="grid xl:grid-cols-2  grid-cols-1 gap-4">
                        <div class="border-[2px] rounded-md p-4 flex flex-col pl-[2.5rem]">
                            <h5 class="text-blue-500 text-2xl font-semibold mt-2">Test Session</h5>
                            <p class="font-extralight font-semibold" style="font-family: arial;">
                                <br>
                                <span class="font-bold text-xl my-4"> Appointment Number : </span> <br>
                                <span class="text-3xl font-bold my-10">01</span> <br>
                                <cite class="my-4"> Name doctor </cite> <br>
                                Scheduled date: <span class="font-bold">2022-12-15</span><br>
                                Starts at : <span class="font-bold">@18:00</span> (24h)
                            </p>
                            <button class="flex justify-center items-center bg-blue-200 text-blue-600 rounded-md w-full m-auto h-[2.5rem] text-lg font-medium mt-[3rem]">
                                <span class="m-[8px]">Cancel Book</span>
                            </button>
                        </div>
                        <div class="border-[2px] rounded-md p-4 flex flex-col pl-[2.5rem]">
                            <h5 class="text-blue-500 text-2xl font-semibold mt-2">Test Session</h5>
                            <p class="font-extralight font-semibold" style="font-family: arial;">
                                <br>
                                <span class="font-bold text-xl my-4"> Appointment Number : </span> <br>
                                <span class="text-3xl font-bold my-10">02</span> <br>
                                <cite class="my-4"> Name doctor </cite> <br>
                                Scheduled date: <span class="font-bold">2022-12-15</span><br>
                                Starts at : <span class="font-bold">@18:00</span> (24h)
                            </p>
                            <button class="flex justify-center items-center bg-blue-200 text-blue-600 rounded-md w-full m-auto h-[2.5rem] text-lg font-medium mt-[3rem]">
                                <span class="m-[8px]">Cancel Book</span>
                            </button>
                        </div>


        </div>
    </section>
</main>
</body>
</html>