<?php //ใส่ทุกอัน
    include 'header.php';
    // echo date("h:i:s");
    echo "ID Event: ".$_GET["idEvent"];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/event.css">
	<link rel="stylesheet" href="cs/jq-carousel-plugin.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha384-xBuQ/xzmlsLoJpyjoggmTEz8OWUFM0/RC5BsqQBDX2v5cMvDHcMakNTNrHIW2I5f" crossorigin="anonymous"></script>
    <script src="js/jq-csrousel-plugin.js"></script><!--JS image slice -->
    <style rel="stylesheet" type="text/css">
        html,body{
            width: 100%;
            height: 100%;
        }
        #box{
        	margin-top: 30px;
        	margin-left: 150px;
            position: relative;  
            width: 45%;
            height: 45%;
            overflow: hidden; 
            display: inline-flex;
            float:left;


            /*display: flex;
            justify-content: center;  */
            
    		      
        }
        .str{
            border: 1px solid #999;
            font-size: 25px;
            text-align: center;
            padding: 2% 8% 2%;
            

        }
        
        .clear{clear:both; line-height:0; height:0; font-size: 1px}
        body { 
  font-family: 'Open Sans', sans-serif;
  color: #666;
}

/* STRUCTURE */

.wrapper {
    padding: 5px;
    max-width: 960px;
    width: 95%;
    margin: 20px auto;
}
header {
    padding: 0 15px;
}

.columns {
    display: flex;
    flex-flow: row wrap;
    justify-content: center;
    margin: 5px 0;
}

.column {
    flex: 1;
    border: 1px solid gray;
    margin: 10px;
    padding: 20px;
    &:first-child { margin-left: 10; }
    &:last-child { margin-right: 0; }
    
}
.column3 {
    flex: 3.5;
    border: 1px solid gray;
    margin: 10px;
    padding: 20px;
    &:first-child { margin-left: 0; }
    &:last-child { margin-right: 0; }
    
}
		
		
    </style>


    <style>
        
        #slider { width: 500px; }
        #slider li { width: 250px; }
    </style>
    <div class="bt_1" onmouseout="this.className='bt_1'" onmouseover="this.className='bt_2'"></div>
</head>
<body>
	
	<div class="head">
		<div class="inbox">Name</div>
		<div class="inbox">All event>category>Name</div>

	</div>
	
	<!--image slice -->

    <script>
        
        $(function(){
            $("#box").jqCarouselImg({
                imgLen:5,
                imgUrl:['https://previews.123rf.com/images/clairev/clairev1207/clairev120700095/14604517-sun-theme-abstract-background-1-illustration.jpg','https://picsum.photos/1800/888/?random','https://picsum.photos/1900/850/?random','https://picsum.photos/1800/960/?random','https://picsum.photos/1800/850/?random',],
                speed:6000,
                direction:false,
            })
        });
    </script>
    <div id="box">

    </div>
    <div class="content"></div>
    <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script><!--End image slice -->

	<div class="testbox">
		<div id="box1">สถานที่ :</div>
		<div id="box1">วัน :</div>
		<div id="box1">เวลา:</div>
</div>


<!--<div class="detail" >
        <div class="text">Detail</div>
        <div class="events-block-subheading">
        	<div class="text-center">


            
        </div>
        </div>
       <div class="media">
            <div class="media-left">
            	
            </div>
        </div>
       </div>
<div class="manager" >
        <div class="text">Manager</div>
        <div class="events-block-subheading">
        	


            <div class="text-center">
            
        </div>
        </div>
       <div class="media">
            <div class="media-left">
            	
            </div>
        </div>
    </div>
<div class="VDO" >
        <div class="text">vdo</div>
        <div class="events-block-subheading">
            <div class="text-center">
            
        </div>
        </div>
       <div class="media">
            <div class="media-left">
            	
            </div>
        </div>
    </div>
<div class="map" >
        <div class="text">Map</div>
        <div class="events-block-subheading">
            <div class="text-center">
            
        </div>
        </div>
       <div class="media">
            <div class="media-left">
            	
            </div>
        </div>
    </div>
   
 <!--End Block Recommended Events,Upcoming Events,Nearby Events -->

<div class="wrapper">

    
        
<section class="columns">
    
    <div class="column3">
        <h2>1st Content Area</h2>
        <div>
  <input type="checkbox" class="read-more-state" id="post-1" />

  <p class="read-more-wrap">LorLibero fuga facilis vel consectetur quos sapiente deleniti eveniet dolores tempore eos deserunt officia quis ab? Excepturi vero tempore minus beatae voluptatemLibero fuga facilis vel consectetur quos sapiente deleniti eveniet dolores tempore eos deserunt officia quis ab? Excepturi vero tempore minus beatae voluptatemem ipsum dolor sit amet, apiente deleniti eveniet dolores tempore eos deserunt officia quis ab? Excepturi vero tempore minus beatae voluptatemem ipsum dolor sit amet, apiente deleniti eveniet dolores tempore eos deserunt officia quis ab? Excepturi vero tempore minus beatae voluptatemem ipsum dolor sit amet, consectetur adipisicing elit. <span class="read-more-target">Libero apiente deleniti eveniet dolores tempore eos deserunt officia quis ab? Excepturi vero tempore minus beatae voluptatemem ipsum dolor sit amet, apiente deleniti eveniet dolores tempore eos deserunt officia quis ab? Excepturi vero tempore minus beatae voluptatemem ipsum dolor sit amet, fuga facilis vel consectetur quos sapiente deleniti eveniet dolores tempore eos deserunt officia quis ab? Excepturi vero tempore minus beatae voluptatem!</span></p>
  
  <label for="post-1" class="read-more-trigger"></label>
</div>
    </div>
    
    <div class="column">
        <h2>VDO</h2>
        <object width='250' height='250'>
<param name='movie' value='https://www.youtube.com/v/mNqMY2bNWfk'></param>
<param name='wmode' value='transparent'></param>
<embed src='https://www.youtube.com/v/=m3DYNLg9q74' type='application/x-shockwave-flash' wmode='transparent' width='600' height='400'>
</embed>
</object>
    </div>
  
  
    
</section>  
<section class="columns">
    
    <div class="column">
        <h2>1st Content Area</h2>
        <p>dLorem ipsum dolor sit amet consectetur adipisicing elit. Sequi ratione architecto necessitatibus cum praesentium dolor totam voluptatibus recusandae? Illo quod nemo ratione itaque dolores laudantium error vero laborum blanditiisnostrumddddddd</p>
    </div>
    
    <div class="column">
        <h2>2nd Content Area</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi ratione architecto necessitatibus cum praesentium dolor totam voluptatibus recusandae? Illo quod nemo ratione itaque dolores laudantium error vero laborum blanditiis nostrum.</p>
    </div>
  
  
    
</section>  
    
    

</div>
  




</body>

</html>