$(document).scroll(function(){
	 $(window).scroll(function(){
	 	 var scroll = $(document).scrollTop();

	 	 if (scroll >= 200) {
	 	 	$('.navmenu').addClass('navactive');
	 	 }
	 	 else{
	 	 	$('.navmenu').removeClass('navactive');
	 	 }


	 });
});






 /*var dropbtns = document.querySelector('.dropdownbtn');
 dropbtns.addEventListener('click', function(){

 	var dropmenu = document.querySelector('.dropdown-menus');
 	dropmenu.classList.toggle('activee');

 	var dropicon = document.querySelector('.angle');
 	dropicon.classList.toggle('dropicon');

 });

 // Close the dropdown menu if the user clicks outside of it
document.onclick = function(event) {
  if (!event.target.matches('.dropdownbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-menus");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('activee')) {
        openDropdown.classList.remove('activee');
      }
    }
  };


  if (!event.target.matches('.shareclick')) {
    var sharedropdowns = document.getElementsByClassName("sharebox");
    var s;
    for (s = 0; s < sharedropdowns.length; s++) {
      var shareDropdown = sharedropdowns[s];
      if (shareDropdown.classList.contains('shareactive')) {
        shareDropdown.classList.remove('shareactive');
      }
    }
  }




};*/

/* THE CATEGORY DROPDOWN SECTION ENDS HERER ---------------------
 ----------------------------------------------------------------*/












    
 $('.box-2, .box-3, .box-4, .box-5, .box-6, .box-7').hide();



 $('.click1').click(function(){
  $(this).addClass('active');
    $(this).addClass('animate__flipInX');
  $('.click2, .click3, .click4, .click5, .click6, .click7').removeClass('active');
   $('.box-2, .box-3, .box-4, .box-5, .box-6, .box-7').hide()
   $('.box-1').show();

 });





 $('.click2').click(function(){
  $(this).addClass('active');
    $(this).addClass('animate__flipInX');

  $('.click1, .click3, .click4, .click5, .click6, .click7').removeClass('active');
   $('.box-1, .box-3, .box-4, .box-5, .box-6, .box-7').hide()
   $('.box-2').show();

 });



  $('.click3').click(function(){
  $(this).addClass('active');
    $(this).addClass('animate__flipInX');
  $('.click1, .click2, .click4, .click5, .click6, .click7').removeClass('active');
   $('.box-1, .box-2, .box-4, .box-5, .box-6, .box-7').hide()
   $('.box-3').show();

 });
 

 $('.click4').click(function(){
  $(this).addClass('active');
    $(this).addClass('animate__flipInX');
  $('.click1, .click2, .click3, .click5, .click6, .click7').removeClass('active');
   $('.box-1, .box-2, .box-3, .box-5, .box-6, .box-7').hide()
   $('.box-4').show();

 });





 $('.click5').click(function(){
  $(this).addClass('active');
    $(this).addClass('animate__flipInX');
  $('.click1, .click2, .click3, .click4, .click6, .click7').removeClass('active');
   $('.box-1, .box-2, .box-3, .box-4, .box-6, .box-7').hide()
   $('.box-5').show();

 });



  $('.click6').click(function(){
  $(this).addClass('active');
    $(this).addClass('animate__flipInX');
  $('.click1, .click2, .click4, .click5, .click3, .click7').removeClass('active');
   $('.box-1, .box-2, .box-4, .box-5, .box-3, .box-7').hide()
   $('.box-6').show();

 });



    $('.click7').click(function(){
  $(this).addClass('active');
    $(this).addClass('animate__flipInX');
  $('.click1, .click2, .click4, .click5, .click6, .click3').removeClass('active');
   $('.box-1, .box-2, .box-4, .box-5, .box-6, .box-3').hide()
   $('.box-7').show();

 });











  var sharebtn  = document.querySelector('.shareclick');
     sharebtn.addEventListener('click', function(){
       var sharebox = document.querySelector('.sharebox');
       sharebox.classList.toggle('shareactive');
     });

 