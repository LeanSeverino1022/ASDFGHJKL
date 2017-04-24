<!DOCTYPE html>
<html>
<head>
    <title>W2UI Demo: forms-5</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="http://rawgit.com/vitmalina/w2ui/master/dist/w2ui.min.js"></script>
    <link rel="stylesheet" type="text/css" href="http://rawgit.com/vitmalina/w2ui/master/dist/w2ui.min.css" />
</head>
<body>

<div id="form" style="width: 750px;">
    <div class="w2ui-page page-0">
        <div class="w2ui-field">
            <label>Description:</label>
            <div>
                <input name="description" type="text" maxlength="100" size="60"/>
            </div>
        </div>
        <div class="w2ui-field">
            <label>Long Description:</label>
            <div>
              <textarea name="long_description" type="text" style="width: 100%; height: 80px; resize: none"></textarea>
            </div>
        </div>
        <div class="w2ui-field">
            <label>Aquisition Date:</label>
            <div>
                <input name="aquisition_date" type="text" maxlength="100" size="60"/>
            </div>
        </div>
    </div>
    <div class="w2ui-page page-1">
        <div class="w2ui-field">
            <label>Category No:</label>
            <div>
                <input name="location" type="text" maxlength="100" style="width: 100%"/>
            </div>
        </div>
        <div class="w2ui-field">
            <label>Location:</label>
            <div>
                <input name="location" type="text" maxlength="100" style="width: 100%"/>
            </div>
        </div>
        <div class="w2ui-field">
            <label>Line 2:</label>
            <div>
                <input name="inventory_no" type="text" maxlength="100" style="width: 100%"/>
            </div>
        </div>
        <div class="w2ui-field">
            <label>City:</label>
            <div>
                <input name="serial_num" type="text" maxlength="50" size="25"/>
            </div>
        </div>
        <div class="w2ui-field">
            <label>State:</label>
            <div>
                <input name="reassigned_date" type="text" maxlength="2" size="2"/>
            </div>
        </div>
        <div class="w2ui-field">
            <label>Zip:</label>
            <div>
                <input name="remarks" type="text" maxlength="10" size="10"/>
            </div>
        </div>
    </div>
    <div class="w2ui-page page-2">
        <div class="w2ui-field">
            <label>Short Bio:</label>
            <div>
                <textarea name="assignee" type="text" style="width: 100%; height: 80px; resize: none"></textarea>
            </div>
        </div>
        <div class="w2ui-field">
            <label>Talk Name:</label>
            <div>
                <input name="appreciation_cost" type="text" maxlength="100" style="width: 100%"/>
            </div>
        </div>
        <div class="w2ui-field">
            <label>Description:</label>
            <div>
                <textarea name="depreciation_cost" type="text" style="width: 100%; height: 80px; resize: none"></textarea>
            </div>
        </div>
        <div class="w2ui-field">
            <label>Description:</label>
            <div>
                <textarea name="inactive" type="text" style="width: 100%; height: 80px; resize: none"></textarea>
            </div>
        </div>
        <div class="w2ui-field">
            <label>Description:</label>
            <div>
                <textarea name="is_deleted" type="text" style="width: 100%; height: 80px; resize: none"></textarea>
            </div>
        </div>
        <div class="w2ui-field">
            <label>Description:</label>
            <div>
                <textarea name="vendor_no" type="text" style="width: 100%; height: 80px; resize: none"></textarea>
            </div>
        </div>
        <div class="w2ui-field">
            <label>Description:</label>
            <div>
                <textarea name="under_maintenance" type="text" style="width: 100%; height: 80px; resize: none"></textarea>
            </div>
        </div>
        <div class="w2ui-field">
            <label>Description:</label>
            <div>
                <textarea name="lifespan" type="text" style="width: 100%; height: 80px; resize: none"></textarea>
            </div>
        </div>
        <div class="w2ui-field">
            <label>Description:</label>
            <div>
                <textarea name="quantity_on_hand" type="text" style="width: 100%; height: 80px; resize: none"></textarea>
            </div>
        </div>
        <div class="w2ui-field">
            <label>Description:</label>
            <div>
                <textarea name="date_created" type="text" style="width: 100%; height: 80px; resize: none"></textarea>
            </div>
        </div>
        <div class="w2ui-field">
            <label>Description:</label>
            <div>
                <textarea name="last_date_modified" type="text" style="width: 100%; height: 80px; resize: none"></textarea>
            </div>
        </div>
        <div class="w2ui-field">
            <label>Description:</label>
            <div>
                <textarea name="last_user_id" type="text" style="width: 100%; height: 80px; resize: none"></textarea>
            </div>
        </div>
    </div>

    <div class="w2ui-buttons">
        <button class="w2ui-btn" name="reset">Reset</button>
        <button class="w2ui-btn" name="save">Save</button>
    </div>
</div>

<script type="text/javascript">
$(function () {
    $('#form').w2form({ 
        name   : 'form',
        header : 'Form with Tabs',
        url    : 'server/post',
        fields : [
            { field: 'first_name', type: 'text', required: true },
            { field: 'last_name',  type: 'text', required: true },
            { field: 'comments',   type: 'text'},
            { field: 'address1', type: 'text', required: true },
            { field: 'address2', type: 'text' },
            { field: 'city', type: 'text', required: true },
            { field: 'state', type: 'text', required: true },
            { field: 'zip', type: 'int', required: true },
            { field: 'short_bio', type: 'text' },
            { field: 'talk_name', type: 'text', required: true },
            { field: 'description', type: 'text' }
        ],
        tabs: [
            { id: 'tab1', caption: 'General' },
            { id: 'tab2', caption: 'Address'},
            { id: 'tab3', caption: 'About' }
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