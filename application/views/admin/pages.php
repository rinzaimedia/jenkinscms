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


                <?php foreach($pages as $page):?>
                <div class="row">
                    <div class="col-md-10"><a href="/manage/pages/<?php echo $page['pageid'];?>"><li class="fa fa-pencil"> <?php echo $page['pagetitle'];?></li></a></div>
                </div>
                <?php endforeach; ?>
                <div class="alert alert-success" id="events-result" data-es="Aquí se muestra el resultado del evento">
                    Here is the result of event.
                </div>
                <table id="events-table" data-toggle="table" data-url="/ajax/getpages" data-cache="false" data-height="299"
                       data-pagination="true" data-search="true" data-show-columns="true">
                    <thead>
                    <tr>
                        <th data-field="state" data-checkbox="true"></th>
                        <th data-field="pageid" data-sortable="true">Page ID</th>
                        <th data-field="pageurl" data-sortable="true">URL</th>
                        <th data-field="pagetitle" data-sortable="true">Title</th>

                    </tr>
                    </thead>
                </table>
            </div>

        </div>
    </div>
</div>
<script type="text/javascript" src="/assets/custom/js/bootstrap.table.js"></script>
<script>
    $(function () {
        $('#basic-events-table').next().click(function () {
            $(this).hide();

            var $result = $('#events-result');

            $('#events-table').bootstrapTable({
                /*
                 onAll: function (name, args) {
                 console.log('Event: onAll, data: ', args);
                 }
                 onClickRow: function (row) {
                 $result.text('Event: onClickRow, data: ' + JSON.stringify(row));
                 },
                 onDblClickRow: function (row) {
                 $result.text('Event: onDblClickRow, data: ' + JSON.stringify(row));
                 },
                 onSort: function (name, order) {
                 $result.text('Event: onSort, data: ' + name + ', ' + order);
                 },
                 onCheck: function (row) {
                 $result.text('Event: onCheck, data: ' + JSON.stringify(row));
                 },
                 onUncheck: function (row) {
                 $result.text('Event: onUncheck, data: ' + JSON.stringify(row));
                 },
                 onCheckAll: function () {
                 $result.text('Event: onCheckAll');
                 },
                 onUncheckAll: function () {
                 $result.text('Event: onUncheckAll');
                 },
                 onLoadSuccess: function (data) {
                 $result.text('Event: onLoadSuccess, data: ' + data);
                 },
                 onLoadError: function (status) {
                 $result.text('Event: onLoadError, data: ' + status);
                 },
                 onColumnSwitch: function (field, checked) {
                 $result.text('Event: onSort, data: ' + field + ', ' + checked);
                 },
                 onPageChange: function (number, size) {
                 $result.text('Event: onPageChange, data: ' + number + ', ' + size);
                 },
                 onSearch: function (text) {
                 $result.text('Event: onSearch, data: ' + text);
                 }
                 */
            }).on('all.bs.table', function (e, name, args) {
                console.log('Event:', name, ', data:', args);
            }).on('click-row.bs.table', function (e, row, $element) {
                $result.text('Event: click-row.bs.table, data: ' + JSON.stringify(row));
            }).on('dbl-click-row.bs.table', function (e, row, $element) {
                $result.text('Event: dbl-click-row.bs.table, data: ' + JSON.stringify(row));
            }).on('sort.bs.table', function (e, name, order) {
                $result.text('Event: sort.bs.table, data: ' + name + ', ' + order);
            }).on('check.bs.table', function (e, row) {
                $result.text('Event: check.bs.table, data: ' + JSON.stringify(row));
            }).on('uncheck.bs.table', function (e, row) {
                $result.text('Event: uncheck.bs.table, data: ' + JSON.stringify(row));
            }).on('check-all.bs.table', function (e) {
                $result.text('Event: check-all.bs.table');
            }).on('uncheck-all.bs.table', function (e) {
                $result.text('Event: uncheck-all.bs.table');
            }).on('load-success.bs.table', function (e, data) {
                $result.text('Event: load-success.bs.table');
            }).on('load-error.bs.table', function (e, status) {
                $result.text('Event: load-error.bs.table, data: ' + status);
            }).on('column-switch.bs.table', function (e, field, checked) {
                $result.text('Event: column-switch.bs.table, data: ' +
                    field + ', ' + checked);
            }).on('page-change.bs.table', function (e, size, number) {
                $result.text('Event: page-change.bs.table, data: ' + number + ', ' + size);
            }).on('search.bs.table', function (e, text) {
                $result.text('Event: search.bs.table, data: ' + text);
            });
        });
    });
</script>