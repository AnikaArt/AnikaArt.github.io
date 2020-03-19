




$('.input_name').on("change keyup input click", function() {
    if (this.value.match(/[^а-яА-Яa-zA-Z\s]/g)) {
        this.value = this.value.replace(/[^а-яА-Яa-zA-Z\s]/g, '');
    }
});

$('.input_email').on("change keyup input click", function() {
    if (this.value.match(/[^a-zA-Z\0-9\-\_\(\)\@s]/g)) {
        this.value = this.value.replace(/[^a-zA-Z\0-9\-\_\(\)\@s]/g, '');
    }
});



    
jQuery(function($){
   $(".phone_mask").mask("+7 (999)999-99-99");
});
$(function(){
        $(".link").click(function(){
                var _href = $(this).attr("href");
                $("html, body").animate({scrollTop: $(_href).offset().top+"px"}, 2000);
                return false;
        });
});












