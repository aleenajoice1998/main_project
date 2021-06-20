<?php  include 'connection.php'; include 'user_header.php'; ?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
	<body>
		<center>
		<br />
		<div class="container">
			<br />
			<br />
			<br />
			<h3 align="center" class="fa fa-shopping-cart" style="font-size:24px">My Cart</h3><br />
			<br /><br />
			<?php 
  //$id=$_POST['id'];

   $login_id=$_SESSION['login_id'];
    $q2="SELECT `u_id`,name,email,phone,address,pin FROM `register` where login_id='$login_id'";
    $res2=select($q2);
    // $q="SELECT `acc_id`,category,acc_name,description,rate,img from `accessories` where acc_id='$id'";

  //$result1=select($q);


      //$qry="SELECT * from acc_book  where u_id=$login_id ";
       //$result = $con->query($qry);
 $qry="SELECT * from accessories inner join cart where accessories.acc_id=cart.pro_id and cart.u_id='$login_id'";
 $result = $con->query($qry);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="col-md-4">
				<form method="post" action="index.php?action=add&id=<?php echo $row["id"]; ?>">
					<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;width: 60%" align="center">
						<img style="width: 80px;height: 60px"src="images/<?php echo $row["img"]; ?>" class="img-responsive" /><br />

						<h4 class="text-info"><?php echo $row["acc_name"]; ?></h4>
						<h4 class="text-info"> For <?php echo $row["category"]; ?></h4>
						<h4 class="text-info"><?php echo $row["description"]; ?></h4>

						<h4 class="text-danger">$ <?php echo $row["rate"]; ?></h4>
						<button class="btn btn-danger">Remove</button>

					</div>
				</form>
			</div>
			<?php
					}
				}
			?>
			<div style="clear:both"></div>
			<br />
			<h3>Order Details</h3>
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th width="40%">Item Name</th>
						<th width="10%">Quantity</th>
						<th width="20%">Price</th>
						<th width="15%">Total</th>
						<th width="5%">Action</th>
					</tr>
					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					<tr>
						<td><?php echo $values["acc_name"]; ?></td>
						<td><?php echo $values["count"]; ?></td>
						<td>$ <?php echo $values["rate"]; ?></td>
						<td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
						<td><a href="index.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
					</tr>
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>
					<tr>
						<td colspan="3" align="right">Total</td>
						<td align="right">$ <?php echo number_format($total, 2); ?></td>
						<td></td>
					</tr>
					<?php
					}
					?>

						
				</table>
				<center>
				<button class="btn btn-primary"><a style="text-decoration: none;color: white" href="user_payment.php">Buy</a></button></a></td>
			</div>
		</div>
	</div>
	<br />
	</body>
</html>

<?php
//If you have use Older PHP Version, Please Uncomment this function for removing error 

/*function array_column($array, $column_name)
{
	$output = array();
	foreach($array as $keys => $values)
	{
		$output[] = $values[$column_name];
	}
	return $output;
}*/
?>