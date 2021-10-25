<?php
session_start();
require_once 'db.php';
$CUSTOMER_list=array();
$query = "SELECT * FROM food";
$result = mysqli_query($conn, $query);
while($row = mysqli_fetch_object($result))
{
	$CUSTOMER_list[]=$row;
	
}
//echo "<pre>";
//print_r($CUSTOMER_list);
//echo "</pre>";
//exit();
?>
<!DOCTYPE html>
<html>
<head>
	<title>online shopping website MyOnlineMeal.com</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@400;500;600&family=Bree+Serif&display=swap" rel="stylesheet">
<link rel="stylesheet" media="screen and (max-width: 1105px)" href="phone.css">
</head>
<body>
<nav id="navbar">
	<div id="logo">
		<img src="https://previews.123rf.com/images/miracel123/miracel1231801/miracel123180100795/94312687-food-delivery-logo.jpg" alt="MyOnlineMeal.com">
		</div>
		<ul>
			<li class="item"><a href="#">Home</a></li>
			<li class="item"><a href="#">services</a></li>
			<li class="item"><a href="#">About Us</a></li>
			<li class="item"><a href="#">Contact Us<a></li>	
		</ul>	
</nav>
 <?php if( !empty($_SESSION['msg']) ): ?>

				<div class="<?php echo $_SESSION['msg']['type']; ?>">
					<p><?php echo $_SESSION['msg']['text']; ?></p>
				</div>

				<?php 
				unset($_SESSION['msg']);
				?>

				<?php endif; ?>	
<h1>OUR CUSTOMER LISTS ARE:</h1>
<table>
	<thead>
		<th>id</th>
	                    <th>Name</th>
						<th>Email</th>
						<th>Country</th>
						<th>Gender</th>
						<th colspan="2">Action</th></th>
</thead>
<tbody>
	<?php foreach ($CUSTOMER_list as $food): ?> 
	<tr>
		<td><?php echo $food->id; ?></td>
		<td><?php echo $food->name; ?></td>
		<td><?php echo $food->email; ?></td>
		<td><?php echo $food->dd_country; ?></td>
		<td><?php echo $food->rdo_gender; ?></td>
		<td><a href="editt.php?id=<?php echo $food->id; ?>">Edit</a></td>
		<td><a href="delete.php?id=<?php echo $food->id; ?>">Delete</a></td>
	</tr>
	<?php endforeach; ?> 
</tbody>
</table>


</body>
</html>
 