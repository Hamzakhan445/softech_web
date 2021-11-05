$(document).ready(function(){
 $(window).scroll(function(){
var mypos = $(document).scrollTop();
if (mypos >= 100) {
$('.mobmenu').css("top","0px");
}
else
{
$('.mobmenu').css("top","-130px");
}
})
})
$('.toggle-btn').click(function(){
$('.rightside').css("right","0");
})
$('.closebtn').click(function(){
$('.rightside').css("right","-270px");
})

$('#langbtn').click(function(){
$('.langmenu').toggle('slow');
})
$('#langbtn2').click(function(){
$('.langmenu2').toggle('slow');
})
$('#langbtn3').click(function(){
$('.langmenu3').toggle('slow');
})


jQuery(document).ready(function($) {
        		"use strict";
        		//  TESTIMONIALS CAROUSEL HOOK
		        $('#customers-testimonials').owlCarousel({
		            loop: true,
		            center: true,
		            items: 3,
		            margin: 0,
		            autoplay: true,
		            dots:true,
		            autoplayTimeout: 3500,
		            smartSpeed: 450,
		            responsive: {
		              0: {
		                items: 1
		              },
		              768: {
		                items: 2
		              },
		              1170: {
		                items: 3
		              }
		            }
		        });
        	});






function validate(){

 var user = document.getElementById('username').value;
 var email = document.getElementById('email').value;
 var message = document.getElementById('message').value;
 var number = document.getElementById('number').value;

  
  if (user == "" || email == "" || message == "" || number == "" ) {
  	alert("must be filled");

 	var error = document.getElementById('error');
  	error.classList.remove('d-none');
  	error.innerHTML = " All Fields Required! **";

  	return false;
  }
  else{
             error.innerHTML = "Your Message Has Been Sent!";
         error.classList.add('alert-info');
	setInterval(function(){

  




         		return true;

	}, 3000);


  }


 }