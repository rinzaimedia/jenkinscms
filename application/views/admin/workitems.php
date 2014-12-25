<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1>Sales Content <small>List Overview</small></h1>
            <ol class="breadcrumb">
                <li class="inactive"><i class="fa fa-dashboard"></i> <a href="/manage/">Dashboard</a></li>
                <li class="active"><i class="fa fa-font"></i> Our Work</li>
            </ol>
            <div class="alert alert-success alert-dismissable" id="message">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Welcome to JenkinsCMS Admin! This new layout will hopefully make site deployments that much faster. On a side note, Shu likes candy!
            </div>
            <a href="/manage/workitems/addworkitem"><button class="btn btn-primary">Add New Work Item</button></a>
            <hr />
        </div>

    </div>
    <table id="events-table" data-toggle="table" data-cache="false" data-height="299"
           data-pagination="true" data-search="true" data-show-columns="true">
        <thead>
        <tr>
            <th data-field="workid" data-sortable="true">Work ID</th>
            <th data-field="worktitle" data-sortable="true">Title</th>
            <th data-field="operate" data-formatter="operateFormatter" data-events="operateEvents">Options</th>
        </tr>
        </thead>
    </table>
</div>
<script type="text/javascript" src="/assets/custom/js/bootstrap.table.js"></script>
<script>
    $('#events-table').bootstrapTable({
        url: '/ajax/getworkitems'
    });

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
            window.location.href ='/manage/workitem/'+row.workid;

        },
        'click .remove': function (e, value, row, index) {
            var r = confirm("Delete Work Item?");
            if (r == true) {
                $.ajax({
                    type: "GET",
                    url: '/ajax/deleteworkitem?workid='+row.workid,

                    success: function(data)
                    {

                        $('#results').html('<div class="alert alert-success alert-dismissable" id="message"> <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Work Item Deleted!</div>');


                        $('#events-table').bootstrapTable({
                            url: '/ajax/getworkitems'
                        });

                        location.reload();
                    },
                    error: function(data)
                    {

                        $('#results').html('<div class="alert alert-danger alert-dismissable" id="message"> <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Work Item failed to delete! Try again!</div>');

                    }
                });
            }
        }
    };
</script>