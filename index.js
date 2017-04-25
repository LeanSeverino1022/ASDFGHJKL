   
//    layout2= {
//         name: 'layout',
//         padding: 10,
//         panels: [
//             { type: 'left', size: 200, resizable: true, },
//             { type: 'main', minSize: 550, overflow: 'hidden' }
//         ]
//     }


var config = {
    layout: {
        name: 'layout',
        padding: 10,
        panels: [
            { type: 'left', size: 200, resizable: true, },
            { type: 'main', minSize: 550, overflow: 'hidden' }
        ]
    },

    sidebar: {
        name: 'sidebar',
        nodes: [
            { id: 'general', text: 'General', group: true, expanded: true, nodes: [
                { id: 'grid1', text: 'Grid 1', img: 'icon-page', selected: true },
                { id: 'grid2', text: 'Grid 2', img: 'icon-page' },
                { id: 'html', text: 'Some HTML', img: 'icon-page' }
            ]}           
        ],
        onClick: function (event) {
            switch (event.target) {
                case 'grid1':
                    w2ui.layout.content('main', w2ui.grid1);
                    break;
                case 'grid2':
                    w2ui.layout.content('main', w2ui.grid2);
                    break;
                case 'html':
                    w2ui.layout.content('main', '<div style="padding: 10px">Some HTML</div>');
                    $(w2ui.layout.el('main'))
                        .removeClass('w2ui-grid')
                        .css({ 
                            'border-left': '1px solid silver'
                        });
                    break;
            }
       }

    },
    grid1: { 
        name: 'grid',
        url: 'connect.php',
        method: 'GET', 
        show: { 
            toolbar: true,
            footer: true,
            toolbarAdd: true,
            toolbarDelete: true,
            toolbarSave: true,
            toolbarEdit: true,
        },
        searches: [                
            { field: 'lname', caption: 'Last Name', type: 'text' },
            { field: 'fname', caption: 'First Name', type: 'text' },
            { field: 'email', caption: 'Email', type: 'text' }
        ],
        columns: [                
            // { field: 'recid', caption: 'ID', size: '50px', sortable: true, attr: 'align=center' },
            { field: 'description', caption: 'Description', size: '10%', sortable: true },
            { field: 'long_description', caption: 'Detailed Description', size: '10%', sortable: true },
            { field: 'aquisition_date', caption: 'Aquisition Date', size: '10%', sortable: true },
            { field: 'category_no', caption: 'Category', size: '10%', sortable: true },
            { field: 'location', caption: 'Location', size: '10%', sortable: true },
            { field: 'inventory_no', caption: 'Inventory ID', size: '10%', sortable: true },
            { field: 'serial_num', caption: 'Serial', size: '10%', sortable: true },
            { field: 'reassigned_date', caption: 'Re-assigned Date', size: '10%', sortable: true },
            { field: 'remarks', caption: 'Remarks', size: '10%', sortable: true },
            { field: 'assignee', caption: 'Assignee', size: '10%', sortable: true },
            { field: 'appreciation_cost', caption: 'Appreciation Cost', size: '10%', sortable: true },
            { field: 'depreciation_cost', caption: 'Depreciation Cost', size: '10%', sortable: true },
            { field: 'inactive', caption: 'Active', size: '10%', sortable: true },
            { field: 'is_deleted', caption: 'Deleted', size: '10%', sortable: true },
            { field: 'vendor_no', caption: 'Vendor', size: '10%', sortable: true },
            { field: 'under_maintenance', caption: 'Under Maintenance', size: '10%', sortable: true },
            { field: 'lifespan', caption: 'lifespan', size: '10%', sortable: true },
            { field: 'quantity_on_hand', caption: 'Quantity', size: '10%', sortable: true },
            { field: 'date_created', caption: 'Date Created', size: '10%', sortable: true },
            { field: 'last_date_modified', caption: 'Date last Modified', size: '10%', sortable: true },
            { field: 'last_user_id', caption: 'Last User ID', size: '10%', sortable: true },
            { field: 'timestamp', caption: 'Timestamp', size: '10%', sortable: true },
            // { field: 'fname', caption: 'First Name', size: '30%', sortable: true },
            // { field: 'email', caption: 'Email', size: '40%' },
            // { field: 'sdate', caption: 'Start Date', size: '120px' }
        ],
        onAdd: function (event) {
            w2alert('add');
        },
        onEdit: function (event) {
            w2alert('edit');
        },
        onDelete: function (event) {
            console.log('delete has default behavior');
        },
        onSave: function (event) {
            w2alert('save');
        },
        onDblClick: updateRecord /*function found in other file*/
    }
};


$(function () {
    // console.log( $().w2sidebar(config.sidebar));
    // initialization
   
   $("#w2ui-cont").w2layout(config.layout);

    w2ui.layout.content('left', $().w2sidebar(config.sidebar));
    w2ui.layout.content('main', $().w2grid(config.grid1));
    // in memory initialization
    $().w2grid(config.grid2);
        
}); 

 




