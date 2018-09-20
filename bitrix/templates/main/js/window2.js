
  $(document).ready(

function()

{

$('#windowOpen2').bind(

'click',

function() {

if($('#window2').css('display') == 'none') {

$(this).TransferTo(

{

to:'window2',

className:'transferer2',

duration: 400,

complete: function()

{

$('#window2').show();

}

}

);

}

this.blur();

return false;

}

);

$('#windowClose2').bind(

'click',

function()

{

$('#window2').TransferTo(

{

to:'windowOpen2',

className:'transferer2',

duration: 400

}

).hide();

}

);


$('#window2').Resizable(

{

minWidth: 200,

minHeight: 60,

maxWidth: 700,

maxHeight: 400,

dragHandle: '#windowTop2',

handlers: {

se: '#windowResize2'

},

onResize : function(size, position) {

$('#windowBottom2 #windowBottomContent2').css('height', size.height-33 + 'px');

var windowContentEl = $('#windowContent2').css('width', size.width - 25 + 'px');

if (!document.getElementById('window2').isMinimized) {

windowContentEl.css('height', size.height - 48 + 'px');

}

}

}

);

}

);
