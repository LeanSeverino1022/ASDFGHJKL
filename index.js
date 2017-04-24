$(function () {
    $('#grid').w2grid({ 
        name: 'grid',
        url: 'connect.php',
        method: 'GET', 
        show: { 
            toolbar: true,
            footer: true,
            toolbarAdd: true,
            toolbarDelete: true,
            toolbarSave: true,
            toolbarEdit: true
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

    });    
});
