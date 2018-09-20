$(document).ready(function(){
	$(this).find('div[id$="_skudiv"] ul li').each(function(){
		if($(this).hasClass('bx_active'))
		{
			$(this).trigger('click');
			return false;
		}
	})
	var sku_div = $(this).find('div[id$="_skudiv"]').attr('id');
	sku_flg = (sku_div!=undefined)?1:0;
	if(sku_flg == 1)
	{
		var new_lngth = sku_div.length-7;
		var ob_per = 'ob'+sku_div.substr(0,new_lngth);
		var new_obj_offrs = window[ob_per];
		$('div.item_info_section ul li').click(function(){
			var index = -1,
					i = 0,
					j = 0,
					boolOneSearch = true;
			for (i = 0; i < new_obj_offrs.offers.length; i++)
			{
				boolOneSearch = true;
				for (j in new_obj_offrs.selectedValues)
				{
					if (new_obj_offrs.selectedValues[j] !== new_obj_offrs.offers[i].TREE[j])
					{
						boolOneSearch = false;
						break;
					}
				}
				if (boolOneSearch)
				{
					index = i;
					break;
				}
			}
			$('div.alx_thumbs div.bx_slider_conteiner').each(function(){
				$(this).css('display','none');
				$(this).find('div[id^="carousel_"]').unbind('click');
			})
			$('div.alx_thumbs div.bx_slider_conteiner[rel="'+new_obj_offrs.offers[index].ID+'"]').css('display','block');
			$('div.alx_thumbs div.bx_slider_conteiner[rel="'+new_obj_offrs.offers[index].ID+'"] a:first').trigger('click');
				var id_cont = new_obj_offrs.offers[index].ID;
				$('div.bx_slider_conteiner[rel="'+id_cont+'"] div[id^="carousel_"]').jCarouselLite({
					btnNext: "div.btn_dwn[rel='btn_dwn_"+id_cont+"']",
					btnPrev: "div.btn_up[rel='btn_up_"+id_cont+"']",
					vertical: true,
					scroll: num_prev,
					circular: true,
				});
		});
	}
})