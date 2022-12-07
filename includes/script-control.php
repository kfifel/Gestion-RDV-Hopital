
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
         $patient = getPatientById($_GET['id']);
         $AllSessionRecorded = getAllSessionRecorded($_GET['id']);
    ?>

            show_addSession_modal();
    <?php  endif; ?>
</script>
