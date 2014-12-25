<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1>Pages <small>JenkinsCMS Page Editor</small></h1>
            <ol class="breadcrumb">
                <li class="inactive"><i class="fa fa-dashboard"></i> <a href="/manage/">Dashboard</a></li>
                <li class="active"><i class="fa fa-edit"></i> Edit Pages</li>
            </ol>
            <div class="alert alert-success alert-dismissable" id="message">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Welcome to JenkinsCMS Admin! This new layout will hopefully make site deployments that much faster. On a side note, Shu likes candy!
            </div>
            <a href="/manage/pages/addpage"><button class="btn btn-primary">Add New Page</button></a>
            <hr />
            <div id="pages">

                <table id="events-table" data-toggle="table" data-url="/ajax/getpages" data-cache="false" data-height="299"
                       data-pagination="true" data-search="true" data-show-columns="true">
                    <thead>
                    <tr>
                        <th data-field="pageid" data-sortable="true">Page ID</th>
                        <th data-field="pageurl" data-sortable="true">URL</th>
                        <th data-field="pagetitle" data-sortable="true">Title</th>
                        <th data-field="operate" data-formatter="operateFormatter" data-events="operateEvents">Options</th>
                    </tr>
                    </thead>
                </table>
            </div>

        </div>
    </div>
</div>
<script type="text/javascript" src="/assets/custom/js/bootstrap.table.js"></script>
<script>
    function operateFormatter(value, row, index) {
        return [

            '<a class="edit ml10" href="javascript:void(0)" title="Edit">',
            '<i class="fa fa-edit fa-lg"></i>',
            '</a>&nbsp;&nbsp;',
            '<a class="remove ml10" href="javascript:void(0)" title="Remove">',
            '<i class="fa fa-times-circle-o fa-lg"></i>',
            '</a>'
        ].join('');
    }

    window.operateEvents = {

        'click .edit': function (e, value, row, index) {
            window.location.href ='/manage/pages/'+row.pageid;

        },
        'click .remove': function (e, value, row, index) {
            var r = confirm("Delete Page?");
            if (r == true) {
                $.ajax({
                    type: "GET",
                    url: '/ajax/deletepage?pageid='+row.pageid,

                    success: function(data)
                    {

                        $('#result').html('<div class="alert alert-success alert-dismissable" id="message"> <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Page updated. Everyone, Shu loves bacon!</div>');

                        
                        $("#events-table").toggle().toggle();
                    },
                    error: function(data)
                    {

                        $('#error').html('<div class="alert alert-danger alert-dismissable" id="message"> <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Settings failed to update. Try again. On a side note, Shu loves explosions!</div>');

                    }
                });
            }
        }
    };
</script>