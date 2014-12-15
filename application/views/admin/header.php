<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard - JenkinsCMS Powered by Ironhead Services</title>

    <!-- Bootstrap core CSS -->
    <link href="/assets/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="/assets/bootstrap/css/bootstrap-theme.css" rel="stylesheet">
    <link href="/assets/bootstrapeditor/css/index.css" rel="stylesheet">
    <link href="/assets/bootstrapeditor/js/external/google-code-prettify/prettify.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="/assets/admin/css/sb-admin.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">

    <script src="/assets/business-plate/js/jquery-1.8.2.min.js"></script>
    <script src="/assets/bootstrap/js/bootstrap.js"></script>
    <script src="/assets/bootstrapeditor/js/external/jquery.hotkeys.js"></script>
    <script src="/assets/bootstrapeditor/js/external/google-code-prettify/prettify.js"></script>
    <script src="/assets/bootstrapeditor/js/bootstrap-wysiwyg.js"></script>
    <script src="/assets/custom/js/countdown.js"></script>

</head>

<body>

<div id="wrapper">

    <!-- Sidebar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/manage">JenkinsCMS Admin</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li<?php if($this->uri->segment(2) == ''):?> class="active"<?php endif;?>><a href="/manage/"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li<?php if($this->uri->segment(2) == 'settings'):?> class="active"<?php endif;?>><a href="/manage/settings"><i class="fa fa-bar-chart-o"></i> Settings</a></li>
                <li<?php if($this->uri->segment(2) == 'pages'):?> class="active"<?php endif;?>><a href="/manage/pages"><i class="fa fa-edit"></i> Pages</a></li>
                <li<?php if($this->uri->segment(2) == 'salescontent'):?> class="active"<?php endif;?>><a href="/manage/salescontent"><i class="fa fa-font"></i> Sales Content</a></li>
                <li<?php if($this->uri->segment(2) == 'css'):?> class="active"<?php endif;?>><a href="/manage/css"><i class="fa fa-desktop"></i> Custom CSS</a></li>
                <li<?php if($this->uri->segment(2) == 'workitems'):?> class="active"<?php endif;?>><a href="/manage/workitems"><i class="fa fa-suitcase"></i> Our Work</a></li>
                <li><a href="/manage/users"><i class="fa fa-wrench"></i> Users</a></li>
                <!--<li><a href="blank-page.html"><i class="fa fa-file"></i> Blank Page</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Dropdown <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Dropdown Item</a></li>
                        <li><a href="#">Another Item</a></li>
                        <li><a href="#">Third Item</a></li>
                        <li><a href="#">Last Item</a></li>
                    </ul>
                </li>-->
                <li style="padding-left: 26px"><img src="/assets/custom/img/darth_vader.png" width="175" /></li>
                <li style="font-size: 20px; padding-left: 4px;"><div class="alert alert-success alert-dismissable" id="getting-started">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    </div></li>
            </ul>

            <ul class="nav navbar-nav navbar-right navbar-user">
                <li class="dropdown messages-dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> Messages <span class="badge">7</span> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-header">7 New Messages</li>
                        <li class="message-preview">
                            <a href="#">
                                <span class="avatar"><img src="http://placehold.it/50x50"></span>
                                <span class="name">John Smith:</span>
                                <span class="message">Hey there, I wanted to ask you something...</span>
                                <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li class="message-preview">
                            <a href="#">
                                <span class="avatar"><img src="http://placehold.it/50x50"></span>
                                <span class="name">John Smith:</span>
                                <span class="message">Hey there, I wanted to ask you something...</span>
                                <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li class="message-preview">
                            <a href="#">
                                <span class="avatar"><img src="http://placehold.it/50x50"></span>
                                <span class="name">John Smith:</span>
                                <span class="message">Hey there, I wanted to ask you something...</span>
                                <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#">View Inbox <span class="badge">7</span></a></li>
                    </ul>
                </li>
                <li class="dropdown alerts-dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> Alerts <span class="badge">3</span> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Default <span class="label label-default">Default</span></a></li>
                        <li><a href="#">Primary <span class="label label-primary">Primary</span></a></li>
                        <li><a href="#">Success <span class="label label-success">Success</span></a></li>
                        <li><a href="#">Info <span class="label label-info">Info</span></a></li>
                        <li><a href="#">Warning <span class="label label-warning">Warning</span></a></li>
                        <li><a href="#">Danger <span class="label label-danger">Danger</span></a></li>
                        <li class="divider"></li>
                        <li><a href="#">View All</a></li>
                    </ul>
                </li>
                <li class="dropdown user-dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?=$this->session->userdata('name');?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                        <li><a href="#"><i class="fa fa-envelope"></i> Inbox <span class="badge">7</span></a></li>
                        <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
                        <li class="divider"></li>
                        <li><a href="/manage/logout"><i class="fa fa-power-off"></i> Log Out</a></li>
                    </ul>
                </li>

            </ul>

        </div><!-- /.navbar-collapse -->
    </nav>
    <script type="text/javascript">
        $('#getting-started').countdown('2015/12/18', function(event) {
            $(this).html(event.strftime('%-D days %H:%M:%S'));
        });
    </script>