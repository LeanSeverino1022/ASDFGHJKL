<!DOCTYPE html>
<html>
<head>
    <title>W2UI Demo: forms-5</title>
    <script src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="w2ui/w2ui-1.5.rc1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="w2ui/w2ui-1.5.rc1.min.css" />
</head>
<body>

<div id="form" style="width: 750px;">
    
</div>

<script type="text/javascript">

var obj1={ page: 1}

var setHTML = function( caption, attr, text, span, page, column ) {

    
    var htmlObj = {
        caption: caption,
        attr: attr,
        text: text,
        span: span,
        page: page,
        column: column
    };

    return htmlObj;
}

/*function makeGamePlayer(name, totalScore, gamesPlayed) {
  // Define desired object
  var obj = {
    name:  name,
    totalScore: totalScore,
    gamesPlayed: gamesPlayed
  };
  // Return it
  return obj;
}
*/
$(function () {
    $('#form').w2form({ 
        name   : 'form',
        header : 'Form with Tabs',
        url    : 'server/post',
        tabs: [    
            { id: 'tab1', caption: 'General' },
            { id: 'tab2', caption: 'Address'},
            { id: 'tab3', caption: 'About' }
        ],
        fields : [            
            { field: 'Entry_no', type: 'int', required: true, html: setHTML('Entry #', '', '' ) },
            { field: 'description', type: 'text', required: true, html: {page: 1 } },
            { field: 'long_description', type: 'text'},
            { field: 'aquisition_date', type: 'date', required: true },
            { field: 'category_no', type: 'int' },
            { field: 'location', type: 'text', required: true },
            { field: 'inventory_no', type: 'int', required: true },
            { field: 'serial_num', type: 'int', required: true },
            { field: 'reassigned_date', type: 'date' },
            { field: 'remarks', type: 'textarea', required: true },
            { field: 'assignee', type: 'text' },
            { field: 'appreciation_cost', type: 'money' },
            { field: 'depreciation_cost', type: 'money' },
            { field: 'inactive', type: 'int' },
            { field: 'blocked', type: 'toggle' },
            { field: 'vendor_no', type: 'int' },
            { field: 'under_maintenance', type: 'text' },
            { field: 'lifespan', type: 'float' },
            { field: 'quantity_on_hand', type: 'int' },
            { field: 'date_created', type: 'date' },
            { field: 'last_date_modified', type: 'date' },
            { field: 'last_user_id', type: 'int' },
            { field: 'timestamp', type: 'time' },  
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