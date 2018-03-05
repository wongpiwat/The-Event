<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/event.css">
	<link rel="stylesheet" href="jq-carousel-plugin.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha384-xBuQ/xzmlsLoJpyjoggmTEz8OWUFM0/RC5BsqQBDX2v5cMvDHcMakNTNrHIW2I5f" crossorigin="anonymous"></script>
    <script src="jq-csrousel-plugin.js"></script><!--JS image slice -->
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
        
        .clear{clear:both; line-height:0; height:0; font-size: 1px}
		
		
    </style>


    <style>
        
        #slider { width: 500px; }
        #slider li { width: 250px; }
    </style>
    <div class="bt_1" onmouseout="this.className='bt_1'" onmouseover="this.className='bt_2'"></div>
</head>
<body>
	<div class="title">
        <span class="title-text">The Event</span>
        <a onclick="document.getElementById('login').style.display='block'"  href="#" style="float:right;font-size: 20px;padding-top:1%">Sign in / Sign up</a>
    </div>
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
<div id="frame">
        <div class="box-1">
        	<div class="text">Detail</div>
        	<div>dadawdadadada,</div>
        	<div>dadawdadadada,</div>
        	<div>dadawdadadada,</div>
        	<div>dadawdadadada,</div>
        	<div>dadawdadadada,</div>
        	<div>dadawdadadada,</div>
        	<div>dadawdadadada,</div>

        	<div class="str">dseffsgsfsfffffffffffffffffffffffffffffffffffffffff</div>
        </div>
        <div class="box-2">
        	<div class="text">Detail</div>
        	<div class="str">dseffsgsfsfffffffffffffffffffffffffffffffffffffffff</div>
        </div>
        <div class="box-3">
        	<div class="text">Detail</div>
        	<div>dadawdadadada,</div>
        	<div>dadawdadadada,</div>
        	<div>dadawdadadada,</div>
        	<div>dadawdadadada,</div>
        	<div>dadawdadadada,</div>
        	<div>dadawdadadada,</div>
        	<div>dadawdadadada,</div>

        	<div class="str">dseffsgsfsfffffffffffffffffffffffffffffffffffffffff</div>
        </div>
        <div class="box-4">
        	<div class="text">Detail</div>
        	<div class="str">dseffsgsfsfffffffffffffffffffffffffffffffffffffffff</div>
        </div>
        <br class="clear" />
        <br class="clear" />
</div>
  




</body>

</html>