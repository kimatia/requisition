<?php 

require('../connections/connect.php');
require('../connections/session.php');
$id=$_GET['id'];

$query="SELECT * FROM requests WHERE status= 'finalapproved' AND id=$id ORDER BY request_date DESC";
$result=$con -> query($query);
$query2="UPDATE requests SET status='ordered' WHERE id='$id'";
	




$stmt=$con->prepare("INSERT INTO orders(created,items,quantity,description,faculty_id) VALUES (?,?,?,?,?)");

		$stmt->bind_param("ssisi",$orderdate,$items, $quantity,$description,$faculty_id);



				while ($feedback = mysqli_fetch_assoc($result)){

                      	$orderdate=date('Y-m-d');
                        $items=$feedback['item'];
                        $quantity=$feedback['quantity'];
                        $description=$feedback['description'];
                        $faculty_id=$feedback['faculty_id'];
                    $queryStore="SELECT * FROM stores WHERE item='$items'";
					$resultStore=$con->query($queryStore);
					if($resultStore->num_rows >0){
					while ($row=mysqli_fetch_assoc($resultStore)){
					$storeQuantity=$row['quantity'];
					$newQuantity=$storeQuantity-$quantity;
					if($storeQuantity <= $quantity){$stmt->execute();
										$con->query($query2);
										$query3="UPDATE stores SET quantity=$newQuantity WHERE item LIKE '$items' ";
										$con->query($query3);
										header('refresh:1;url=../manOrders.php');
										echo '<script>alert("Order placed successfuly");</script>';}
						elseif ($storeQuantity > $quantity) {
										
										header('refresh:1;url=../manOrders.php'); 
										echo '<script>alert("Item already in store");</script>';
										}				
					}
				}
				if($resultStore->num_rows === 0){
										$stmt->execute();
										$con->query($query2);
										echo '<script>alert("Ordergfgf placed successfuly");</script>';
										header('refresh:1;url=../manOrders.php');
										}

		}

 ?>