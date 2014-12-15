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
    <link rel="stylesheet" href="/assets/font-awesome-4.0.3/css/font-awesome.min.css">
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
<div id="page-wrapper">
    <div class="row">
        <div id="error"></div>
        <div id="result"></div>
        <div class="col-md-6">
            <form method="post" id="loginform">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="Enter Username">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password">
                </div>

                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
</div>
<div class="col-lg-12">
    <footer>
        &copy; <?php echo date('Y'); ?> Ironhead Services LLC | JenkinsCMS
    </footer>
</div>
<script>
    $("#loginform").submit(function(e) {

        var url = "/ajax/trylogin"; // the script where you handle the form input.

        $.ajax({
            type: "POST",
            url: url,
            data: $("#loginform").serialize(), // serializes the form's elements.
            success: function(data)
            {

                $('#result').html('<div class="alert alert-success alert-dismissable"> <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Click Here to Continue</div>');

            },
            error: function(data)
            {

                $('#error').html('<div class="alert alert-danger alert-dismissable"> <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Login Failed</div>');

            }
        });

        return false;
        e.preventDefault();
    });
</script>
</body>
</html>