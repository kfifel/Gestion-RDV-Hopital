<!DOCTYPE html>
<html lang="en">
 <head>
  
    <?php
        $GLOBALS['page_title'] = 'Appointment Dashboard';
        include('../includes/head.php');
        require '../controller/Admin.controller.php';

    ?>
</head> 

<body>    
    <?php 
        $GLOBALS['current_page'] = 'doctors';
        include '../includes/admin-sidebar.php';
    ?>

  <main class="pl-20 ml-80 p-8">
        <div class="relative w-full h-full max-w-md md:h-auto">
            <form  action="admin-doctors.php" method="POST">
                <div class="min-h-screen   flex flex-col justify-center ">
                    <div class="relative py-3 max-w-xl sm:mx-auto">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-300 bto-blue-600 shadow-lg transform rounded-3xl"></div>
                        <div class="relative   bg-white shadow-lg rounded-3xl sm:p-20">
                            <div class="max-w-md mx-auto">
                            <div><h1 class=" flex justify-center text-2xl font-semibold">Edit Doctor </h1></div>
                                <div>
                                    <h6 class=" mb-5 text-gray-500 text-center font-semibold">Edit Personal Details </h6>
                                </div>
                                <div class="divide-y divide-gray-200">
                                    <div class=" text-base  space-y-4 text-gray-700 text-lg leading-7">
                                        <?php
                                        $doctor=doctorDetails();
                                        ?>
                                        <div class="relative">
                                            <input  id="first_name" value="<?=$doctor['first_name'];?>" name="first_name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 outline-none borer-rose-600" placeholder="Email address" />
                                            <label for="first_name" class="ml-4 absolute left-0 -top-3.5 text-gray-600 text-sm  peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">first name</label>
                                        </div>
                                        <div class="relative">
                                            <input  id="last_name" value="<?=$doctor['last_name'];?>" name="last_name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Email address" />
                                            <label for="last_name" class="ml-4 absolute left-0 -top-3.5 text-gray-600 text-sm  peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">last name</label>
                                        </div>                              
                                            <select id="countries" name ="speciality" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option  selected disabled>Choose a speciality</option>
                                            <option value=1 <?php echo $doctor['speciality'] == 1 ? 'selected':''; ?>>cardio</option>
                                            <option value=2 <?php echo $doctor['speciality'] == 2 ? 'selected':''; ?>>Endocrinology</option>
                                            <option value=3 <?php echo $doctor['speciality'] == 3 ? 'selected':''; ?>>Nurse</option>
                                            </select>
                                        <div class="relative">
                                            <input  id="email" value="<?=$doctor['email'];?>" name="email" type="email" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Email address" />
                                            <label for="email" class=" ml-4 absolute left-0 -top-3.5 text-gray-600 text-sm  peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Email Address</label>
                                        </div>
                                        <div class="relative">
                                            <input  id="password" value="<?=$doctor['password'];?>" name="password" type="password" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none borer-rose-600" placeholder="Password" />
                                            <label class="ml-4 absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 text-sm">Password</label>
                                        </div>
                                        <div class="relative">
                                            <button  data-target="dimission"  type="submit" class="bg-blue-300 text-blue-700 rounded-md px-4 py-1"> <a href="admin-doctors.php">Cancel</a></button>
                                            <button  type="submit" value="<?=$doctor['id'];?>" name="upbutton" class="bg-green-500 text-white rounded-md px-4 py-1">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
                        
  </main>

</body>
        </html>