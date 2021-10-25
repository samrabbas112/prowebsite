<?php

require_once 'db.php';
$id = $_GET['id'];
//$CUSTOMER_list = array(); No need for this variable

$customer = '';
$query = "SELECT * FROM food WHERE id = '$id' ";
$result = mysqli_query($conn, $query);

// Fetch result here in a variable instead of using this function multiple times
while ($row = mysqli_fetch_object($result)) {
    $customer = $row;
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Food Ordering Website</title>
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
        
        <?php if (!empty($_SESSION['msg'])): ?>

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
                <form action="updatee.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Name: </label>
                        <input type="text" name="name" id="name" value="<?php echo $customer->name; ?>" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email: </label>
                        <input type="email" name="email" id="email" value="<?php echo $customer->email; ?>" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <label for="country">Country:</label>
                        <select id="dd_country" name="dd_country"> <!-- SELECT tag has no VALUE attribute, OPTION tag has -->
                            <option <?php echo ($customer->dd_country == "Pakistan") ? "selected" : ""; ?>>Pakistan</option>
                            <option <?php echo ($customer->dd_country == "India") ? "selected" : ""; ?>>India</option>
                            <option <?php echo ($customer->dd_country == "Bangladesh") ? "selected" : ""; ?>>Bangladesh</option>
                            <option <?php echo ($customer->dd_country == "England") ? "selected" : ""; ?>>England</option>
                            <option <?php echo ($customer->dd_country == "Germany") ? "selected" : ""; ?>>Germany</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender:</label>
                        <input type="radio" name="rdo_gender" value="F" <?php echo ($customer->rdo_gender == "Female") ? "checked" : ""; ?>>Female
                        <input type="radio" name="rdo_gender" value="M" <?php echo ($customer->rdo_gender == "Male") ? "checked" : ""; ?>>Male
                    </div>
                    <!-- USE input hidden to pass on unique user id -->
                    <input type="hidden" name="id" value="<?php echo $customer->id; ?>">
                    <button type="submit">UPDATE</button>
                </form>
            </div>
        </section>
    </body>
</html>