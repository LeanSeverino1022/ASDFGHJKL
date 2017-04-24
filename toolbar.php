
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="w2ui/w2ui-1.5.rc1.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="font-awesome/css/font-awesome.css" /> 
    <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>-->
<style>
    #grid { width: 70%; height: 250px; margin: 0 auto;}
</style>
</head>

<body>
    <div id="grid"></div>
    <script src="js/jquery-2.1.4.min.js"></script>

    <script type="text/javascript" src="w2ui/w2ui-1.5.rc1.min.js"></script>
</body>
<script>
$(function () {
    $('#grid').w2toolbar({
        name : 'grid',  
        items: [
            { type: 'check',  id: 'item1', caption: 'Check', img: 'icon-add', checked: true },
            { type: 'break' },
            { type: 'menu',   id: 'item2', caption: 'Drop Down', img: 'icon-folder', 
                items: [
                    { text: 'Item 1', img: 'icon-page' }, 
                    { text: 'Item 2', img: 'icon-page' }, 
                    { text: 'Item 3', img: 'icon-page' }
                ]
            },
            { type: 'break' },
            { type: 'menu',  id: 'item3',  group: '1', caption: 'Radio 1', img: 'icon-page',
             items: [
                    { text: 'Item 1', img: 'icon-page' }, 
                    { text: 'Item 2', img: 'icon-page' }, 
                    { text: 'Item 3', img: 'icon-page' }
                ]
            },
            { type: 'radio',  id: 'item4',  group: '1', caption: 'Radio 2', img: 'icon-page' },
            { type: 'spacer' },
            { type: 'button',  id: 'item5',  caption: 'Item 5', img: 'icon-save' }
        ]
    });
});


</script>

    
</html>