$(document).on("ready",function(){

	

	for (var pais in paises) {
		console.log(paises[pais]);
		$("#pais").append("<option value='"+paises[pais]+"' style='display:block;color:#001;'>"+paises[pais]+"</option>");
	}


    $('#mobile_button').on('click', function(){
        $('#mobile_menu').slideToggle('fast');
    });

   var altura = $("#main-header").offset().top;
    $(window).on('scroll', function() {
        if ($(window).scrollTop() > altura) {
            $('#main-header').addClass('menu-fixed');
        } else {
            $('#main-header').removeClass('menu-fixed');
        }
    });    

    $('a[href^="#"]').click(function(e) {
	    e.preventDefault();
	    volver = $(this).attr("href");
	    $("html, body").animate({
	        scrollTop: $(volver).offset().top
	    }, 2000);
    });

    	$("#button_send_message").on("click",function(e){
    		e.preventDefault();

	   		/* $.ajax({
	   		 	headers:{"X-CSRF-TOKEN":$("#token").val()},
				type	: "POST",
				url		: $("#send_message").attr("action"),
				data	: $("#send_message").serialize(),
				beforesend:function(){

				},
				success : function(data) {
					console.log(data);						
				}
			});*/
    	$("#form_contacto").submit();

    	});

});