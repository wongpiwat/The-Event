<?php //ใส่ทุกอัน
    include 'header.php';
?>

<!DOCTYPE html>
<html>
<head>
	<!-- <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
	<style type="text/css" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css"></style>
	<title></title>
	<link rel="stylesheet" href="css/styleShowWebboard.css">
	<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=tis-620">
</head>
<body>
<div class="container" style="width:85%;">
<div style="padding: 16px;">
       <h1><b>Event Title: </b></h1>
       <hr style="    display: block;
                       height: 1px;
                       border: 0;
                       border-top: 3px solid #f44336;
                       margin-top: -5px;
                       padding: 0;
                       /* background-color: black;
                       color: black; */">
       <p id="tellUser"></p>
            

       <br><br>
</div>
</div>
<div class="container" style="width:70%;margin-top: -35px;">
    <!--topic-->
	<div id="topic">
		<br>
		<h1 id="topic-title"> &nbsp;&nbsp;&nbsp;<span id="creatorWB"><span></h1>
		<br>

		<div style="padding-left: 5%;padding-right:5%;margin-bottom:5%;font-size:16px;">
		<span id="cDelWB" style="color:white;"></span>

		</div>
		<hr style="    display: block;
                       height: 1px;
                       border: 0;
                       border-top: 0.5px solid #d3c92a;
					   margin-top:40px;
					   width: 90%
                       /* background-color: black;
                       color: black; */">
		<div style="margin-left:5%;font-size:14px;bottom: 0;width: 70%;margin-top:-40px;color:#ffc955;">
		<br>

		User: <span id="us">adminSun</span>  &nbsp;&nbsp;&nbsp;&nbsp;Date: <span id="ds">2018-03-18</span> &nbsp;&nbsp;&nbsp;&nbsp;Time: <span id="ts">12:30:00</span>
		</div>
	</div>
	<!--comment-->
	<div id="commentU">
	<div class="comment" style="padding-left: 5%;padding-right:5%;">
		<h4>comment</h4>
		<p class="comment-story">
	
		</p>
		<hr style="    display: block;
                       height: 1px;
                       border: 0;
                       border-top: 0.5px solid #d3c92a;
					   margin-top:40px;
                       /* background-color: black;
                       color: black; */">
		<div style="bottom: 0;width: 100%;margin-top:-40px;color:#ffc955;">
		<br>
		User: adminSun &nbsp;&nbsp;&nbsp;&nbsp;Date: 2018-03-18 &nbsp;&nbsp;&nbsp;&nbsp;Time: 12:30:00
		</div>
	</div>

	</div>

	<!--menu bar-->
	<div class="editor" stlye="margin-top:50px; ">
      <div class="editor-header">
        <a href='#' data-role='bold'>B</a>
        <a href='#' data-role='italic'>I</a>
        <a href='#' data-role='underline'>U</a>
        <a href='#' data-role='justifyleft'><i class="menu-left"></i></a>
        <a href='#' data-role='justifycenter'><i class="menu-center"></i></a>
        <a href='#' data-role='justifyright'><i class="menu-right"></i></a>
      </div>
      <div id="text" class="editor-content" contenteditable>
        
      </div>
    </div>
    <button  type="button" class="btn btn-success" style="color:white;float:right;margin-top:10px;" align="right" onclick="comment()" ><span class="glyphicon glyphicon-envelope" ></span> Comment</button>
</div>

   <script type="text/javascript">
   	$(document).ready(function(){
  		$(".editor-header a").click(function(e){
    		e.preventDefault();

    		var _val = $(this).data("role"),
        	_sizeValIn = parseInt($(this).data("size-val") + 1),
        	_sizeValRe = parseInt($(this).data("size-val") - 1),
        	_size = $(this).data("size");
    		if(_size == "in-size"){
      			document.execCommand(_val, false, _sizeValIn + "px");
    		} else{
      			document.execCommand(_val, false, _sizeValRe + "px");
    		}
  		});
	});

	$(document).ready(function(){
  		var $text = $("#text"),
      	$submit = $("input[type='submit']"),
      	$listComment = $(".list-comments"),
      	$loading = $(".loading"),
      	_data,
      	$totalCom = $(".total-comment");

 		$totalCom.text($(".list-comments > div").length);


 	


	});


	var idWB = "<?php echo $_GET['idWebboard'];?>";
	readWebCom();
	readComment();
	function comment(){
		// alert('sun');
		var com = document.getElementById('text').textContent;
		// alert(com);
		$.post("src/indexPHP.php",{comment:true,idWebboard:idWB,username:username,comment:com},
        function(data){
            console.log(data);
            readComment();
            
        });
		var com = document.getElementById('text').textContent = "";
	}

	function readComment(){
		$.post("src/indexPHP.php",{readComment:true,idWebboard:idWB},
        function(data){
			console.log(data);
			$('#commentU').html('<div id="commentU">'+data+'</div>');
			// console.log(data);
			
			
		});
	}

	function readWebCom(){
		$.post("src/indexPHP.php",{readWebCom:true,idWebboard:idWB},
        function(data){
			
			console.log(data);cDelWB
			var arrayC = data.split('๏');
			console.log(arrayC);
			$('#us').text(arrayC[2]);
			$('#ds').text(arrayC[5]);
			$('#ts').text(arrayC[6]);
			
			$('#creatorWB').text(arrayC[3]);
			$('#cDelWB').text(arrayC[4]);
		});
	}
   </script>





</body>
</html>