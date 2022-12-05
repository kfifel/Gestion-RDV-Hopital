<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $GLOBALS['page_title'] = 'Admin Dashboard';
        include('../includes/head.php');
    ?>
</head>
<body>
    <?php
        $GLOBALS['current_page'] = 'dashboard';
        include('../includes/admin-sidebar.php');
    ?>
    <main class="ml-64 p-4 admin-dashboard">
        <div class="header flex justify-between">
            <from class="search flex gap-2 items-center w-3/4">
                <div class="border-2 rounded flex items-center h-8 w-2/3">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#616161"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/></svg>
                    <input class="p-2 h-7 w-full" type="text" placeholder="Search doctor name or email">
                </div>
                <input class="bg-sky-200 px-4 h-8 rounded text-sky-900" type="submit" value="search">
            </from>
            <div class="date flex gap-2">
                <div>
                    <small class="block">Today's Date</small>
                    <span>2022/20/11</span>
                </div>
                <div class="h-11 w-11 bg-orange-100 border-2 rounded">
                    <svg class="mx-auto my-auto" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><g><rect fill="none" height="24" width="24"/></g><g><path d="M19,4h-1V2h-2v2H8V2H6v2H5C3.89,4,3.01,4.9,3.01,6L3,20c0,1.1,0.89,2,2,2h14c1.1,0,2-0.9,2-2V6C21,4.9,20.1,4,19,4z M19,20 H5V10h14V20z M19,8H5V6h14V8z M9,14H7v-2h2V14z M13,14h-2v-2h2V14z M17,14h-2v-2h2V14z M9,18H7v-2h2V18z M13,18h-2v-2h2V18z M17,18 h-2v-2h2V18z"/></g></svg>
                </div>
            </div>
        </div>
    </main>
</body>
</html>