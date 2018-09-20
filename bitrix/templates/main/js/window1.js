
  $(document).ready(

function()

{

$('#windowOpen').bind(

'click',

function() {

if($('#window').css('display') == 'none') {

$(this).TransferTo(

{

to:'window',

className:'transferer2',

duration: 400,

complete: function()

{

$('#window').show();

}

}

);

}

this.blur();

return false;

}

);

$('#windowClose').bind(

'click',

function()

{

$('#window').TransferTo(

{

to:'windowOpen',

className:'transferer2',

duration: 400

}

).hide();

}

);


$('#window').Resizable(

{

minWidth: 200,

minHeight: 60,

maxWidth: 700,

maxHeight: 400,

dragHandle: '#windowTop',

handlers: {

se: '#windowResize'

},

onResize : function(size, position) {

$('#windowBottom, #windowBottomContent').css('height', size.height-33 + 'px');

var windowContentEl = $('#windowContent').css('width', size.width - 25 + 'px');

if (!document.getElementById('window').isMinimized) {

windowContentEl.css('height', size.height - 48 + 'px');

}

}

}

);

}

);