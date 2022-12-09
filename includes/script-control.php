
<script>
    function show_addSession_modal()
    {
        document.querySelector('#modal-container').removeAttribute("style");
    }
    function hide_addSession_modal()
    {
        document.querySelector('#modal-container').setAttribute("style","display:none;");
    }
    <?php
        if( isset($_GET['id'])):
         $patient = Patient::getPatientById($_GET['id']);
         $AllSessionRecorded = Session::getAllSessionRecorded($_GET['id']);
    ?>
        document.getElementById('first_name').innerText = ;
        document.getElementById('last_name').innerText = <?=$patient['last_name']?>;
        document.getElementById('email').innerText = <?=$patient['email']?>;
        document.getElementById('date_of_birth').innerText = <?=$patient['date_of_birth']?>;
        show_addSession_modal();
    <?php  endif; ?>
</script>
