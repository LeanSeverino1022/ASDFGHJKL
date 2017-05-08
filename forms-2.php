<!DOCTYPE html>
<html>
<head>
    <title>W2UI Demo: forms-11</title>
    <script src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="w2ui/w2ui-1.5.rc1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="w2ui/w2ui-1.5.rc1.min.css" />
</head>
<body>

<div id="form" style="width: 750px;">
    
</div>

<script type="text/javascript">
$(function () {
    $('#form').w2form({ 
        name   : 'form',
        header : 'Form with Tabs and Columns',
        url    : 'server/post',
        tabs: [
            { id: 'tab1', caption: 'General' },
            { id: 'tab2', caption: 'Address'},
            { id: 'tab3', caption: 'About' }
        ],
        fields : [
            { field: 'first_name', type: 'text', html: { caption: 'First Name', page: 0, column: 0 } },
            { field: 'last_name',  type: 'text', html: { caption: 'Last Name', page: 0, column: 0 } },
            { field: 'comments',   type: 'textarea', html: { caption: 'Comments:', page: 0, column: 1, attr: 'style="height: 90px"' } },
            { field: 'middle_name',  type: 'text', html: { caption: 'Middle Name' } },
            { field: 'address1', type: 'text', html: { caption: 'Address', page: 1, column: 0, group: 'Address Group 1' } },
            { field: 'address2', type: 'text', html: { caption: 'Line 2', page: 1, column: 0 } },
            { field: 'country', type: 'text', html: { caption: 'Country', page: 1, column: 0, group: 'Address Group 3' } },
            { field: 'city', type: 'text', html: { caption: 'City', page: 1, column: 1, group: 'Address Group 2' } },
            { field: 'state', type: 'text', html: { caption: 'State', page: 1, column: 1 } },
            { field: 'zip', type: 'int', html: { caption: 'Zip', page: 1, column: 1 } },
            { field: 'short_bio', type: 'text', html: { caption: 'Short Bio', page: 2 } },
            { field: 'talk_name', type: 'text', html: { caption: 'Talk Name', page: 2 } },
            { field: 'description', type: 'text', html: { caption: 'Talk Description', page: 2 } }
        ],
        actions: {
            reset: function () {
                this.clear();
            },
            save: function () {
                this.save();
            }
        }
    });
});
</script>

</body>
</html>