<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1><?php echo $salesitem[0]['salestitle'];?> <small>Edit Content</small></h1>
            <ol class="breadcrumb">
                <li class="inactive"><i class="fa fa-dashboard"></i> <a href="/manage/">Dashboard</a></li>
                <li class="inactive"><i class="fa fa-font"></i> <a href="/manage/salescontent">Sales Content</a></li>
                <li class="active"><i class="fa fa-pencil"></i> <?php echo $salesitem[0]['salestitle'];?></li>
            </ol>
            <div id="result"></div>
            <div id="error"></div>
            <div class="alert alert-success alert-dismissable" id="message">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Welcome to JenkinsCMS Admin! This new layout will hopefully make site deployments that much faster. On a side note, Shu likes candy!
            </div>
            <form class="form-horizontal" role="form" method="post" id="salesform">

                <div class="form-group">
                    <div class="row">
                        <label class="col-sm-2 control-label">Title:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="salestitle" name="salestitle" placeholder="Title" value="<?php echo $salesitem[0]['salestitle'];?>" />
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 control-label">Content:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="salescontent" name="salescontent" placeholder="Content" value="<?php echo $salesitem[0]['salescontent'];?>" />
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 control-label">Image:</label>
                        <div class="col-sm-8">

                            <input type="file" name="salesimage" id="salesimage" class="form-control" />&nbsp;<img src="<?php echo $salesitem[0]['salesimage'];?>" width="100" />
                            <input type="hidden" name="salesid" id="salesid" value="<?php echo $salesitem[0]['salesid'];?>" />
                        </div>
                    </div>
                <div class="row">
                    <div class="col-sm-3" style="align: right;">
                        <input type="submit" name="Submit" value="Save" class="btn btn-primary col-sm-3" style="float: right;"/>
                    </div>
                </div>
                </div>

        </div>
        </form>
        </div>
    </div>
<script type="text/javascript">
    $("#salesform").submit(function(e) {

        var url = "/ajax/updatesalescontent"; // the script where you handle the form input.

        $.ajax({
            type: "POST",
            url: url,
            data: $("#salesform").serialize(), // serializes the form's elements.
            success: function(data)
            {

                $('#result').html('<div class="alert alert-success alert-dismissable" id="message"> <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Page updated. Everyone, Shu loves bacon!</div>');

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
