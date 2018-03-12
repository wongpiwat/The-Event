<div class="container" style="width:100%;">
<h1 align="center" style="margin-top:35px;">Manage System Logs</h1><br />

<div class="table-responsive" id="systemLog">
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
console.log("enter m lo");
getLogs();
function getLogs(){
$.ajax({  
     type: "POST",  
     url: "src/indexPHP.php", 
    data: { getSystemLogs:"true" },
    success: function(response) {
        $("#systemLog").html(
        '<div class="table-responsive"  id="systemLog">'+
        '<table class="table table-hover table-bordered" style="margin-top:10px;text-align:center;">'+
        '<thead>'+
            '<tr>'+
            '<th>No.</th>'+
            '<th>Username</th>'+
            '<th>Date</th>'+
            '<th>Time</th>'+
            '<th>Event</th>'+
            '<th>File</th>'+
            '</tr>'+
        '</thead>'+
        response +
        '</table>'+
        '</div>');
    }
    });
}


