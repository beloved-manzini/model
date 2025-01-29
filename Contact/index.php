<?php
    
include("../Classes/connect.php");
include("../Classes/signup.php");

    $name = "";
    $email = "";
    $message = "";
    
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $signup = new Signup();
    $result = $signup->evaluate($_POST);
    
    if($result != ""){
        echo"<div style='text-align:center; font-size:12px;background-color:red ;color:white;'>";
        echo"<style>.title1{color:red;}input{border:1px solid red;}</style>";
        echo"The following errors occured <br>";
        echo $result;
        echo"</div>";
    }
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
}
    
?>
<!DOCTYPE html>
<html>
<head>
	<title> Contact Us | Model</title>
	<link rel="icon" type="image/png" href="../pictures/logo1.png">
	<link rel="stylesheet" type="text/css" href="../stylesheets/main.css">
	<script type="text/javascript">
		err1 = document.getElementById('inpt').value;
		if (err1 == "") {
			document.getElementById('inpt').style.borderColor = 'red';
		}
	</script>
	<style type="text/css">

		.input{
			width: 28vw;height: 3vw;margin: 0.5vw;border-radius: 1vw; padding-left: 1vw;outline: none;border:none;
		}
		.message{width:28vw;height: 20vw;border-radius: 1vw; padding-left: 1vw;outline: none;border:none;}
	</style>
</head>
<body>
	<nav>
		<a href="../index.html">
			<div class="btn" style="background-color: yellow;"><B href="" style="color: black;">Home</B></div></a>
		<a href="../Services/index.html"><div class="btn"><B>Our Services</B></div></a>
		<a href="../About/index.html"><div class="btn"><B>About Us</B></div></a>
        <a href="#"><div class="btn" style="background-color: rgb(20,20,20);"><B>Contact Us</B></div></a>
		
	</nav>
	    <hr style="margin: 0;height: 1px;border:none;">
		<section style="display: flex;justify-content: center;align-items: center;">
			<form method="post" action="" style="background-color: black;width: 40vw;justify-content: center;height: 40vw;margin-top:2vw; border-radius: 1vw; ">
				<center>
					<p class="main-text-white" style="margin: 1vw;font-size: 2vw;">Contact Us</p>
				<input type="VARCHAR" name="name" class="input" placeholder="Name" required="Enter your name!" id="inpt" <?php echo $name ?><br>
				<input type="email" name="email" class="input" placeholder="Email" required="Enter a valid email please!" id="inpt" <?php echo $email ?>><br>
				<textarea type="text" name="message" class="message" placeholder="Message" required="Enter the message !" id="inpt"></textarea><br>
				<button class="yellowButton2" type="submit" style="color: black; background-color: yellow;border-radius: 5vw;width: 28vw;height: 3vw;font-size: 1vw;font-family: segoe ui;border:1px solid;">Submit</button>
				</center>
			</form>
		</section>
	<hr style="margin: 0;height: 1px;border:none;">
	<footer style="min-height: 80vw;margin-top: 10vw; background-color: black;color:white;">
		<center><img src="../pictures/logo1.png" style="width: 5vw;margin: 3vw;"><br>
		<div style="display: grid;grid-template-columns: 1fr 1fr 1fr 1fr;width: 16vw;">
			<style type="text/css">
				.picc{
					width: 4vw;
					height: 4vw;
					border: 1px solid grey;
					display: flex;
					justify-content: center;align-items: center;

				}
				.lg{
					width: 3vw;
					border-radius: 1vw;
				}
			</style>
			<div class="picc" title="Model on Youtube">
				<img src="../pictures/yt.png" class="lg">
			</div>
			<div class="picc" title="Model on Facebook">
				<img src="../pictures/fb.png" class="lg">
			</div>
			<div class="picc" title="Model on X">
				<img src="../pictures/x.png" class="lg">
			</div>
			<div class="picc" title="Model on Reddit">
				<img src="../pictures/redit.png" class="lg">
			</div>
		</div>
		<div style="display: flex;justify-content: center;">
		<div style="display: grid;grid-template-columns: 1fr 1fr 1fr;text-align: center;font-family: segoe ui;">

		<div style="width: 12vw;margin:3vw"><u>Our Services</u><br>
			We mainly offer Websites of all designs ,categories ,organisations ,firms like schools , churches ,personal sites ,home sites.
			<p><u>Computerised record management systems</u></p> 
			Management systems for your firm that will have you enter records ,save them ,print and re-retrive them for use.These systems aims at phasing out the old management methods of using physical books to save data. 
		</div>


		<div style="width: 12vw;;margin:3vw">
			<u>Contact Us</u><br>
			<a href="tel:0775052201">0775052201</a>
			<a href="tel:0781834205">0781834205</a><br>
			Message Us On The Numbers
			<br>Email : modeldevelopers@gmail.com <br>
			<span>Meet Us On Facebook: ModelDevelopers</span><br>
			<span>Meet Us On X: @ModelDevelopers</span><br>
			<span>Visit and Subscribe to our Youtube Channel: Model Developers</span>
			<br>Model Is Available on all major social media platforms and is open to all clients at any time .Also view our whatsapp channel @ModelDevelopers_Official.Follow and react to all posts and updates

		</div>
		
		<div style="width: 12vw;margin:3vw"><u>More from Model Developers</u>
		Model Developers have made manysites across the web.
		The following is a short list of the sites we have made.Please visit these sites to see samples of what we are capable of.
		<ul>
			<li><a href="connecti.my to">ConnectI.com</a> - Social Media app</li>
			<li><a href="codex.my.to">CodexAcademy.com</a> - Programming school</li>
			<li><a href="manzinimedia.my.to">ManziniMedia.my.to</a> - Site for an individual in the photography trade.</li>
		</ul></div>
		</div></div>
	</center>
		<br>
		<br>
		<hr>
			<br>
	</footer>
	
</body>
</html>