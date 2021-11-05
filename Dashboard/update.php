<?php 


  include 'connection.php';

    $upid = $_GET['id'];

      $mselect = "select * from member_data where id=$upid";
      $msrquery = mysqli_query($memb_con, $mselect);

      $mres = mysqli_fetch_array($msrquery);

     if (isset($_POST['update'])) {
   		
   		$idd = $_GET['id'];

		$memb_name = $_POST['memb_name'] ;  		
		$memb_work = $_POST['memb_work'] ;  		

		$memb_img = $_FILES['memb_img'];

		$imgname = $memb_img['name'];
		$tmp_name = $memb_img['tmp_name'];

		$dest = 'memberimg/' . $imgname;

		move_uploaded_file($tmp_name, $dest);

	 	$update = "update member_data set id=$idd, memb_name = '$memb_name', memb_work = '$memb_work', memb_img = '$dest' where id = $idd ";

		$mrquery = mysqli_query($memb_con, $update);

		if ($mrquery) {
			echo "<script> alert('Data Updated'); window.location.href = 'table.php'; </script> ";
		}
		else
		{
			 echo "<script> alert('Data Not Updated'); </script> ";
			 mysqli_report($mrquery);
		}

   }








 








 ?>






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







      
                        <!-----Top menu section ens her--------------*
                      ******************************----------->
                       <div class="small_menu p-3 px-3">
                      <div class="d-flex justify-content-between">

                          <div class="smicons">

                          <i class="fa fa-search mx-2"  onclick="smsearch()" ></i>
                          <i class="fa fa-share mx-2" id="smapp" onclick="smapp()"></i>
                          <i class="fa fa-comment mx-2" id="smchatbox" onclick="chatbox()"></i>
                          </div>
                        
                          <i class="fa fa-bars text-white smbar"></i>
                          </div>


 <!--                          THE MOBILE SCREEN MENUBAR SECTION -------------
                          ----------------------------------------------- -->
                          <div class="collapsei" id="smdata">
                                  <ul class="smmenu">
                          <li class="nav-item click1"><a href="index.php" class="nav-link"> <i class="fa fa-home "></i> Home </a> </li>
                          <li class="nav-item click2"><a href="profile.php" class="nav-link"> <i class="fa fa-envelope"></i> Profile </a> </li>
                          <li class="nav-item click3"><a href="faq.php" class="nav-link"> <i class="fa fa-edit"></i> FAQS </a> </li>
                          <li class="nav-item click4"><a href="chart.php" class="nav-link"> <i class="fa fa-signal"></i> Reports </a> </li>
                          <li class="nav-item click5"><a href="table.php" class="nav-link"> <i class="fa fa-building"></i> Tables </a> </li>
                          
                          <li class="nav-item click7"><a href="login.php" class="nav-link"> <i class="fa fa-android"></i> Log in   </a> </li>
                        </ul>
                          </div>
                      
                          <!-- The searchbox open box -->
                          <div id="sm_searchbox" class="pt-2 w-100"  >
                          <div class="d-flex align-items-center">
                          <i class="fa fa-close text-white mx-4 close" onclick="closesm()"></i>
                          <input type="search" class="form-control" placeholder="search here" name="">
                          <input type="submit" class="w-25 btn btn-primary">
                          </div>
                          </div>

 

 <!---THE PROFIILE DROPDOWN MENU EMDS  -------------
        ---------------------------->

        <div id="sm-messagebox">
            
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

        <div id="sm-notificationbox" class="smnotification" >
                    <div class="d-flex">
             <img src="asset/images/gmail.png" class="notifyicon mx-3 " >
             <img src="asset/images/whatsapp.png" class="notifyicon mx-3 " >
             <img src="asset/images/facebook.png" class="notifyicon mx-3 " >

           </div>
        </div>






        
                          </div>
                    




                    <!---The Navmenu section ends here -------------
                    --------------------\-\----------------------->
                    <div class="container-md   text-center top-menu mt-5">
                      <div class="menu_list   w-75 mx-auto  ">

                        <ul class="nav menu">
                          <li class="nav-item  click1"><a href="index.php" class="nav-link"> <i class="fa fa-home "></i> Home </a> </li>
                          <li class="nav-item click2"><a href="profile.php" class="nav-link"> <i class="fa fa-envelope"></i> Profile </a> </li>
                          <li class="nav-item click3"><a href="faq.php" class="nav-link"> <i class="fa fa-edit"></i> FAQS </a> </li>
                          <li class="nav-item click4"><a href="chart.php" class="nav-link"> <i class="fa fa-signal"></i> Reports </a> </li>
                          <li class="nav-item click5"><a href="table.php" class="nav-link"> <i class="fa fa-building"></i> Tables </a> </li>
                          
                          <li class="nav-item click7"><a href="login.php" class="nav-link"> <i class="fa fa-android"></i> Log in  </a> </li>
                        </ul>


                        <!--- Dropdown Menu's ---------->
                        <div class="home-drop">
                          <li>  DASHBOARD 1 </li>

                          <li>  DASHBOARD 2</li>
                        </div>

                        </div>

                      </div>

                    <!---The Navmenu section ends here -------------
                    --------------------\-\----------------------->
                    <div class="container-md  bg-white shadow mt-5 loginsection">
                        
                         


                         <div class="add-member w-50 mt-3 ">
                    
                    <h4> Update Team Member To Website</h4>

   
                    <form action="" method="post" enctype="multipart/form-data" >
                      
                      <input type="file" required="" value="<?php echo $mres['memb_img']; ?>" name="memb_img" class="mt-3 form-control-file"  >
                      
                      <input type="text" required="" value="<?php echo $mres['memb_name']; ?>" autocomplete="off" name="memb_name" class="mt-3 form-control" placeholder="Member Name" >

                       <input type="text" required="" value="<?php echo $mres['memb_work']; ?>" autocomplete="off" name="memb_work" class="mt-3 form-control" placeholder="Member Field Name" >

                       <input type="submit" value="Update" name="update" class="btn btn-danger mt-3" >

                    </form>

<!--                     the member adding section ends here 
                    ------------------------------------------------------------ -->

  <?php 


            $client_id = $_GET['id'];

 $mselect = "select * from client_data where id=$client_id";

      $msrquery = mysqli_query($memb_con, $mselect);

      $mres = mysqli_fetch_array($msrquery);

     if (isset($_POST['update_client'])) {
      
      $cdd = $_GET['id'];

    $client_name = $_POST['client_name'] ;      
    $client_comment = $_POST['client_comment'] ;      

    $memb_img = $_FILES['client_img'];

    $imgname = $memb_img['name'];
    $tmp_name = $memb_img['tmp_name'];

    $dest = 'memberimg/' . $imgname;

    move_uploaded_file($tmp_name, $dest);

    $update = "update client_data set id=$cdd, client_name = '$client_name', client_comment = '$client_comment', client_img = '$dest' where id= $cdd ";

    $mrquery = mysqli_query($memb_con, $update);

    if ($mrquery) {
      echo "<script> alert('Client Data Updated'); window.location.href = 'table.php'; </script> ";
    }
    else
    {
       echo "<script> alert('Client Data Not Updated'); </script> ";
       mysqli_report($mrquery);
    }

   }



                          ?>

<h4 class="mt-3"> Update Client  To Website</h4>

 <form action="" class="mt-5" method="post" enctype="multipart/form-data" >
                      
                      <input type="file" value="<?php echo $mres ['client_img']; ?>" required="" name="client_img" class="mt-3 form-control-file"  >
                      
                      <input type="text" required="" value="<?php echo $mres ['client_name']; ?> " autocomplete="off" name="client_name" class="mt-3 form-control" placeholder="client_Name" >

                       <input type="text" required="" value="<?php echo $mres ['client_comment']; ?> " autocomplete="off" name="client_comment" class="mt-3 form-control" placeholder="Client_comment" >

                       <input type="submit" value="Update Client" name="update_client" class="btn btn-danger mt-3" >


                    </form>





<!-- ------------------------------------------------------------------------------------------
                                UPDATE CLIENT SECTION   
 ------------------------------------------------------------------------------------------->

 <?php 


            $client_id = $_GET['id'];

 $mselect = "select * from project_data where id=$client_id";

      $msrquery = mysqli_query($memb_con, $mselect);

      $mres = mysqli_fetch_array($msrquery);

     if (isset($_POST['update_project'])) {
      
      $cdd = $_GET['id'];

    $project_name = $_POST['project_name'] ;      
    $project_link = $_POST['project_link'] ;      
    $project_desc = $_POST['project_desc'] ;      

    $memb_img = $_FILES['project_img'];

    $imgname = $memb_img['name'];
    $tmp_name = $memb_img['tmp_name'];

    $dest = 'memberimg/' . $imgname;

    move_uploaded_file($tmp_name, $dest);

   $update = "update project_data set id = $cdd, project_name = '$project_name', project_link = '$project_desc', project_img = '$dest' where id = $cdd ";

    $mrquery = mysqli_query($memb_con, $update);

    if ($mrquery) {
      echo "<script> alert('Project Data Updated'); window.location.href = 'table.php'; </script> ";
    }
    else
    {
       echo "<script> alert('Project Data Not Updated'); </script> ";
     }

   }
         ?>




<!-- ------------------------------------------------------------------------------------------
                                UPDATE PROJECT SECTION   
 ------------------------------------------------------------------------------------------->



<h4 class="mt-3"> Update Project  To Website</h4>

                    <form action="" method="post" enctype="multipart/form-data" >
                      
                      <input type="file" required="" value="<?php echo $mres ['project_img']; ?>" name="project_img" class="mt-3 form-control-file"  >
                      
                      <input type="text" required="" value="<?php echo $mres ['project_name']; ?>" autocomplete="off" name="project_name" class="mt-3 form-control" placeholder="project_Name" >

                       <input type="text" required=""  value="<?php echo $mres ['project_desc']; ?>" autocomplete="off" name="project_desc" class="mt-3 form-control" placeholder="project_desc" >

                    <input type="text" required="" value="<?php echo $mres ['project_link']; ?>" autocomplete="off" name="project_link" class="mt-3 form-control" placeholder="project_link">


                       <input type="submit" value="Update project" name="update_project" class="btn btn-danger mt-3" >


                    </form>




<!-- ------------------------------------------------------------------------------------------
                                UPDATE CAREER SECTION   
 ------------------------------------------------------------------------------------------->


<?php 


            $career_id = $_GET['id'];

 $mselect = "select * from career_data where id=$career_id";

      $msrquery = mysqli_query($memb_con, $mselect);

      $mres = mysqli_fetch_array($msrquery);

     if (isset($_POST['update_career'])) {
      
      $career_ = $_GET['id'];

    $carrer_name = $_POST['carrer_name'] ;      
    $gender = $_POST['gender'] ;      
    $experience = $_POST['experience'];
    $education = $_POST['education'];
    $location = $_POST['location'];
    $description = $_POST['description'];


   $update = "update career_data set id = $career_ , carrer_name = '$carrer_name', 
    gender = '$gender', experience = '$experience', education = '$education', location = '$location', description = '$description'  where id = $career_ ";

    $mrquery = mysqli_query($memb_con, $update);

    if ($mrquery) {
      echo "<script> alert('Career Data Updated'); window.location.href = 'table.php'; </script> ";
    }
    else
    {
       echo "<script> alert('Career Data Not Updated'); </script> ";
     }

   }
         ?>




<!-- ------------------------------------------------------------------------------------------
                                UPDATE PROJECT SECTION   
 ------------------------------------------------------------------------------------------->



  <h4> Update Career  To Website</h4>

                    <form action=""  method="post" enctype="multipart/form-data" >
                      
                       
                      <input type="text" required="" value="<?php echo $mres ['carrer_name'] ?>" autocomplete="off" name="carrer_name" class="mt-3 form-control" placeholder="carrer_name" >
<br>
                      Male
                       <input type="radio" name="gender"  value="Male" class="custom-radio"  >
                        Female
                       <input type="radio" name="gender" value="Female" class="custom-radio"  >

                      <input type="text" name="education" value="<?php echo $mres ['education'] ?>" class="form-control mt-3 " placeholder="Education" >

                      <input type="text" name="experience" value="<?php echo $mres ['experience'] ?>" class="form-control mt-3 " placeholder="Experience" >

                      

                    <input type="text" required="" value="<?php echo $mres ['location'] ?>" autocomplete="off" name="location" class="mt-3 form-control" placeholder="location" >

                    <textarea name="description" value="<?php echo $mres ['description'] ?>" placeholder="description" class="mt-4 form-control" id="" cols="30" rows="10"></textarea>


                       <input type="submit" value="Update Carrer" name="update_career" class="btn btn-danger mt-3" >


                    </form>








<!-- ------------------------------------------------------------------------------------------
                                UPDATE HEADER SECTION   
 ------------------------------------------------------------------------------------------->



<?php 

            $client_id = $_GET['id'];

 $mselect = "select * from heading_data where id=$client_id";

      $msrquery = mysqli_query($memb_con, $mselect);

      $mres = mysqli_fetch_array($msrquery);

     if (isset($_POST['update_heading'])) {
      
      $cdd = $_GET['id'];

    $main_heading = $_POST['main_heading'] ;      
    $sub_heading = $_POST['sub_heading'] ;      

  
    $update = "update heading_data set id=$cdd, main_heading = '$main_heading', sub_heading = '$sub_heading' where id= $cdd ";

    $mrquery = mysqli_query($memb_con, $update);

    if ($mrquery) {
      echo "<script> alert('Heading Data Updated'); window.location.href = 'table.php'; </script> ";
    }
    else
    {
       echo "<script> alert('Heading Data Not Updated'); </script> ";
       mysqli_report($mrquery);
    }

   }



                          ?>


 <h4> Update Header Text To Website</h4>

                    <form action="" method="post" enctype="multipart/form-data" >
                      

                      <input type="text" required="" value="<?php  echo $mres['main_heading'];?>"  autocomplete="off" name="main_heading" class="mt-3 form-control" placeholder="Main Heading" >

                       <input type="text" required="" value="<?php  echo $mres['sub_heading'];?>" autocomplete="off" name="sub_heading" class="mt-3 form-control" placeholder="Sub Heading" >

   
                       <input type="submit" value="Update Heading" name="update_heading" class="btn btn-danger mt-3" >


                    </form>












<?php 

            $client_id = $_GET['id'];

 $mselect = "select * from counter_data where id=$client_id";

      $msrquery = mysqli_query($memb_con, $mselect);

      $mres = mysqli_fetch_array($msrquery);

     if (isset($_POST['update_counter'])) {
      
      $cdd = $_GET['id'];

    $count1 = $_POST['count1'] ;      
    $count2 = $_POST['count2'] ;      
    $count3 = $_POST['count3'] ;      
    $count4 = $_POST['count4'] ;      
 
  
    $update = "update counter_data set id=$cdd, count1 = '$count1', count2 = '$count2' , count3 = '$count3', count4 = '$count4'  where id= $cdd ";

    $mrquery = mysqli_query($memb_con, $update);

    if ($mrquery) {
      echo "<script> alert('Counter  Updated'); window.location.href = 'table.php'; </script> ";
    }
    else
    {
       echo "<script> alert('Counter  Not Updated'); </script> ";
       mysqli_report($mrquery);
    }

   }



                          ?>







<h4> Update Company profile count number  To Website</h4>

                    <form action="" method="post" enctype="multipart/form-data" >
                      
                       <label for="input"  class="mt-3"> Year of buisness </label>
                      <input type="number" value="<?php echo $mres['count1']; ?>" required="" autocomplete="off" name="count1" class="mt-3 form-control" placeholder="Enter a number" >

                       <label for="input" class="mt-3"> Project done </label>
                      <input type="number" value="<?php echo $mres['count2']; ?>" required="" autocomplete="off" name="count2" class="mt-3 form-control" placeholder="Enter a number" >
 
                      <label for="input" class="mt-3"> Clients  </label>
                      <input type="number" value = "<?php echo $mres['count3']; ?>"  required="" autocomplete="off" name="count3" class="mt-3 form-control" placeholder="Enter a number" >


                        <label for="input" class="mt-3">   Visits </label>
                      <input type="number" value="<?php echo $mres['count4']; ?> "  required="" autocomplete="off" name="count4" class="mt-3 form-control" placeholder="Enter a number" >

                       <input type="submit" value="Update Counter" name="update_counter" class="btn btn-danger mt-3" >


                    </form>











<?php 

            $client_id = $_GET['id'];

 $mselect = "select * from customer_data where id=$client_id";

      $msrquery = mysqli_query($memb_con, $mselect);

      $mres = mysqli_fetch_array($msrquery);

    
 if (isset($_POST['update_customer'])) {

  $custid = $_GET['id'];
      
    $customer_img = $_FILES['customer_img'];

    $imgname = $customer_img['name'];
    $tmp_name = $customer_img['tmp_name'];

    $destt = 'memberimg/' . $imgname;

    move_uploaded_file($tmp_name, $destt);      

    $cinsert = "update customer_data set customer_img = '$customer_img' where id= '$custid' " ;

    $crquery = mysqli_query($memb_con, $cinsert);

    if ($crquery) {
      echo "<script> alert('Customer  updated'); window.location.href = 'table.php'; </script> ";
    }
    else
    {
       echo "<script> alert('Customer Not updated'); </script> ";
    }

   }


                          ?>


<h4> Update Customer To Website</h4>

                    <form action="" method="post" enctype="multipart/form-data" >
                      

                      <input type="file" required="" value="<?php echo $mres ['customer_img']; ?>" autocomplete="off" name="customer_img" class="mt-3 form-control" placeholder="Customer_img" >
   
                       <input type="submit" value="Update Customer" name="update_customer" class="btn btn-danger mt-3" >


                    </form>

















<?php 

            $client_id = $_GET['id'];

 $mselect = "select * from ceo_message where id=$client_id";

      $msrquery = mysqli_query($memb_con, $mselect);

      $mres = mysqli_fetch_array($msrquery);

    
 if (isset($_POST['update_message'])) {

    $ceo_message = $_POST['ceo_message'];
    $ceo_img = $_FILES['ceo_img'];

    $imgname = $ceo_img['name'];
    $tmp_name = $ceo_img['tmp_name'];

    $destt = 'memberimg/' . $imgname;

    move_uploaded_file($tmp_name, $destt);      

    $cinsert = "update ceo_message set ceo_message = '$ceo_message', ceo_img = '$destt' where id= '$custid' " ;

    $crquery = mysqli_query($memb_con, $cinsert);

    if ($crquery) {
      echo "<script> alert('Message  updated'); window.location.href = 'table.php'; </script> ";
    }
    else
    {
       echo "<script> alert('Message Not updated'); </script> ";
    }

   }


                          ?>

<h4> Update Ceo Message  To Website</h4>

                    <form action="" method="post" enctype="multipart/form-data" >
                      

                      <input type="file" required="" value="<?php echo $mres ['ceo_img']; ?>"   autocomplete="off" name="ceo_img" class="mt-3 form-control" placeholder="ceo_message" >

                         <input type="text" required="" autocomplete="off" value="<?php echo $mres ['ceo_message']; ?>" name="ceo_message" class="mt-3 form-control" placeholder="ceo_message" >
   
                       <input type="submit" value="Update Message " name="update_message" class="btn btn-danger mt-3" >


                    </form>












<?php 

            $client_id = $_GET['id'];

 $mselect = "select * from home_portfoliodata where id=$client_id";

      $msrquery = mysqli_query($memb_con, $mselect);

      $mres = mysqli_fetch_array($msrquery);

    
 if (isset($_POST['update_portfolio'])) {

            $port = $_GET['id'];

   $portfolio_name = $_POST['portfolio_name'];
    $portfolio_img = $_FILES['portfolio_img'];

    $imgname = $portfolio_img['name'];
    $tmp_name = $portfolio_img['tmp_name'];

    $destt = 'memberimg/' . $imgname;

    move_uploaded_file($tmp_name, $destt);    

    $cinsert = "update home_portfoliodata set id = $port, portfolio_name = '$portfolio_name', portfolio_img = '$destt' where id= '$port' " ;

    $crquery = mysqli_query($memb_con, $cinsert);

    if ($crquery) {
      echo "<script> alert('Portfolio  updated'); window.location.href = 'table.php'; </script> ";
    }
    else
    {
       echo "<script> alert('Portfolio Not updated'); </script> ";
    }

   }


                          ?>

<h4> Update  Portfolio To Website</h4>

                    <form action="" method="post" enctype="multipart/form-data" >
                      

                      <input type="text" required="" value="<?php echo $mres ['portfolio_name']; ?>"   autocomplete="off" name="portfolio_name" class="mt-3 form-control" placeholder="" >

                         <input type="file" required="" autocomplete="off" value="<?php echo $mres ['portfolio_img']; ?>" name="portfolio_img" class="mt-3 form-control" placeholder="" >
   
                       <input type="submit" value="Update Portfolio " name="update_portfolio" class="btn btn-danger mt-3" >


                    </form>







                  </div>









                  </div>



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