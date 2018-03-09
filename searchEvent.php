<?php //ใส่ทุกอัน
    include 'header.php';
    echo date("h:i:s");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
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
    padding: 10px;
    
    width: 200%;
    max-width: 960px;
    margin: 5px auto;
}
header {
    padding: 0 20px;
}

.columns {
    display: flex;
    flex-flow: row wrap;
    justify-content: center;
    margin: 10px 20px 20px 5px ;
}

.column {
    flex: 5;
    border: 1px solid gray;
    margin: 10px 5px 5px 10px;
    padding: 10px;
    font-size: 20px;
    
    &:first-child { margin-left: 10; }
    &:last-child { margin-right: 0; }
    
}
.column3 {
    flex: 3;
    border: 1px solid gray;
    margin: 10px;
    padding: 20px;
    &:first-child { margin-left: 0; }
    &:last-child { margin-right: 0; }
    
}
.column1 {
    flex: 5;
    border: 1px solid white;
    margin: 10px 5px 5px 10px;
    padding: 10px;
    
    &:first-child { margin-left: 10; }
    &:last-child { margin-right: 0; }
    
}
.headertop{
	border: 1px solid black;
	
	padding: 10px;
    
    width: 200%;
    max-width: 960px;
    margin: 5px auto;


}
.text1{
	font-size: 20px;
	margin-left: 20px;
}
		
		
    </style>
</head>
<body>
	<div class="headertop">
		<div class="text1">We've found 4 events for you.
		</div></div>
	 

<div class="wrapper">

    
        
<section class="columns">
    
    <div class="column">

    	<p >s beatae voluptatemLibero fuga facilis vel consectetur quos sapiente deleniti eveniet dolores tempore eos deserunt officia quis ab? Excepturi vero tempore minus beatae voluptatemem ia quis ab? </p>

        
        
    </div>
    
    <div class="column">
    	<p >te deleniti eveniet dolores tempore eos deserunt officia quis ab? Excepturi vero tempore minus beatae voluptatemem ia quis ab? </p>
    	
     </div>
     <div class="column">
     	
     </div>
 </section>  


<section class="columns">
    
    <div class="column">
    	
    	<p ">uos sapiente deleniti eveniet dolores tempore eos deserunt officia quis ab? Excepturi vero tempore minus beatae voluptatemem ia quis ab? "</p>

    </div>
    
    <div class="column1">
    	
    	
     </div>
     <div class="column1">
     	
     </div>
     

     


  
  
    
</section>  

    
    

</div>

<footer class="footer navbar-inverse" style="color:white;margin-top:70px;">
        <br>
        <p><b>&copy; Designed by Kiticha Garden</b></p>
        <br>
    </footer>
</body>
</html>