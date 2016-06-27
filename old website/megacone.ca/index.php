<html>
<head>
	
		<script src="https://code.jquery.com/jquery-1.9.1.min.js">
		</script>
		<script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js">
		</script>
		<script type="text/javascript" src="scripts/jquery.html5support.js">
		</script>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Megacone Ice Cream Truck, Soft Serve Ice Cream</title>
		<meta name="description" content="Megacone Ice Cream Truck, is a mobile ice cream truck that serves the most amazing, and re-energizing ice cream straight to your door, perfect for those warm summer days.">
		<meta name="keywords" content="Megacone Ice Cream Truck, Megacone, Ice Cream, Ice Cream Truck, truck, soft serve ice cream, soft serve, popsicles, smoothies, sundaes, slushies, lemonade truck, dessert">
<script>
		      $(document).ready(
				  function($)
				  {  
					$('#carousel_inner').hover
					(
						function()
						{
							$('#carousel_inner').css({ opacity: 0.4 });
							$('#imageText').css({ opacity: 1 });
						},
						function()
						{
							$('#carousel_inner').css({ opacity: 1 });
							$('#imageText').css({ opacity: 0 });
						}
					);
					$('#imageText').hover
					(
						function()
						{
							$('#carousel_inner').css({ opacity: 0.4 });
							$('#imageText').css({ opacity: 1 });
						},
						function()
						{
							$('#carousel_inner').css({ opacity: 1 });
							$('#imageText').css({ opacity: 0 });
						}
					);
					
            //options( 1 - ON , 0 - OFF)
            var auto_slide = 1;  
            var hover_pause = 0;  
            var key_slide = 1;  
            //speed of auto slide(  
            var auto_slide_seconds = 5000;  
            /* IMPORTANT: i know the variable is called ...seconds but it's 
            in milliseconds ( multiplied with 1000) '*/  
      
            /*move the last list item before the first item. The purpose of this is 
            if the user clicks to slide left he will be able to see the last item.*/  
            $('#carousel_ul li:first').before($('#carousel_ul li:last'));  
      
            //check if auto sliding is enabled  
            if(auto_slide == 1){  
                /*set the interval (loop) to call function slide with option 'right' 
                and set the interval time to the variable we declared previously */  
                var timer = setInterval('slide("right")', auto_slide_seconds);  
      
                /*and change the value of our hidden field that hold info about 
                the interval, setting it to the number of milliseconds we declared previously*/  
                $('#hidden_auto_slide_seconds').val(auto_slide_seconds);  
            }  
      
            //check if hover pause is enabled  
            if(hover_pause == 1){  
                //when hovered over the list  
                $('#carousel_ul').hover(function(){  
                    //stop the interval  
                    clearInterval(timer)  
                },function(){  
                    //and when mouseout start it again  
                    timer = setInterval('slide("right")', auto_slide_seconds);  
                });  
      
            }  
      
            //check if key sliding is enabled  
            if(key_slide == 1){  
      
                //binding keypress function  
                $(document).bind('keypress', function(e) {  
                    //keyCode for left arrow is 37 and for right it's 39 '  
                    if(e.keyCode==37){  
                            //initialize the slide to left function  
                            slide('left');  
                    }else if(e.keyCode==39){  
                            //initialize the slide to right function  
                            slide('right');  
                    }  
                });  
      
            }  
      
      });  
      
    //FUNCTIONS BELLOW  
      
    //slide function  
    function slide(where){  
      
                //get the item width  
                var item_width = $('#carousel_ul li').outerWidth();  
      
                /* using a if statement and the where variable check 
                we will check where the user wants to slide (left or right)*/  
                if(where == 'left'){  
                    //...calculating the new left indent of the unordered list (ul) for left sliding  
                    var left_indent = parseInt($('#carousel_ul').css('left')) + item_width;  
                }else{  
                    //...calculating the new left indent of the unordered list (ul) for right sliding  
                    var left_indent = parseInt($('#carousel_ul').css('left')) - item_width;  
      
                }  
      
                //make the sliding effect using jQuery's animate function... '  
                $('#carousel_ul:not(:animated)').animate({'left' :left_indent},500,function(){  
      
                    /* when the animation finishes use the if statement again, and make an ilussion 
                    of infinity by changing place of last or first item*/  
                    if(where == 'left'){  
                        //...and if it slided to left we put the last item before the first item  
                        $('#carousel_ul li:first').before($('#carousel_ul li:last'));  
                    }else{  
                        //...and if it slided to right we put the first item after the last item  
                        $('#carousel_ul li:last').after($('#carousel_ul li:first'));  
                    }  
      
                    //...and then just get back the default left indent  
                    $('#carousel_ul').css({'left' : '-980px'});  
                });  
    }
		</script>
	<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
	<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />
<link rel="stylesheet" type="text/css" href="css/header_footer.css" />
<!--<link href="css/styles.css" rel="stylesheet" type="text/css">-->
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type='text/javascript' src='javascript/menu_jquery.js'></script>
<style>
	#main_body
	{
		height: 700px;
	}
</style>
</head>
<body>
		<div id="main">
			<div id="title_top">
				<div id="title_container">
					<img src="images/logo4.png" id="logo">
				</div>
			</div>
<!--
			<div id="navigation">
				<div class="navigation_button_container">
					<a href="index.php" class="navigation_button"> Home </a>
				</div>
				<div class="navigation_button_container">
					<a href="menu.php" class="navigation_button"> Menu </a>
				</div>
				<div class="navigation_button_container">
					<a href="team.php" class="navigation_button"> Team </a>
				</div>
				<div class="navigation_button_container">
					<a href="gallery.php" class="navigation_button"> Gallery </a>
				</div>
				<div class="navigation_button_container">
					<a href="catering.php" class="navigation_button"> Catering </a>
				</div>
				<div class="navigation_button_container">
					<a href="contact.php" class="navigation_button"> Contact </a>
				</div>
			</div>
-->
<div id='cssmenu'>
<ul>
   <li id='home'><a href='index.php'><span>Home</span></a></li>
   <li id='menu'> <!--class='has-sub'--><a href='menu.php'><span>Menu</span></a>
	<!--
      <ul style="z-index:1">
         <li><a href='menu.php'><span>Basic Menu</span></a></li>
		<li class='last'><a href='eventsMenu.php'><span>Events Menu</span></a></li>
      </ul>
	-->
   </li>
   <li id='gallery'><a href='gallery.php'><span>Gallery</span></a></li>
   <li id='events'><a href='eventBooking.php'><span>Events</span></a>
   <!--
      <ul style="z-index:1">
         <li><a href='booking.php'><span>Booking</span></a></li>
		<li class='last'><a href='eventGallery.php'><span>Event Gallery</span></a></li>
      </ul>
	 -->
   </li>
   <li id='aboutUs'><a href='aboutUs.php'><span>About Us</span></a></li>
   <li id='contact' class='last'><a href='contact.php'><span>Contact</span></a></li>
</ul>
</div>
<div id="main_body" style="background-color:black;z-index:-1">
<script>
	document.getElementById("home").className += "active";
</script>
<div id='carousel_container'>
	<div id='left_scroll' style="height:455px;background-color:white">
		<a href='javascript:slide("left");'>
			<img id='left' src='images/Left.png' width="86px" height="455px"/>
		</a>
	</div>
	<div id='carousel_inner' style="height:455px;background-color:white">
		<ul id='carousel_ul'>  
			<li style="height:455px">
				<img id="pic" src="images/gallery/iceCreamTruck.jpg" style="margin-left:58px;height:455px;width:808px">
			</li>   
			<li style="height:455px">
				<img class="pic" src="images/gallery/wedding.jpg" style="margin-left:58px;height:455px;width:808px">
			</li>
			<li style="height:455px">
				<img class="pic" src="images/gallery/givingAway.jpg" style="margin-left:58px;height:455px;width:808px">
			</li>
			<li style="height:455px">
				<img class="pic" src="images/gallery/littleBoy.jpg" style="margin-left:58px;height:455px;width:808px">
			</li>
			<li style="height:455px">
				<img class="pic" src="images/gallery/bigGroup.jpg" style="margin-left:58px;height:455px;width:808px">
			</li>
			<li style="height:455px">
				<img class="pic" src="images/gallery/inside.jpg" style="margin-left:58px;height:455px;width:808px">
			</li>  
			<li style="height:455px">
				<img class="pic" src="images/gallery/littleGirl.jpg" style="margin-left:58px;height:455px;width:808px">
			</li>  
		</ul>  
	</div>
	<div id='right_scroll' style="height:455px;background-color:white">
		<a href='javascript:slide("right");'>
			<img id='right' src='images/Right.png' width="86px" height="455px"/>
		</a>
	</div> 
	<input type='hidden' id='hidden_auto_slide_seconds' value=0 />
	<input type='hidden' id='current' value=1 />
</div>
<div class="imageText" id="imageText" style="text-align:center;opacity:0;top:214px">
	Based out of London, Ontario Megacone is an ice cream truck company that serves a very large variety of the most amazing ice creams. We have three ice cream trucks, one lemonade stand, and a gourmet crepe trailer.
	<br>
	<br>
	Since we make all of our own trucks from scratch, we know that what we serve is the best in quality, and nothing else compares. Nothing tastes better on a warm day than an ice cream cone full of Megacone's soft serve ice cream, and we know it. Also, if your looking for catering look no further, we do everything from large corporate events, to birthday parties.
	</div>
	<div style="padding-top:455px;background-color:black">
	<div style="background-color:white">
		<div style="float:left;width:326.6px">
			<a href="menu.php"><img src="images/menu.png" border="0px" style="margin-left:51px"></a>
		</div>
		<div style="float:left;width:326.6px">
			<a href="gallery.php"><img src="images/gallery.png" border="0px" style="margin-left:51px"></a>
		</div>
		<div style="text-align:center">
			<a href="eventBooking.php"><img border="0px" src="images/booking.png"></a>
		</div>
		<br>
		</div>
	</div>
<?php include("footer.php"); ?>
</body>
</html>