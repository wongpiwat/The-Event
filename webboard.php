<?php //ใส่ทุกอัน
    include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/styleWebboard.css">
</head>
<body>
<div class="container" style="width:85%;">
<div style="padding: 16px;">
       <h1><b>Webboard</b></h1>
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
<h2>Event Title:<span id="tNameEvent" > Tao Kae Noi Presents BNK48</span></h2><br>
<div align="right" style="margin-top:10px;color:white;">
       <button type="button" class="btn btn-success"  style="margin-right:10px;" onclick="document.getElementById('createWebboard').style.display='block';" ><span style="color:white"><span class="glyphicon glyphicon-envelope" ></span> Create</span></a></button>
       <button type="button" class="btn btn-danger"  onclick="document.getElementById('deleteWebboard').style.display='block';" ><span style="color:white"><span class="glyphicon glyphicon-trash" ></span> Delete</span></a></button>
    </div>
<center>
<div class="table-responsive" id="rWebboard">

<table class="table  table-bordered" style="margin-top:10px;text-align:center;">
    <thead>
        <tr align="center">
        <th>No.</th>
        <th>Question</th>
        <th>Username</th>
        <th>CreateDate</th>
        <th>View</th>
        <th>Reply</th>
        </tr>
    </thead>
    <div id="rWebboard"></div>

</table>
</div>
</center>
</div>

<div class="createWebboard" id="createWebboard" >
	<form class="createWebboard-content animate"  id="createWebboardForm" method="POST"  style="height:510px;margin-top:30px;">
        <div class="con" >
        <br>
        <center><h2><b>Create Webboard</b></h2></center><br>
        <hr style="    display: block;
                       height: 1px;
                       border: 0;
                       border-top: 3px solid #f44336;
                       margin-top: -5px;
                       padding: 0;
                       /* background-color: black;
                       color: black; */">
        </div>
        <div style="padding-left:11%;margin-top:-30px;" class="con">
		<label><h4><b>Question</b></h4></label>
		<input style="width:90%; height: 15%;" id="quesW"  type="text" required autofocus /><!-- <p style="font-size: 10px;">*input text not over 50</p> --><br>
		<p><label><h4><b>Detail</b></h4></label></p>
		<textarea  id="detW"  style="width:90%; height: 120px;"></textarea><br><br>
		<div  align="right"style="margin-right:45px;" >
        <button type="button" class="btn btn-success" style="margin-right:10px;" onclick="createWebB();"><span class="glyphicon glyphicon-envelope" ></span> Create</button>
        <button type="button" class="btn btn-danger" onclick="document.getElementById('createWebboard').style.display='none';document.getElementById('createWebboardForm').reset();"><span class="glyphicon glyphicon-remove" ></span> Cancle</button>
        </div>
</div>
  	</form>
</div>

<script type="text/javascript">
    var idE = "<?php echo $_GET['idEvent'];?>";
	var createWebboard = document.getElementById('createWebboard');
	window.onclick = function(e){
    if (event.target == createWebboard){
        createWebboard.style.display = "none";    
    }
    }
    readWebboard();
    function createWebB(){
        var ques = document.getElementById('quesW').value;
        var detail = document.getElementById('detW').value;

        $.post("src/indexPHP.php",{createWebboard:true,idEvent:idE,username:username,ques:ques,detail:detail},
        function(data){
            console.log(data);
            readWebboard();
            
        });
        document.getElementById('createWebboard').style.display='none';
        document.getElementById('createWebboardForm').reset();
       
    }

    function readWebboard(){
        $.post("src/indexPHP.php",{readWebboard:true,idEvent:idE},
        function(data){
            $('#rWebboard').html(
                
                '<div class="table-responsive"  id="rWebboard">'+
                    '<table align="center" class="table table-hover table-bordered" style="margin-top:10px;text-align:center;">'+
                    '<thead>'+
                        '<tr align="center">'+
                        '<td><b>No.</b></th>'+
                        '<td><b>Question</b></td>'+
                        '<td><b>Username</b></td>'+
                        '<td><b>Date</b></td>'+
                        '<td><b>Time</b></td>'+
                        '<td><b>View</b></td>'+
                        '<td><b>Reply</b></td>'+
                        '</tr>'+
                   '<thead>'+
                    
                    data +
                    '</table>'+
                    '</div>');
                
                
                
                
        
        });
    }

</script>





</body>
</html>