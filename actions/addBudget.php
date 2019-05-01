

<?php 

require('../connections/connect.php');
require('../connections/session.php');

$stmt=$con->prepare("INSERT INTO budgets(startDate,endDate,Budget_amt,Available_bal,Budget_target) VALUES (?,?,?,?,?)");

	
		$stmt->bind_param("ssiii",$sdate,$eDate,$amount,$Available_bal,$faculty);

		if(isset($_POST['add'])){ 

		$sdate=date('Y-m-d', strtotime($_POST['sdate']));
		$eDate=date('Y-m-d', strtotime($_POST['fdate']));
		$amount=$_POST['amount'];
		$faculty=$_POST['faculty'];
		$Available_bal=$_POST['amount'];
	
			$stmt->execute();
			header('refresh:1;url=../manBudgets.php');
			echo '<script>alert(" New Budget Created");</script>';
			$stmt->close();	}

			else if (!$stmt->execute()){header('refresh:1;url=../manBudgets.php'); 
			echo '<script>alert("Seems something went wrong. Try again");</script>';}
			
 ?>