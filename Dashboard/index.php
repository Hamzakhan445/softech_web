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





              <?php  include 'menu.php' ?>

      
                     



                                  <!---The Topmenu section ends here -------------
                                  --------------------\-\----------------------->
                                  <div class="main-container mt-2 ">
                                    
                                    <div class="wrapper">
                                      <div class="status-box  px-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                          <div class="box-text">
                                            <p class="pt-2" > Total Orders </p>
                                            <h3 class="count"> 4805 </h3>
                                            <p>+2.5% from last week</p>
                                          </div>
                                          <div class="box-icon">
                                            <i class="fa fa-shopping-cart"></i>
                                          </div>
                                        </div>
                                      </div>
                                      <!---Status box 1 ends here------>
                                      <div class="status-box  px-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                          <div class="box-text">
                                            <p class="pt-2" > Total Revenue </p>
                                            <h3  class="count"> 84,245 </h3>
                                            <p>+2.5% from last week</p>
                                          </div>
                                          <div class="box-icon">
                                            <i class="fa fa-shopping-basket"></i>
                                          </div>
                                        </div>
                                      </div>
                                      <!---Status box 1 ends here------>
                                      <div class="status-box  px-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                          <div class="box-text">
                                            <p class="pt-2" >  Bounce Rate   </p>
                                            <h3  class="count"> 3434 </h3>
                                            <p>+2.5% from last week</p>
                                          </div>
                                          <div class="box-icon">
                                            <i class="fa fa-tasks"></i>
                                          </div>
                                        </div>
                                      </div>
                                      <!---Status box 1 ends here------>
                                      <div class="status-box  px-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                          <div class="box-text">
                                            <p class="pt-2" > Total Customers   </p>
                                            <h3  class="count custom"> 84 </h3>
                                            <p>+2.5% from last week</p>
                                          </div>
                                          <div class="box-icon">
                                            <i class="fa fa-user"></i>
                                          </div>
                                        </div>
                                      </div>
                                      <!---Status box 1 ends here------>
                                    </div>
                                    <!--
                                    THE TOP STATUS BOX SECTION ENDS HERE -
                                    ********************************************* -->
                                    <div class="chart-wrapper mt-3" style="overflow: hidden;">
                                      <div class="chartbox p-3 bg-white">
                                        <h4> Sales Statistics </h4>
                                        <p class="pt-2">Vestibulum purus quam scelerisque, mollis nonummy metus </p>

                                      <!--   ///Graphic chart 1 -->
                                          <div id="chartContainer"  style="height: 80%; width: 100%;"></div>
                                      </div>
                                      <div class="chartbox p-4 bg-white">
                                        <h4>For The Past 30 Days </h4>
                                        <p class="pt-2">Fusce eget dolor id justo luctus the commodo vel pharetra nisi. Donec velit of libero.</p>
                                        
                                          <!--   ///Graphic chart 2 -->
                                          <div id="chartContainer2" class="mt-5"  style="height: 50%; width: 100%;"></div>
                                        
                                        <div class="d-flex justify-content-between align-items-center mt-5">
                                          
                                          <div>
                                            <p> <strong> 320,000 </strong> <br>
                                            Page Views </p>
                                          </div>
                                          <div>
                                            <p> <strong> 320,000 </strong> <br>
                                            Total Clicks</p>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <!--- The top section ends here -------------------
                                    ------------------------------------------------->
                                    <div class="table_box bg-white mt-3 p-2">
                                      
                                      <h4> Recent Orders  </h4>
                                      <table class="table mt-3 align-items-center">
                                        <thead>
                                          <tr>
                                            <th scope="col">Serial.No</th>
                                            <th scope="col">Product</th>
                                            <th scope="col">Photo</th>
                                            <th scope="col">Product Id</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <th scope="row">1</th>
                                            <td>I phone</td>
                                            <td>I phone</td>
                                            <td>@mdo</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>Sofa</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">3</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">4</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">5</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">6</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">7</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                    <!--
                                    THE GRAPHC CHART SECTION ENDS HERE -
                                    ********************************************* -->
                                    <div class="status-wrapper mt-3">
                                      <div class="staticbox p-2">
                                        <h4>Email Statistics</h4>
                                        

                                      <!--   ///Graphic chart 3 -->
                                          <div id="chartContainer3"  style="height: 85%; width: 100%;"></div>
                                        
                                      </div>
                                      <div class="staticbox recent  p-2">
                                        
                                        <h4 class="mx-5 px-1 recenttext">Recent Posts </h4>
                                        <div class="d-flex msgbox justify-content-center  mt-4 align-items-center">
                                          <img src="asset/images/hamzakhan.jpeg"  class="staticimg">
                                          <div>
                                            <p class="pname"> <strong> Hamza </strong> <br> faed Nunc quis
                                            diam diamurabitur</p> </div>
                                          </div>
                                          <div class="d-flex msgbox justify-content-center  mt-2  align-items-center">
                                            <img src="asset/images/c1.png"  class="staticimg">
                                            <div>
                                              <p class="pname"> <strong> Uzma </strong> <br> faed Nunc quis
                                              diam diamurabitur</p> </div>
                                            </div>
                                            <div class="d-flex msgbox justify-content-center  mt-2 align-items-center">
                                              <img src="asset/images/c2.png"  class="staticimg">
                                              <div>
                                                <p class="pname"> <strong> Nida </strong> <br> faed Nunc quis
                                                diam diamurabitur</p> </div>
                                              </div>
                                              <div class="d-flex msgbox justify-content-center  mt-2 align-items-center">
                                                <img src="asset/images/c3.png"  class="staticimg">
                                                <div>
                                                  <p class="pname"> <strong> Bilal </strong> <br> faed Nunc quis
                                                  diam diamurabitur</p> </div>
                                                </div>
                                                <a href="#" class="nav-link text-center text-dark"> View All </a>
                                              </div>
                                              
                                              <div class="staticbox p-2">
                                                <div class="socialbox mt-3 pt-3   px-3   align-items-center justify-content-between m-2 d-flex">
                                                  <div>
                                                    <p>Total Likes</p>
                                                    <h5> 33.4M</h5>
                                                    <p>+6.2% from last week</p>
                                                  </div>
                                                  <div class="icon">
                                                    <i class="fa fa-heart"></i>
                                                  </div>
                                                </div>
                                                <div class="socialbox   px-3  mt-2 pt-3  align-items-center justify-content-between m-2 d-flex">
                                                  <div>
                                                    <p>Total Comments</p>
                                                    <h5> 12.k</h5>
                                                    <p>+6.2% from last week</p>
                                                  </div>
                                                  <div class="icon">
                                                    <i class="fa fa-comment"></i>
                                                  </div>
                                                </div>
                                                <div class="socialbox   px-3  mt-2 pt-3  align-items-center justify-content-between m-2 d-flex">
                                                  <div>
                                                    <p>Total Shares</p>
                                                    <h5> 66.4M</h5>
                                                    <p>+6.2% from last week</p>
                                                  </div>
                                                  <div class="icon">
                                                    <i class="fa fa-share"></i>
                                                  </div>
                                                </div>
                                              </div>
                                              <!---Flexbox First Row---->
                                              <div class="staticbox   p-3">
                                                <h4 class="pt-1"> Realtime Visitors </h4>
                                                
                                                <div class="map mt-3">
                                                  <div class="d-flex justify-content-between mt-3">
                                                    <p> <strong> <span> 435,456 </span></strong> <br> Visitors last 24h
                                                    <p class="px-3"> <strong> <span> 4,566 </span></strong> <br>
                                                  Visitors last 30m </p>
                                                </div>
                                                <div class="mymap text-center">
                                               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3933.55990346548!2d71.54009034222699!3d33.99981697852287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9bb0d74b7b5d5600!2sDeans%20Shopping%20Mall%20(Deans%20Trade%20Center%20Peshawar)!5e0!3m2!1sen!2snl!4v1629201161214!5m2!1sen!2snl" height="500px" style="border:0; width: 100%;height: 300px; " allowfullscreen="" loading="lazy"></iframe>
                                              </div>
                                              </div>
                                            </div>
                                            
                                            <div class="staticbox p-3">
                                              <h4> Top Country Visites </h4>
                                              <div class="flagbox mt-5">
                                                <div class="d-flex mt-4 justify-content-between">
                                                  <div>
                                                    <img src="asset/images/pakistan.png" class="flag mx-1">
                                                    PAKISTAN
                                                  </div>
                                                  <p> 90% </p>
                                                </div>
                                                <div class="report">
                                                  <div class="reportbox">
                                                  </div>
                                                </div>
                                                <div class="d-flex mt-5 justify-content-between">
                                                  <div>
                                                    <img src="asset/images/canada.png" class="flag mx-1">
                                                    CANADA
                                                  </div>
                                                  <p> 80% </p>
                                                </div>
                                                <div class="report">
                                                  <div class="reportbox" style="width: 80%;">
                                                  </div>
                                                </div>
                                                
                                                <div class="d-flex mt-5 justify-content-between">
                                                  <div>
                                                    <img src="asset/images/australiaa.png" class="flag mx-1">
                                                    AUSTRAILIA
                                                  </div>
                                                  <p> 77% </p>
                                                </div>
                                                <div class="report">
                                                  <div class="reportbox" style="width: 77%;">
                                                  </div>
                                                </div>
                                                <div class="d-flex mt-5 justify-content-between">
                                                  <div>
                                                    <img src="asset/images/england.png" class="flag mx-1">
                                                    ENGLAND
                                                  </div>
                                                  <p> 60% </p>
                                                </div>
                                                <div class="report">
                                                  <div class="reportbox" style="width: 60%;">
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="staticbox p-3" style="height: 450px;">
                                              <h4> Top Selling Categories </h4>
                                                

                                      <!--   ///Graphic chart 1 -->
                                          <div id="chartContainer4"  class="mt-5 pt-3" style="height: 70%; width: 100%;"></div>

                                            </div>
                                          </div>
                                          
                                        </div>

                                      </div>
                                      <!---The main section ends here -------------
                                      --------------------\-\----------------------->


                                         <div class="container-fluid p-2 mt-5 footer" >
                                          <p class="text-center pt-2 text-white"> Develooped By Hamza Khan</p>
                                         </div>

 

 <!--- THE WEBSITE ENDS HERE ************|*********************
 ******************************************************************
 ********************************************************************** --->









                                      







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