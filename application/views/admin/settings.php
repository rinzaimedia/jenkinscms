<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1>Settings <small>JenkinsCMSClient Settings</small></h1>
            <ol class="breadcrumb">
                <li class="inactive"><i class="fa fa-dashboard"></i> <a href="/manage/">Dashboard</a></li>
                <li class="active"><i class="fa fa-bar-chart-o"></i> Settings</li>
            </ol>
            <div id="result"></div>
            <div class="alert alert-success alert-dismissable" id="message">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Welcome to JenkinsCMS Admin! This new layout will hopefully make site deployments that much faster. On a side note, Shu likes candy!
            </div>
        </div>
        <div class="col-lg-10">
            <form class="form-horizontal" role="form" method="post" id="settings-form">
                <div class="row">
                    <div class="form-group" style="padding-left: 13px;">
                        <label class="col-sm-2 control-label">JenkinsCMSVersion:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="<?php echo $settings[0]['version']; ?>" disabled="disabled" />
                        </div>
                    </div>
                    <div class="form-group" style="padding-left: 13px;">
                        <label class="col-sm-2 control-label">Site Name:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="sitename" placeholder="Site Name" id="sitename" value="<?php if($settings[0]['sitename'] != ''){ echo $settings[0]['sitename']; }?>" />
                        </div>
                    </div>
                    <div class="form-group" style="padding-left: 13px;">
                        <label class="col-sm-2 control-label">Client ID:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="clientid" placeholder="Client ID" id="clientid" value="<?php if($settings[0]['clientid'] != ''){ echo $settings[0]['clientid']; }?>" />
                        </div>
                    </div>
                    <div class="form-group" style="padding-left: 13px;">
                        <label class="col-sm-2 control-label">Client Name:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="name" placeholder="Client Name" id="name" value="<?php if($settings[0]['name'] != ''){ echo $settings[0]['name']; }?>" />
                        </div>
                    </div>
                    <div class="form-group" style="padding-left: 13px;">
                        <label class="col-sm-2 control-label">Address 1:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="address1" placeholder="Address 1" id="address1" value="<?php if($settings[0]['address1'] != ''){ echo $settings[0]['address1']; }?>" />
                        </div>
                    </div>
                    <div class="form-group" style="padding-left: 13px;">
                        <label class="col-sm-2 control-label">Address 2:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="address2" placeholder="Address 2" id="address2" value="<?php if($settings[0]['address2'] != ''){ echo $settings[0]['address2']; }?>" />
                        </div>
                    </div>
                    <div class="form-group" style="padding-left: 13px;">
                        <label class="col-sm-2 control-label">City:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="city" placeholder="City" id="city" value="<?php if($settings[0]['city'] != ''){ echo $settings[0]['city']; }?>" />
                        </div>
                    </div>
                    <div class="form-group" style="padding-left: 13px;">
                        <label class="col-sm-2 control-label">State/Country:</label>
                        <div class="col-sm-8">
                            <select name="statecountry" id="statecountry" class="form-control">
                                <optgroup label="US">
                                    <option value="AL" <?php if($settings[0]['statecountry'] == 'AL'):?> selected="selected"<?php endif;?>>Alabama</option>
                                    <option value="AK" <?php if($settings[0]['statecountry'] == 'AK'):?> selected="selected"<?php endif;?>>Alaska</option>
                                    <option value="AZ" <?php if($settings[0]['statecountry'] == 'AZ'):?> selected="selected"<?php endif;?>>Arizona</option>
                                    <option value="AR" <?php if($settings[0]['statecountry'] == 'AR'):?> selected="selected"<?php endif;?>>Arkansas</option>
                                    <option value="CA" <?php if($settings[0]['statecountry'] == 'CA'):?> selected="selected"<?php endif;?>>California</option>
                                    <option value="CO" <?php if($settings[0]['statecountry'] == 'CO'):?> selected="selected"<?php endif;?>>Colorado</option>
                                    <option value="CT" <?php if($settings[0]['statecountry'] == 'CT'):?> selected="selected"<?php endif;?>>Connecticut</option>
                                    <option value="DE" <?php if($settings[0]['statecountry'] == 'DE'):?> selected="selected"<?php endif;?>>Delaware</option>
                                    <option value="FL"<?php if($settings[0]['statecountry'] == 'FL'):?> selected="selected"<?php endif;?>>Florida</option>
                                    <option value="GA"<?php if($settings[0]['statecountry'] == 'GA'):?> selected="selected"<?php endif;?>>Georgia</option>
                                    <option value="HA"<?php if($settings[0]['statecountry'] == 'HA'):?> selected="selected"<?php endif;?>>Hawaii</option>
                                    <option value="ID"<?php if($settings[0]['statecountry'] == 'ID'):?> selected="selected"<?php endif;?>>Idaho</option>
                                    <option value="IN"<?php if($settings[0]['statecountry'] == 'IN'):?> selected="selected"<?php endif;?>>Indiana</option>
                                    <option value="IA"<?php if($settings[0]['statecountry'] == 'IA'):?> selected="selected"<?php endif;?>>Iowa</option>
                                    <option value="KS"<?php if($settings[0]['statecountry'] == 'KS'):?> selected="selected"<?php endif;?>>Kansas</option>
                                    <option value="KY"<?php if($settings[0]['statecountry'] == 'KY'):?> selected="selected"<?php endif;?>>Kentucky</option>
                                    <option value="LA"<?php if($settings[0]['statecountry'] == 'LA'):?> selected="selected"<?php endif;?>>Louisiana</option>
                                    <option value="ME"<?php if($settings[0]['statecountry'] == 'ME'):?> selected="selected"<?php endif;?>>Maine</option>
                                    <option value="MD"<?php if($settings[0]['statecountry'] == 'MD'):?> selected="selected"<?php endif;?>>Maryland</option>
                                    <option value="MA"<?php if($settings[0]['statecountry'] == 'MA'):?> selected="selected"<?php endif;?>>Massachusetts</option>
                                    <option value="MI"<?php if($settings[0]['statecountry'] == 'MI'):?> selected="selected"<?php endif;?>>Michigan</option>
                                    <option value="MN"<?php if($settings[0]['statecountry'] == 'MN'):?> selected="selected"<?php endif;?>>Minnesota</option>
                                    <option value="MS"<?php if($settings[0]['statecountry'] == 'MS'):?> selected="selected"<?php endif;?>>Mississippi</option>
                                    <option value="MO"<?php if($settings[0]['statecountry'] == 'MO'):?> selected="selected"<?php endif;?>>Missouri</option>
                                    <option value="MT"<?php if($settings[0]['statecountry'] == 'MT'):?> selected="selected"<?php endif;?>>Montana</option>
                                    <option value="NE"<?php if($settings[0]['statecountry'] == 'NE'):?> selected="selected"<?php endif;?>>Nebraska</option>
                                    <option value="NV"<?php if($settings[0]['statecountry'] == 'NV'):?> selected="selected"<?php endif;?>>Nevada</option>
                                    <option value="NH"<?php if($settings[0]['statecountry'] == 'NH'):?> selected="selected"<?php endif;?>>New Hampshire</option>
                                    <option value="NJ"<?php if($settings[0]['statecountry'] == 'NJ'):?> selected="selected"<?php endif;?>>New Jersey</option>
                                    <option value="NM"<?php if($settings[0]['statecountry'] == 'NM'):?> selected="selected"<?php endif;?>>New Mexico</option>
                                    <option value="NY"<?php if($settings[0]['statecountry'] == 'NY'):?> selected="selected"<?php endif;?>>New York</option>
                                    <option value="NC"<?php if($settings[0]['statecountry'] == 'NC'):?> selected="selected"<?php endif;?>>North Carolina</option>
                                    <option value="ND"<?php if($settings[0]['statecountry'] == 'ND'):?> selected="selected"<?php endif;?>>North Dakota</option>
                                    <option value="OH"<?php if($settings[0]['statecountry'] == 'OH'):?> selected="selected"<?php endif;?>>Ohio</option>
                                    <option value="OK"<?php if($settings[0]['statecountry'] == 'OK'):?> selected="selected"<?php endif;?>>Oklahoma</option>
                                    <option value="OR"<?php if($settings[0]['statecountry'] == 'OR'):?> selected="selected"<?php endif;?>>Oregon</option>
                                    <option value="PA"<?php if($settings[0]['statecountry'] == 'PA'):?> selected="selected"<?php endif;?>>Pennsylvania</option>
                                    <option value="OK"<?php if($settings[0]['statecountry'] == 'OK'):?> selected="selected"<?php endif;?>>Oklahoma</option>
                                    <option value="RI"<?php if($settings[0]['statecountry'] == 'RI'):?> selected="selected"<?php endif;?>>Rhode Island</option>
                                    <option value="SC"<?php if($settings[0]['statecountry'] == 'SC'):?> selected="selected"<?php endif;?>>Sourth Carolina</option>
                                    <option value="SD"<?php if($settings[0]['statecountry'] == 'SD'):?> selected="selected"<?php endif;?>>South Dakota</option>
                                    <option value="TN"<?php if($settings[0]['statecountry'] == 'TN'):?> selected="selected"<?php endif;?>>Tennessee</option>
                                    <option value="TX"<?php if($settings[0]['statecountry'] == 'TX'):?> selected="selected"<?php endif;?>>Texas</option>
                                    <option value="UT"<?php if($settings[0]['statecountry'] == 'UT'):?> selected="selected"<?php endif;?>>Utah</option>
                                    <option value="VT"<?php if($settings[0]['statecountry'] == 'VT'):?> selected="selected"<?php endif;?>>Vermont</option>
                                    <option value="VA"<?php if($settings[0]['statecountry'] == 'VA'):?> selected="selected"<?php endif;?>>Virginia</option>
                                    <option value="WA"<?php if($settings[0]['statecountry'] == 'WA'):?> selected="selected"<?php endif;?>>Washington</option>
                                    <option value="WV"<?php if($settings[0]['statecountry'] == 'WV'):?> selected="selected"<?php endif;?>>West Virginia</option>
                                    <option value="WI"<?php if($settings[0]['statecountry'] == 'WI'):?> selected="selected"<?php endif;?>>Wisconsin</option>
                                    <option value="WY"<?php if($settings[0]['statecountry'] == 'WY'):?> selected="selected"<?php endif;?>>Wyoming</option>
                                </optgroup>
                                <optgroup label="Canada">
                                    <option value="ON"<?php if($settings[0]['statecountry'] == 'ON'):?> selected="selected"<?php endif;?>>Ontario</option>
                                    <option value="QC"<?php if($settings[0]['statecountry'] == 'QC'):?> selected="selected"<?php endif;?>>Quebec</option>
                                    <option value="NS"<?php if($settings[0]['statecountry'] == 'NS'):?> selected="selected"<?php endif;?>>Nova Scotia</option>
                                    <option value="NB"<?php if($settings[0]['statecountry'] == 'NB'):?> selected="selected"<?php endif;?>>New Brunswick</option>
                                    <option value="MB"<?php if($settings[0]['statecountry'] == 'MB'):?> selected="selected"<?php endif;?>>Manitoba</option>
                                    <option value="BC"<?php if($settings[0]['statecountry'] == 'BC'):?> selected="selected"<?php endif;?>>British Columbia</option>
                                    <option value="PE"<?php if($settings[0]['statecountry'] == 'PE'):?> selected="selected"<?php endif;?>>Prince Edward Island</option>
                                    <option value="SK"<?php if($settings[0]['statecountry'] == 'SK'):?> selected="selected"<?php endif;?>>Saskatchewan</option>
                                    <option value="AB"<?php if($settings[0]['statecountry'] == 'AB'):?> selected="selected"<?php endif;?>>Alberta</option>
                                    <option value="NL"<?php if($settings[0]['statecountry'] == 'NL'):?> selected="selected"<?php endif;?>>Newfoundland and Labrador</option>
                                </optgroup>
                                <optgroup label="United Kingdom">
                                    <option value="UK"<?php if($settings[0]['statecountry'] == 'UK'):?> selected="selected"<?php endif;?>>England</option>
                                    <option value="UK"<?php if($settings[0]['statecountry'] == 'UK'):?> selected="selected"<?php endif;?>>North Ireland</option>
                                    <option value="UK"<?php if($settings[0]['statecountry'] == 'UK'):?> selected="selected"<?php endif;?>>Scotland</option>
                                    <option value="UK"<?php if($settings[0]['statecountry'] == 'UK'):?> selected="selected"<?php endif;?>>Wales</option>
                                </optgroup>
                                <optgroup label="Australia/New Zealand">
                                    <option value="Qld"<?php if($settings[0]['statecountry'] == 'Qld'):?> selected="selected"<?php endif;?>>Queensland</option>
                                    <option value="SA"<?php if($settings[0]['statecountry'] == 'SA'):?> selected="selected"<?php endif;?>>South Australia</option>
                                    <option value="Tas"<?php if($settings[0]['statecountry'] == 'Tas'):?> selected="selected"<?php endif;?>>Tasmania</option>
                                    <option value="Vic"<?php if($settings[0]['statecountry'] == 'Vic'):?> selected="selected"<?php endif;?>>Victoria</option>
                                    <option value="NSW"<?php if($settings[0]['statecountry'] == 'NSW'):?> selected="selected"<?php endif;?>>New South Wales</option>
                                    <option value="WsA"<?php if($settings[0]['statecountry'] == 'WsA'):?> selected="selected"<?php endif;?>>Western Australia</option>
                                </optgroup>
                            </select>
                        </div>

                    </div>
                    <div class="form-group" style="padding-left: 13px;">
                        <label class="col-sm-2 control-label">Zip:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="zip" placeholder="Zip" id="zip" value="<?php if($settings[0]['zip'] != ''){ echo $settings[0]['zip']; }?>" />
                        </div>
                    </div>
                    <div class="form-group" style="padding-left: 13px;">
                        <label class="col-sm-2 control-label">Email:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="email" placeholder="Email" id="email" value="<?php if($settings[0]['email'] != ''){ echo $settings[0]['email']; }?>" />
                        </div>
                    </div>
                    <div class="form-group" style="padding-left: 13px;">
                        <label class="col-sm-2 control-label">Phone:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="phone" placeholder="Phone" id="phone" value="<?php if($settings[0]['phone'] != ''){ echo $settings[0]['phone']; }?>" />
                        </div>
                    </div>
                    <div class="form-group" style="padding-left: 13px;">
                        <label class="col-sm-2 control-label">Original URL:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="originalurl" placeholder="Original URL" id="originalurl" value="<?php if($settings[0]['originalurl'] != ''){ echo $settings[0]['originalurl']; }?>" />
                        </div>
                    </div>
                    <div class="form-group" style="padding-left: 13px;">
                        <label class="col-sm-2 control-label">Description:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="description" placeholder="Description" id="description" value="<?php if($settings[0]['description'] != ''){ echo $settings[0]['description']; }?>" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Home Content:</label>
                        <div class="col-sm-9">
                            <div id="alerts"></div>
                            <div class="btn-toolbar" data-role="editor-toolbar" data-target="#editor">
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
                                    <a class="btn btn-default" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
                                    <a class="btn btn-default" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
                                </div>
                                <input type="text" data-edit="inserttext" id="voiceBtn" x-webkit-speech="">
                            </div>

                            <textarea id="editor" name="editor" class="col-md-12">
                                <?php echo str_replace("<br />", "\n", $settings[0]['homecontent']);?>
                            </textarea>
                        </div>
                    </div>
                </div>
                    <div class="form-group" style="padding-left: 13px;">
                        <label class="col-sm-2 control-label">Personal Facebook:</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="facebookpersonal" placeholder="Personal Facebook" id="facebookpersonal" value="<?php if($settings[0]['facebookpersonal'] != ''){ echo $settings[0]['facebookpersonal']; }?>" />
                        </div>
                        <div class="col-sm-1"><li class="fa fa-facebook-square fa-2x" style="color: mediumblue;"></li></div>
                    </div>
                    <div class="form-group" style="padding-left: 13px;">
                        <label class="col-sm-2 control-label">Facebook Page:</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="facebookpage" placeholder="Facebook Page" id="facebookpage" value="<?php if($settings[0]['facebookpage'] != ''){ echo $settings[0]['facebookpage']; }?>" />
                        </div>
                        <div class="col-sm-1"><li class="fa fa-facebook-square fa-2x" style="color: mediumblue;"></li></div>
                    </div>
                    <div class="form-group" style="padding-left: 13px;">
                        <label class="col-sm-2 control-label">Twitter:</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="twitter" placeholder="Twitter" id="twitter" value="<?php if($settings[0]['twitter'] != ''){ echo $settings[0]['twitter']; }?>" />
                        </div>
                        <div class="col-sm-1"><li class="fa fa-twitter-square fa-2x" style="color: lightblue; "></li></div>
                    </div>
                    <div class="form-group" style="padding-left: 13px;">
                        <label class="col-sm-2 control-label">Google +:</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="googleplus" placeholder="Google +" id="googleplus" value="<?php if($settings[0]['googleplus'] != ''){ echo $settings[0]['googleplus']; }?>" />
                        </div>
                        <div class="col-sm-1"><li class="fa fa-google-plus-square fa-2x" style="color: red; "></li></div>
                    </div>
                    <div class="form-group" style="padding-left: 13px;">
                        <label class="col-sm-2 control-label">LinkedIn:</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="linkedin" placeholder="LinkedIn" id="linkedin" value="<?php if($settings[0]['linkedin'] != ''){ echo $settings[0]['linkedin']; }?>" />
                        </div>
                        <div class="col-sm-1"><li class="fa fa-linkedin-square fa-2x" style="color: mediumblue; "></li></div>
                    </div>
                    <div class="form-group" style="padding-left: 13px;">
                        <label class="col-sm-2 control-label">Modal Text:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="modaltext" placeholder="Modal Text - Short Snippet Content Here." id="modaltext" value="<?php if($settings[0]['modaltext'] != ''){ echo $settings[0]['modaltext']; }?>" />
                        </div>
                    </div>
                    <div class="form-group" style="padding-left: 13px;">
                        <label class="col-sm-2 control-label">Industry:</label>
                        <div class="col-sm-8">
                            <select name="industry" class="form-control" id="industry">
                                <option value="real-estate"<?php if($settings[0]['industry'] == 'real-estate' ){ echo ' selected="selected"'; }?> >Real Estate</option>
                                <option value="mlm"<?php if($settings[0]['industry'] == 'mlm' ){ echo ' selected="selected"'; }?> >MLM</option>
                                <option value="services"<?php if($settings[0]['industry'] == 'services' ){ echo ' selected="selected"'; }?> >Services</option>
                                <option value="ecommerce"<?php if($settings[0]['industry'] == 'ecommerce' ){ echo ' selected="selected"'; }?> >eCommerce</option>
                            </select>
                        </div>
                    </div>
                    <?php if($settings[0]['industry'] == 'real-estate' || $settings[0]['industry'] == ''):?>
                        <div class="form-group" style="padding-left: 13px;">
                            <label class="col-sm-2 control-label">Zillow API:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="zillowapi" placeholder="Zillow API" id="zillowapi" value="<?php if($settings[0]['zillowapi'] != ''){ echo $settings[0]['zillowapi']; }?>" />
                            </div>
                        </div>
                        <div class="form-group" style="padding-left: 13px;">
                            <label class="col-sm-2 control-label">Twilio API:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="twilioapi" placeholder="Twilio API" id="twilioapi" value="<?php if($settings[0]['twilioapi'] != ''){ echo $settings[0]['twilioapi']; }?>" />
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="form-group" style="padding-left: 13px;">
                        <label class="col-sm-2 control-label">Show Scroller:</label>
                        <div class="col-sm-8">
                            <select name="showscroller" class="form-control" id="showscroller">
                                <option value="0"<?php if($settings[0]['showscroller'] == 0 ){ echo ' selected="selected"'; }?> >No</option>
                                <option value="1"<?php if($settings[0]['showscroller'] == 1 ){ echo ' selected="selected"'; }?> >Yes</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group" style="padding-left: 13px;">
                        <label class="col-sm-2 control-label">Timezone:</label>
                        <div class="col-sm-8">
                            <select name="timezone" class="form-control" id="timezone">
                                <?php foreach ($cities as $city):?>
                                    <option>here</option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div id="error"></div>
                    <div class="row">
                        <div class="col-sm-3" style="align: right;">
                            <input type="submit" name="Submit" value="Save" class="btn btn-primary col-sm-3" style="float: right;"/>
                        </div>
                    </div>
            </form>

        </div>
    </div>
</div>

<script type="text/javascript">
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
                var editorOffset = $('#editor').offset();
                $('#voiceBtn').css('position','absolute').offset({top: editorOffset.top, left: editorOffset.left+$('#editor').innerWidth()-35});
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
        $('#editor').wysiwyg({ fileUploadError: showErrorAlert} );
        window.prettyPrint && prettyPrint();
    });
    $("#settings-form").submit(function(e) {

        var url = "/ajax/updatesettings"; // the script where you handle the form input.

        $.ajax({
            type: "POST",
            url: url,
            data: $("#settings-form").serialize(), // serializes the form's elements.
            success: function(data)
            {

                $('#result').html('<div class="alert alert-success alert-dismissable" id="message"> <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Settings updated. On a side note, Shu likes candy!</div>');

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