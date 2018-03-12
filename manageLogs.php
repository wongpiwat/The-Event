<div class="container" style="width:100%;">
<h1 align="center" style="margin-top:35px;">Manage Logs</h1><br />

<div class="table-responsive" id="readLogs">
<table class="table table-hover table-bordered" style="margin-top:10px;text-align:center;">
    <thead>
        <tr>
        <th>No.</th>
        <th>Username</th>
        <th>Date</th>
        <th>Time</th>
        <th>Event</th>
        </tr>
    </thead>
</table>

</div>
</div>
<script>
readLogs();

function readLogs(){

$.ajax({  
     type: "POST",  
     url: "src/indexPHP.php", 
    data: { readLogs:"true" },
    success: function(response) {
        $("#readLogs").html(
        '<div class="table-responsive"  id="readLogs">'+
        '<table class="table table-hover table-bordered" style="margin-top:10px;text-align:center;">'+
        '<thead>'+
            '<tr>'+
            '<th>No.</th>'+
            '<th>Username</th>'+
            '<th>Date</th>'+
            '<th>Time</th>'+
            '<th>Event</th>'+
            '</tr>'+
        '</thead>'+
        response +
        '</table>'+
        '</div>');
    }
    });


