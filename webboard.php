<?php //ใส่ทุกอัน
    include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Webboard</title>
	<link rel="stylesheet" href="css/styleWebboard.css">
</head>
<body>

<div class="container" style="width:85%;">
    <div style="padding: 16px;">
       <h1><b>Webboard</b></h1>
       <hr style="display: block;height: 1px;border: 0;border-top: 3px solid #f44336;margin-top: -5px;padding: 0;">
       <p id="tellUser"></p>
       <br><br>
    </div>
</div>

<div class="container" style="width:70%;margin-top: -35px;">
    <h2>Event:<span id="tNameEvent"></span></h2><br>
    <div align="right" style="margin-top:10px;color:white;">
       <button type="button" class="btn btn-success"  style="margin-right:10px;" onclick="document.getElementById('createWebboard').style.display='block';" ><span style="color:white"><span class="glyphicon glyphicon-pencil" ></span> Create</span></a></button>
    </div>
    
    <center>
    <div class="table-responsive" id="rWebboard">
        <table class="table  table-bordered" style="margin-top:10px;text-align:center;">
            <thead>
                <tr align="center">
                <th>No.</th>
                <th>Topic</th>
                <th>Username</th>
                <th>CreateDate</th>
                <th>View</th>
                <th>Reply</th>
                <th>Delete</th>
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
            <hr style="display: block;height: 1px;border: 0;border-top: 3px solid #f44336;margin-top: -5px;padding: 0;">
        </div>
        <div style="padding-left:11%;margin-top:-30px;" class="con">
		    <label><h4><b>Topic</b></h4></label>
		    <input style="width:90%; height: 15%;" id="quesW"  type="text" required autofocus /><!-- <p style="font-size: 10px;">*input text not over 50</p> --><br>
		    <p><label><h4><b>Details</b></h4></label></p>
		    <textarea  id="detW"  style="width:90%; height: 120px;"></textarea><br><br>
		    <div  align="right"style="margin-right:45px;" >
                <button type="button" class="btn btn-success" style="margin-right:10px;" onclick="createWebB();"><span class="glyphicon glyphicon-pencil" ></span> Create</button>
                <button type="button" class="btn btn-danger" onclick="document.getElementById('createWebboard').style.display='none';document.getElementById('createWebboardForm').reset();"><span class="glyphicon glyphicon-remove" ></span> Cancle</button>
            </div>
        </div>
  	</form>
</div>




<!-- Script -->
<script type="text/javascript">
    var idE = "<?php echo $_GET['idEvent'];?>";
	var createWebboard = document.getElementById('createWebboard');
	window.onclick = function(e){
        if (event.target == createWebboard){
            createWebboard.style.display = "none";    
        }
    }
    setTitle();
    readWebboard();
    function createWebB() {
        var ques = document.getElementById('quesW').value;
        var detail = document.getElementById('detW').value;

        $.post("src/indexPHP.php",{createWebboard:true,idEvent:idE,username:username,ques:ques,detail:detail},
        function(data) {
            console.log(data);
            readWebboard();
        });
        document.getElementById('createWebboard').style.display='none';
        document.getElementById('createWebboardForm').reset();
    }

    function readWebboard() {
        $.post("src/indexPHP.php",{readWebboard:true,idEvent:idE,username:username,typeA:typeAccount},
        function(data){
            $('#rWebboard').html(
                '<div class="table-responsive"  id="rWebboard">'+
                    '<table align="center" class="table table-hover table-bordered" style="margin-top:10px;text-align:center;">'+
                    '<thead>'+
                        '<tr align="center">'+
                        '<td><b>No.</b></th>'+
                        '<td><b>Topic</b></td>'+
                        '<td><b>Username</b></td>'+
                        '<td><b>Date</b></td>'+
                        '<td><b>Time</b></td>'+
                        '<td><b>View</b></td>'+
                        '<td><b>Reply</b></td>'+
                        '<td><b>Delete</b></td>'+
                        '</tr>'+
                   '<thead>'+
                    data +
                    '</table>'+
                    '</div>');
        });
    }

    function setTitle(){
        $.get("src/indexPHP.php",{idEvent:idE},
        function(data){
            // console.log(data);
            var array = data.split('๏');
            // console.log(array);
            document.getElementById('tNameEvent').innerHTML = " "+array[2];
        })
    }

    function comment(idWebboard) {
            // alert("showWebboard.php?idWebboard="+idWebboard);
            $.post("src/indexPHP.php",{updateView:true,idWebboard:idWebboard});
            window.location = "showWebboard.php?idWebboard="+idWebboard;
    }

    function deleteWebboard(idWebboard){
        console.log(":"+idWebboard);
        $.ajax({  
            type: "POST",
            url: "src/indexPHP.php", 
            data: {deleteWebboard:"true",idWebboard:idWebboard},
            success: function(response) {
                console.log("R:"+response);
                readWebboard()
            }
        });
    }

</script>
</body>
</html>