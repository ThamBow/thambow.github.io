// JavaScript Document


$(document).ready(function() {
	
	var ww = document.body.clientWidth;
	
	$(".nav li a").each(function() {
if ($(this).next().length > 0) {
$(this).addClass("parent");
};
})

if (ww < 1084) {
//$(".toggleMenu").css("display", "inline-block");

$(".nav li a.parent").click(function(e) {
	
	e.preventDefault();
$(this).parent("li").toggleClass('hover')//Clicking on the anchor tag initialises ('li') item, however reloads page as it is a link.

});//closing this function

} else {

        $(".nav li").hover(function() {
     $(this).addClass('hover');
  }, function() {
     $(this).removeClass('hover');
   });
}

});