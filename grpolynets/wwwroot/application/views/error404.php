<!doctype html>
<html lang="en">
 
<head>
 
   <meta charset="utf-8">
   <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
     
      <meta name="author" content="" />
      <meta name="viewport" content="width=1024, initial-scale=1, minimum-scale: 1, maximum-scale: 1" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
     
 
   <title>404 Page</title>
 <style>
 	body{height: 100%;margin: 0;}
 	.mainbox{
 		width: 100%;display: block;height: 100%;
    padding:4rem 0rem;display: flex;flex-direction: row;justify-content: center;align-items: center; 
 	}

 	.leftBox{width: 300px;max-width: 100%;}
 	.leftBox h1{font-size: 64px;margin-bottom: 20px;margin-top:0;color: #163564;text-align: left;
 		font-weight: bold;}
 	.leftBox p{font-size: 24px;line-height: 32px;max-width: 300px;}

 	.rightBox img{width: 600px;max-width: 100%;}
 	 
 	.mainbox a{background: #163564; color: #fff; display: inline-block;
    padding: 10px 40px;
    color: #fff;
    position: relative;     border-radius: 6px;
    text-transform: uppercase;font-size: 16px;text-decoration: none;cursor: pointer;}
 	.mainbox a:hover{background:#D60000;}

 	@media screen and (max-width: 992px){
 		.mainbox{padding: 20px;width: auto;}
 	}

 	@media screen and (max-width: 800px){
    .leftBox h1{text-align: center;}
 		.mainbox{flex-direction: column-reverse;text-align: center;height: auto;}
 		.rightBox{width: 400px;margin-bottom: 30px;    max-width: 100%}
    img{height: auto;}
 	}	
 </style>
</head>
 
<body>
 
      
 <div class="mainbox">
   <div class="leftBox">
   		<h1>Oops!</h1>
			<p style="font-size: 18px; font-weight: 500; margin-bottom: 10px; line-height: 20px">We can't seem to find the page you're looking for.</p>
       	<p><a href="<?php echo base_url(); ?>" class="btnsubmit">Go Back to Home</a></p>
   </div>
   <div class="rightBox">
   		<img src="<? echo site_url('assets/images/error404.svg');?>">
   </div>
</div>
 
</body>
 
</html>