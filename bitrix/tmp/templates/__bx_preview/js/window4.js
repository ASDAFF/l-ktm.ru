
  $(document).ready(

function()

{

$('#windowOpen4').bind(

'click',

function() {

if($('#window4').css('display') == 'none') {

$(this).TransferTo(

{

to:'window4',

className:'transferer2',

duration: 400,

complete: function()

{

$('#window4').show();

}

}

);

}

this.blur();

return false;

}

);

$('#windowClose4').bind(

'click',

function()

{

$('#window4').TransferTo(

{

to:'windowOpen4',

className:'transferer2',

duration: 400

}

).hide();

}

);


$('#window4').Resizable(

{

minWidth: 200,

minHeight: 60,

maxWidth: 700,

maxHeight: 400,

dragHandle: '#windowTop4',

handlers: {

se: '#windowResize4'

},

onResize : function(size, position) {

$('#windowBottom4, #windowBottomContent4').css('height', size.height-33 + 'px');

var windowContentEl = $('#windowContent4').css('width', size.width - 25 + 'px');

if (!document.getElementById('window4').isMinimized) {

windowContentEl.css('height', size.height - 48 + 'px');

}

}

}

);

}

);