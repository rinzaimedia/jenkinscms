<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1>Sales Content <small>List Overview</small></h1>
            <ol class="breadcrumb">
                <li class="inactive"><i class="fa fa-dashboard"></i> <a href="/manage/">Dashboard</a></li>
                <li class="active"><i class="fa fa-font"></i> Our Work</li>
            </ol>
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Welcome to JenkinsCMS Admin! This new layout will hopefully make site deployments that much faster. On a side note, Shu likes candy!
            </div>
            <a href="/manage/workitems/addworkitem"><button class="btn btn-primary">Add New Work Item</button></a>
            <hr />
        </div>

    </div>
    <?php if(isset($workitems)): ?>

    <?php foreach($workitems as $workitem):?>
        <div class="row" style="padding: 3px;">
            <div class="col-lg-12">
                <div class="col-md-5"><a href="/manage/workitem/<?php echo $workitem['workid'];?>"><button class="btn btn-default"><li class="fa fa-pencil"></li> <?php echo $workitem['workentry'];?></button></a> </div>
                <div class="col-md-5"><form method="post" id="deleteform"><input type="hidden" id="salesid" value="<?php echo $workitem['workid'];?>"/><button class="btn btn-danger"><li class="fa fa-minus-square"> Delete</li></button></form></div>
            </div>
        </div>
    <?php endforeach; ?>

    <?php endif; ?>
</div>

<script type="text/javascript">
    $("#deleteform").submit(function(e) {

        var url = "/ajax/deleteWorkItem"; // the script where you handle the form input.

        $.ajax({
            type: "POST",
            url: url,
            data: $("#deleteform").serialize(), // serializes the form's elements.
            success: function(data)
            {

                $('#result').html('<div class="alert alert-danger alert-dismissable"> <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Work deleted! Explosions!</div>');

            },
            error: function(data)
            {
                $('#result').html('<div class="alert alert-danger alert-dismissable"> <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Work deleted! Explosions!</div>');

                $('#error').html('<div class="alert alert-danger alert-dismissable"> <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Settings failed to update. Try again. On a side note, Shu loves explosions!</div>');

            }
        });

        return false;
        e.preventDefault();
    });
</script>