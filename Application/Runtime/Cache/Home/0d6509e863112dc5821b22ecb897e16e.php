<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>Xfree内部社工库查询系统</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Photo-Hub Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="/searchku/Public//css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="/searchku/Public//css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--webfont-->
<link href='/searchku/Public//css/style1.css' rel='stylesheet' type='text/css'>
<link href='/searchku/Public//css/style2.css' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="/searchku/Public//js/jquery-1.11.1.min.js"></script>
<script defer="defer" src="/searchku/Public//js/menu_jquery.js"></script>
<script type="text/javascript">
	
</script>
</head>
<body>
	<div class="header">	
      <div class="container"> 
  	     <div class="logo">
			<h1><a href="index.html">Xfree内部查询系统</a></h1>
		 </div>
		 <div class="top_right">
		   <ul>
			<li><a href="register.html">Register</a></li>|
			<li class="login" >
				 <div id="loginContainer"><a href="#" id="loginButton"><span>Login</span></a>
					  <div id="loginBox">                
						  <form id="loginForm">
			                <fieldset id="body">
			                	<fieldset>
			                          <label for="email">Email Address</label>
			                          <input type="text" name="email" id="email">
			                    </fieldset>
			                    <fieldset>
			                            <label for="password">Password</label>
			                            <input type="password" name="password" id="password">
			                     </fieldset>
			                    <input type="submit" id="login" value="Sign in">
			                	<label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
			            	</fieldset>
			                 <span><a href="#">Forgot your password?</a></span>
						   </form>
				        </div>
			      </div>
			  </li>
		   </ul>
	     </div>
		 <div class="clearfix"></div>
		</div>
	</div>
	<div class="banner">
		<div class="container">
			<div class="span_1_of_1">
			    <h2>EveryThing You Want To Know?</h2>
			    <div class="search">
			      <ul class="nav1">
		            <li id="search">
						<form id='d1' action="<?php echo U('Index/search', '', '');?>" method="post">
							<input type="text" name="keyword" id="search_text" placeholder="Search"/>
							<input type="hidden" name="type" value="username">
							<input type="button" name="search_button" id="search_button">
					</li>
					<li id="options">
						<a href="#">All Images</a>
						<ul class="subnav">
							<li><a href="#">username</a></li>
							<li><a href="#">email</a></li>
							<li><a href="#">qq</a></li>
							<li><a href="#">other</a></li>
						</ul>
					</li>
	              </ul>
	              </form>
	            </div>
			</div>
		</div>
	</div>
	
	<div class="grid_3">
	  <div class="container">
	  	 <ul id="footer-links">
			<li><a href="#">Terms of Use</a></li>
			<li><a href="#">Royalty Free License</a></li>
			<li><a href="#">Extended License</a></li>
			<li><a href="#">Privacy</a></li>
			<li><a href="support.html">Support</a></li>
			<li><a href="about.html">About Us</a></li>
			<li><a href="faq.html">FAQ</a></li>
			<li><a href="#">Categories</a></li>
         </ul>
         <p>Copyright &copy; 2015.Company name All rights reserved.<a target="_blank" href="http://www.evalshell.com/">Xfree内部社工库查询系统</a></p>
	  </div>
	</div>
</body>
</html>