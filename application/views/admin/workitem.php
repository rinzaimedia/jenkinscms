<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1> <small>Edit Content</small></h1>
            <ol class="breadcrumb">
                <li class="inactive"><i class="fa fa-dashboard"></i> <a href="/manage/">Dashboard</a></li>
                <li class="inactive"><i class="fa fa-font"></i> <a href="/manage/workitems">Our Work</a></li>
            </ol>
            <div id="result"></div>
            <div id="error"></div>
            <div class="alert alert-success alert-dismissable" id="message">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Welcome to JenkinsCMS Admin! This new layout will hopefully make site deployments that much faster. On a side note, Shu likes candy!
            </div>
            <form class="form-horizontal" role="form" method="post" id="workform">

                <div class="form-group">
                    <div class="row">
                        <label class="col-sm-2 control-label">Title:</label>
                        <div class="col-sm-8">

                            <input type="text" class="form-control" id="worktitle" name="worktitle" placeholder="Title"  value="<?php if(isset($workitem)): echo $workitem[0]['worktitle']; endif;?>" />

                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-1"></label>
                        <div class="col-sm-9">
                            <div id="alerts"></div>
                            <div class="btn-toolbar" data-role="editor-toolbar" data-target="#workentry">
                                <div class="btn-group">
                                    <a class="btn dropdown-toggle btn-default" data-toggle="dropdown" title="Font"><i class="fa fa-font"></i><b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                    </ul>
                                </div>
                                <div class="btn-group">
                                    <a class="btn dropdown-toggle btn-default" data-toggle="dropdown" title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a data-edit="fontSize 5"><font size="5">Huge</font></a></li>
                                        <li><a data-edit="fontSize 3"><font size="3">Normal</font></a></li>
                                        <li><a data-edit="fontSize 1"><font size="1">Small</font></a></li>
                                    </ul>
                                </div>
                                <div class="btn-group">
                                    <a class="btn btn-default" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
                                    <a class="btn btn-default" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
                                    <a class="btn btn-default" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
                                    <a class="btn btn-default" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
                                </div>
                                <div class="btn-group">
                                    <a class="btn btn-default" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
                                    <a class="btn btn-default" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>
                                    <a class="btn btn-default" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="fa fa-indent"></i></a>
                                    <a class="btn btn-default" data-edit="indent" title="Indent (Tab)"><i class="fa fa-outdent"></i></a>
                                </div>
                                <div class="btn-group">
                                    <a class="btn btn-default" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
                                    <a class="btn btn-default" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
                                    <a class="btn btn-default" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
                                    <a class="btn btn-default" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>
                                </div>
                                <div class="btn-group">
                                    <a class="btn dropdown-toggle btn-default" data-toggle="dropdown" title="Hyperlink"><i class="fa fa-link"></i></a>
                                    <div class="dropdown-menu input-append">
                                        <input class="span2" placeholder="URL" type="text" data-edit="createLink"/>
                                        <button class="btn" type="button">Add</button>
                                    </div>
                                    <a class="btn btn-default" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a>

                                </div>

                                <div class="btn-group">
                                    <a class="btn btn-default" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="fa fa-picture-o"></i></a>
                                    <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
                                </div>
                                <div class="btn-group">
                                    <a class="btn btn-default" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
                                    <a class="btn btn-default" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
                                </div>
                                <input type="text" data-edit="inserttext" id="voiceBtn" x-webkit-speech="">
                            </div>

                            <textarea id="workentry" name="workentry" class="col-md-12">
                                <?php
                                if(isset($workitem)):
                                echo str_replace("<br />", "\n", html_entity_decode($workitem[0]['workentry']));
                                endif;?>
                            </textarea>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 control-label">Image:</label>
                        <div class="col-sm-8">

                            <input type="file" name="workimage" id="workimage" class="form-control" />
                            <br /><img src="<?php if(isset($workitem)): echo $workitem[0]['workimage']; endif;?>" width="100" />
                            <?php if(isset($workitem)):?><input type="hidden" name="workid" id="workid" value="<?php echo $workitem[0]['workid'];?>" /><?php endif;?>
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


        $("#workform").submit(function(e) {

            var url = "/ajax/updateworkitem?worktitle="+$('#worktitle').val()+"&workentry="+$('#workentry').val()+"&workid="+$('#workid').val(); // the script where you handle the form input.

            e.preventDefault();
            $.ajaxFileUpload({
                url             :url,
                secureuri       :false,
                fileElementId   :'workimage',
                dataType: 'JSON',
                success : function (data)
                {
                    var obj = jQuery.parseJSON(data);
                    if(obj['status'] == 'success')
                    {
                        $('#result').html('<div class="alert alert-info alert-dismissable" id="message"> <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> '+obj['msg']+'</div>');
                    }
                    else
                    {
                        $('#error').html('<div class="alert alert-danger alert-dismissable" id="message"> <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> '+obj['msg']+'</div>');
                    }
                }
            });
            return false;
        });


    $(function(){
        function initToolbarBootstrapBindings() {
            var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier',
                    'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
                    'Times New Roman', 'Verdana'],
                fontTarget = $('[title=Font]').siblings('.dropdown-menu');
            $.each(fonts, function (idx, fontName) {
                fontTarget.append($('<li><a data-edit="fontName ' + fontName +'" style="font-family:\''+ fontName +'\'">'+fontName + '</a></li>'));
            });
            $('a[title]').tooltip({container:'body'});
            $('.dropdown-menu input').click(function() {return false;})
                .change(function () {$(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');})
                .keydown('esc', function () {this.value='';$(this).change();});

            $('[data-role=magic-overlay]').each(function () {
                var overlay = $(this), target = $(overlay.data('target'));
                overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
            });
            if ("onwebkitspeechchange"  in document.createElement("input")) {
                var editorOffset = $('#workentry').offset();
                $('#voiceBtn').css('position','absolute').offset({top: editorOffset.top, left: editorOffset.left+$('#workentry').innerWidth()-35});
            } else {
                $('#voiceBtn').hide();
            }
        };
        function showErrorAlert (reason, detail) {
            var msg='';
            if (reason==='unsupported-file-type') { msg = "Unsupported format " +detail; }
            else {
                console.log("error uploading file", reason, detail);
            }
            $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>'+
                '<strong>File upload error</strong> '+msg+' </div>').prependTo('#alerts');
        };
        initToolbarBootstrapBindings();
        $('#workentry').wysiwyg({ fileUploadError: showErrorAlert} );
        window.prettyPrint && prettyPrint();
    });

</script>
