
  $(document).ready(

function()

{

$('#windowOpen3').bind(

'click',

function() {

if($('#window3').css('display') == 'none') {

$(this).TransferTo(

{

to:'window3',

className:'transferer2',

duration: 400,

complete: function()

{

$('#window3').show();

}

}

);

}

this.blur();

return false;

}

);

$('#windowClose3').bind(

'click',

function()

{

$('#window3').TransferTo(

{

to:'windowOpen3',

className:'transferer2',

duration: 400

}

).hide();

}

);


$('#window3').Resizable(

{

minWidth: 200,

minHeight: 60,

maxWidth: 700,

maxHeight: 400,

dragHandle: '#windowTop3',

handlers: {

se: '#windowResize3'

},

onResize : function(size, position) {

$('#windowBottom3, #windowBottomContent3').css('height', size.height-33 + 'px');

var windowContentEl = $('#windowContent3').css('width', size.width - 25 + 'px');

if (!document.getElementById('window3').isMinimized) {

windowContentEl.css('height', size.height - 48 + 'px');

}

}

}

);

}

);