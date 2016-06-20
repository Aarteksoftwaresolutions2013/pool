<?php
include "config.php";



	
	$accnick=$_GET['account_name'];
	$bname=$_GET['bank_name'];
	$rno=$_GET['routing_no'];
	$ano=$_GET['account_no'];
	$atype=$_GET['account_type'];
	
	 $que= "INSERT INTO create_pool_popup (`account_nickname`,`name_of_bank`,`routing_number`,`account_number`,`account_type`)VALUES('".$accnick."','".$bname."','".$rno."','".$ano."','".$atype."')";
	
	
	$sql=mysqli_query($con, $que);
	
	//echo $que;

	$q1=mysqli_query($con,"SELECT * FROM create_pool_popup");
	 while($row_fetch=mysqli_fetch_assoc($q1)){			
  if($row_fetch['account_nickname']!=""){
		 echo  "<option>".$row_fetch['account_nickname']."</option>";
  }
}
	//header('location:create_pool.php?#');
 





if(isset($_GET['a'])){

 $q1=mysqli_query($con,"SELECT * FROM create_pool_popup");

  while($row_fetch=mysqli_fetch_assoc($q1)){			
   echo  "<option>".$row_fetch['account_nickname']."</option>";
		
}

}
mysqli_close($connect);
?>