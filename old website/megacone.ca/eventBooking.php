<html>
<head>
		<script src="https://code.jquery.com/jquery-1.9.1.min.js">
		</script>
		<script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js">
		</script>
		<script type="text/javascript" src="scripts/jquery.html5support.js">
		</script>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Events Photo Gallery, and booking Megacone Ice Cream Truck</title>
		<meta name="description" content="Megacone Ice Cream Truck, specializes in catering events such as corporate gatherings, birthday parties, weddings, family gatherings, and more.">
		<meta name="keywords" content="Megacone Ice Cream Truck, Megacone, Ice Cream, Ice Cream Truck, truck, soft serve ice cream, soft serve, popsicles, smoothies, sundaes, slushies, lemonade truck, dessert">
		<script>
		      $(document).ready(
				  function($)
				  {  
					
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
		height: 455px;
	}
</style>
</head>
<body>
<?php include("header.php"); ?>
<script>
	document.getElementById("events").className += " active";
</script>
<div style="position:absolute;border:6px solid #083c5d;width:404px;height:425px;margin-top:10px;margin-left:96px;z-index:1;background-color:#6e9eff;opacity:.7;border-radius:25px;">
	<h1 style="text-align:center;margin-top:0px">Event Booking</h1>
	<h4 style="text-align:center;border-bottom:2px solid #083c5d;">We do catering for: weddings, birthdays, holiday parties, festivals, celebrations, corporate functions and more. Basically no event is too big or too small.</h4>
	<form action="php/submit.php" method="post">
		<label for="firstName" id="firstName" style="margin-left:5px;">First Name:</label>
		<input type="text" name="firstName" class="formItem">
		<br>
		<label for="lastName" id="lastName" style="margin-left:5px;">Last Name:</label>
		<input type="text" name="lastName" class="formItem">
		<br>
		<label for="phoneNumber" id="phoneNumber" style="margin-left:5px;">Phone Number:</label>
		<input type="text" name="phoneNumber" class="formItem">
		<br>
		<label for="email" id="email" style="margin-left:5px;">Email:</label>
		<input type="text" name="email" class="formItem">
		<br>
		<label for="eventType" id="eventType" style="margin-left:5px;">Event Type:</label>
		<select name="eventType" class="formItem">
			<option value="wedding">Wedding</option>
			<option value="birthday">Birthday</option>
			<option value="Social Gathering">Social Gathering</option>
			<option value="festival">Festival</option>
			<option value="Corporate Function">Corporate Function</option>
			<option value="other">Other</option>
		</select> 
		<br>
		<label for="numberPeople" id="numberPeople" style="margin-left:5px">Number of People:</label>
		<select name="numberPeople" class="formItem">
			<option value="0-25">0-25</option>
			<option value="25-50">25-50</option>
			<option value="50-100">50-100</option>
			<option value="100-200">100-200</option>
			<option value="200+">200+</option>
		</select>
		<br>
		<label for="location" id="location" style="margin-left:5px;">Location:</label>
		<input type="text" name="location" class="formItem">
		<br>
		<label for="date" id="date" style="margin-left:5px;">Date:</label>
		<input type="text" name="date" class="formItem">
		<br>
		<label for="time" id="time" style="margin-left:5px;">Time:</label>
		<input type="text" name="time" class="formItem">
		<input type="submit" name="submit" value="Submit" style="width:300px;margin-left:52px;border-radius:25px;background-color:white;border:2px solid #083c5d;margin-top:13px">
	</form>
</div>
<div id='carousel_container'>
	<div id='left_scroll' style="height:455px">
		<a href='javascript:slide("left");'>
			<img id='left' src='images/Left.png' width="86px" height="455px"/>
		</a>
	</div>
	<div id='carousel_inner' style="height:455px">
		<ul id='carousel_ul'>
			<li style="height:455px">
				<img src="images/events/bigGroup.jpg" style="margin-left:58px;height:455px;width:808px">
			</li>   
			<li style="height:455px">
				<img src="images/events/crowd.jpg" style="margin-left:58px;height:455px;width:808px">
			</li>   
			<li style="height:455px">
				<img src="images/events/linedUp.jpg" style="margin-left:58px;height:455px;width:808px">
			</li>  
			<li style="height:455px">
				<img src="images/events/people.jpg" style="margin-left:58px;height:455px;width:808px">
			</li>
			<li style="height:455px">
				<img src="images/events/couple.jpg" style="margin-left:58px;height:455px;width:808px">
			</li>   
			<li style="height:455px">
				<img src="images/events/standing.jpg" style="margin-left:58px;height:455px;width:808px">
			</li>
			<li style="height:455px">
				<img src="images/events/stands.jpg" style="margin-left:58px;height:455px;width:808px">
			</li>  
		</ul>  
	</div>  
	<div id='right_scroll' style="height:455px">
		<a href='javascript:slide("right");'>
			<img id='right' src='images/Right.png' width="86px" height="455px"/>
		</a>
	</div> 
	<input type='hidden' id='hidden_auto_slide_seconds' value=0 />
	<input type='hidden' id='current' value=1 />
</div>
<!--
<h1 style="text-align:center;margin-top:0px;margin-bottom:0px;color:#6e9eff;">Race Track</h1>
<div id='carousel_container'>
	<div id='left_scroll' style="height:91px">
		<a href='javascript:slide("left");'>
			<img id='left' src='images/Left.png' width="86px" height="91px"/>
		</a>
	</div>
	<div id='carousel_inner' style="height:91px">
		<ul id='carousel_ul'>  
			<li style="height:91px">
				<img src="images/events/crowd.jpg" style="margin-left:91px;height:91px;width:161.6px">
			</li>   
			<li style="height:91px">
				<img src="images/events/line.jpg" style="margin-left:91px;height:91px;width:161.6px">
			</li>
			<li style="height:91px">
				<img src="images/events/linedUp.jpg" style="margin-left:91px;height:91px;width:161.6px">
			</li>  
			<li style="height:91px">
				<img src="images/events/people.jpg" style="margin-left:91px;height:91px;width:161.6px">
			</li>  
			<li style="height:91px">
				<img src="images/events/standing.jpg" style="margin-left:91px;height:91px;width:161.6px">
			</li> 
			<li style="height:91px">
				<img src="images/events/stands.jpg" style="margin-left:91px;height:91px;width:161.6px">
			</li>   
		</ul>  
	</div>  
	<div id='right_scroll' style="height:91px">
		<a href='javascript:slide("right");'>
			<img id='right' src='images/Right.png' width="86px" height="91px"/>
		</a>
	</div> 
	<input type='hidden' id='hidden_auto_slide_seconds' value=0 />
	<input type='hidden' id='current' value=1 />
</div>
-->
<?php include("footer.php"); ?>
</body>
</html>