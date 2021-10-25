<?php
require_once 'db.php';
$id 		= $_GET['id'];
$CUSTOMER_list=array();
$query = "SELECT * FROM food where id='$id' ";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>food ordering website</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<nav id="navbar">
	<div id="logo">
		<img src="https://previews.123rf.com/images/miracel123/miracel1231801/miracel123180100795/94312687-food-delivery-logo.jpg" alt="MyOnlineMeal.com">
		</div>
		<ul>
			<li class="item"><a href="#">Home</a></li>
			<li class="item"><a href="#">services</a></li>
			<li class="item"><a href="listt.php">About Us</a></li>
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
<section id="contact">
        <h1 class="hprimary center">Contact Us</h1>
        <div id="contact-box">
            <form action="update.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Name: </label>
                    <input type="text" name="name" id="name" value="<?php while($row = mysqli_fetch_assoc($result))
{
	echo $row['name'];
} ?>" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="email">Email: </label>
                    <input type="email" name="email" id="email"  value="<?php
                     while($row = mysqli_fetch_assoc($result))
                 {
	                   echo $row['email'];
                           } ?>" 
placeholder="Enter your email">
                </div>
                <div class="form-group">
                	<label for="country">Country:</label>
                	<select id="dd_country" name="dd_country" value="<?php while($row = mysqli_fetch_assoc($result))
                         {
	                    echo $row['dd_country'];
                              } ?>" >
                		<option>Pakistan</option>
                		<option>India</option>
                		<option>bangladesh</option>
                		<option>england</option>
                		<option>Germany</option>
                	</select>
                </div>
                <div class="form-group">
                	<label for="gender">Gender:</label>
                	<input type="radio" name="rdo_gender" value="<?php while($row = mysqli_fetch_assoc($result))
{
	echo $row['rdo_gender'];
}?>">Female
                	<input type="radio" name="rdo_gender" value="<?php while($row = mysqli_fetch_assoc($result))
{
	echo $row['rdo_gender'];
}?>">Male
                </div>
               
					
					<button type="submit">UPDATE</button>
            </form>
        </div>
    </section>
</body>
</html>