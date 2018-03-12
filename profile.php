<?php //ใส่ทุกอัน
    include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="U+2304">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styleProfile.css">
    <title>The Event</title>
</head>
<body>
  <div class="wrapper-profile">
  <section class="columns-profile">
    <div class="column3-profile">
      <div class="card">
          <img id="qImage" class="img-thumbnail" style="width:100%">
          <span class="name-profile" id="qFirstName"></span>
          <span class="name-profile" id="qLastName"></span>
          <span class="glyphicon info-profile">&#xe021;</span><span class="info-profile" id="qAddress"></span><br>
          <span class="glyphicon info-profile">&#x2709;</span><span class="info-profile" id="qEmail"></span>
      </div>
    </div>
    <div class="column-profile">
      <div class="dropdown-profile">
        <h3>Attend Events</h3>
</div>
<div class="column2-profile">
  
</div>
<div class="column4-profile">
  <div class="table-responsive" id="events" style="width:100%;">
        <table class="table table-hover table-bordered" style="margin-top:10px;">
            <thead>
                <tr>
                    <th>Event</th>
                    <td align="right"><b>Date</b></td>
                </tr>
            </thead>
        </table>
    </div>
</table>
</div>
    </div>
</section>  
</div>
  <footer class="footer">
    <br>
        <p><b>&copy; Designed by Kittichai Garden</b></p>
        <br>
  </footer>
<script>
var arrayProfile = null;

function getEvents(){
$.ajax({  
     type: "POST",  
     url: "src/indexPHP.php", 
    data: { getEventsProfile:"true",username},
    success: function(response) {
        $("#events").html(
        '<div class="table-responsive"  id="events">'+
        '<table class="table table-hover table-bordered" style="margin-top:10px;">'+
        '<thead>'+
            '<tr>'+
            '<th>Event</th>'+
            '<td align="right"><b>Date</b></td>'+
            '</tr>'+
        '</thead>'+
        response +
        '</table>'+
        '</div>');
        
    }
    });
}

console.log(username);

$.ajax({
  type: "GET",
  url: "src/indexPHP.php", 
  data: { username: username},
  success: function(response) {
    arrayProfile = response.split("๏");
    console.log(arrayProfile);
    setElement(arrayProfile);
  }
  });

function setElement(array){
  document.getElementById("qEmail").innerHTML = array[2];
  document.getElementById("qFirstName").innerHTML = array[3];
  document.getElementById("qLastName").innerHTML = array[4];
  document.getElementById("qAddress").innerHTML = array[8];
  document.getElementById("qImage").src = array[11];
  getEvents();
}

$(document).ready(function() {
  $("#dropdown-profile-attend").click(function () {
    getEvents();
    console.log("attend");
  });

  $("#dropdown-profile-events").click(function () {
    console.log("events");
  });
}
);


</script>

</body>

</html>
