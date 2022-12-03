<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="page-content p-5">
        <div class="admin-schedule-content">
            <!-- TOP PAGE BAR GOES HERE -->
            <div id="top-bar" class="flex justify-between">
                <div class="flex justify-between">
                    <div class="flex justify-center items-center bg-blue-200 text-sky-800 rounded-md w-[7rem] h-[2.5rem] text-lg font-medium">
                        <a href=""><i class="fa-solid fa-arrow-left"></i></i><span class="m-[8px]">Back</span></a>
                    </div>
                    <h1 class="text-2xl font-semibold ml-5">Schedule Manager</h1>
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
            <div id="schedule-session">
                <h3>Schedule a session</h3>
                <button type="button">
                    <div><i class="fa-regular fa-plus"></i></div>
                    <span>Add a session</span>
                </button>
            </div>

            <div>
                <h4>All Sessions ( <span id="sessions-count">7</span> )</h4>
                <form action="">
                    <label for="session-date-filter">Date:</label>
                    <input type="date" name="session-date-filter">
                    <label for="session-doctor-filter">Doctor:</label>
                    <select name="session-doctor-filter">
                        <option value="0" disabled selected>Choose Doctor Name form the list</option>
                        <option value="1">Mohamed</option>
                        <option value="2">Amine</option>
                        <option value="3">Khalid</option>
                    </select>
                    <button type="submit"><span>Filter</span><i class="fa-solid fa-filter"></i></button>
                </form>
            </div>
            <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 border border-slate-300">
                    <thead class="text-xs text-black  bg-gray-50">
                        <tr>
                            <th scope="col" class="py-3 px-6">
                                Session title
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Doctor
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Schedule Date & Time
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Max num that can be booked
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Event
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b text-xs text-black  bg-gray-50  hover:bg-gray-50 ">
                            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                                Apple MacBook Pro 17"
                            </th>
                            <td class="py-4 px-6">
                                Sliver
                            </td>
                            <td class="py-4 px-6">
                                Laptop
                            </td>
                            <td class="py-4 px-6">
                                Yes
                            </td>
                            <td class="flex items-center py-4 px-6 space-x-3">
                                <a href=""><div class=""><i class="fa-solid fa-eye"></i><span>View</span></div></a>
                                <a href=""><div class=""><i class="fa-solid fa-trash"></i><span>Delete</span></div></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            
        </div>
    </div>
    
    <script src="https://kit.fontawesome.com/6360d947ff.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>
