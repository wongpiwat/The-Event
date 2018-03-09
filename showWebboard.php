<?php //ใส่ทุกอัน
    include 'header.php';
?>

<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
	<style type="text/css" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css"></style>
	<title></title>
	<link rel="stylesheet" href="css/styleShowWebboard.css">
	<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=tis-620">
</head>
<body>
	<div style="padding: 16px;">
       <h1>Webboard</h1>
       <hr style="    display: block;
                       height: 1px;
                       border: 0;
                       border-top: 3px solid #f44336;
                       margin-top: -5px;
                       padding: 0;
                       /* background-color: black;
                       color: black; */">
    </div>
    <!--topic-->
	<div id="topic">
		<h1 id="topic-title">กระทู้จัดหนัก!!รวมหนังไทยคุณภาพกว่า 35 เรื่อง!!!</h1>
		<br>
		<br>
		<br>
		<br>
		<br>
	</div>
	<!--comment-->
	<div class="comment">
		<p class="comment-story">
		หมอเจ็บหายยยยยยยยยยยยยยยย ไปไหน
	</div>
	


	<!--menu bar-->
	<div class="editor">
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
    <button  type="button" class="btn btn-success"><a href="#"  onclick="document.getElementById('send').style.display='block'" ><span class="glyphicon glyphicon-envelope" ></span> Send</a></button>


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


 		 //code button send

  		// $($submit).click(function(){
    // 		if($text.html() == ""){
    //   			alert("Plesea write a comment!");
    //   			$text.focus();
    // 		} else{
    //   			_data = $text.html();
    //   			$.ajax({
    //     		type: "POST",
    //     		url: window.local,
    //     		data: _data,
    //     		cache: false,
    //     		success: function(html){
    //       			$loading.show().fadeOut(300);
    //       			$listComment.append("<div>"+_data+"</div>");
    //       			$text.html("");
    //       			$totalCom.text($(".list-comments > div").length);
    //     		}
    //   			});
    //   			return false;
    // 		}
  		// });
	});
   </script>





</body>
</html>