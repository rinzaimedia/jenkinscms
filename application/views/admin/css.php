<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1>Design <small>Custom CSS</small></h1>
            <ol class="breadcrumb">
                <li class="inactive"><i class="fa fa-dashboard"></i> <a href="/manage/">Dashboard</a></li>
                <li class="active"><i class="fa fa-desktop"></i> CSS</li>
            </ol>
            <div class="alert alert-success alert-dismissable" id="message">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Welcome to JenkinsCMS Admin! This new layout will hopefully make site deployments that much faster. On a side note, Shu likes candy!
            </div>
        </div>
        <div class="col-lg-10">
            <form class="form-horizontal" role="form" method="post">
                <div class="row">

                <div class="form-group" style="padding-left: 13px;">
                    <label class="col-sm-1 control-label">CSS:</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" rows="25" name="css" placeholder="CSS Goes Here..."><?php echo $css[0]['css'];?></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3" style="align: right;">
                        <input type="submit" name="Submit" value="Save" class="btn btn-primary col-sm-3" style="float: right;"/>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>