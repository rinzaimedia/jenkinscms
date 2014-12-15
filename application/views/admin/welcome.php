<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1>Dashboard <small>JenkinsCMSOverview</small></h1>
            <ol class="breadcrumb">
                <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
            </ol>
            <div class="alert alert-success alert-dismissable" id="message">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Welcome to JenkinsCMS Admin! This new layout will hopefully make site deployments that much faster. On a side note, Shu likes candy!
            </div>
        </div>
    </div>
</div>
<script>

    var timer=10;
    function timerRun(){

        if(timer<=0){

            document.getElementById('message').style.display='none';
            return;
        }
        timer--;
        setTimeout(timerRun,1000);
        console.log(timer);
    }
    timerRun();

</script>