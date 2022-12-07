<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $GLOBALS['page_title'] = 'Settings';
        include ('../includes/head.php');
    ?>
</head>
<body>
    <?php
        $GLOBALS['current_page'] = 'settings';
        include ('../includes/paitent-sidebar.php');
    ?>
    <main class=" pl-20 ml-48 p-4">
        <div class="flex   justify-around gap-5">
            <div class="flex gap-2 items-center">
                <button class=" flex gap-2 px-4 py-1 text-blue-600 rounded-md font-bold bg-blue-100"> 
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#1b62b3"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"/></svg>
                    Back
                  </button>
                
                <h1 class=" font-bold"> Settings</h1>
            </div>
            <div class= "ml-auto flex items-center gap-4">  
                <div class="block ">       
                    <p>Today's Date <br></p>
                    <p class="font-bold">2022-12-01</p>
                </div> 
                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><g><rect fill="none" height="24" width="24"/></g><g><path d="M19,4h-1V2h-2v2H8V2H6v2H5C3.89,4,3.01,4.9,3.01,6L3,20c0,1.1,0.89,2,2,2h14c1.1,0,2-0.9,2-2V6C21,4.9,20.1,4,19,4z M19,20 H5V10h14V20z M19,8H5V6h14V8z M9,14H7v-2h2V14z M13,14h-2v-2h2V14z M17,14h-2v-2h2V14z M9,18H7v-2h2V18z M13,18h-2v-2h2V18z M17,18 h-2v-2h2V18z"/></g></svg>

            </div>
        </div>
        <section> 
            <div class="p-4  mt-8">

                <div class="flex p-8 border ">
                    <button class="hover:bg-gray-200 gap-4 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#0A76D8"><g><rect fill="none" height="24" width="24"/></g><g><g><path d="M20,6h-4V4c0-1.1-0.9-2-2-2h-4C8.9,2,8,2.9,8,4v2H4C2.9,6,2,6.9,2,8v12c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2V8 C22,6.9,21.1,6,20,6z M10,4h4v2h-4V4z M20,20H4V8h16V20z"/><polygon points="13,10 11,10 11,13 8,13 8,15 11,15 11,18 13,18 13,15 16,15 16,13 13,13"/></g></g></svg>                       
                        <div class="block ">
                            <h1 class="text-start font-bold text-blue-500">Account Settings</h1>
                            <p>Edit your Account Details & Change Password</p>
                        </div>
                    </button>
                </div>
                <div class="flex p-8 border ">
                    <button  class="hover:bg-gray-200 flex items-center gap-4 " >                    
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#1b62b3"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 6c3.79 0 7.17 2.13 8.82 5.5C19.17 14.87 15.79 17 12 17s-7.17-2.13-8.82-5.5C4.83 8.13 8.21 6 12 6m0-2C7 4 2.73 7.11 1 11.5 2.73 15.89 7 19 12 19s9.27-3.11 11-7.5C21.27 7.11 17 4 12 4zm0 5c1.38 0 2.5 1.12 2.5 2.5S13.38 14 12 14s-2.5-1.12-2.5-2.5S10.62 9 12 9m0-2c-2.48 0-4.5 2.02-4.5 4.5S9.52 16 12 16s4.5-2.02 4.5-4.5S14.48 7 12 7z"/></svg>
                        <div class="gap-4 block">
                            <h1 class="text-start font-bold text-blue-500">View Account Details</h1>
                            <p>View Personl information About your Account </p>
                        </div>
                    </button>
                </div>
                <div class="flex p-8 border ">
                    <button type="button" data-modal-toggle="popup-modal "  class="hover:bg-gray-200 gap-4 flex  items-center" >                    
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#0A76D8"><path d="M0 0h24v24H0V0z" fill="none"/><circle cx="18" cy="4.54" r="2"/><path d="M15 17h-2c0 1.65-1.35 3-3 3s-3-1.35-3-3 1.35-3 3-3v-2c-2.76 0-5 2.24-5 5s2.24 5 5 5 5-2.24 5-5zm3-3.5h-1.86l1.67-3.67C18.42 8.5 17.44 7 15.96 7h-5.2c-.81 0-1.54.47-1.87 1.2L8.22 10l1.92.53.65-1.53H13l-1.83 4.1c-.6 1.33.39 2.9 1.85 2.9H18v5h2v-5.5c0-1.1-.9-2-2-2z"/></svg>
                        <div class="  gap-4 block">
                            <h1  class="font-bold text-start text-red-400">Delete Account</h1>
                            <p>Will Permananently Remove your Account </p>
                        </div>
                    </button>   
                </div>

            </div>
    </section>
    
                <!-- ************model********** -->
  
    </main>
</body>
</html>