<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1>Pages <small>Jenkins Page Editor</small></h1>
            <ol class="breadcrumb">
                <li class="inactive"><i class="fa fa-dashboard"></i> <a href="/manage/">Dashboard</a></li>
                <li class="active"><i class="fa fa-edit"></i> Edit Pages</li>
            </ol>
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Welcome to Jenkins Admin! This new layout will hopefully make site deployments that much faster. On a side note, Shu likes candy!
            </div>
            <a href="/manage/pages/addpage"><button class="btn btn-primary">Add New Page</button></a>
            <hr />
            <?php foreach($pages as $page):?>
            <div class="row">
                <div class="col-md-10"><a href="/manage/pages/<?php echo $page['pageid'];?>"><li class="fa fa-pencil"> <?php echo $page['pagetitle'];?></li></a></div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>