
<!--Here is Html Code-->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
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


.quantity {
  display: flex;
  overflow: hidden;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  border-radius:5px;
  background:rgba(0, 0, 0, 0.5);
}

.quantity button {
  background-color:#8BC53F;
  color: #fff;
  border: none;
  cursor: pointer;
  font-size: 20px;
  width: 30px;
  height: auto;
  text-align: center;
  transition: background-color 0.2s;
}

.quantity button:hover {
  background:rgba(0, 0, 0, 0.1);
}

.input-box {
  width: 40px;
  text-align: center;
  border: none;
  padding: 8px 10px;
  font-size: 16px;
  outline: none;
}

/* Hide the number input spin buttons */
.input-box::-webkit-inner-spin-button,
.input-box::-webkit-outer-spin-button {
  -webkit-appearance: none;
  margin: 0;
  
}

.input-box[type="number"] {
  -moz-appearance: textfield;
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

.quantity {
  display: flex;
  overflow: hidden;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  border-radius:5px;
  background:rgba(0, 0, 0, 0.5);
}

.quantity button {
  background-color:#8BC53F;
  color: #fff;
  border: none;
  cursor: pointer;
  font-size: 20px;
  width: 30px;
  height: auto;
  text-align: center;
  transition: background-color 0.2s;
}

.quantity button:hover {
  background:rgba(0, 0, 0, 0.1);
}

.input-box {
  width: 40px;
  text-align: center;
  border: none;
  padding: 8px 10px;
  font-size: 16px;
  outline: none;
}

/* Hide the number input spin buttons */
.input-box::-webkit-inner-spin-button,
.input-box::-webkit-outer-spin-button {
  -webkit-appearance: none;
  margin: 0;
  
}

.input-box[type="number"] {
  -moz-appearance: textfield;
}
}
</style>
  </head>
  <body>
    
	
	
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

<div class="" style="background:rgba(0, 0, 0, 0.1); width:100%; height:380px;">

<div class="d-flex">

<h1 class="" style="font-size:22px; color:black; margin-left:13%; margin-top:3%;">শপিং ব্যাগ (1 আইটেম)</h1>
<h1 class="" style="font-size:22px; color:black; margin-left:50%; margin-top:3%;">মোট ৳550</h1>

</div>

<div class="rounded-4" style="height:250px; width:73%; background:white; margin-left:13%; margin-top:1%;">

<div class="d-flex">
<div>
<div class="d-flex">
<img src="img/664b95a5-a763-451d-ab9d-2d8671e1081c.jpg" style="height:100px; margin-left:5%; margin-top:10%;" class="rounded-3">
<div class="">
<h1 class="" style="font-size:17px; color:black; margin-left:5%;  margin-top:24%; width:125%;">Men's Vest. 100% Combed Cot...</h1>
<div class="d-flex">
<h1 class="" style="font-size:20px; color:black; margin-left:5%;">৳550</h1>
<del style="margin-left:5%; font-size:18px;">৳750</del>
<h1 class="" style="font-size:15px; color:red; margin-left:5%; margin-top:1.5%;">(2% অফ)</h1>
</div>
<h1 class="" style="font-size:15px; color:green; margin-left:5%;">আপনি সেইভ করেছেন ৳200</h1>
</div>

<div class="">
<a href=""><svg style="height:30px; margin-left:160%; margin-top:20%;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#8bc53f" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM175 175c9.4-9.4 24.6-9.4 33.9 0l47 47 47-47c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-47 47 47 47c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-47-47-47 47c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l47-47-47-47c-9.4-9.4-9.4-24.6 0-33.9z"/></svg></a>

<div class="" style="height:50px; width:100%; margin-left:80%; margin-top:60%;">

<div class="quantity">
  <button class="minus" aria-label="Decrease">&minus;</button>
  <input type="number" class="input-box" value="1" min="1" max="20">
  <button class="plus" aria-label="Increase">&plus;</button>
</div>
</div>

<hr style="width:520%; margin-left:-310%;"></hr>
</div>


</div>
</div>

<div class="rounded-3" style="height:180px; width:37%; border:1px solid rgba(0, 0, 0, 0.2); margin-top:3.5%; margin-left:14%;">
<div class="d-flex">
<h1 class="" style="font-size:20px; color:black; margin-left:5%; margin-top:5%;">মোট</h1>
<del style="font-size:20px; color:gray; margin-left:50%; margin-top:4%;">৳750</del>
<h1 class="" style="font-size:20px; color:black; margin-left:5%; margin-top:5%;">৳550</h1>
</div>
<hr style="width:90%; margin-left:5%;"></hr>

<a href="Men_sVestdeliveryform"><button class="rounded-3" style="height:40px; width:80%; background:#8BC53F; font-size:18px; color:white; border:none; margin-top:10%; margin-left:10%;">এগিয়ে যান</button></a>

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
    
        <a class="btn btn-square me-1" style="border:1px solid #8BC53F; color:#8BC53F;" href=""><i class="fa fa-facebook-f"></i></a>
         <a class="btn btn-square me-1" style="border:1px solid #8BC53F; color:#8BC53F;" href=""><i class="fa fa-instagram"></i></a>
         <a class="btn btn-square me-1" style="border:1px solid #8BC53F; color:#8BC53F;" href=""><i class="fa fa-twitter"></i></a>
         <a class="btn btn-square me-1" style="border:1px solid #8BC53F; color:#8BC53F;" href=""><i class="fa fa-whatsapp"></i></a>
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
<hr class="text-danger w-100 text-center">

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
<a href=""><i class="fa fa-facebook" style="font-size:25px; color:#8BC53F;"></i></a>
<a href="" style="margin-left:-5%;"><i class="fa fa-instagram" style="font-size:25px; color:#8BC53F;"></i></a>
<a href="" style="margin-left:-5%;"><i class="fa fa-twitter" style="font-size:25px; color:#8BC53F;"></i></a>
<a href="" style="margin-left:-5%;"><i class="fa fa-whatsapp" style="font-size:25px; color:#8BC53F;"></i></a>
  </div>
  
  <hr class="" style="width:100%; color:black;"></hr>
  <div class="d-flex">
  <h1 class="" style="font-size:13px; color:#4d4d4d; margin-top:-1%; margin-left:0.8%;">© 2024</h1>
  <a href="" style="font-size:13px; color:#4d4d4d; margin-top:-5%; margin-left:-11%;">Trendy Soul All rights reserved.</a>
  </div>
</div>

	 <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
	 
	 </div>
	 
	<img src="img/WhatsApp_Image_2024-06-19_at_22.17.54_7c426e71-removebg-preview.png" style="height:40px; margin-left:18%; margin-top:5%;">
	 
	 <i class="fa fa-search" style="font-size:25px; margin-left:13%; margin-top:7%; color:#8BC53F;"></i>
	  <i class="fa fa-heart" style="font-size:25px; margin-left:5%; margin-top:7%; color:#8BC53F;"></i>

	 </div>
	 
	 
	 <div class="d-flex">

<h1 class="" style="font-size:18px; color:black; margin-left:3%; margin-top:3%; ">শপিং ব্যাগ (1 আইটেম)</h1>
<h1 class="" style="font-size:18px; color:black; margin-left:30%; margin-top:3%;">মোট ৳550</h1>

</div>

<div class="d-flex">
<img src="img/664b95a5-a763-451d-ab9d-2d8671e1081c.jpg" style="height:100px; margin-left:5%; margin-top:10%;" class="rounded-3">
<div class="">
<h1 class="" style="font-size:17px; color:black; margin-left:5%;  margin-top:20%; width:105%;">Men's Vest. 100% Combed Cotton......</h1>
<div class="d-flex">
<h1 class="" style="font-size:20px; color:black; margin-left:5%;">৳550</h1>
<del style="margin-left:5%; font-size:18px;">৳750</del>
<h1 class="" style="font-size:15px; color:red; margin-left:5%; margin-top:1.5%;">(2% অফ)</h1>
</div>
<h1 class="" style="font-size:15px; color:green; margin-left:5%;">আপনি সেইভ করেছেন ৳200</h1>
</div>

<div class="">
<a href=""><svg style="height:30px; margin-left:-30%; margin-top:20%;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#8bc53f" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM175 175c9.4-9.4 24.6-9.4 33.9 0l47 47 47-47c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-47 47 47 47c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-47-47-47 47c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l47-47-47-47c-9.4-9.4-9.4-24.6 0-33.9z"/></svg></a>

</div>
</div>

<div class="" style="height:50px; width:25.1%; margin-left:35%; margin-top:5%;">

<div class="quantity">
  <button class="minus" aria-label="Decrease">&minus;</button>
  <input type="number" class="input-box" value="1" min="1" max="20">
  <button class="plus" aria-label="Increase">&plus;</button>
</div>
</div>

<hr style="width:90%; margin-left:5%;"></hr>

<hr style="width:90%; margin-left:5%; margin-top:10%;"></hr>

<div class="d-flex">
<div>
<h1 style="font-size:22px; color:black; margin-left:35%;">৳550</h1>
<h1 style="font-size:15px; color:green; margin-left:35%; width:100%;">প্রাইসিং ডিটেইল</h1>
</div>
<a href="./Men_sVestdeliveryform/"><button class="rounded-3" style="height:40px; width:150%; background:#8BC53F; font-size:18px; color:white; border:none; margin-top:5%; margin-left:130%;">এগিয়ে যান</button></a>
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