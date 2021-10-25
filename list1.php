<?php

session_start();
$_SESSION["user"]["image"] = "https://aceconnect.net.pk/assets/frontend/img/logo.png";

require_once 'db.php';

$search = '';
$where = '';
if(!empty($_GET['txt_search'])) {
	$search = $_GET['txt_search'];
	$where  = " WHERE txt_name LIKE '%$search%' ";
}


$users_list = array();

$query = "SELECT * FROM users $where";
$result = mysqli_query($conn, $query);

while (  $row = mysqli_fetch_object($result) ) {
	# code...
	//echo "<pre>";
	//print_r($row);
	//echo "</pre>";
	$users_list[] = $row;
}


/*echo "<pre>";
print_r($users_list);
echo "</pre>";

exit;*/


?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
	<div id="main-container">
		<img src="<?php echo $_SESSION["user"]["image"]; ?>">
		<?php //require 'sdfsdf.php'; ?>
		<nav id="main-nav">
			<ul>
				<li><a class="active" href="#">Home</a></li>
				<li><a href="#">About Us</a></li>
				<li><a href="#">Services</a></li>
				<li><a href="#">Career</a></li>
				<li><a href="#">Contact Us</a></li>
				<li><a href="list.php">Users</a></li>
			</ul>
		</nav>
		<div id="main-content">
			<aside>
				<h1>Useful Links</h1>
				<nav>
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Services</a></li>
						<li><a href="#">Career</a></li>
						<li><a href="#">Contact Us</a></li>
						<li><a href="list.php">Users</a></li>
					</ul>
				</nav>
				<img src="EXEnhoTUcAMAWI1.jpg" width="250">
			</aside>
			<article>
				
				<h1 class="<?php  echo (isset($class)) ? $class : ''; ?>">Welcome to ACE CONNECT</h1>							

				<?php if( !empty($_SESSION['msg']) ): ?>

				<div class="<?php echo $_SESSION['msg']['type']; ?>">
					<p><?php echo $_SESSION['msg']['text']; ?></p>
				</div>

				<?php 
				unset($_SESSION['msg']);
				?>

				<?php endif; ?>

				<div>
					<form>
						<label>Search:</label>
						<input type="search" name="txt_search" placeholder="search users by name" value="<?php echo $search; ?>">
						<button type="submit">Search</button>
					</form>
				</div>

				<table>
					<thead>
						<th>Name</th>
						<th>Email</th>
						<th>Country</th>
						<th>Gender</th>
						<th>Date of Creation</th>
						<th>Action</th>
					</thead>	
					<tbody>
						<?php foreach($users_list as $user=>$value): ?>
						<tr>
							<td><?php echo $value[txt_name]; ?></td>
							<td><?php echo $value[txt_email]; ?></td>
							<td><?php echo $value[dd_country]; ?></td>
							<td><?php echo $value[rdo_gender]; ?></td>
							<td><?php echo $value[created_on]; ?></td>
							<td><a href="edit.php?id=<?php echo $value[id]; ?>">Edit</a> | <a href="delete.php?id=<?php echo $value[id]; ?>">Delete</a></td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>				
				
			</article>
			<div style="clear: both;"></div>
		</div>

		

		<footer>
			<p>Copyright &copy; 2021. All rights reserved.</p>
		</footer>
	</div>
</body>
</html>