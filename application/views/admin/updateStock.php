<html>
    <head>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Required meta tags -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CelestialUI Admin</title>
   
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/CelestialUI Admin1_files/typicons.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/CelestialUI Admin1_files/vendor.bundle.base.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/CelestialUI Admin1_files/style.css">
<script type='text/javascript' src="<?php echo base_url(); ?>js/jquery.min.js"></script>
   
    <link rel="shortcut icon" href="http://www.urbanui.com/celestial/template/images/favicon.png">
  <style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style>



    <style type="text/css">

::selection { background-color: #E13300; color: white; }
::-moz-selection { background-color: #E13300; color: white; }
body{
	margin:0;
	color:#6a6f8c;
	background:#1b1b29;
	font:600 16px/18px 'Open Sans',sans-serif;
}
*,:after,:before{box-sizing:border-box}
.clearfix:after,.clearfix:before{content:'';display:table}
.clearfix:after{clear:both;display:block}
a{color:inherit;text-decoration:none}

.login-wrap{
	width:100%;
	margin:auto;
	max-width:525px;
	min-height:670px;
	position:relative;
	/* background:url(https://raw.githubusercontent.com/khadkamhn/day-01-login-form/master/img/bg.jpg) no-repeat center; */
    background:url(https://cdn-a.william-reed.com/var/wrbm_gb_food_pharma/storage/images/7/2/9/0/1420927-1-eng-GB/Beans-peas-lentils-From-poor-man-s-meat-to-the-hottest-gluten-free-ingredients_wrbm_large.jpg) no-repeat center;
	box-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);
}
.login-html{
	width:100%;
	height:100%;
	position:absolute;
	padding:90px 70px 50px 70px;
	background:rgba(100,57,2,.3);
}
.login-html .sign-in-htm,
.login-html .sign-up-htm{
	top:0;
	left:0;
	right:0;
	bottom:0;
	position:absolute;
	backface-visibility:hidden;
	transition:all .4s linear;
}
.login-html .sign-in,
.login-html .sign-up,
.login-form .group .check{
	display:none;
}
.login-html .tab,
.login-form .group .label,
.login-form .group .button{
	text-transform:uppercase;
}
.login-html .tab{
	font-size:22px;
	margin-right:15px;
	padding-bottom:5px;
	margin:0 15px 10px 0;
	display:inline-block;
	border-bottom:2px solid transparent;
}
.login-html .sign-in:checked + .tab,
.login-html .sign-up:checked + .tab{
	color:#fff;
	border-color:#1161ee;
}
.login-form{
	min-height:345px;
	position:relative;
	perspective:1000px;
	transform-style:preserve-3d;
}
.login-form .group{
	margin-bottom:15px;
}
.login-form .group .label,
.login-form .group .input,
.login-form .group .button{
	width:100%;
	color:#fff;
	display:block;
}
.login-form .group .input,
.login-form .group .button{
	border:none;
	padding:15px 20px;
	border-radius:25px;
	background:rgba(255,255,255,.5);
}
.login-form .group input[data-type="password"]{
	text-security:circle;
	-webkit-text-security:circle;
}
.login-form .group .label{
	color:#fff;
	font-size:12px;
}
.login-form .group .button{
	background:#28B463;
}
.login-form .group label .icon{
	width:15px;
	height:15px;
	border-radius:2px;
	position:relative;
	display:inline-block;
	background:rgba(255,255,255,.1);
}
.login-form .group label .icon:before,
.login-form .group label .icon:after{
	content:'';
	width:10px;
	height:2px;
	background:#fff;
	position:absolute;
	transition:all .2s ease-in-out 0s;
}
.login-form .group label .icon:before{
	left:3px;
	width:5px;
	bottom:6px;
	transform:scale(0) rotate(0);
}
.login-form .group label .icon:after{
	top:6px;
	right:0;
	transform:scale(0) rotate(0);
}
.login-form .group .check:checked + label{
	color:#fff;
}
.login-form .group .check:checked + label .icon{
	background:#1161ee;
}
.login-form .group .check:checked + label .icon:before{
	transform:scale(1) rotate(45deg);
}
.login-form .group .check:checked + label .icon:after{
	transform:scale(1) rotate(-45deg);
}
.login-html .sign-in:checked + .tab + .sign-up + .tab + .login-form .sign-in-htm{
	transform:rotate(0);
}

.hr{
	height:2px;
	margin:60px 0 50px 0;
	background:rgba(255,255,255,.2);
}
.foot-lnk{
	text-align:center;
}
</style>
</head>

   <body>

<form method="post" action="<?php echo site_url('admin/updateStock/'.$product_import->importNo);?>">
<div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Stock Updation</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
		<div class="login-form">
			<div class="sign-in-htm">
				<div class="group">
					<label for="itemCode" class="label">Import No</label>
					<input type="text" name="importNo" class="input" value="<?php echo $product_import->importNo;?>">
				</div>
				<div class="group">
					<label for="itemName" class="label">Product ID</label>
			        <input type="text" name="productID_fk" class="input" value="<?php echo $product_import->productID_fk;?>">
                </div>
                <div class="group">
					<label for="itemVendor" class="label">quantity</label>
					<input type="text" name="quantity" class="input" value="<?php echo $product_import->quantity;?>">
                </div>
                <div class="group">
					<label for="itemAmount" class="label">Item Amount</label>
					<input type="text" name="dealerID_fk" class="input" value="<?php echo $product_import->dealerID_fk;?>">
                </div>
                <div class="group">
					<label for="itemAmount" class="label">Date</label>
					<input type="text" name="date" class="input" value="<?php echo $product_import->date;?>">
				</div>
				
				<div class="group">
					<input type="submit" class="button" name="Update" value="Update Item">
				</div>
				
			</div>
			
		</div>
	</div>
</div>
</form>



</body>


</html>