$(document).ready(function(){

   

 	var adjustSidebar = function(){
 		$(".sidebar").slimScroll({
 			height: document.documentElement.clientHeight - $(".navbar").outerHeight()
 		});
 	};

 	adjustSidebar();
 
 
 $(".sideMenuToggler").on("click", function(){
 	$(".wrapper").toggleClass("active");
 });

  $('.input10').each(function(){
        $(this).on('blur', function(){
            if($(this).val().trim() != "") {
                $(this).addClass('has-val');
            }
            else {
                $(this).removeClass('has-val');
            }
        })    
    });

 $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
});

