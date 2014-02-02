$( document ).ready(function() {
    $(".tab2").click(function(){
    	$(".tabs-2").removeClass("hidden");
    	$(".tabs-1").addClass("hidden");
    });

    $(".tab1").click(function(){
    	$(".tabs-1").removeClass("hidden");
    	$(".tabs-2").addClass("hidden");
    });
});