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
                <table id="tab" class="table table-striped">
                    <thead>
                    <th>Title</th>
                    <th>Snippet</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    </thead>
                    <tbody>
                    </tbody>
                    <tfoot>
                    <td  colspan="4"><ul id="paging" class="pagination">
                        </ul></td>
                    </tfoot>
                </table>
            </div>

        </div>
    </div>
</div>
<script type="text/javascript" src="/assets/custom/js/jquery.tabulate.js"></script>
<script type="text/javascript">
    var tab = $('#tab')

    var xhr = function () {

        console.log(arguments);
        return $.ajax({
            data: '<?php echo $json;?>', // path to the json file
            dataType: 'json' // xml, json, script, or html
        });
    };

    var renderer = function (r, c, item) {
        switch(c)
        {
            case 0:
                return item.sr;

            case 1:
                return item.name;

            case 2:
                return item.location;

            default:
                return item.language;
        }
    };

    tab.tabulate({

        source: xhr,
        renderer: renderer,
        pagination: $('#paging'),
        pagesI18n: function(str) {
            switch(str) {
                case 'next':
                    return 'Aage';

                case 'prev':
                    return 'Peeche';
            }
        }
    })
        .on('loadfailure', function (){
            console.error(arguments);
            alert('Failed!');
        });

    tab.trigger('load');
</script>