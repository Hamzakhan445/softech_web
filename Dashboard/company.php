<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <!--Css Link--->
    <link rel="stylesheet" type="text/css" href="asset/css/style.css">
  
    <!--Favicon Link--->
    <link rel="icon" type="img/svg" href="favicon.svg">
  
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  
    <!-- Fontawesome Cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
    <!---Animation css link---->
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

              <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

  <link rel="stylesheet" type="text/css" href="asset/css/jquery.lineProgressbar.css">

    
    <title> DASHBOARD </title>


    <style type="text/css" media="screen">
      
    </style>
  
  </head>

  <body>

     
    
 


             <div class="main">
      
<!-- ** THE TOP NAVBAR  SECTION STARTS HERE **
     ************************************* -->

 <div class="top-navbar px-5 p-2">

 <div class="navbar-content"> 

  <div class="logo">
<img src="asset/images/logo2.svg" class="top-logo">
 </div>

  <div class="profile">
  <div class="icons">
  <img src="asset/images/search.png" id="searchtoggle"  class="top_icons mx-1 searchbar" style=" width: 30px;height: 30px;" >
  <img src="asset/images/bell.png"    class="top_icons mx-1 bellclick" style=" width: 30px; height: 30px;" >
  <img src="asset/images/chat.png"   class="top_icons mx-1 msgclick " style=" width: 30px;height: 30px;" >
  </div>

   <!---THE PROFIILE DROPDOWN MENU -------------
        ---------------------------->
    <div class="profile-content mx-2 ">
      <div class="d-flex align-items-center">
        <img src="asset/images/hamzakhan.jpeg" class="profile-img mx-2">
        <p class="pt-3 dropdown-toggle profileClick"> HAMZA KHAN </p>
      </div>
     
      <div class="profile-dropdown">
        <div class="profile-menu">
         <li class="active"> <a href="#" class="text-white" > <i class="fa fa-user mx-2"></i>  Profile </a> </li>
         <li class=""> <a href="#"> <i class="fa fa-lock mx-2"></i>  Privacy </a> </li>
         <li class=""> <a href="#"> <i class="fa fa-question-circle mx-2"></i>   Help </a> </li>
         <li class=""> <a href="#"> <i class="fa fa-gear mx-2"></i>  Setting </a> </li>
         <li class=""> <a href="#">  <i class="fa fa-share mx-2"></i> Log Out </a> </li>

        </div>
      </div>
    </div>

 <!---THE PROFIILE DROPDOWN MENU EMDS  -------------
        ---------------------------->

        <div id="messagebox" class="chatbox" >
            
            <div class="d-flex">
              <img src="asset/images/c1.png" class="mx-3" alt="">
              <p class="mx-2"> <b> Sadia Khan </b> <br> Lorem ipsum dollar epic the init! </p>
            </div>
            <div class="d-flex">
              <img src="asset/images/c1.png" class="mx-3" alt="">
              <p> <b> Sadia Khan </b> <br> Lorem ipsum dollar epic the init! </p>
            </div>
            <div class="d-flex">
              <img src="asset/images/c1.png" class="mx-3" alt="">
              <p> <b> Sadia Khan </b> <br> Lorem ipsum dollar epic the init! </p>
            </div>
            <div class="d-flex">
              <img src="asset/images/c1.png" class="mx-3" alt="">
              <p> <b> Sadia Khan </b> <br> Lorem ipsum dollar epic the init! </p>
            </div>

        </div>

<!---THE MESSAGE BOX DROPDOWN MENU EMDS  -------------
        ---------------------------->

        <div id="notificationbox" class="bellbox" >
            
           <div class="d-flex">
             <img src="asset/images/gmail.png" class="notifyicon mx-3 " >
             <img src="asset/images/whatsapp.png" class="notifyicon mx-3 " >
             <img src="asset/images/facebook.png" class="notifyicon mx-3 " >

           </div>

        </div>





  </div>


 </div> <!--navbar content--->


<div class="search-bar bg-white align-items-center d-flex" id="searchBox">
  <i class="fa fa-close close" style="font-size: x-large; cursor: pointer;"></i>
  <input type="search" class="form-control inputbox p-3 mx-3" placeholder="Enter your Keywords..." name="">
  <button type="button" class="btn btn-primary"> <i class="fa fa-search"></i> </button>
</div>






 </div>







      
                                           <?php include 'menu.php'; ?>


                    <!---The Navmenu section ends here -------------
                    --------------------\-\----------------------->

                    <div class="container-md w-50 p-3  bg-white shadow mt-5 loginsection">
                        
                          <!---The Addiing member in website section  here -------------
                    --------------------\-\----------------------->


                      <div class="form">
                       
                    <h4> Add Company profile count number  To Website</h4>

                    <form action="memb_insert.php" method="post" enctype="multipart/form-data" >
                      
                       <label for="input" class="mt-3"> Year of buisness </label>
                      <input type="number" required="" autocomplete="off" name="count1" class="mt-3 form-control" placeholder="Enter a number" >

                       <label for="input" class="mt-3"> Project done </label>
                      <input type="number" required="" autocomplete="off" name="count2" class="mt-3 form-control" placeholder="Enter a number" >
 
                      <label for="input" class="mt-3"> Clients  </label>
                      <input type="number" required="" autocomplete="off" name="count3" class="mt-3 form-control" placeholder="Enter a number" >


                        <label for="input" class="mt-3">   Visits </label>
                      <input type="number" required="" autocomplete="off" name="count4" class="mt-3 form-control" placeholder="Enter a number" >

                       <input type="submit" value="Add Counter" name="add_counter" class="btn btn-danger mt-3" >


                    </form>
                      </div>


 











 
   <!-- <div class="add-member w-50 mt-5 ">
                    
                    <h4> Add Header Text To Website</h4>

                    <form action="memb_insert.php" method="post" enctype="multipart/form-data" >
                      

                      <input type="text" required="" autocomplete="off" name="main_heading" class="mt-3 form-control" placeholder="Main Heading" >

                       <input type="text" required="" autocomplete="off" name="sub_heading" class="mt-3 form-control" placeholder="Sub Heading" >

   
                       <input type="submit" value="Add Heading" name="add_heading" class="btn btn-danger mt-3" >


                    </form>

                  </div>
 -->




<!---The Addiing header text in website section  here -------------
         --------------------\-\----------------------->

   <!-- <div class="add-member w-50 mt-5 ">
                    
                    <h4> Add Customer  To Website</h4>

                    <form action="memb_insert.php" method="post" enctype="multipart/form-data" >
                      

                      <input type="file" required="" autocomplete="off" name="customer_img" class="mt-3 form-control" placeholder="Customer_img" >
   
                       <input type="submit" value="Add Customer" name="add_customer" class="btn btn-danger mt-3" >


                    </form>

                  </div>
 
 -->





<!---The Addiing Ceo message  in website section  here -------------
         --------------------\-\----------------------->

  <!--  <div class="add-member w-50 mt-5 ">
                    
                    <h4> Add Ceo Message  To Website</h4>

                    <form action="memb_insert.php" method="post" enctype="multipart/form-data" >
                      

                      <input type="file" required="" autocomplete="off" name="ceo_img" class="mt-3 form-control" placeholder="ceo_message" >

                         <input type="text" required="" autocomplete="off" name="ceo_message" class="mt-3 form-control" placeholder="ceo_message" >
   
                       <input type="submit" value="Add Message" name="ceo_message" class="btn btn-danger mt-3" >


                    </form>

                  </div> -->








 </div>











                                      <!---The main section ends here -------------
                                      --------------------\-\----------------------->


                                         <div class="container-fluid p-2 mt-5 footer"    >
                                          <p class="text-center pt-2 text-white"> Develooped By Hamza Khan</p>
                                         </div>

 

 <!--- THE WEBSITE ENDS HERE ************|*********************
 ******************************************************************
 ********************************************************************** --->






      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


                                      
  <script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>






                                      <script type="text/javascript">
                                        
                            let bar = document.querySelector('.smbar');
                            bar.addEventListener('click',  function(){

                             let toggle =  document.querySelector('.collapsei');
                             toggle.classList.toggle('toggle_show');
                            });
                                      </script>


                                      
                                      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

                                        <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
 

                                      <script src="asset/js/main.js">   </script>
                                      <script src="asset/js/jquery.lineProgressbar.js">   </script>


                                        <script type="text/javascript">
                                          
                                          $(document).ready(function(){
                                           $('#progressbar1').LineProgressbar({
                                            percentage: 40
                                           }); 

                                          })

                                        </script>




                                      <script src="asset/js/mychart.js">   </script>
                                      <script src="asset/js/charts.js"></script>
                                      <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
                                      <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
                                      <script>
                                      $('.count').counterUp({
                                      delay: 14,
                                      time: 2000
                                      });
                                      </script>
                        

                                    
                                      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
                                      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
                                   
                                    </body>
                                  </html>