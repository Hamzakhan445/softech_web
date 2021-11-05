

var profiledrop = document.querySelector('.profileClick');
profiledrop.addEventListener('click', function(){
   var profilemenu = document.querySelector('.profile-dropdown');
   profilemenu.classList.toggle('profileactive');
});

// Close the dropdown menu if the user clicks outside of it
 
 

/*THE TOP PROFILE DROPDOWN MENU SCRIPTING
 SECTION ENDS HERE ************/




var searchbar = document.querySelector('.searchbar');

 document.onclick = function(ee){
   
 }

searchbar.addEventListener('click', function(){
   var searchbox = document.querySelector('.search-bar');
   searchbox.classList.toggle('searchactive');


 
});




 
 var close = document.querySelector('.close');
 close.addEventListener('click',function(){
   var closebox = document.querySelector('.search-bar');
   closebox.classList.remove('searchactive');
 });

/*THE TOP PROFILE DROPDOWN MENU SCRIPTING
 SECTION ENDS HERE ************/


var chat = document.querySelector('.msgclick');
chat.addEventListener('click', function(){
   var msgbox = document.querySelector('.chatbox');
   msgbox.classList.toggle('chatactive');
});
 


/*THE TOP PROFILE DROPDOWN MENU SCRIPTING
 SECTION ENDS HERE ************/



var bell = document.querySelector('.bellclick');
bell.addEventListener('click', function(){
   var bellbox = document.querySelector('.bellbox');
   bellbox.classList.toggle('notifyactive');
});
 






$(document).ready(function(){
   $(window).scroll(function(){
     var scroll = $(document).scrollTop();
     /*console.log(scroll);*/
   
   if (scroll > 300) {

      $('.top-navbar').addClass('scrollActive');

   }
   else{
          $('.top-navbar').removeClass('scrollActive');
   }

   });

   $(window).scroll(function(){
     var smscroll = $(document).scrollTop();
     /*console.log(scroll);*/
   
   if (smscroll > 300) {

      $('.small_menu').addClass('smscroll');

   }
   else{
          $('.small_menu').removeClass('smscroll');
   }

   });

});




 




/*THE MOBILE MENU  SCRIPTING
 SECTION  HERE ************/

 
 function smsearch(){
   var smsearch = document.getElementById('sm_searchbox');
   smsearch.classList.toggle('mobsearchactive');
 };
 function closesm(){
   var closebox = document.getElementById('sm_searchbox');
   closebox.classList.remove('mobsearchactive');
 };



 function smapp(){
   var app = document.getElementById('sm-notificationbox');
   app.classList.toggle('mobbellactive');
 };

 function chatbox(){
   var chat = document.getElementById('sm-messagebox');
   chat.classList.toggle('mobchatactive');
 };


 










 window.onclick = function(event) {
/*  if (!event.target.matches('.profileClick') {
    var dropdowns = document.getElementsByClassName("profile-dropdown");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('profileactive')) {
        openDropdown.classList.remove('profileactive');
      }
    }
  } */
  
  /* THE FIRST OUTSIDE CLICK SECTION */

  if (!event.target.matches('.profileClick')) {
    var dropdowns = document.getElementsByClassName("profile-dropdown");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('profileactive')) {
        openDropdown.classList.remove('profileactive');
      }
    }
  }



  if (!event.target.matches('.msgclick')) {
    var chat_dropdowns = document.getElementsByClassName("chatbox");
    var s;
    for (s = 0; s < chat_dropdowns.length; s++) {
      var openDropdownss = chat_dropdowns[s];
      if (openDropdownss.classList.contains('chatactive')) {
        openDropdownss.classList.remove('chatactive');
      }
    }
  };


  if (!event.target.matches('.bellclick')) {
    var bel_dropdown = document.getElementsByClassName("bellbox");
    var b;
    for (b = 0; b < bel_dropdown.length; b++) {
      var openDropdownbb = bel_dropdown[b];
      if (openDropdownbb.classList.contains('notifyactive')) {
        openDropdownbb.classList.remove('notifyactive');
      }
    }
  };


/*  FOR MOBILE SECTION SCRIOPT*/


  if (!event.target.matches('.smapp')) {
    var smapp = document.getElementsByClassName("smnotification");
    var sm;
    for (sm = 0; sm < smapp.length; sm++) {
      var smdropdown = smapp[sm];
      if (smdropdown.classList.contains('mobileactive')) {
        smdropdown.classList.remove('mobileactive');
      }
    }
  };
  







};




/*SMALL SCREEN MENU ***************
*************************************************/
    

 