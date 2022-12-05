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
                            <div class="flex justify-center items-center bg-blue-200 text-sky-800 rounded-md w-[7rem] h-[2.5rem] text-lg font-medium">
                                <i class="fa-solid fa-arrow-left"></i></i><span class="m-[8px]">Back</span>
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
                                    <a href=""><div class="flex justify-center items-center bg-blue-200 text-sky-800 rounded-md w-[7rem] h-[2.5rem] text-lg font-medium"><i class="fa-light fa-pencil mr-2" style="font-family:fontawesome;"></i><span>Edit</span></div></a>
                                    <a href=""><div class="flex justify-center items-center bg-blue-200 text-sky-800 rounded-md w-[7rem] h-[2.5rem] text-lg font-medium"><i class="fa-solid fa-eye mr-2"></i><span>View</span></div></a>
                                    <a href=""><div class="flex justify-center items-center bg-blue-200 text-sky-800 rounded-md w-[7rem] h-[2.5rem] text-lg font-medium"><i class="fa-solid fa-trash mr-2"></i><span>Remove</span></div></a>
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
