$(function(){
	$('nav a').each(function(){
		if($(this).attr('href')=='javascript:;'){
			$(this).append('<i class="fal fa-angle-right"></i>');
		}

	})
	$('nav .submenu').on('mouseover',function(){
		$(this).parents().find('.has-submenu>a').addClass('active');
	}).on('mouseleave',function(){
		if($(this).hasClass('active')){
			
		}else{
			$(this).parents().find('.has-submenu>a').removeClass('active');
		}
		
	});

	$('nav a[href="javascript:;"]').click(function(){
		var anak=$(this).parent();
		if(anak.find('>.submenu').hasClass('active')==true){
			anak.find('>.submenu').removeClass('active');
			anak.find('>a i').removeClass('fa-angle-down').addClass('fa-angle-right');
		}else{
			anak.find('>.submenu').addClass('active');
			anak.find('>a i').removeClass('fa-angle-right').addClass('fa-angle-down');
		}
	})
})
function toggleSidebar(){
	if($('aside').hasClass('minify')==true){
		$('aside').removeClass('minify');
		$('.isinya').removeClass('minify');
	}else{
		$('aside').addClass('minify');
		$('.isinya').addClass('minify');
	}
}