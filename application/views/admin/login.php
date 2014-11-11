
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php if(!empty($pagedata[0]['pagetitle'])): echo $pagedata[0]['pagetitle']." | "; else: echo $results[0]['description'] ." | "; endif;?><?php echo $results[0]['sitename'];?></title>

    <!-- Bootstrap core CSS -->
    <link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="/themes/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->



    <!-- JS Global Compulsory -->
    <script type="text/javascript" src="/assets/custom/js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="/assets/custom/js/modernizr.custom.js"></script>
    <script type="text/javascript" src="/assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- JS Implementing Plugins -->
    <script type="text/javascript" src="/assets/custom/js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="/assets/custom/js/modernizr.js"></script>
    <script type="text/javascript" src="/assets/custom/js/jquery.cslider.js"></script>
    <script type="text/javascript" src="/assets/custom/js/back-to-top.js"></script>
    <script type="text/javascript" src="/assets/custom/js/jquery.sticky.js"></script>

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="/assets/business-plate/css/flexslider.css" type="text/css" media="screen">
    <link rel="stylesheet" href="/assets/business-plate/css/parallax-slider.css" type="text/css">
    <link rel="stylesheet" href="/assets/font-awesome-4.0.3/css/font-awesome.min.css" type="text/css">

    <!-- Custom styles for this template -->

    <link href="/assets/custom/css/business-plate.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/business-plate/ico/favicon.ico">
</head>
<!-- NAVBAR
================================================== -->
<body>
<form role="form">
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group">
        <label for="exampleInputFile">File input</label>
        <input type="file" id="exampleInputFile">
        <p class="help-block">Example block-level help text here.</p>
    </div>
    <div class="checkbox">
        <label>
            <input type="checkbox"> Check me out
        </label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>

<div id="myMortgage" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: black;">&times;</button>
                <h4 class="modal-title">Mortgage Calculator</h4>
            </div>
            <div class="modal-body">
                <div id="mortgageresults"></div>
                <form class="form-horizontal" role="form" name="mortgageform" id="mortgageform" method="post">
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-4 control-label">Name:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="price" name="price" placeholder="Home Price" />
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-4 control-label">Down Payment (%)</label>
                            <div class="col-sm-7">
                                <select id="downpercent" name="downpercent" class="form-control">
                                    <option value="0">0%</option>
                                    <option value="5">5%</option>
                                    <option value="10">10%</option>
                                    <option value="15">15%</option>
                                    <option value="20" selected="selected">20%</option>
                                    <option value="25">25%</option>
                                    <option value="30">30%</option>
                                    <option value="35">35%</option>
                                    <option value="40">40%</option>
                                    <option value="45">45%</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-4 control-label">Down Payment ($):</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="down" name="down" placeholder="Down Payment" />
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-4 control-label">Zip Code:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="zip" name="zip" placeholder="Zip Code" />
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <input type="submit" id="mortgagebutton" class="btn btn-primary" value="Get Mortgage" />
            </div>
        </div>
    </div>
</div>

<!-- footerTopSection -->
<div class="footerTopSection">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h3>Local Conditions</h3>
                <h5><?php echo $weather['name'];?></h5>


                <p>
                    Temp: <?php echo round((($weather['main']['temp'] -  273.15) * 1.8 + 32)); ?>&#176; F <img src="http://openweathermap.org/img/w/<?php echo $weather['weather'][0]['icon'];?>.png" height="35" style="padding-top: -15px;"/>
                </p>
                <p>
                    Conditions: <?php echo $weather['weather'][0]['main']; ?> / <?php echo ucwords($weather['weather'][0]['description']); ?>
                </p>
                <p>
                    Sunrise: <?php echo date('h:iA', $weather['sys']['sunrise']); ?>
                </p>
                <p>
                    Sunset: <?php echo date('h:iA', $weather['sys']['sunset']); ?>
                </p>
            </div>
            <div class="col-md-3">
                <h3>Monthly news letter</h3>
                <p>If you intended to get monthly newsletters and offers from us?</p>
                <div>
                    <form class="form-inline" role="form" id="newsletter">
                        <div class="form-group">
                            <label class="sr-only" for="NewsletterEmail">Email address</label>
                            <input type="email" class="form-control" id="NewsletterEmail" placeholder="Enter email">
                        </div>
                        <button type="submit" class="btn btn-brand">Subscribe</button>
                    </form>
                </div>
            </div>
            <div class="col-md-3">
                <h3>Useful Links</h3>
                <p>
                    <span><?php echo $results[0]['usefulinfo'];?></span><br><br>
                    <?php if($results[0]['industry'] == 'real-estate'):?>
                        <a href="#myMortgage" data-toggle="modal">Mortgage Calculator</a><br />
                    <?php endif; ?>
                    <?php if($links[0]['url'] != ''):?>

                        <?php foreach($links as $link):?>
                            <a href="<?php echo $link['url'];?>" class="links" rel="nofollow"><?php echo $link['linkname'];?></a><br />
                        <?php endforeach;?>

                    <?php endif; ?>
                </p>


            </div>
            <div class="col-md-3">
                <h3>Contact us</h3>
                <p>
                    <strong><?php echo $results[0]['sitename'];?></strong><br>
                    <?php echo $results[0]['address1'];?><br>
                    <?php if($results[0]['address2']!=''):?>
                        <?php echo $results[0]['address2'];?><br>
                    <?php endif; ?>
                    <?php echo $results[0]['city'];?>,
                    <?php echo $results[0]['statecountry'];?> <?php echo $results[0]['zip'];?><br>

                    P : <?php echo $results[0]['phone'];?><br>
                    E : <?php echo $results[0]['email'];?><br>
                    W :	<a href="<?php if(strpos("http", $results[0]['originalurl']) == true):?>http://<?php endif; echo strpos("http", $results[0]['originalurl']);?>"><?php echo $results[0]['originalurl'];?></a><br>
                </p>


            </div>
        </div>
    </div>
</div>
<!-- footerBottomSection -->
<div class="footerBottomSection">
    <div class="container" style="font-size: 18px;">
        &copy; <?php echo date('Y'); ?> <?php echo $results[0]['sitename'];?> | All Rights Reserved.
        <a href="#" rel="nofollow">Terms and Condition</a> | <a href="#" rel="nofollow">Privacy Policy</a>
        <?php if($results[0]['facebookpersonal'] != ''):?>
            <a href="<?php echo $results[0]['facebookpersonal'];?>">

                <i class="fa fa-facebook-square fa-2x"></i>

            </a>
        <?php endif;?>
        <?php if($results[0]['facebookpage'] != ''):?>
            <a href="<?php echo $results[0]['facebookpage'];?>">
                <i class="fa fa-facebook-square fa-2x"></i>
            </a>
        <?php endif;?>
        <?php if($results[0]['twitter'] != ''):?>
            <a href="<?php echo $results[0]['twitter'];?>">

                <i class="fa fa-twitter-square fa-2x"></i>

            </a>
        <?php endif;?>
        <?php if($results[0]['googleplus'] != ''):?>
            <a href="<?php echo $results[0]['googleplus'];?>">

                <i class="fa fa-google-plus-square fa-2x"></i>

            </a>
        <?php endif;?>
        <?php if($results[0]['linkedin'] != ''):?>
            <a href="<?php echo $results[0]['linkedin'];?>">

                <i class="fa fa-linkedin-square fa-2x"></i>

            </a>
        <?php endif;?>

        <div class="pull-right" style="font-size: 12px; top: 15px;">Page developed by Ironhead Services LLC</div>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function(){
        $("#mortgageform").submit(function(e) {

            var url = "/ajax/getmortgagerate"; // the script where you handle the form input.
            alert('form pressed');
            $.ajax({
                type: "POST",
                url: url,
                data: $("#mortgageform").serialize(), // serializes the form's elements.
                success: function(data)
                {

                    $('#mortgageresults').html('Something');

                },
                error: function(data)
                {
                    $('#mortgageresults').html('Something Else');

                    $('#error').html('');

                }
            });

            return false;
            e.preventDefault();
        });

        $("#newsletter").submit(function(e) {
            alert('form pressed');
            var url = "/ajax/addtonewsletter"; // the script where you handle the form input.

            $.ajax({
                type: "POST",
                url: url,
                data: $("#newsletter").serialize() // serializes the form's elements.

            });

            return false;
            e.preventDefault();
        });
    });
</script>



<!-- JS Page Level -->
<script type="text/javascript" src="/assets/custom/js/app.js"></script>
<script type="text/javascript" src="/assets/custom/js/index.js"></script>


<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        App.initSliders();
        Index.initParallaxSlider();
    });
</script>



</body>
</html>