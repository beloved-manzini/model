<?php
    
include("classes/connect.php");
include("classes/signup.php");

$first_name = "";
    $last_name = "";
    $gender = "";
    $email = "";
    $birthday = "";
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $signup = new Signup();
    $result = $signup->evaluate($_POST);
    
    if($result != ""){
        echo"<div style='text-align:center; font-size:12px;background-color:red ;color:white;'>";
        echo"<style>.title1{color:red;}</style>";
        echo"The following errors occured <br>";
        echo $result;
        echo"</div>";
    }
    
   $first_name = $_POST['first_name'];
    $last_name = $_POST['last_Name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $birthday = $_POST['birthday'];
}
    
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
</head>
<style>

body{
background-image:url("Assets/bodyback.jpg");
    font-family: tahoma;
}
.inf_collect{
    width :60%;
    border-radius:30px;
    }
    
 .main{
 background-color:black;
 align:center;
 border-color:lawngreen;
 padding : 30px;
 padding-bottom:70px;
 border-radius:30px;
     width: 60%;
 }
 
 input ,.input{
 border-radius:5px;
 border-width:0px;
 padding-left:3px;
 height: 35px;
     width: 250px;
 font-size: 13px;
 font-weight: bold;
    
 
 
 
 }
    #bel{
        width: 1000px
    }
 select{
 border-width:0px;
 width:210px}
 
 .fmbtn{
 border-radius:3px;
 border-width:0px;
 background-color:lawngreen;
 width:250px;
     height: 35px
 
 
 }
    
 .title ,.title1{
 color:white;}
 

</style>
<body>
<br><br>

   <center> <div class="main">
   <p class="title">ConnectI</p>
   <h1 class="title1">Sign Up</h1>
       <form method="post" action="">
         <input value = "<?php echo $first_name ?>"name="first_name" type="varchar" placeholder="First Name"><br><br>
       <input value = "<?php echo $last_name?>"name="last_Name" type="varchar" placeholder="Last Name"><br><br>
  <span style="color:white;
               font-size:9px;"> Gender: </span><br><select class="input" name="gender"><br>
           <option value="<?php echo $gender?>">
     <option>Male</option>
     <option>Female</option></select><br><br>
    <input value = "<?php echo $email?>" name="email" type="Email" placeholder="Email" ><br> <br>      
        <input value = "<?php echo $birthday ?>" type="date/time" placeholder="Birthday" name="birthday"><br><br>
        <input type="password"  name="password"placeholder="Password"><br><br>
   <input type="password" name="password1" placeholder="Re-type Password"><br><br>
        <button class="fmbtn" type="submit">Sign Up</button>
        
           
          <div style="color:white;
          "> Are you a member already,<a style="color:lawngreen" href="index.php"> Login </a>here
        </div>
       </form>
    </div>
 
    </center>
</body>
</html>
    