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

        <div class="p-5 w-5/6  pr-[8rem]">
            <div id="top-bar" class="flex justify-between">
                <div class="flex justify-between items-center">
                    <a href="">
                        <div class="flex justify-center items-center bg-blue-200 text-sky-800 rounded-md w-[7rem] h-[2.5rem] text-lg font-medium">
                            <i class="fa-solid fa-arrow-left"></i></i><span class="m-[8px]">Back</span>
                        </div>
                    </a>
                    <form action="" class="flex justify-center ml-7">
                        <input type="text" placeholder="&#xf002; Search Doctor name or Email or Date (YYY-MM-DDD)" class="border-[1px] rounded h-[2.5rem] w-[35rem] pl-3" style="font-family:arial,fontawesome;">
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

            <div class="mt-6 ">
                <h5 class="font-medium text-xl">All Sessions (<span>6</span>)</h5>
            </div>

            <div class="border-[2px] rounded-md mt-[9rem] p-6 flex flex-col pl-[2.5rem]">
                <h5 class="text-blue-500 text-2xl font-semibold mt-4">Test Session</h5>
                <p class="font-extralight font-semibold mt-[2.6rem]" style="font-family: arial;">
                    <span class="font-bold">Test Doctor</span> <br>
                    2050-01-01  <br>
                    Starts: <span class="font-bold">@18:00</span> (24h)
                </p>
                <button class="flex justify-center items-center bg-blue-200 text-sky-800 rounded-md w-full h-[2.5rem] text-lg font-medium mt-[3rem]">
                    <span class="m-[8px]">Book Now</span>
                </button>
            </div>
        </div>
        
    </div>

    <script src="https://kit.fontawesome.com/6360d947ff.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>
