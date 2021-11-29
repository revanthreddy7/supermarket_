<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="adminhome.css">
    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  
  <body>

  <nav class="navbar navbar-expand-custom navbar-mainbg">
  <img src="logo.png" alt="" height=80px width=100px>
          <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                <li class="nav-item">
                    <a class="nav-link" href="products.php"><i class="fas fa-tachometer-alt"></i>Products</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#"><i class="far fa-address-book"></i>Address Book</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="far fa-clone"></i>Components</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="far fa-calendar-alt"></i>Calendar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="far fa-chart-bar"></i>Charts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="far fa-copy"></i>Documents</a>
                </li>
            </ul>
        </div>
    </nav>







    <!-- <nav class="navbar navbar-default  navbar-fixed-top navbar-dark bg-dark ">
        <img src="logo.png" alt="" height=50px width=60px><a id="aone" class="navbar-brand">Costing</a>
        <a href="products.html" class="navbar-brand" id="atwo"><img src="products.png" alt="" width="35" height="30" class="d-inline-block align-text-top"> Products</a>
        <a href="inventory.html" class="navbar-brand" id="atwo"><img src="inventory.png" alt="" width="35" height="30" class="d-inline-block align-text-top"> Inventory</a>
        <a href="suppliers.html" class="navbar-brand" id="atwo"><img src="supplier.png" alt="" width="35" height="30" class="d-inline-block align-text-top"> Suppliers</a>
        <a href="employees.html" class="navbar-brand" id="atwo"><img src="employees.png" alt="" width="35" height="30" class="d-inline-block align-text-top"> Employees</a>
        <a href="costing.html" class="navbar-brand" id="atwo"><img src="costing.png" alt="" width="35" height="30" class="d-inline-block align-text-top"> Costing</a>
        <a href="crm.html" class="navbar-brand" id="atwo"><img src="crm.png" alt="" width="35" height="30" class="d-inline-block align-text-top"> CRM</a>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="adminlogin.html"><button type="button" name="button" class="btn btn-danger" onclick="adminhome.html">Log Out</button></a></li>
        </ul>
    </nav> -->
    <div class="bb tt">
        <div class="form-group">
            <!-- <label for="usr">Search by:</label> -->
            <input style="width: 300px; display: inline;" type="text" class="form-control" id="name" placeholder="Product...">
            <input style="width: 300px;display: inline;" type="text" class="form-control" id="comp" placeholder="Category...">
            <button type="button" name="button" class="btn btn-danger">Search</button>
            <button type="button" class="btn btn-secondary">Show All</button>
          </div>
    <table  class="table table-striped">
        <thead>
          <tr>
            <th style="text-align: center;" scope="col">#</th>
            <th style="text-align: center;" scope="col">Product</th>
            <th style="text-align: center;" scope="col">Category</th>
            <th style="text-align: center;" scope="col">Selling Quantity</th>
            <th style="text-align: center;" scope="col">Selling Price</th>
            <th style="text-align: center;" scope="col">Selling Amount</th>
            <th style="text-align: center;" scope="col">MRP</th>
            <th style="text-align: center;" scope="col">Purchase Amount</th>
            <th style="text-align: center;" scope="col">Profit Ratio</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th style="text-align: center;" scope="row">1</th>
            <td style="text-align: center;">Amul Butter</td>
            <td style="text-align: center;">Dairy</td>
            <td style="text-align: center;">14</td>
            <td style="text-align: center;">60</td>
            <td style="text-align: center;">840.00</td>
            <td style="text-align: center;">50</td>
            <td style="text-align: center;">700</td>
            <td style="text-align: center;">16.67%</td>
          </tr>
          <tr>
            <th style="text-align: center;" scope="row">1</th>
            <td style="text-align: center;">Amul Butter</td>
            <td style="text-align: center;">Dairy</td>
            <td style="text-align: center;">14</td>
            <td style="text-align: center;">60</td>
            <td style="text-align: center;">840.00</td>
            <td style="text-align: center;">50</td>
            <td style="text-align: center;">700</td>
            <td style="text-align: center;">16.67%</td>
          </tr>
          <tr>
            <th style="text-align: center;" scope="row">1</th>
            <td style="text-align: center;">Amul Butter</td>
            <td style="text-align: center;">Dairy</td>
            <td style="text-align: center;">14</td>
            <td style="text-align: center;">60</td>
            <td style="text-align: center;">840.00</td>
            <td style="text-align: center;">50</td>
            <td style="text-align: center;">700</td>
            <td style="text-align: center;">16.67%</td>
          </tr>
          <tr>
            <th style="text-align: center;" scope="row">1</th>
            <td style="text-align: center;">Amul Butter</td>
            <td style="text-align: center;">Dairy</td>
            <td style="text-align: center;">14</td>
            <td style="text-align: center;">60</td>
            <td style="text-align: center;">840.00</td>
            <td style="text-align: center;">50</td>
            <td style="text-align: center;">700</td>
            <td style="text-align: center;">16.67%</td>
          </tr>
          <tr>
            <th style="text-align: center;" scope="row">1</th>
            <td style="text-align: center;">Amul Butter</td>
            <td style="text-align: center;">Dairy</td>
            <td style="text-align: center;">14</td>
            <td style="text-align: center;">60</td>
            <td style="text-align: center;">840.00</td>
            <td style="text-align: center;">50</td>
            <td style="text-align: center;">700</td>
            <td style="text-align: center;">16.67%</td>
          </tr>
          <tr>
            <th style="text-align: center;" scope="row">1</th>
            <td style="text-align: center;">Amul Butter</td>
            <td style="text-align: center;">Dairy</td>
            <td style="text-align: center;">14</td>
            <td style="text-align: center;">60</td>
            <td style="text-align: center;">840.00</td>
            <td style="text-align: center;">50</td>
            <td style="text-align: center;">700</td>
            <td style="text-align: center;">16.67%</td>
          </tr>
          <tr>
            <th style="text-align: center;" scope="row">1</th>
            <td style="text-align: center;">Amul Butter</td>
            <td style="text-align: center;">Dairy</td>
            <td style="text-align: center;">14</td>
            <td style="text-align: center;">60</td>
            <td style="text-align: center;">840.00</td>
            <td style="text-align: center;">50</td>
            <td style="text-align: center;">700</td>
            <td style="text-align: center;">16.67%</td>
          </tr>
          <tr>
            <th style="text-align: center;" scope="row">1</th>
            <td style="text-align: center;">Amul Butter</td>
            <td style="text-align: center;">Dairy</td>
            <td style="text-align: center;">14</td>
            <td style="text-align: center;">60</td>
            <td style="text-align: center;">840.00</td>
            <td style="text-align: center;">50</td>
            <td style="text-align: center;">700</td>
            <td style="text-align: center;">16.67%</td>
          </tr>
          <tr>
            <th style="text-align: center;" scope="row">1</th>
            <td style="text-align: center;">Amul Butter</td>
            <td style="text-align: center;">Dairy</td>
            <td style="text-align: center;">14</td>
            <td style="text-align: center;">60</td>
            <td style="text-align: center;">840.00</td>
            <td style="text-align: center;">50</td>
            <td style="text-align: center;">700</td>
            <td style="text-align: center;">16.67%</td>
          </tr>
          <tr>
            <th style="text-align: center;" scope="row">1</th>
            <td style="text-align: center;">Amul Butter</td>
            <td style="text-align: center;">Dairy</td>
            <td style="text-align: center;">14</td>
            <td style="text-align: center;">60</td>
            <td style="text-align: center;">840.00</td>
            <td style="text-align: center;">50</td>
            <td style="text-align: center;">700</td>
            <td style="text-align: center;">16.67%</td>
          </tr>
        </tbody>
      </table>
    </div>

    <style>
      @import url('https://fonts.googleapis.com/css?family=Roboto');

body{
	font-family: 'Roboto', sans-serif;
}
* {
	margin: 0;
	padding: 0;
}
i {
	margin-right: 10px;
}
/*----------bootstrap-navbar-css------------*/
.navbar-logo{
	padding: 15px;
	color: #fff;
}
.navbar-mainbg{
	background-color: #5161ce;
	padding: 0px;
}
#navbarSupportedContent{
	overflow: hidden;
	position: relative;
}
#navbarSupportedContent ul{
	padding: 0px;
	margin: 0px;
}
#navbarSupportedContent ul li a i{
	margin-right: 10px;
}
#navbarSupportedContent li {
	list-style-type: none;
	float: left;
}
#navbarSupportedContent ul li a{
	color: rgba(255,255,255,0.5);
    text-decoration: none;
    font-size: 15px;
    display: block;
    padding: 20px 20px;
    transition-duration:0.6s;
	transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
    position: relative;
}
#navbarSupportedContent>ul>li.active>a{
	color: #5161ce;
	background-color: transparent;
	transition: all 0.7s;
}
#navbarSupportedContent a:not(:only-child):after {
	content: "\f105";
	position: absolute;
	right: 20px;
	top: 10px;
	font-size: 14px;
	font-family: "Font Awesome 5 Free";
	display: inline-block;
	padding-right: 3px;
	vertical-align: middle;
	font-weight: 900;
	transition: 0.5s;
}
#navbarSupportedContent .active>a:not(:only-child):after {
	transform: rotate(90deg);
}
.hori-selector{
	display:inline-block;
	position:absolute;
	height: 100%;
	top: 0px;
	left: 0px;
	transition-duration:0.6s;
	transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
	background-color: #fff;
	border-top-left-radius: 15px;
	border-top-right-radius: 15px;
	margin-top: 10px;
}
.hori-selector .right,
.hori-selector .left{
	position: absolute;
	width: 25px;
	height: 25px;
	background-color: #fff;
	bottom: 10px;
}
.hori-selector .right{
	right: -25px;
}
.hori-selector .left{
	left: -25px;
}
.hori-selector .right:before,
.hori-selector .left:before{
	content: '';
    position: absolute;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background-color: #5161ce;
}
.hori-selector .right:before{
	bottom: 0;
    right: -25px;
}
.hori-selector .left:before{
	bottom: 0;
    left: -25px;
}


@media(min-width: 992px){
	.navbar-expand-custom {
	    -ms-flex-flow: row nowrap;
	    flex-flow: row nowrap;
	    -ms-flex-pack: start;
	    justify-content: flex-start;
	}
	.navbar-expand-custom .navbar-nav {
	    -ms-flex-direction: row;
	    flex-direction: row;
	}
	.navbar-expand-custom .navbar-toggler {
	    display: none;
	}
	.navbar-expand-custom .navbar-collapse {
	    display: -ms-flexbox!important;
	    display: flex!important;
	    -ms-flex-preferred-size: auto;
	    flex-basis: auto;
	}
}


@media (max-width: 991px){
	#navbarSupportedContent ul li a{
		padding: 12px 30px;
	}
	.hori-selector{
		margin-top: 0px;
		margin-left: 10px;
		border-radius: 0;
		border-top-left-radius: 25px;
		border-bottom-left-radius: 25px;
	}
	.hori-selector .left,
	.hori-selector .right{
		right: 10px;
	}
	.hori-selector .left{
		top: -25px;
		left: auto;
	}
	.hori-selector .right{
		bottom: -25px;
	}
	.hori-selector .left:before{
		left: -25px;
		top: -25px;
	}
	.hori-selector .right:before{
		bottom: -25px;
		left: -25px;
	}
}
    </style>

    <script>
      
function test(){
	var tabsNewAnim = $('#navbarSupportedContent');
	var selectorNewAnim = $('#navbarSupportedContent').find('li').length;
	var activeItemNewAnim = tabsNewAnim.find('.active');
	var activeWidthNewAnimHeight = activeItemNewAnim.innerHeight();
	var activeWidthNewAnimWidth = activeItemNewAnim.innerWidth();
	var itemPosNewAnimTop = activeItemNewAnim.position();
	var itemPosNewAnimLeft = activeItemNewAnim.position();
	$(".hori-selector").css({
		"top":itemPosNewAnimTop.top + "px", 
		"left":itemPosNewAnimLeft.left + "px",
		"height": activeWidthNewAnimHeight + "px",
		"width": activeWidthNewAnimWidth + "px"
	});
	$("#navbarSupportedContent").on("click","li",function(e){
		$('#navbarSupportedContent ul li').removeClass("active");
		$(this).addClass('active');
		var activeWidthNewAnimHeight = $(this).innerHeight();
		var activeWidthNewAnimWidth = $(this).innerWidth();
		var itemPosNewAnimTop = $(this).position();
		var itemPosNewAnimLeft = $(this).position();
		$(".hori-selector").css({
			"top":itemPosNewAnimTop.top + "px", 
			"left":itemPosNewAnimLeft.left + "px",
			"height": activeWidthNewAnimHeight + "px",
			"width": activeWidthNewAnimWidth + "px"
		});
	});
}
$(document).ready(function(){
	setTimeout(function(){ test(); });
});
$(window).on('resize', function(){
	setTimeout(function(){ test(); }, 500);
});
$(".navbar-toggler").click(function(){
	$(".navbar-collapse").slideToggle(300);
	setTimeout(function(){ test(); });
});



// --------------add active class-on another-page move----------
jQuery(document).ready(function($){
	// Get current path and find target link
	var path = window.location.pathname.split("/").pop();

	// Account for home page with empty path
	if ( path == '' ) {
		path = 'index.html';
	}

	var target = $('#navbarSupportedContent ul li a[href="'+path+'"]');
	// Add active class to target link
	target.parent().addClass('active');
});
    </script>
  </body>
  </html>
