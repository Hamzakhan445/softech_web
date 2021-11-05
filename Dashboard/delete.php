<?php 

/// DATA DELETE FROM DATABASE AND WEBSITE SECTION

	include 'connection.php';
  

 	$del = $_GET['delete'];
 
   $deletequery = "delete from member_data where id=$del ";

	$mdquery = mysqli_query($memb_con, $deletequery);

	if ($mdquery) {
			echo "<script> alert('Member Deleted'); window.location.href = 'table.php';  </script> ";
	}
	else
	{
		 			echo "<script> alert('Member Operation Failed ');  </script> ";
	};






   /// CLIENT DELETE FROM DATABASE AND WEBSITE SECTION


 	$dell = $_GET['delete2'];
 
   $cdeletequery = "delete from client_data where id = $dell ";

	$mdquery = mysqli_query($memb_con, $cdeletequery);

	if ($mdquery) {
			echo "<script> alert('Client Deleted'); window.location.href = 'table.php';  </script> ";
	}
	else
	{
		 			echo "<script> alert('Client Operation Failed ');  </script> ";
	}





 /// PROJECT DELETE FROM DATABASE AND WEBSITE SECTION


 	$dellp = $_GET['delete3'];
 
   $pdeletequery = "delete from project_data where id=$dellp ";

	$mdquery = mysqli_query($memb_con, $pdeletequery);

	if ($mdquery) {
			echo "<script> alert('Project Deleted'); window.location.href = 'table.php';  </script> ";
	}
	else
	{
		 			echo "<script> alert('Project Operation Failed ');  </script> ";
	}

 ?>





<?php

 /// CAREER DELETE FROM DATABASE AND WEBSITE SECTION


 	$carr = $_GET['delete'];
 
   $pdeletequery = "delete from career_data where id=$carr ";

	$mdquery = mysqli_query($memb_con, $pdeletequery);

	if ($mdquery) {
			echo "<script> alert('Career Deleted'); window.location.href = 'table.php';  </script> ";
	}
	else
	{
		 			echo "<script> alert('Career Operation Failed ');  </script> ";
	}

 ?>





<?php

 /// HEADER DATA DELETE FROM DATABASE AND WEBSITE SECTION


 	$carr = $_GET['delete'];
 
   $pdeletequery = "delete from heading_data where id=$carr ";

	$mdquery = mysqli_query($memb_con, $pdeletequery);

	if ($mdquery) {
			echo "<script> alert('Heading Deleted'); window.location.href = 'table.php';  </script> ";
	}
	else
	{
		 			echo "<script> alert('Heading Operation Failed ');  </script> ";
	}

 ?>






<?php

 /// COMPANY PROFILE DATA DELETE FROM DATABASE AND WEBSITE SECTION


 	$carr = $_GET['delete'];
 
   $pdeletequery = "delete from counter_data where id=$carr ";

	$mdquery = mysqli_query($memb_con, $pdeletequery);

	if ($mdquery) {
			echo "<script> alert('Counter Deleted'); window.location.href = 'table.php';  </script> ";
	}
	else
	{
		 			echo "<script> alert('Counter Operation Failed ');  </script> ";
	}

 ?>












<?php

 /// HEADER  DATA DELETE FROM DATABASE AND WEBSITE SECTION


 	$carr = $_GET['delete'];
 
   $pdeletequery = "delete from heading_data where id=$carr ";

	$mdquery = mysqli_query($memb_con, $pdeletequery);

	if ($mdquery) {
			echo "<script> alert('Header Data Deleted'); window.location.href = 'table.php';  </script> ";
	}
	else
	{
		 			echo "<script> alert('Header  Operation Failed ');  </script> ";
	}

 ?>





<?php

 /// CUSTOMER DATA DELETE FROM DATABASE AND WEBSITE SECTION


 	$carr = $_GET['delete'];
 
   $pdeletequery = "delete from customer_data where id=$carr ";

	$mdquery = mysqli_query($memb_con, $pdeletequery);

	if ($mdquery) {
			echo "<script> alert('Customer Deleted'); window.location.href = 'table.php';  </script> ";
	}
	else
	{
		 			echo "<script> alert('Customer Operation Failed ');  </script> ";
	}

 ?>

 









<?php

 /// CUSTOMER DATA DELETE FROM DATABASE AND WEBSITE SECTION


 	$carr = $_GET['delete'];
 
   $pdeletequery = "delete from ceo_message where id=$carr ";

	$mdquery = mysqli_query($memb_con, $pdeletequery);

	if ($mdquery) {
			echo "<script> alert('Ceo Message Deleted'); window.location.href = 'table.php';  </script> ";
	}
	else
	{
		 			echo "<script> alert('Ceo Message Operation Failed ');  </script> ";
	}

 ?>







<?php

 /// CUSTOMER DATA DELETE FROM DATABASE AND WEBSITE SECTION


 	$carr = $_GET['delete'];
 
   $pdeletequery = "delete from home_portfoliodata where id=$carr ";

	$mdquery = mysqli_query($memb_con, $pdeletequery);

	if ($mdquery) {
			echo "<script> alert('Portfolio  Deleted'); window.location.href = 'table.php';  </script> ";
	}
	else
	{
		 			echo "<script> alert('Portfolio  Operation Failed ');  </script> ";
	}

 ?>