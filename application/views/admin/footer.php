<!-- JavaScript -->

<!-- Page Specific Plugins -->
<div class="col-lg-9 col-lg-offset-3">
<footer>
    &copy; <?php echo date('Y'); ?> Ironhead Services LLC | JenkinsCMS
</footer>
</div>
<script>

    var timer=10;
    function timerRun(){

        if(timer<=0){

            //document.getElementById('message').style.display='none';
            $("#message").fadeOut();
            return;
        }
        timer--;
        setTimeout(timerRun,1000);
    }
    timerRun();

</script>
</body>
</html>