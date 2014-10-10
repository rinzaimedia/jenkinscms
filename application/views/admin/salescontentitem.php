<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1><?php echo $salesitem[0]['salestitle'];?> <small>Edit Content</small></h1>
            <ol class="breadcrumb">
                <li class="inactive"><i class="fa fa-dashboard"></i> <a href="/manage/">Dashboard</a></li>
                <li class="inactive"><i class="fa fa-font"></i> <a href="/manage/salescontent">Sales Content</a></li>
                <li class="active"><i class="fa fa-pencil"></i> <?php echo $salesitem[0]['salestitle'];?></li>
            </ol>
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Welcome to Jenkins Admin! This new layout will hopefully make site deployments that much faster. On a side note, Shu likes candy!
            </div>
            <form class="form-horizontal" role="form">

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
                            <input type="text" class="form-control" id="salescontent" name="content" placeholder="Content" value="<?php echo $salesitem[0]['salescontent'];?>" />
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 control-label">Image:</label>
                        <div class="col-sm-8">
                            <input type="file" id="image">
                            <p class="help-block">Upload PNG, JPG or GIF.</p>
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

