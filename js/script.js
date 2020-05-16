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

 $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
});