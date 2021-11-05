<?php 

   include 'connection.php';




/// DATA INSERATION TO DATABASE AND WEBSITE SECTION

   if (isset($_POST['add_member'])) {
   		
		$memb_name = $_POST['memb_name'] ;  		
		$memb_work = $_POST['memb_work'] ;  		

		$memb_img = $_FILES['memb_img'];

		$imgname = $memb_img['name'];
		$tmp_name = $memb_img['tmp_name'];

		$dest = 'memberimg/' . $imgname;

		move_uploaded_file($tmp_name, $dest);

		$minsert = "insert into member_data(memb_name, memb_work,memb_img)values('$memb_name', '$memb_work', '$dest') " ;

		$mrquery = mysqli_query($memb_con, $minsert);

		if ($mrquery) {
			echo "<script> alert('Member Added'); window.location.href = 'table.php'; </script> ";
		}
		else
		{
			 echo "<script> alert('Member Not Added'); </script> ";
		}

   }












/// CLIENT INSERATION TO DATABASE AND WEBSITE SECTION

   if (isset($_POST['add_client'])) {
   		
		$client_name = $_POST['client_name'] ;  		
		$client_comment = $_POST['client_comment'] ;  		

		$client_img = $_FILES['client_img'];

		$imgname = $client_img['name'];
		$tmp_name = $client_img['tmp_name'];

		$destt = 'memberimg/' . $imgname;

		move_uploaded_file($tmp_name, $destt);

		$cinsert = "insert into client_data(client_name, client_comment,client_img)values('$client_name', '$client_comment', '$destt') " ;

		$crquery = mysqli_query($memb_con, $cinsert);

		if ($crquery) {
			echo "<script> alert('Client Added'); window.location.href = 'table.php'; </script> ";
		}
		else
		{
			 echo "<script> alert('Client Not Added'); </script> ";
 		}

   }




/// PROJECT INSERATION TO DATABASE AND WEBSITE SECTION

   if (isset($_POST['add_project'])) {
   		
		$project_name = $_POST['project_name'] ;  		
		$project_desc = $_POST['project_desc'] ;  		
		$project_link = $_POST['project_link'];


		$client_img = $_FILES['project_img'];

		$imgname = $client_img['name'];
		$tmp_name = $client_img['tmp_name'];

		$destt = 'memberimg/' . $imgname;

		move_uploaded_file($tmp_name, $destt);

		$cinsert = "insert into project_data(project_name, project_desc,project_img, project_link)values('$project_name', '$project_desc', '$destt', '$project_link') " ;

		$crquery = mysqli_query($memb_con, $cinsert);

		if ($crquery) {
			echo "<script> alert('Project Added'); window.location.href = 'table.php'; </script> ";
		}
		else
		{
			 echo "<script> alert('Project Not Added'); </script> ";
 		}

   }





/// CAREER INSERATION TO DATABASE AND WEBSITE SECTION

   if (isset($_POST['add_career'])) {
   		
		$carrer_name = $_POST['carrer_name'] ;  		
		$gender = $_POST['gender'] ;  		
		$experience = $_POST['experience'];
		$education = $_POST['education'];
		$location = $_POST['location'];
		$description = $_POST['description'];


 

		$cinsert = "insert into career_data(carrer_name, gender, experience, education, location, description) values ('$carrer_name', '$gender', '$experience', '$education', '$location', '$description') " ;

		$crquery = mysqli_query($memb_con, $cinsert);

		if ($crquery) {
			echo "<script> alert('Carrer Added'); window.location.href = 'table.php'; </script> ";
		}
		else
		{
			 echo "<script> alert('Carrer Not Added'); </script> ";
 		}

   }

 ?>







 <?php 

/// CAREER INSERATION TO DATABASE AND WEBSITE SECTION

   if (isset($_POST['add_counter'])) {
   		
		$count1 = $_POST['count1'] ;  		
		$count2 = $_POST['count2'] ;  		
		$count3 = $_POST['count3'] ;  		
		$count4 = $_POST['count4'] ;  		

		$cinsert = "insert into counter_data(count1, count2, count3, count4) values ('$count1', '$count2', '$count3', '$count4') " ;

		$crquery = mysqli_query($memb_con, $cinsert);

		if ($crquery) {
			echo "<script> alert('Counter Number Added'); window.location.href = 'table.php'; </script> ";
		}
		else
		{
			 echo "<script> alert('Counter number Not Added'); </script> ";
 		}

   }

 ?>




<?php 

/// CAREER INSERATION TO DATABASE AND WEBSITE SECTION

   if (isset($_POST['add_heading'])) {
   		
		$main_heading = $_POST['main_heading'] ;  		
		$sub_heading = $_POST['sub_heading'] ;  		
  		

		$cinsert = "insert into heading_data(main_heading, sub_heading) values ('$main_heading', '$sub_heading') " ;

		$crquery = mysqli_query($memb_con, $cinsert);

		if ($crquery) {
			echo "<script> alert('Heading  updated'); window.location.href = 'table.php'; </script> ";
		}
		else
		{
			 echo "<script> alert('Heading Not updated'); </script> ";
 		}

   }

 ?>













<?php 

/// CUSTOMEER INSERATION TO DATABASE AND WEBSITE SECTION

   if (isset($_POST['add_customer'])) {
   		
		$customer_img = $_FILES['customer_img'];

		$imgname = $customer_img['name'];
		$tmp_name = $customer_img['tmp_name'];

		$destt = 'memberimg/' . $imgname;

		move_uploaded_file($tmp_name, $destt);  		

		$cinsert = "insert into customer_data(customer_img) values ('$destt') " ;

		$crquery = mysqli_query($memb_con, $cinsert);

		if ($crquery) {
			echo "<script> alert('Customer  Added'); window.location.href = 'table.php'; </script> ";
		}
		else
		{
			 echo "<script> alert('Customer Not Added'); </script> ";
 		}

   }

 ?>










<?php 

/// CEO MESSAGE INSERATION TO DATABASE AND WEBSITE SECTION

   if (isset($_POST['ceo_message'])) {

   	$ceo_message = $_POST['ceo_message'];
		$ceo_img = $_FILES['ceo_img'];

		$imgname = $ceo_img['name'];
		$tmp_name = $ceo_img['tmp_name'];

		$destt = 'memberimg/' . $imgname;

		move_uploaded_file($tmp_name, $destt);  		

		$cinsert = "insert into ceo_message(ceo_message, ceo_img) values ('$ceo_message', '$destt') " ;

		$crquery = mysqli_query($memb_con, $cinsert);

		if ($crquery) {
			echo "<script> alert('Ceo Message  Added'); window.location.href = 'table.php'; </script> ";
		}
		else
		{
			 echo "<script> alert('Ceo Message Not Added'); </script> ";
 		}

   }

 ?>





<?php 

/// HOME PORTFOLIO INSERATION TO DATABASE AND WEBSITE SECTION

   if (isset($_POST['portfolio'])) {

   	$portfolio_name = $_POST['portfolio_name'];
		$portfolio_img = $_FILES['portfolio_img'];

		$imgname = $portfolio_img['name'];
		$tmp_name = $portfolio_img['tmp_name'];

		$destt = 'memberimg/' . $imgname;

		move_uploaded_file($tmp_name, $destt);  		

		$cinsert = "insert into home_portfoliodata(portfolio_name, portfolio_img)
		 values ('$portfolio_name', '$destt') ";

		$crquery = mysqli_query($memb_con, $cinsert);

		if ($crquery) {
			echo "<script> alert('Portfolio Added'); window.location.href = 'table.php'; </script> ";
		}
		else
		{
			 echo "<script> alert('Portfolio  Not Added'); </script> ";
 		}

   }

 ?>



 


