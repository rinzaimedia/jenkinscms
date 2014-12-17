<?php if($results[0]['showscroller'] == 1):?>

    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="min-height: 300px; max-width: 768px;">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <?php $count = 0;?>
            <?php for($i = 0; $i < count($sales); $i++):?>

                <li data-target="#carousel-example-generic" data-slide-to="<?php echo $i;?>" <?php if($i == 0){ echo 'class="active"';}?>></li>
            <?php endfor; ?>
            <?php $count++;?>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">

            <?php for($i = 0; $i < count($sales); $i++):?>
                <div class="item <?php if($i == 0){ echo 'active';}?> text-center">
                    <div class="carousel-caption"><?php echo $sales[$i]['salestitle'];?>
                        <p class="hidden-sm hidden-xs"><i><?php echo $sales[$i]['salescontent'];?></i></p>
                    </div>

                    <?php if($sales[$i]['salesimage'] != ''):?>
                        <img src="<?php echo $sales[$i]['salesimage'];?>" class="img-responsive" alt="" style="max-height: 300px;" />

                    <?php endif; ?>
                </div>
            <?php endfor; ?>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>



<?php endif; ?>
<!-- highlightSection -->
<div class="highlightSection">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2><?php echo $results[0]['sitename'];?> | <?php echo $results[0]['description'];?></h2>

            </div>
            <div class="col-md-4 align-right">
                <h4><?php echo $results[0]['modaltext'];?></h4>
                <!-- Button HTML (to Trigger Modal) -->
                <a href="#myModal" class="btn btn-lg btn-primary" data-toggle="modal">Contact</a>

                <!-- Modal HTML -->
                <div id="myModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: black;">&times;</button>
                                <h4 class="modal-title">Contact <?php echo $results[0]['sitename'];?></h4>
                            </div>
                            <div class="modal-body">
                                <form class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Name:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="contactFormName" name="name" placeholder="Your Name" />
                                        </div>
                                        <label class="col-sm-2 control-label">Phone:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="contactFormPhone" name="phone" placeholder="Your Phone Number" />
                                        </div>
                                        <label class="col-sm-2 control-label">Email:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="contactFormEmail" name="email" placeholder="Your Email" />
                                        </div>
                                        <label class="col-sm-2 control-label">Message:</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" id="contactFormMessage" row="5" placeholder="Your Message"></textarea>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary">Send Message</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- bodySection -->
<div class="serviceBlock">
    <div class="container">
        <div class="row">
            <?php echo $results[0]['homecontent'];?>
    </div>
</div>
<hr>







<div class="services">
    <div class="container">
        <div class="row">
        <?php if(isset($workitems)):
        foreach($workitems as $workitem):?>

            <div class="col-md-3">
                <img src="<?php echo $workitem['workimage'];?>" class="" title="project one">
                <h3><a class="hover-effect" href="#"><?php echo $workitem['worktitle'];?></a></h3>
                <p><?php echo $workitem['workentry'];?></p>
            </div>

            <?php endforeach;
            endif;?>
        </div>
    </div>
</div>


<div class="testimonails">
    <div class="container">
        <blockquote class="">
            <?php echo $results[0]['quote'];?>
        </blockquote>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <h3 class="title">About Us</h3>
            <?php echo $home[0]['pagecontent'];?>
        </div>
        <div class="col-md-8">
            <div class="projectList">
                <?php
                if($results[0]['industry']=='real-estate'):?>
                <h3 class="title">Real Estate News</h3>
                    <?php if(count($rss['channel']['item']) < 4)
                    {
                        $count = count($rss['channel']['item']);
                    }
                    else
                    {
                        $count = 4;
                    }

                    for($x = 0; $x < $count; $x++):?>
                <div class="media">

                    <div class="media-body">
                        <h4 class="media-heading"><a href="<?php echo $rss['channel']['item'][$x]['link'];?>"><?php echo $rss['channel']['item'][$x]['title'];?></a></h4>
                        <p>
                            <?php echo $rss['channel']['item'][$x]['description'];?>
                        </p>
                        <a class="pull-right" href="<?php echo $rss['channel']['item'][$x]['link'];?>">more details</a>
                    </div>
                </div>
                    <?php endfor; ?>
                <?php endif;?>


        </div>
    </div>
</div>
</div>
</div>
