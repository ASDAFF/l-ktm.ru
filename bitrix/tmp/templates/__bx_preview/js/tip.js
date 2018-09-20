function showtip(addr, ip, model, firm, rem)
  {  p=document.getElementById("addr");
  if(p)
    {
    if(addr)
      {      p.innerHTML="Адрес: "+addr;
      p.style.display="block";
      }
    else
      {
      p.innerHTML="";
      p.style.display="none";
      }
    }
  p=document.getElementById("ip");
  if(p)
    {
    if(ip)
      {
      p.innerHTML="IP: "+ip;
      p.style.display="block";
      }
    else
      {
      p.innerHTML="";
      p.style.display="none";
      }
    }
  p=document.getElementById("model");
  if(p)
    {
    if(model)
      {
      p.innerHTML="Модель: "+model;
      p.style.display="block";
      }
    else
      {
      p.innerHTML="";
      p.style.display="none";
      }
    }
  p=document.getElementById("firm");
  if(p)
    {
    if(firm)
      {
      p.innerHTML="Прошивка: "+firm;
      p.style.display="block";
      }
    else
      {
      p.innerHTML="";
      p.style.display="none";
      }
    }
  p=document.getElementById("remark");
  if(p)
    {
    if(rem)
      {
      p.innerHTML="Комментарий: "+rem;
      p.style.display="block";
      }
    else
      {
      p.innerHTML="";
      p.style.display="none";
      }
    }
  }



function defPosition(event)
  {
  var x = y = 0;
  if (document.attachEvent != null)
    { // Internet Explorer & Opera
    x = window.event.clientX + (document.documentElement.scrollLeft ? document.documentElement.scrollLeft : document.body.scrollLeft);
    y = window.event.clientY + (document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop);
    }
  else if (!document.attachEvent && document.addEventListener)
    { // Gecko
    x = event.clientX + window.scrollX;
    y = event.clientY + window.scrollY;
    }
  else
    {
      // Do nothing
    }
  return {x:x, y:y};
  }

document.onmousemove = function(event)
  {
  var event = event || window.event;

  div=document.getElementById("tip")

  if(div)
    {

    for(x=0;x<=256;x++)
      {      if(cell=document.getElementById("td_"+x))
        {        if(defPosition(event).x>absPosition(cell).x && defPosition(event).x<absPosition(cell).x+cell.clientWidth+2 && defPosition(event).y>absPosition(cell).y && defPosition(event).y<absPosition(cell).y+cell.clientHeight+2)
          {          div.style.display="block";
          break;          }        }      }
    if(x>255)
      div.style.display="none";

    div.style.left=(defPosition(event).x+3)+"px";
    div.style.top=(defPosition(event).y+3)+"px";
    }
  }

function absPosition(obj)
  {
  var x = y = 0;
  while(obj)
    {
    x += obj.offsetLeft;
    y += obj.offsetTop;
    obj = obj.offsetParent;
    }
  return {x:x, y:y};
  }
