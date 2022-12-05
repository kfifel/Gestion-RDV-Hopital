<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div id="page-content" class="flex flex-wrap">
        <div id="sidebar" class="w-1/6">
            sidebar
        </div>
    
        <div class="p-5 w-5/6">
            <div class="admin-schedule-content">
                <!-- TOP PAGE BAR GOES HERE -->
                <div id="top-bar" class="flex justify-between">
                    <div class="flex justify-between">
                        <a href="">
                            <div class="flex justify-center items-center bg-blue-200 text-blue-600 rounded-md w-[7rem] h-[2.5rem] text-lg font-medium">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#1b62b3"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"/></svg><span class="m-[8px]">Back</span>
                            </div>
                        </a>
                        <form action="" class="flex justify-center ml-7">
                            <input type="text" placeholder="&#xf002; Search Doctor name or Email" class="border-[1px] rounded h-[2.5rem] w-[35rem] pl-3" style="font-family:arial,fontawesome;">
                            <div class="flex justify-center items-center bg-blue-500 text-white rounded-md w-[7rem] h-[2.5rem] text-lg font-medium ml-6">
                                <span class="m-[8px]">Search</span>
                            </div>
                        </form>
                    </div>
                    <div class="flex justify-center content-end">
    
                        <div class="flex flex-col content-center mr-3">
                            <span class="text-zinc-400 text-end">Today's Date</span>
                            <span class="text-black text-2xl font-semibold">2022-11-01</span>
                        </div>
                        <div class="flex items-center justify-center border-[1px] border-neutral-200 bg-slate-100 rounded-md w-[3rem] h-[3.5rem]">
                            <i class="fa-solid fa-calendar-days text-2xl text-stone-700"></i>
                        </div>
                        
                    </div>
                </div>
                <!-- ADD SESSION GOES HERE -->
                <div id="schedule-session" class="flex justify-between items-center mt-9">
                    <h3 class="text-xl font-medium">Add New Doctor</h3>
                    <a href="">
                        <div type="button" class="flex justify-around bg-blue-600 rounded-md text-white p-1 pl-3 pr-3 w-[8rem] mr-7">
                            <div><i class="fa-regular fa-plus"></i></div>
                            <span>Add New</span>
                        </div>
                    </a>
                </div>

                <div class="overflow-x-auto relative shadow-md mt-6 rounded max-h-[35rem] min-h-[20rem] overflow-y-auto w-5/6">
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
    </div>

    <script src="https://kit.fontawesome.com/6360d947ff.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>
