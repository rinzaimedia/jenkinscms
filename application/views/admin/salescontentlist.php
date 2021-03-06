<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1>Sales Content <small>List Overview</small></h1>
            <ol class="breadcrumb">
                <li class="inactive"><i class="fa fa-dashboard"></i> <a href="/manage/">Dashboard</a></li>
                <li class="active"><i class="fa fa-font"></i> Sales Content</li>
            </ol>
            <div class="alert alert-success alert-dismissable" id="message">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Welcome to JenkinsCMS Admin! This new layout will hopefully make site deployments that much faster. On a side note, Shu likes candy!
            </div>
            <a href="/manage/salescontent/addentry"><button class="btn btn-primary">Add New Sales Content Item</button></a>
            <hr />
        </div>

    </div>
    <?php foreach($salesitems as $salesitem):?>
    <div class="row" style="padding: 3px;">
        <div class="col-lg-12">
            <div class="col-md-5"><a href="/manage/salescontent/<?php echo $salesitem['salesid'];?>"><button class="btn btn-default"><li class="fa fa-pencil"></li> <?php echo $salesitem['salestitle'];?></button></a> </div>
            <div class="col-md-5"><form method="post" id="deleteform"><input type="hidden" id="salesid" value="<?php echo $salesitem['salesid'];?>"/><button class="btn btn-danger"><li class="fa fa-minus-square"> Delete</li></button></form></div>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<script type="text/javascript">
    $("#deleteform").submit(function(e) {

        var url = "/ajax/deleteSalesContent"; // the script where you handle the form input.

        $.ajax({
            type: "POST",
            url: url,
            data: $("#deleteform").serialize(), // serializes the form's elements.
            success: function(data)
            {

                $('#result').html('<div class="alert alert-danger alert-dismissable" id="message"> <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Sales content deleted! Explosions!</div>');

            },
            error: function(data)
            {
                $('#error').html('<div class="alert alert-danger alert-dismissable" id="message"> <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Settings failed to update. Try again. On a side note, Shu loves explosions!</div>');

            }
        });

        return false;
        e.preventDefault();
    });
</script>