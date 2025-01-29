
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<style>
body{
    background-color:#aaa;
    font-family:Arial;
    font-size:30px;
    
    }
    .iconic{
    height:40px;
    width:40px;
    border-width:0px;
    background-size:cover}
    
    .left{
    min-height:4px;
    background-color:black;
    }
    
    input{
        border-radius:30px;
        border-width:0px;
        padding:5px;
        width:300PX}
      
      .mainbtn{
      border-radius:30px;
      background-color:lawngreen;
      border-width:0px;
     
      padding:5px}
   
  .profile{
       width:200px;
       height:200px;
       border-radius:50%;
       border-width:2px;
       border-color:white;
       padding-bottom: 10px
       
       
       }
 .main{
  background-image:url("assets/land.jpg.jpg");
  background-size:cover;
  
 
    
         }
         
         #name{
         font-size:13px;
         font-weight:bold;
         color:navy;
         text-align:center
         padding-top:50px;

         }
   .menuButton{
        width:70px;
        display:inline-block;
        color:navy;
        margin:2px
        padding:5px;
        font-size:10px;
        text-align:center
        }
   .container{
      display:flex;}

.btm{display:flex;
      min-height:400px ;}
      
      .bottom{
          
        display:inline-block;
        color:navy;
        font-weight:bold;
        font-size:17px;
        vertical-align: top;
        max-width: 300px;
        margin-left: 1px
        
      }

.mainBox{
     position:left;
     width:100%}
     
   .sidebar{
   min-height:780px;
   width:9%;
   background-color:lawngreen ;
   float:left;
   }
   
   .friendImg{
   width:40px;
   float:left}
   
.friend{
       clear:both;
       font-weight:bold;
      }
       
       a{text-decoration:none;
       color:lawngreen}
    </style>
<body>
    <div class="left" style="min-height: 40px;">
    <center><form>
    <input type="varchar" placeholder="Find People" name="Search">
<button type="submit"class="mainbtn">Search</button>
    </form> 
    </center>
    </div> 
<center>
<div class="sidebar">
<button style="font-size:7px;border-radius:50%;color:lawngreen;font-weight:bold;background-color:black;border-width:0px" ><a href="index.html">M</a></button></div>
<div class="mainBox">
    <div class="main">

<br><br><br>
<img src="assets/car.jpg" class="profile">
</div>
<div style="background-color:white;
 ">
 <br>
<center><p id="name">Beloved Manzini</p></center>

<a href="videos.html"><div class="menuButton">Posts</div></a>
<div class="menuButton">Story</div>
<div class="menuButton">Connections</div>
<div class="menuButton">Message</div>

</div>

<br>
<div style="border-color: black">
<div class="bottom" style="background-color:white;width:30.0%">


<div style="float:left;
            font-size:20px">Associates </div><br></br>
<div class="friend">
<img src="assets/beloved.jpg"class="friendImg"><br>
Micheal Manzini</div><br><br><hr>


<div class="friend">
<img src="assets/belove.jpg"class="friendImg"><br>
Ethel Manzini</div><br><br><br>
<hr>
<div class="friend">
<img src="assets/car.jpg"class="friendImg"><br>
Emmanuel Manzini</div><br><br>
<hr>

<div class="friend">
<img src="assets/beloveds.jpg"class="friendImg"><br>
Peace Manzini</div><br><br>

<hr>



</div>
    



<div class="bottom"style="background-color:red;min-width:900px;">Story</div>

 </div>   
</div>
</center>
</body>
</html>