<html>
<head>
		<script src="https://code.jquery.com/jquery-1.9.1.min.js">
		</script>
		<script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js">
		</script>
		<script type="text/javascript" src="scripts/jquery.html5support.js">
		</script>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Ice Cream Menu, Megacone Ice Cream Truck</title>
		<meta name="description" content="Megacone Ice Cream Truck, is most well known for their soft serve ice cream's and their sundaes, perfect for those war summer days. They also have an amazing assortment of different types and styles of ice creams available straight at your door.">
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
		height: 1220px;
	}
</style>
</head>
<body>
<?php include("header.php"); ?>
<script>
	document.getElementById("menu").className += " active";
</script>
<h1 style="text-align:center;margin-top:0px;margin-bottom:0px;color:#6e9eff;">Menu</h1>
<div>
	<div style="box-shadow:0px 5px 30px -5px #666666">
		<div style="float:left;text-align:center;width:490px">
			<h2 style="color:#083c5d;margin-top:0px;margin-bottom:0px">Icebergs</h2>
			<br>
			<img src="images/menu/iceberg.png" style="height:139px">
			<br>
			Sizes: Small, Medium, and Large
		</div>
		<div style="text-align:center">
			<h2 style="color:#083c5d;margin-top:0px;margin-bottom:0px">Slushies</h2>
			<br>
			<img src="images/menu/slush.png" style="height:139px">
			<br>
			Sizes: Small, Medium, and Large
		</div>
		<br>
		<div style="font-family:Wide Latin;width:980px;text-align:center;font-size:12px">Flavours: <text style="color:#E30B5D">Raspberry</text>, <text style="color:#32CD32">Lime</text>, <text style="color:#FF7F00">Orange</text>, <text style="color:#6F2DA8">Grape</text>, <text style="color:#DE3163">Cherry</text>, <text style="color:#FC6C85">Watermelon</text>, <text style="color:#FFE135">Banana</text>, <text style="color:#FC5A8D">Strawberry</text>, and <text style="color:#FFC1CC">Bubblegum</text></div>
	</div>
	<br>
	<div style="box-shadow:0px 5px 30px -5px #666666">
		<div style="float:left;text-align:center;width:490px">
			<h2 style="color:#083c5d;margin-top:0px;margin-bottom:0px">Ice Cream Cones</h2>
			<br>
			<img src="images/menu/cone.png" style="height:139px">
			<br>
			Sizes: Small, Medium, and Large
		</div>
		<div style="text-align:center">
			<h2 style="color:#083c5d;margin-top:0px;margin-bottom:0px">Ice Cream Sandwich</h2>
			<br>
			<img src="images/menu/iceCreamSandwich.png" style="height:139px">
		</div>
		<br>
		<br>
		<div style="font-family:Wide Latin;width:980px;text-align:center;font-size:12px">Flavours: <text style="color:#F3E5AB">Vanilla</text>, <text style="color:#7B3F00">Chocolate</text>, and <text style="color:#F3E5AB">Twi</text><text style="color:#7B3F00">st</text></div>
	</div>
	<br>
	<div style="box-shadow:0px 5px 30px -5px #666666">
		<div style="float:left;text-align:center;width:326.6px">
			<h2 style="color:#083c5d;margin-top:0px;margin-bottom:0px">Sundaes</h2>
			<br>
			<img src="images/menu/sundae.png" style="height:139px">
			<br>
			<div style="font-family:Wide Latin;font-size:12px">
				Flavours: <text style="color:#7B3F00">Chocolate</text>, <text style="color:#392724">Hot Fudge</text>, <text style="color:#FC5A8D">Strawberry</text>, <text style="color:#4F86F7">Blueberry</text>, <text style="color:#DAB760">Butterscotch</text>, <text style="color:#fbd5a5">Pineapple</text>, <text style="color:#D0B078">Peanut Butter</text>, and <text style="color:#DE3163">Cherry</text>
			</div>
		</div>
		<div style="float:left;text-align:center;width:326.6px">
			<h2 style="color:#083c5d;margin-top:0px;margin-bottom:0px">Milkshakes</h2>
			<br>
			<img src="images/menu/milkshake.png" style="height:139px">
			<br>
			<div style="font-family:Wide Latin;font-size:12px">
				Flavours: <text style="color:#7B3F00">Chocolate</text>, <text style="color:#FC5A8D">Strawberry</text>, <text style="color:#FFE135">Banana</text>, <text style="color:#F3E5AB">Vanilla</text>, <text style="color:#3f2006">Root Beer Floats</text>, and <text style="color:#DAB760">Butterscotch</text>
			</div>
			<br>
			<br>
		</div>
		<div style="text-align:center">
			<h2 style="color:#083c5d;margin-top:0px;margin-bottom:0px">Mega Flurries</h2>
			<br>
			<img src="images/menu/flurry.png" style="height:139px">
			<br>
			<div style="font-family:Wide Latin;font-size:12px">
				Flavours: <text style="color:#7B3F00">O</text><text style="color:#F3E5AB">re</text><text style="color:#7B3F00">o</text>, <text style="color:#FF0000">M</text><text style="color:#FFF200">&</text><text style="color:#ADD8E6">M</text>'<text style="color:#7B3F00">s</text>, <text style="color:#FF0000">Smarties</text>, <text style="color:#FF7F00">Reese's Pieces</text>, <text style="color:#7B3F00">Skor</text>, <text style="color:#DE3163">Marechino Cherry</text>, <text style="color:#7B3F00">Mars Bar</text>, and <text style="color:#B5651D">Butter Fingers</text>
			</div>
		</div>
		<br>
	</div>
	<br>
	<div style="box-shadow:0px 5px 30px -5px #666666">
		<div style="float:left;text-align:center;width:326.6px">
			<h2 style="color:#083c5d;margin-top:0px;margin-bottom:0px">Popsicles</h2>
			<br>
			<img src="images/menu/popsicle.png" style="height:139px">
			<br>
			<div style="font-family:Wide Latin;font-size:12px">
				Flavours: <text style="color:#FF0000">Ro</text><text style="color:#F3E5AB">ck</text><text style="color:#0000FF">et</text>, <text style="color:#392724">Fudgesicle</text>, <text style="color:#FF0000">Cry Baby</text>, <text style="color:#ADD8E6">Snow Cones</text>, <text style="color:#0000FF">Sonic</text>, <text style="color:#9B870C">Spongebob</text>, and <text style="color:#FF0000">Spiderman</text>
			</div>
		</div>
		<div style="float:left;text-align:center;width:326.6px">
			<h2 style="color:#083c5d;margin-top:0px;margin-bottom:0px">Banana Boat</h2>
			<br>
			<img src="images/menu/bananaBoat.png" style="height:139px">
			<br>
			<br>
			<br>
		</div>
		<div style="text-align:center">
			<h2 style="color:#083c5d;margin-top:0px;margin-bottom:0px">Fruit Bars</h2>
			<br>
			<img src="images/menu/fruitBar.png" style="height:139px">
			<br>
			<div style="font-family:Wide Latin;font-size:12px">
				Flavours: <text style="color:#FFE135">Chunky Banana</text>, <text style="color:#FC5A8D">Strawberry</text>, <text style="color:#965A3E">Coconut</text>, <text style="color:#F3E5AB">Pina Colada</text>, <text style="color:#fbd5a5">Pineapple</text>, and <text style="color:#ffa439">Mango</text>
			</div>
		</div>
		<br>
	</div>
	<br>
	<div style="box-shadow:0px 5px 30px -5px #666666">
		<div style="float:left;text-align:center;width:490px">
			<text style="color:#083c5d;margin-top:0px;margin-bottom:0px;font-size:12px;font-family:Wide Latin">Extras: <text style="color:#FF0000">R</text><text style="color:#FF5A00">a</text><text style="color:#FFB400">i</text><text style="color:#FFff00">n</text><text style="color:#A5ff00">b</text><text style="color:#4Bff00">o</text><text style="color:#00ff00">w</text><text style="color:#00ff5A"> </text><text style="color:#00ffB4">S</text><text style="color:#00ffff">p</text><text style="color:#00B4ff">r</text><text style="color:#005Aff">i</text><text style="color:#0000ff">n</text><text style="color:#4B00ff">k</text><text style="color:#A500ff">l</text><text style="color:#FF00ff">e</text><text style="color:#FF00B4">s</text>, <text style="color:#7B3F00">Chocolate Sprinkles</text>, <text style="color:#7B3F00">Oreo</text> <text style="color:#F3E5AB">Coo</text><text style="color:#7B3F00">kie</text>, and <text style="color:#D0B078">Peanuts</text></text>
			<br>
			Extra toppings on an ice cream in a cone or a cup 
		</div>
		<div style="text-align:center;height:37px">
			<text style="color:#083c5d;margin-top:0px;margin-bottom:0px;font-size:12px;font-family:Wide Latin">Dips: <text>Chocolate</text>, <text style="color:#DAB760">Butterscotch</text>, <text style="color:#FC5A8D">Strawberry</text>, <text style="color:#4F86F7">Blueberry</text>, and <text style="color:#FFBAD2">Cotton Candy</text></text>
		</div>
		<br>
	</div>
</div>
<?php include("footer.php"); ?>
</body>
</html>