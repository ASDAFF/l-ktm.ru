newpos=0;
newpos_red=0;
insw=0;
insw_red=0;

function init_scrolls(){
	frm=document.getElementById("frame");
	clip=document.getElementById("scroll_clip");
	ins=document.getElementById("scroll_ins");
	if(cont = document.getElementById("scroll_content")){
		cont.style.display="block";
	}
	if(arrow = document.getElementById("arr_right")){
		arrow.style.display="block";
	}
	if(arrow1 = document.getElementById("arr_left")){
		arrow1.style.display="block";  
	}
	if(frm && clip && ins && arrow){
		w=frm.clientWidth-50;
		w=w-w%ins.clientWidth;
		clip.style.width=w+"px";
		arrow.style.marginLeft=frm.clientWidth+"px";
		insw=ins.clientWidth;
	}
	
  	frm=document.getElementById("frame_red");
	clip=document.getElementById("scroll_clip_red");
	ins=document.getElementById("scroll_ins_red");
	// ins=document.getElementsByName("scroll_ins_red");
	// ins=document.getElementsByClassName("scroll_ins_red");
	if(cont = document.getElementById("scroll_content_red0")){
		cont.style.display="block";
	}
	if(arrow = document.getElementById("arr_right_red")){
		arrow.style.display="block";
	}
	if(arrow1 = document.getElementById("arr_left_red")){
		arrow1.style.display="block";  
	}
	if(frm && clip && ins && arrow){
		w=frm.clientWidth-50;
		w=w-w%ins.clientWidth;
		clip.style.width=w+"px";
		arrow.style.marginLeft=frm.clientWidth+"px";
		insw_red=ins.clientWidth;
	}
}

function scrollDivToLeft(){
	newpos-=insw;
	if(newpos<0)
		newpos=0;
	t = setTimeout('scrollDiv()', 10);
}

function scrollDivToRight(max){
	clip=document.getElementById("scroll_clip");
	cont=document.getElementById("scroll_content");  
	elem=cont.lastChild;
	if(elem.nodeType!=1)
		elem=elem.previousSibling;  
	if(newpos<(max*insw-clip.clientWidth-10)) {
		newpos+=insw;
		t = setTimeout('scrollDiv()', 10);
	}
}

function scrollDiv(){
	clip=document.getElementById("scroll_clip");  
	if(clip.scrollLeft!=newpos){
		if(clip.scrollLeft-newpos>=10)
			ad=-10;
		else if(newpos-clip.scrollLeft>=10)
			ad=10;
		else
			ad=newpos-clip.scrollLeft;	
		clip.scrollLeft+=ad;
		t = setTimeout('scrollDiv()', 5);
	}else{
		clearTimeout(t);
	}
}

function scrollDivToLeftRed(){
	newpos_red-=insw_red;
	if(newpos_red<0)
		newpos_red=0;
	t = setTimeout('scrollDivRed()', 10);
}

function scrollDivToRightRed(max){
	clip=document.getElementById("scroll_clip_red");
	if(newpos_red<(max*insw_red-clip.clientWidth-10)){
		newpos_red+=insw_red;
		t_red = setTimeout('scrollDivRed()', 10);
	}
}

function scrollDivRed(){
	clip=document.getElementById("scroll_clip_red");
	if(clip.scrollLeft!=newpos_red){
		if(clip.scrollLeft-newpos_red>=10)
			ad=-10;
		else if(newpos_red-clip.scrollLeft>=10)
			ad=10;
		else
			ad=newpos_red-clip.scrollLeft;	
		clip.scrollLeft+=ad;
		t_red = setTimeout('scrollDivRed()', 5);
	}else{
		clearTimeout(t_red);
	}
}

function ShowTab(tab){
	tab_0=document.getElementById("tab0");
	tab_1=document.getElementById("tab1");
	tab_2=document.getElementById("tab2");
	frm=document.getElementById("redframe");
	content0=document.getElementById("scroll_content_red0");
	content1=document.getElementById("scroll_content_red1");
	content2=document.getElementById("scroll_content_red2");
	if(tab==0){
		tab_0.style.backgroundPosition="0px 0px";
		tab_1.style.backgroundPosition="0px 100px";
		tab_2.style.backgroundPosition="0px 100px";
		frm.style.backgroundImage="url(/bitrix/templates/main/images/frame/frame_green_back.gif)";
		frm.classList.add("coolframe_green");
		frm.classList.remove("coolframe_red");
		frm.classList.remove("coolframe_blue");
		content0.style.display="block";
		content1.style.display="none";
		content2.style.display="none";
		vis_tab=0;
	}else if(tab==1){
		tab_0.style.backgroundPosition="0px 100px";
		tab_1.style.backgroundPosition="0px 0px";
		tab_2.style.backgroundPosition="0px 100px";		
		frm.style.backgroundImage="url(/bitrix/templates/main/images/frame/frame_red_back.gif)";
		frm.classList.add("coolframe_red");
		frm.classList.remove("coolframe_green");
		frm.classList.remove("coolframe_blue");
		content0.style.display="none";
		content1.style.display="block";
		content2.style.display="none";
		vis_tab=1;
	}else{
		tab_0.style.backgroundPosition="0px 100px";
		tab_1.style.backgroundPosition="0px 100px";
		tab_2.style.backgroundPosition="0px 0px";
		frm.style.backgroundImage="url(/bitrix/templates/main/images/frame/frame_blue_back.gif)";
		frm.classList.add("coolframe_blue");
		frm.classList.remove("coolframe_green");
		frm.classList.remove("coolframe_red");
		content0.style.display="none";
		content1.style.display="none";
		content2.style.display="block";
		vis_tab=2;
	}
}