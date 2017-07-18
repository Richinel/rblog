var main = function() {
	$('.menu_btn').click(function() {
		$('.mobile_menu').fadeToggle(175);
	})

	$('.closemm').click(function() {
		$('.mobile_menu').fadeToggle(175);
	})

	// $('.add_message_btn').click( function() {
 //        $('.add_message_modal').slideToggle(350);
 //    })

 //    $('.close3').click( function() {
 //    	$('.add_message_modal').slideToggle(350);
 //    })

	$('.add').hover(function() {
		$('.tooltip').fadeToggle(150);
	});

	tinymce.init({
		selector:		".ti_edit",
		themes: 		"modern",
		plugins: 		"lists image imagetools media link responsivefilemanager",
		language: 		"nl",

		external_filemanager_path:"assets/js/tinymce/filemanager/",
   		filemanager_title:"Aventis Filemanager" ,
   		external_plugins: { "filemanager" : "filemanager/plugin.min.js"}
	});

	$('body').delegate('.add_woning_btn','click',function(){
	    $('.add_woning_modal').fadeIn(150);
	});

	$('body').delegate('.close3','click',function(){
	    $('.add_woning_modal').fadeToggle(150);
	});

	$('.iframe-btn').fancybox({	
		'width'		: 900,
		'height'	: 600,
		'type'		: 'iframe',
        'autoScale'    	: false
    });

    function close_window() {
    	parent.$.fancybox.close();
	} 

};

$(document).ready(main);

