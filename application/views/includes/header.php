
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
<div class="top">
    <div class="container">
        <div class="row-fluid hidden-sm hidden-xs">
            <ul class="phone-mail">
                <li><a href="/"><i class="fa fa-home"></i><span>Home</span></a></li>
                <?php if($results[0]['phone'] != ''):?>
                <li><i class="fa fa-phone"></i><span><?php echo $results[0]['phone'];?></span></li>
                <?php endif; ?>
                <li><i class="fa fa-envelope"></i><span><?php echo $results[0]['email'];?></span></li>
            </ul>
            <ul class="loginbar">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        More Information <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                <?php for($x = 0; $x < count($pages); $x++):?>

                        <?php if($pages[$x]['visible'] == '1'):?>
                        <li><a href="/static/<?php echo $pages[$x]['pageurl'];?>"><?php echo $pages[$x]['pagetitle'];?></a></li>
                        <?php endif; ?>

                <?php endfor; ?>
                    </ul>
                </li>

                <li class="devider">&nbsp;</li>
                <li><a href="#" class="login-btn">Help</a></li>
                <li class="devider">&nbsp;</li>
                <li><a href="/manage" class="login-btn">Login</a></li>
            </ul>
        </div>
        <div class="row-fluid hidden-md hidden-lg">
            <div class="col-sm-3 col-xs-2"><a href="/"><i class="fa fa-home fa-2x"></i></a></div>
            <div class="col-sm-3 col-xs-2">
                <?php if($results[0]['phone'] != ''):?>
                    <a href="tel:<?php echo $results[0]['phone'];?>"><i class="fa fa-phone fa-2x"></i></a>
                <?php endif; ?>
            </div>
            <div class="col-sm-3 col-xs-2"><a href="mailto:<?php echo $results[0]['email'];?>"><i class="fa fa-envelope-o fa-2x"></i></a></div>
        </div>
    </div>
</div>
