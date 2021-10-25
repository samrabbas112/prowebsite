<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Online shopping website  MyOnlineMeal.com</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@400;500;600&family=Bree+Serif&display=swap" rel="stylesheet">
<link rel="stylesheet" media="screen and (max-width: 1105px)" href="phone.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="index.js"></script>
	<script type="text/javascript">
		function changeCSS() {

			console.log('I am here');
			$("#username").nextAll('img').remove();
		}

		function addMessage(abcd) {
			$("#username").after(abcd);
		}
	</script>
	<style type="text/css">
		#loading {
			position: absolute;
			width: 100%;
			height: 100%;
			background-color: #282923;
			background-image: url('https://i.stack.imgur.com/qq8AE.gif'); 
			background-repeat: no-repeat;
			background-position: center center;
			opacity: 0.5;
		}
		#loading img {

		}
	</style>
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
<section id="home">
	<h1 class="hprimary">Samra online food website</h1>
	<p>this is my online food websitethis is my online food websitethis is my online food websitethis is my online food websitethis is my online food websitevthis is my online food websitevthis is my online food websitevthis is my online food websitethis is my online food websitevthis is my online food websitevv</p>
	<button id="btn">Order Now</button>
</section>
<section class="servicescontainer">
	<h1 class="hprimary center">Our Services</h1>
	<div id="services">
		<div class="box">
			<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlT6Jb1xI4IbHFqOQDc3WdTH1V_d89KsYF5w&usqp=CAU">
			<h2 class="hsecondary center">Food Ordering</h2>
			<p>this is my online food websitethis is my online food websitethis is my online food websitethis is my online food websitethis is my online food websitevthis  </p>
		</div>
		<div class="box">
			<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkjZg4NyG0x6wAIjOqFB-2yeFcteoVZh1kkw&usqp=CAU">
			<h2 class="hsecondary center">Bulk Ordering</h2>
			<p>this is my online food websitethis is my online food websitethis is my online food websitethis is my online food websitethis is my online food websitevthis is my  </p>
		</div>
		<div class="box">
			<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRHqqFyyy5Aw4X34wqU9GZ6zNzVkS9aSR4nQg&usqp=CAU">
			<h2 class="hsecondary center">Food Catering</h2>
			<p class="center">this is my online food websitethis is my online food websitethis is my online food websitethis is my online food websitethis is my online food websitevthis is my</p>
		</div>
	</div>
</section>
<section id="clientsection">
	<h1 class="hprimary center">OUR CLIENTS</h1>
	<div id="clients">
		<div class="clientitem">
			<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSwXH0FbyNdsjiF2uPv7FGTi6GnalLGwy0sUA&usqp=CAU" alt="our clients">
		</div>
		<div class="clientitem">
			<img src="https://1000logos.net/wp-content/uploads/2016/11/Coca-Cola-Logo.png" alt="our clients">
		</div>
		<div class="clientitem">
			<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0f/Pepsi_logo_2014.svg/1200px-Pepsi_logo_2014.svg.png" alt="our clients">
		</div>
		<div class="clientitem">
			<img src="https://www.macworld.co.uk/cmsdata/features/3792765/apple_logo_thumb1200_4-3.jpg" alt="our clients">
		</div>
	</div>
</section>
<section id="contact">
        <h1 class="hprimary center">Contact Us</h1>
        <div id="contact-box">
            <form action="#" method="post" enctype="multipart/form-data" name="myform" onsubmit = "return validate()">
            	<div class="form-control">
						<label>username: </label>
						<input type="text" name="username" id="username">						
					</div>
					<div>
		<p><img src="https://i.stack.imgur.com/qq8AE.gif" id="loading" style="display: none;"></p>
	</div>
                <div class="form-group">
                    <label for="name">Name: </label>
                    <input type="text" name="name" id="name" placeholder="Enter your name"><b><span class="formerror"></span></b>
                </div>
                <div class="form-group">
                    <label for="email">Email: </label>
                    <input type="email" name="email" id="email" placeholder="Enter your email"><b><span 
                    	class="formerror"> </span></b>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number: </label>
                    <input type="phone" name="phone" id="phone" placeholder="Enter your phone"><b><span class="formerror"> </span></b>
                </div>
                <div class="form-group">
                    <label for="message">Message: </label>
                    <textarea name="message" id="message" cols="30" rows="10"></textarea><b><span class="formerror">  </span></b>
                </div>
                <div class="form-group">
                	<label for="country">Country:</label>
                	<select id="dd_country" name="dd_country">
                		<option>Pakistan</option>
                		<option>India</option>
                		<option>bangladesh</option>
                		<option>england</option>
                		<option>Germany</option>
                	</select>
                </div>
                <div class="form-group">
                	<label for="gender">Gender:</label>
                	<input type="radio" name="rdo_gender" value="f">Female
                	<input type="radio" name="rdo_gender" value="m" checked>Male
                </div>
                <div class="form-control">
						<label for="checkbox"></label>
						<input type="checkbox" name="chk_terms" value="on">	Do you agree with Terms & Services
					</div>
					<div class="form-control">
						<label>Resume: </label>
						<input type="file" name="fileToUpload" id="fileToUpload" value="uploaded">
					</div>
				<button type="submit">Save</button>

            </form>
        </div>
    </section>
    <footer>
        <div class="center">
            Copyright &copy; www.myOnlineMeal.com. All rights reserved!
        </div>
    </footer>
</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
		
		$("#username").change(function(){

			var username = $(this).val();
			if(username == '') {
				
				$("#username").next('div').remove();
				return false;

			}

		   $.ajax({
			  url:"ajax.php",
			  method:"POST",
			  data:{username:username},
			  cache:false,
			  beforeSend: function(){
					$("#username").after('<img src="https://i.stack.imgur.com/qq8AE.gif">');
					$("#loading").show();
				},
			  /*success:function(r){

				console.log(r);
				$("#username").next('div').remove();
					$("#username").after(r);
			    }*/
			    success: function(abcd){
					console.log('Success!!');
					$("#username").next('div').remove();
					//$("#username").after(abcd);
					setTimeout(addMessage, 3200, abcd);
				}, 
				error: function() {
					console.log('Error!!');
				},
				complete: function() {
					console.log('Completed!!');
					setTimeout(changeCSS, 3000);
					$("#loading").hide();
				}
		    });
		});
	});
</script>