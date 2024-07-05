<?php 
if(isset($_POST['number']) || isset($_POST['name']) || isset($_POST['location'])||isset($_POST['area'])){
    $number = $_POST['number'];
    $name = $_POST['name'];
    $location = $_POST['location'];
    $area = $_POST['area'];
  
 //Data base connection
    $conn = new mysqli('localhost','root','','test');
    if($conn->connect_error){
      die('Connection Faild :' .$conn->connect_error);
    }else{
      $stmt = $conn->prepare("insert into userdata(number,name,location,area) values(?,?,?,?)");
      $stmt->bind_param("isss",$number,$name,$location,$area);
      $stmt->execute();
      echo "Submited";
      $name = $_POST['name'];
      $stmt->close();
      $conn->close();
    }
  }
?>

<!--This is form File-->


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>2nd</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
	<style>
	.input{ height:45px; width:62%; background:transparent; border:2px solid #8BC53F; border-radius:7px; padding-left:4.5%;}
	::placeholder{ padding-left:%; color:gray!important; font-weight: bold;}
	.form-control:focus {border-color:#8BC53F; color:black; inherit;-webkit-box-shadow: none;box-shadow: font-weight: bold; none; background:transparent;}
	.a:hover{color:#8BC53F!important;}
	.topnav {
  overflow: hidden;
  background-color: #8BC53F;
  height:40px;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 8.5px 1px;
  text-decoration: none;
  font-size: 15px;
margin-left:2%;
width:6%;
font-weight: bold;
}

.topnav a:hover {
  background-color:white;
  color: black;
  transition: 0.5s;
}

.topnav a.active {
  background-color:white;
  color:black;
}
.a1:hover{ background:rgba(0, 0, 0, 0.1);}

.container3 {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}


/* Hide the browser's default radio button */
.container3 input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 20px;
  width: 20px;
  background-color: #eee;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container3:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container3 input:checked ~ .checkmark {
  background-color: #8BC53F;
}


/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.container3 input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.container3 .checkmark:after {
 	top: 4px;
	left: 4.1px;
	width: 11.1px;
	height: 12px;
	border-radius: 50%;
	background: white;
}



















@media screen and (max-width: 576px) {


.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color:#cccccc;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 15px;
  color: black;
  display: block;
  transition: 0.3s;
  font-weight: bold;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

.search-box{
  width: fit-content;
  height: fit-content;
  position: relative;
}
.input-search{
  height: 50px;
  width: 50px;
  border-style: none;
  padding: 10px;
  font-size: 18px;
  letter-spacing: 2px;
  outline: none;
  border-radius: 25px;
  transition: all .5s ease-in-out;
  background-color: #22a6b3;
  padding-right: 40px;
  color:#fff;
}
.input-search::placeholder{
  color:rgba(255,255,255,.5);
  font-size: 18px;
  letter-spacing: 2px;
  font-weight: 100;
}
.btn-search{
  width: 50px;
  height: 50px;
  border-style: none;
  font-size: 20px;
  font-weight: bold;
  outline: none;
  cursor: pointer;
  border-radius: 50%;
  position: absolute;
  right: 0px;
  color:#ffffff ;
  background-color:transparent;
  pointer-events: painted;  
}
.btn-search:focus ~ .input-search{
  width: 300px;
  border-radius: 0px;
  background-color: gray;
  height:40px;
  border-bottom:1px solid rgba(255,255,255,.5);
  transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
}
.input-search:focus{
  width: 300px;
  border-radius: 0px;
  background-color: gray;
  border-bottom:1px solid black;
  transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
}

.navbar {
  overflow: hidden;
  background-color: white;
  position: fixed;
  bottom: 0;
  width: 100%;
  border-top:1px solid #8BC53F;
}

.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 10px 16px;
  text-decoration: none;
  font-size: 17px;
}


}
</style>
</head>
  <body>
  <form action="" method="post" enctype="multipart/form-data">
	<div class="d-none d-lg-block">
	<div class="d-flex">
  <a href=""><img src="img/WhatsApp_Image_2024-06-19_at_22.17.54_7c426e71-removebg-preview.png" style="height:40px; margin-left:35%; margin-top:18%;"></a>
  <i class="fa fa-search" style="font-size:20px; position:absolute; color:gray; margin-left:16.8%; margin-top:2.9%;"></i>
  <input type="search" name="" value="" placeholder="Search by name......" class="form-control input" style="margin-top:1.9%; margin-left:5%;">
  
 <a href="New folder (2)/index.html" style="text-decoration:none;"> <div class="" style="border-right:2px solid gray; height:40px; width:140%; margin-top:42%; margin-left:25%;">
  <div class="d-flex">
  <i class="fa fa-user-o a" style="font-size:22px; color:gray; margin-top:7%; margin-left:5%;"></i>
  <h1 class="a" style="font-size:15px; color:gray; margin-top:8%; margin-left:10%;">Sign In</h1>
  </div>
  </div></a>
  
  <a href="New folder (2)/index.html" style="text-decoration:none;">
  <h1 class="a" style="font-size:15px; color:gray; margin-top:66%; margin-left:100%;">Register</h1>
  </a>
  
  <div class="" style="height:40px; border:1px solid gray; margin-top:2.1%; margin-left:5%;"></div>
  
 <a href=""> <i class="fa fa-shopping-bag a" style="color:#8BC53F; font-size:28px; margin-top:110%; margin-left:55%;"></i></a>
  <a href="New folder (2)/index.html"> <i class="fa fa-heart a" style="color:#8BC53F; font-size:28px; margin-top:117%; margin-left:105%;"></i></a>
   </div>
   
   <div class="topnav" style="margin-top:1.3%;">
  <a class="div1" href="#home"><i class="fa fa-home" style="font-size:20px; color:white;"></i> Home</a>
  <a href="#Categories" class="div1">Categories</a>
  <a href="#New Products" class="div1" style="width:8%;">New Products</a>
  <a href="#Flash Sale" class="div1">Flash Sale</a>
  <a href="#Brands" class="div1">Brands</a>
  <a href="#Campaigns" class="div1">Campaigns</a>
  <a href="#Collections" class="div1" style="margin-left:3%;">Collections</a>
</div>

<div class="" style="background:rgba(0, 0, 0, 0.1); width:100%; height:680px;">

<div class="d-flex">

<h1 class="" style="font-size:22px; color:black; margin-left:13%; margin-top:3%;">শপিং ব্যাগ (1 আইটেম)</h1>
<h1 class="" style="font-size:22px; color:black; margin-left:48%; margin-top:3%;">মোট ৳550</h1>

</div>

<div class="rounded-4" style="height:550px; width:73%; background:white; margin-left:13%; margin-top:1%;">

<div class="d-flex">
<div>
<h1 class="" style="font-size:15px; color:black; margin-left:25%; margin-top:20%; width:100%;">ফোন নম্বর</h1>
<input type="search" name="number" value="" placeholder="Enter Phone......" class="form-control input" style="margin-top:%; margin-left:15%; height:40px; width:270%; border:1px solid #8BC53F;">

<h1 class=""  style="font-size:15px; color:black; margin-left:25%; margin-top:10%; width:100%;">নাম
</h1>
<input type="search" name="name" value="" placeholder="Enter Name......" class="form-control input" style="margin-top:%; margin-left:15%; height:40px; width:270%; border:1px solid #8BC53F;">

<h1 class="" style="font-size:15px; color:black; margin-left:25%; margin-top:10%; width:100%;">ঠিকানা
</h1>
<textarea type="search" name="location" value="location" placeholder="Enter Address......" class="form-control input" style="margin-top:%; margin-left:15%; height:100px; width:270%; border:1px solid #8BC53F;"></textarea>

<h1 class="" style="font-size:17.5px; color:black; margin-left:15%; margin-top:10%; width:100%;">এরিয়া সিলেক্ট করুন
</h1>

<div class="rounded-3" style="height:55px; width:270%; margin-left:15%; border:1px solid #8BC53F;" checked="checked">
<label class="container3" style="font-size:13px; margin-left:5%; margin-top:1%;">Outside Dhaka<br>
ডেলিভারি চার্জ ৳100
  <input type="radio" checked="checked" value="m" name="area">
  <span class="checkmark" style="margin-top:2%;"></span>
</label></div>
<div class="rounded-3" style="height:55px; width:270%; margin-left:15%; margin-top:6%; border:1px solid #8BC53F;" checked="checked">
<label class="container3" style="font-size:13px; margin-left:5%; margin-top:1%;">
Inside Dhaka<br>ডেলিভারি চার্জ ৳60
  <input type="radio" name="area" value="f">
  <span class="checkmark" style="margin-top:2%;"></span>
</label></div>

</div>

<div class="rounded-3" style="height:330px; width:37%; border:1px solid rgba(0, 0, 0, 0.2); margin-top:5%; margin-left:40%;">
<div class="d-flex">
<h1 class="" style="font-size:20px; color:black; margin-left:5%; margin-top:5%;">মোট</h1>
<del style="font-size:20px; color:gray; margin-left:50%; margin-top:4%;">৳750</del>
<h1 class="" style="font-size:20px; color:black; margin-left:5%; margin-top:5%;">৳550</h1>
</div>

<div class="d-flex">
<h1 class="" style="font-size:15px; color:black; margin-left:5%; margin-top:5%;">ডেলিভারি চার্জ</h1>
<h1 class="" style="font-size:18px; color:green; margin-left:36%; margin-top:5%;">৳100 / ৳60</h1>
</div>

<div class="d-flex">
<h1 class="" style="font-size:15px; color:black; margin-left:5%; margin-top:5%;">ডেলিভারি কম্পানি</h1>
<h1 class="" style="font-size:15px; color:green; margin-left:35%; margin-top:5%;">Outside/Outside Dhaka</h1>
</div>

<hr style="width:90%; margin-left:5%;"></hr>

<h1 class="" style="font-size:15px; color:black; margin-left:5%; margin-top:5%;">এভারেজ ডেলিভারি টাইম: ---</h1>

<div class="d-flex">
<a href=""><button class="rounded-3" style="height:40px; width:150%; background:#8BC53F; font-size:18px; color:white; border:none; margin-top:40%; margin-left:30%;">পিছনে যান</button></a>
<button type="submit" name="btnSave" class="btn btn-primary">Save</button>
</div>

</div>

</div>

</div>
	
	<div class="" style="height:400px; width:100%; background:rgba(0, 0, 0, 0.1); margin-top:3.1%;">

<!-- Footer Start -->

<div class="container">
<div class="pt-4">
<div class="row mt-5 border-bottom">
<div class="col-lg-4 col-md-6">
<h2 class="ms-5" style="font-family: 'Sofia'; color:#8BC53F; font-weight: bold; ">Trendy Soul</h2>
<div class="ms-5">
                    <p><i class="fa fa-map-marker me-3" style="color:#8BC53F;"></i>Mirpur, Dhaka</p>
                    <p><i class="fa fa-phone me-3" style="color:#8BC53F;"></i>+880 1671-765237</p>
                    <p><i class="fa fa-envelope me-3" style="color:#8BC53F;"></i>khairulbuksh1@gmail.com</p>
                </div>
<div class="d-flex pt-2  ms-5">
    
        <a class="btn btn-square me-1" style="border:1px solid #8BC53F; color:#8BC53F;" href="https://www.facebook.com/profile.php?id=61560239375534&mibextid=ZbWKwL"><i class="fa fa-facebook-f"></i></a>
         <a class="btn btn-square me-1" style="border:1px solid #8BC53F; color:#8BC53F;" href=""><i class="fa fa-instagram"></i></a>
         <a class="btn btn-square me-1" style="border:1px solid #8BC53F; color:#8BC53F;" href=""><i class="fa fa-twitter"></i></a>
         <a class="btn btn-square me-1" style="border:1px solid #8BC53F; color:#8BC53F;" href=""><i class="fa fa-youtube-play"></i></a>
		 <a class="btn btn-square me-1" style="border:1px solid #8BC53F; color:#8BC53F;" href="https://wa.me/+8801816862292"><i class="fa fa-whatsapp"></i></a>
</div>


</div>



<div class="col-lg-2 col-sm-6">

    <h6 class="mb-3">Solutions</h6>

    <p class="text-muted">Supplier</p>
    <p class="text-muted">Affiliate</p>
    <p class="text-muted">Partner</p>


</div>


<div class="col-lg-2">

<h6 class="mb-3">Support</h6>

<p class="text-muted">Help Center</p>
<p class="text-muted">Customer Forum</p>
<p class="text-muted">Guides</p>
<p class="text-muted">Status</p>

</div>


<div class="col-lg-2">

<h6 class="mb-3">Company</h6>

<p class="text-muted">About</p>
<p class="text-muted">Contact</p>
<p class="text-muted">Press</p>
<p class="text-muted">Partners</p>

</div>



<div class="col-lg-2">


<h6 class="mb-3">Legal</h6>
<p class="text-muted">Claim</p>
<p class="text-muted">Privacy Policy</p>
<p class="text-muted">Terms & Conditions</p>
<p class="text-muted">Return & Refund Policy</p>

</div>


<div class="row mt-4 mb-3 ">
<hr class="text-danger w-100 text-center"></hr>

<div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
 &copy; <a class="border-bottom" style="text-decoration:none; color:gray;" href="#">2024 Trendy Soul. All rights reserved. </a>


</div>



</div>
</div>
</div>
</div>

</div>
	
	</div>
	</div>
	
	 <!--***========== mobile version ==========***-->
	 
	 
	 
	 <div class="d-lg-none">
	 
	 
	 
	 <div class="d-flex">
	 <div style="margin-left:5%; margin-top:4%;">
	 <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
   
  <img src="img/WhatsApp_Image_2024-06-19_at_22.17.54_7c426e71-removebg-preview.png" style="height:40px; margin-left:22%; margin-top:-15%;">
  <a href="#" style="margin-top:8%;">
  <div class="d-flex">
  <img src="img/socks.jpeg" style="height:35px; border:2px solid #8BC53F; border-radius:100px; margin-left:-5%;">
  <h1 class="" style="font-size:15px; font-weight: bold; color:black; padding-left:5%; padding-top:4%;">Socks</h1>
  <i class="fa fa-long-arrow-right" style="font-size:25px; color:#8BC53F; margin-left:45%; margin-top:3.5%;"></i>
  </div>
  </a>
  
  <a href="#" style="">
  <div class="d-flex">
  <img src="img/belt.jpg" style="height:35px; border:2px solid #8BC53F; border-radius:100px; margin-left:-5%;">
  <h1 class="" style="font-size:15px; font-weight: bold; color:black; padding-left:5%; padding-top:4%;">Belt</h1>
  <i class="fa fa-long-arrow-right" style="font-size:25px; color:#8BC53F; margin-left:50%; margin-top:3.5%;"></i>
  </div>
  </a>
  
  <a href="#" style="">
  <div class="d-flex">
  <img src="img/Wallet.jpg" style="height:35px; border:2px solid #8BC53F; border-radius:100px; margin-left:-5%;">
  <h1 class="" style="font-size:15px; font-weight: bold; color:black; padding-left:5%; padding-top:4%;">Wallet</h1>
  <i class="fa fa-long-arrow-right" style="font-size:25px; color:#8BC53F; margin-left:42%; margin-top:3.5%;"></i>
  </div>
  </a>
  
  <a href="#" style="">
  <div class="d-flex">
  <img src="img/Underwear.jpg" style="height:35px; border:2px solid #8BC53F; border-radius:100px; margin-left:-5%;">
  <h1 class="" style="font-size:15px; font-weight: bold; color:black; padding-left:5%; padding-top:4%;">Underwear</h1>
  <i class="fa fa-long-arrow-right" style="font-size:25px; color:#8BC53F; margin-left:26.5%; margin-top:3.5%;"></i>
  </div>
  </a>
  
  <a href="#" style="width:120%;">
  <div class="d-flex">
  <img src="img/Men's Vest.jpg" style="height:35px; width:14%; border:2px solid #8BC53F; border-radius:100px; margin-left:-5%;">
  <h1 class="" style="font-size:15px; font-weight: bold; color:black; padding-left:5%; padding-top:4%;">Men's Vest</h1>
  <i class="fa fa-long-arrow-right" style="font-size:25px; color:#8BC53F; margin-left:23%; margin-top:3.5%;"></i>
  </div>
  </a>
  
  <a href="#" style="">
  <div class="d-flex">
  <img src="img/BackPack.jpg" style="height:35px; border:2px solid #8BC53F; border-radius:100px; margin-left:-5%;">
  <h1 class="" style="font-size:15px; font-weight: bold; color:black; padding-left:5%; padding-top:4%;">BackPack</h1>
  <i class="fa fa-long-arrow-right" style="font-size:25px; color:#8BC53F; margin-left:34%; margin-top:3.5%;"></i>
  </div>
  </a>
  
  <a href="" style="font-size:15px; color:#4d4d4d; margin-left:-3%; margin-top:5%;">Home</a>
  <a href="" style="font-size:15px; color:#4d4d4d; margin-left:-3%;">Categories</a>
  <a href="" style="font-size:15px; color:#4d4d4d; margin-left:-3%;">New Products</a>
  <a href="" style="font-size:15px; color:#4d4d4d; margin-left:-3%;">Flash Sale</a>
  <a href="" style="font-size:15px; color:#4d4d4d; margin-left:-3%;">Brands</a>
  <a href="" style="font-size:15px; color:#4d4d4d; margin-left:-3%;">Campaigns</a>
   <a href="" style="font-size:15px; color:#4d4d4d; margin-left:-3%;">Collections</a>
   
   <a href="New folder (2)/index.html">
   <div class="d-flex">
   <i class="fa fa-user" style="font-size:20px; color:#8BC53F; margin-left:-3%;"></i>
   <h1 class="" style="font-size:15px; color:#4d4d4d; padding-left:4%;">Account</h1>
   </div>
   </a>
   
   <a href="New folder/index.html">
   <div class="d-flex">
   <i class="fa fa-key" style="font-size:20px; color:#8BC53F; margin-left:-3%;"></i>
   <h1 class="" style="font-size:15px; color:#4d4d4d; padding-left:4%;">Log In</h1>
   </div>
   </a>
   
   <h1 class="" style="font-size:16px; color:#4d4d4d; margin-left:10%; margin-top:5%; font-weight: bold; font-family: 'Sofia';">Trendy Soul</h1>
  
  <div class="d-flex">
<a href="https://www.facebook.com/profile.php?id=61560239375534&mibextid=ZbWKwL"><i class="fa fa-facebook" style="font-size:25px; color:#8BC53F;"></i></a>
<a href="" style="margin-left:-5%;"><i class="fa fa-instagram" style="font-size:25px; color:#8BC53F;"></i></a>
<a href="" style="margin-left:-5%;"><i class="fa fa-twitter" style="font-size:25px; color:#8BC53F;"></i></a>
<a href="https://wa.me/+8801816862292" style="margin-left:-5%;"><i class="fa fa-whatsapp" style="font-size:25px; color:#8BC53F;"></i></a>
  </div>
  
  <hr class="" style="width:100%; color:black;"></hr>
  <div class="d-flex">
  <h1 class="" style="font-size:13px; color:#4d4d4d; margin-top:-1%; margin-left:0.8%;">© 2024</h1>
  <a href="" style="font-size:13px; color:#4d4d4d; margin-top:-5%; margin-left:-11%;">Trendy Soul All rights reserved.</a>
  </div>
</div>

	 




	
	 <div class="navbar justify-content-around">
  <a href="index.html"><i class="fa fa-home" style="font-size:33px; color:#8BC53F;"></i></a>
  <a href="#news"><svg style="height:30px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#8bc53f" d="M94.1 315.1c0 25.9-21.2 47.1-47.1 47.1S0 341 0 315.1c0-25.9 21.2-47.1 47.1-47.1h47.1v47.1zm23.7 0c0-25.9 21.2-47.1 47.1-47.1s47.1 21.2 47.1 47.1v117.8c0 25.9-21.2 47.1-47.1 47.1s-47.1-21.2-47.1-47.1V315.1zm47.1-189c-25.9 0-47.1-21.2-47.1-47.1S139 32 164.9 32s47.1 21.2 47.1 47.1v47.1H164.9zm0 23.7c25.9 0 47.1 21.2 47.1 47.1s-21.2 47.1-47.1 47.1H47.1C21.2 244 0 222.8 0 196.9s21.2-47.1 47.1-47.1H164.9zm189 47.1c0-25.9 21.2-47.1 47.1-47.1 25.9 0 47.1 21.2 47.1 47.1s-21.2 47.1-47.1 47.1h-47.1V196.9zm-23.7 0c0 25.9-21.2 47.1-47.1 47.1-25.9 0-47.1-21.2-47.1-47.1V79.1c0-25.9 21.2-47.1 47.1-47.1 25.9 0 47.1 21.2 47.1 47.1V196.9zM283.1 385.9c25.9 0 47.1 21.2 47.1 47.1 0 25.9-21.2 47.1-47.1 47.1-25.9 0-47.1-21.2-47.1-47.1v-47.1h47.1zm0-23.7c-25.9 0-47.1-21.2-47.1-47.1 0-25.9 21.2-47.1 47.1-47.1h117.8c25.9 0 47.1 21.2 47.1 47.1 0 25.9-21.2 47.1-47.1 47.1H283.1z"/></svg></a>
  <a href="">
  <div class="" style="height:55px; width:14%; background:#8BC53F; border-radius:100px; position:absolute; margin-top:-6.5%; margin-left:-7%;">
  <svg style="height:28px; margin-top:25%;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
  </div></a>
  <a href="New folder (2)/index.html"><i class="fa fa-user" style="font-size:30px; color:#8BC53F;"></i></a>
  <a href="New folder (2)/index.html"><i class="fa fa-credit-card" style="font-size:30px; color:#8BC53F;"></i></a>
</div>
	 
	 </div>
	 
	 
	 
</form>
	 
	 
	  <!--***========== mobile version ==========***-->
	
	<script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
    }
    
    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
    }
    </script>
    
      <script>
    function myFunction() {
      var dots = document.getElementById("dots");
      var moreText = document.getElementById("more");
      var btnText = document.getElementById("myBtn");
    
      if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more"; 
        moreText.style.display = "none";
      } else {
        dots.style.display = "none";
        btnText.innerHTML = "Show less"; 
        moreText.style.display = "inline";
      }
    }
    </script>
    
      <script>
      document.querySelectorAll(".copy-link").forEach((copyLinkParent) => {
      const inputField = copyLinkParent.querySelector(".copy-link-input");
      const copyButton = copyLinkParent.querySelector(".copy-link-button");
      const text = inputField.value;
    
      inputField.addEventListener("focus", () => inputField.select());
    
      copyButton.addEventListener("click", () => {
        inputField.select();
        navigator.clipboard.writeText(text);
    
        inputField.value = "Copied!";
        setTimeout(() => (inputField.value = text), 2000);
      });
    });
    
      
      </script>
      <script>
    let slideIndex = 1;
    showSlides(slideIndex);
    
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }
    
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }
    
    function showSlides(n) {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("demo");
      let captionText = document.getElementById("caption");
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
      captionText.innerHTML = dots[slideIndex-1].alt;
    }
    </script>
      
      <script>
      
      (function () {
      const quantityContainer = document.querySelector(".quantity");
      const minusBtn = quantityContainer.querySelector(".minus");
      const plusBtn = quantityContainer.querySelector(".plus");
      const inputBox = quantityContainer.querySelector(".input-box");
    
      updateButtonStates();
    
      quantityContainer.addEventListener("click", handleButtonClick);
      inputBox.addEventListener("input", handleQuantityChange);
    
      function updateButtonStates() {
        const value = parseInt(inputBox.value);
        minusBtn.disabled = value <= 1;
        plusBtn.disabled = value >= parseInt(inputBox.max);
      }
    
      function handleButtonClick(event) {
        if (event.target.classList.contains("minus")) {
          decreaseValue();
        } else if (event.target.classList.contains("plus")) {
          increaseValue();
        }
      }
    
      function decreaseValue() {
        let value = parseInt(inputBox.value);
        value = isNaN(value) ? 1 : Math.max(value - 1, 1);
        inputBox.value = value;
        updateButtonStates();
        handleQuantityChange();
      }
    
      function increaseValue() {
        let value = parseInt(inputBox.value);
        value = isNaN(value) ? 1 : Math.min(value + 1, parseInt(inputBox.max));
        inputBox.value = value;
        updateButtonStates();
        handleQuantityChange();
      }
    
      function handleQuantityChange() {
        let value = parseInt(inputBox.value);
        value = isNaN(value) ? 1 : value;
    
        // Execute your code here based on the updated quantity value
        console.log("Quantity changed:", value);
      }
    })();
    
      </script>
	
	
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>