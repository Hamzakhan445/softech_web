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





        
                             
                                  <div class="container-md table-container">
                                    
                                    <div class="table-section pt-3">



     <div class="tabletop mt-5">                               

      <div class="searchtable ">
    <input type="search" class="tablesearch" placeholder="Search here " name="">
    <button class="searchbtn"><i class="fa fa-search"></i></button>
  </div>

    <div class="dropdown">
      <select name="" id="" class=" custom-select-lg form-control">
        <option value="5"> 5 </option>
        <option value="10"> 10 </option>
        <option value="20"> 20</option>
        <option value="30"> 30 </option>

      </select>
    </div>

  </div>

   <h4 class="mt-5">  Added Member in Website </h4>

<div class="data" style="height: 300px; overflow: scroll;">


<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Member_Name</th>
      <th scope="col">Member_Field</th>
      <th scope="col">Member_image</th>
        <th scope="col">Operation</th>

    </tr>
  </thead>
  <tbody>

  <?php 

   include 'connection.php';

      $mselect = "select * from member_data";
      $msrquery = mysqli_query($memb_con, $mselect);

      while ($mres = mysqli_fetch_array($msrquery)) { 

   ?>


    <tr>
      <th scope="row"> <?php echo $mres['id']; ?> </th>
      <td><?php echo $mres['memb_name'] ; ?></td>
      <td><?php echo $mres['memb_work'] ; ?></td>
    <td> <img src="<?php echo $mres['memb_img'] ; ?>" style="width: 60px;height:60px;object-fit: contain;">  </td>
  <td>
    
    <a href="update.php?id=<?php echo $mres['id']; ?> "  class="tablebtn"  data-toggle="tooltip" title="UPDATE" class="nav-link text-dark"  >  <i class="fa fa-edit"></i> </a>

       <a href="delete.php?delete=<?php echo $mres['id'] ?> " class="tablebtn"  data-toggle="tooltip" title="DELETE" class="nav-link text-danger mx-2" > <i class="fa fa-trash"></i> </a>


  </td>


       </tr>

  <?php  } ?>


    

  </tbody>
</table>
</div>




<!--   THE ADDED DATA SECTION ENDS HERE ---------------------------------
  ------------------------------------------------------------------ -->

 <h4 class="mt-5"> Added Client in Website </h4>

<div class="data" style="height: 300px; overflow: scroll;">


<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Client_Name</th>
      <th scope="col">Client_Comment</th>
      <th scope="col">Client_image</th>
        <th scope="col">Operation</th>

    </tr>
  </thead>
  <tbody>

  <?php 

   include 'connection.php';

      $mselect = "select * from client_data";
      $msrquery = mysqli_query($memb_con, $mselect);

      while ($mres = mysqli_fetch_array($msrquery)) { 

   ?>


    <tr>
      <th scope="row"> <?php echo $mres['id'] ; ?> </th>
      <td><?php echo $mres['client_name'] ; ?></td>
      <td><?php echo $mres['client_comment'] ; ?></td>
    <td> <img src="<?php echo $mres['client_img'] ; ?>" style="width: 60px;height:60px;object-fit: contain;">  </td>
  <td>


     
    <a href="update.php?id=<?php echo $mres['id']; ?> "  class="tablebtn"  data-toggle="tooltip" title="UPDATE" class="nav-link text-dark"  >  <i class="fa fa-edit"></i> </a>

       <a href="delete.php?delete2=<?php echo $mres['id'] ?> " class="tablebtn"  data-toggle="tooltip" title="DELETE" class="nav-link text-danger mx-2" > <i class="fa fa-trash"></i> </a>
  </td>
       </tr>

  <?php  } ?>


</tbody>
</table>
</div>



<!--   THE ADDED PROJECT TO WEBSITE SECTION  ---------------------------------
  ------------------------------------------------------------------ -->

 <h4 class="mt-5"> Added projects in Website </h4>

<div class="data" style="height: 300px; overflow: scroll;">


<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Project_Name</th>
      <th scope="col">Project_Description</th>
      <th scope="col">Project_image</th>
            <th scope="col">Project_link</th>
        <th scope="col">Operation</th>

    </tr>
  </thead>
  <tbody>

  <?php 

   include 'connection.php';

      $mselect = "select * from project_data";
      $msrquery = mysqli_query($memb_con, $mselect);

      while ($mres = mysqli_fetch_array($msrquery)) { 

   ?>


    <tr>
      <th scope="row"> <?php echo $mres['id'] ; ?> </th>
      <td><?php echo $mres['project_name'] ; ?></td>
      <td><?php echo $mres['project_desc'] ; ?></td>

    <td> <img src="<?php echo $mres['project_img'] ; ?>" style="width: 60px;height:60px;object-fit: contain;">  </td>

         <td><?php echo $mres['project_link'] ; ?></td>


  <td>
    <a href="update.php?id=<?php echo $mres['id']; ?> "  class="tablebtn"  data-toggle="tooltip" title="UPDATE" class="nav-link text-dark"  >  <i class="fa fa-edit"></i> </a>

       <a href="delete.php?delete=<?php echo $mres['id'] ?> " class="tablebtn"  data-toggle="tooltip" title="DELETE" class="nav-link text-danger mx-2" > <i class="fa fa-trash"></i> </a>
  </td>
       </tr>

  <?php  } ?>


</tbody>
</table>
</div>



<div class="data" style="height: 300px; overflow: scroll;">

<h3>Career Data</h3>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Career_Name</th>
      <th scope="col">Gender</th>
      <th scope="col">Experience </th>
            <th scope="col">Education </th>
        <th scope="col">Location</th>
        <th scope="col">Description</th>
        <th scope="col">Operatoin</th>

    </tr>
  </thead>
  <tbody>

  <?php 

   include 'connection.php';

      $mselect = "select * from career_data";
      $msrquery = mysqli_query($memb_con, $mselect);

      while ($mres = mysqli_fetch_array($msrquery)) { 

   ?>


    <tr>
      <th scope="row"> <?php echo $mres['id'] ; ?> </th>
      <td><?php echo $mres['carrer_name'] ; ?></td>
      <td><?php echo $mres['gender'] ; ?></td>

    <td> <?php echo $mres['experience'] ; ?>  </td>

    <td><?php echo $mres['education'] ; ?></td>

  <td><?php echo $mres['location'] ; ?></td>

  <td><?php echo $mres['description'] ; ?></td>

  <td>
    <a href="update.php?id=<?php echo $mres['id']; ?> "  class="tablebtn"  data-toggle="tooltip" title="UPDATE" class="nav-link text-dark"  >  <i class="fa fa-edit"></i> </a>

       <a href="delete.php?delete=<?php echo $mres['id'] ?> " class="tablebtn"  data-toggle="tooltip" title="DELETE" class="nav-link text-danger mx-2" > <i class="fa fa-trash"></i> </a>
  </td>
       </tr>

  <?php  } ?>

</div>

  </tbody>
</table>
</div>










<div class="data" style="height: 300px; overflow: scroll;">
 <h3> Header Data  </h3>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Main Heading</th>
      <th scope="col">Sub Heading</th>
    </tr>
  </thead>
  <tbody>

  <?php 

   include 'connection.php';

      $mselect = "select * from heading_data";
      $msrquery = mysqli_query($memb_con, $mselect);

      while ($mres = mysqli_fetch_array($msrquery)) { 

   ?>

    <tr>
      <th scope="row"> <?php echo $mres['id'] ; ?> </th>
      <td><?php echo $mres['main_heading'] ; ?></td>
      <td><?php echo $mres['sub_heading'] ; ?></td>
  <td>
    <a href="update.php?id=<?php echo $mres['id']; ?> "  class="tablebtn"  data-toggle="tooltip" title="UPDATE" class="nav-link text-dark"  >  <i class="fa fa-edit"></i> </a>

       <a href="delete.php?delete=<?php echo $mres['id'] ?> " class="tablebtn"  data-toggle="tooltip" title="DELETE" class="nav-link text-danger mx-2" > <i class="fa fa-trash"></i> </a>
  </td>
       </tr>

  <?php  } ?>

</div>

  </tbody>
</table>
</div>









<div class="data" style="height: 300px; overflow: scroll;">
 <h3>  Company Profile    </h3>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col"> Year of buisness </th>
      <th scope="col"> Project done </th>
      <th scope="col"> Clients  </th>
      <th scope="col"> Visits </th>


    </tr>
  </thead>
  <tbody>

  <?php 

   include 'connection.php';

      $mselect = "select * from counter_data";
      $msrquery = mysqli_query($memb_con, $mselect);

      while ($mres = mysqli_fetch_array($msrquery)) { 

   ?>

    <tr>
      <th scope="row"> <?php echo $mres['id'] ; ?> </th>
      <td><?php echo $mres['count1'] ; ?></td>
      <td><?php echo $mres['count2'] ; ?></td>
      <td><?php echo $mres['count3'] ; ?></td>
      <td><?php echo $mres['count4'] ; ?></td>
  <td>
    <a href="update.php?id=<?php echo $mres['id']; ?> "  class="tablebtn"  data-toggle="tooltip" title="UPDATE" class="nav-link text-dark"  >  <i class="fa fa-edit"></i> </a>

       <a href="delete.php?delete=<?php echo $mres['id'] ?> " class="tablebtn"  data-toggle="tooltip" title="DELETE" class="nav-link text-danger mx-2" > <i class="fa fa-trash"></i> </a>
  </td>
       </tr>

  <?php  } ?>

</div>

  </tbody>
</table>
</div>











<div class="data" style="height: 300px; overflow: scroll;">
 <h3>  Company Customer    </h3>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col"> Customer Img </th>
    </tr>
  </thead>
  <tbody>

  <?php 

   include 'connection.php';

      $mselect = "select * from customer_data";
      $msrquery = mysqli_query($memb_con, $mselect);

      while ($mres = mysqli_fetch_array($msrquery)) { 

   ?>

    <tr>
      <th scope="row"> <?php echo $mres['id'] ; ?> </th>
    <td> <img src="<?php echo $mres['customer_img'] ; ?>" style="width: 60px;height:60px;object-fit: contain;">  </td>
  <td>
    <a href="update.php?id=<?php echo $mres['id']; ?> "  class="tablebtn"  data-toggle="tooltip" title="UPDATE" class="nav-link text-dark"  >  <i class="fa fa-edit"></i> </a>

       <a href="delete.php?delete=<?php echo $mres['id'] ?> " class="tablebtn"  data-toggle="tooltip" title="DELETE" class="nav-link text-danger mx-2" > <i class="fa fa-trash"></i> </a>
  </td>
       </tr>

  <?php  } ?>

</div>

  </tbody>
</table>
</div>














<div class="data" style="height: 300px; overflow: scroll;">
 <h3>  Ceo Message    </h3>

<table class="table">
  <thead>
    <tr>
      <th scope="col">   Ceo Message  </th>
      <th scope="col">   Ceo Image  </th>
    </tr>
  </thead>
  <tbody>

  <?php 

   include 'connection.php';

      $mselect = "select * from ceo_message";
      $msrquery = mysqli_query($memb_con, $mselect);

      while ($mres = mysqli_fetch_array($msrquery)) { 

   ?>

    <tr>
      <th scope="row"> <?php echo $mres['ceo_message'] ; ?> </th>
    <td> <img src="<?php echo $mres['ceo_img'] ; ?>" style="width: 60px;height:60px;object-fit: contain;">  </td>
  <td>
    <a href="update.php?id=<?php echo $mres['id']; ?> "  class="tablebtn"  data-toggle="tooltip" title="UPDATE" class="nav-link text-dark"  >  <i class="fa fa-edit"></i> </a>

       <a href="delete.php?delete=<?php echo $mres['id'] ?> " class="tablebtn"  data-toggle="tooltip" title="DELETE" class="nav-link text-danger mx-2" > <i class="fa fa-trash"></i> </a>
  </td>
       </tr>

  <?php  } ?>

</div>

  </tbody>
</table>
</div>








<div class="data" style="height: 300px; margin-top: 30px; overflow: scroll;">
 <h3>  Portfolio Update      </h3>

<table class="table">
  <thead>
    <tr>
      <th scope="col">   Portfolio_name </th>
      <th scope="col">   Portfolio_img  </th>
    </tr>
  </thead>
  <tbody>

  <?php 

   include 'connection.php';

      $mselect = "select * from home_portfoliodata";
      $msrquery = mysqli_query($memb_con, $mselect);

      while ($mres = mysqli_fetch_array($msrquery)) { 

   ?>

    <tr>
      <th scope="row"> <?php echo $mres['portfolio_name'] ; ?> </th>
    <td> <img src="<?php echo $mres['portfolio_img'] ; ?>" style="width: 60px;height:60px;object-fit: contain;">  </td>
  <td>
    <a href="update.php?id=<?php echo $mres['id']; ?> "  class="tablebtn"  data-toggle="tooltip" title="UPDATE" class="nav-link text-dark"  >  <i class="fa fa-edit"></i> </a>

       <a href="delete.php?delete=<?php echo $mres['id'] ?> " class="tablebtn"  data-toggle="tooltip" title="DELETE" class="nav-link text-danger mx-2" > <i class="fa fa-trash"></i> </a>
  </td>
       </tr>

  <?php  } ?>

</div>

  </tbody>
</table>
</div>













                                    </div>





                                  </div>

                                      <!---The main section ends here -------------
                                      --------------------\-\----------------------->


                                         <div class="container-fluid p-2 mt-5 footer"  >
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
                                      
                                      <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
                                      <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
                                      <script>
                                      $('.count').counterUp({
                                      delay: 14,
                                      time: 2000
                                      });
                                      </script>
                        

                                      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
                                      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
                                   
                                   
                                    </body>
 






                                  </html>