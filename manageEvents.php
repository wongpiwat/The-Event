<div class="alert alert-success alert-dismissible" style="display:none" id="showSuc">
    <a href="#" class="close" data-dismiss="alert" aria-label="close" >&times;</a>
    <strong>Successful!</strong><span id="susUser">This alert box could indicate a successful or positive action.</span>
</div>

<div class="container" style="width:100%;">
    <h1 align="center" style="margin-top:35px;">Manage Events</h1><br/>
    <div id="head">
        <form  method="post" style="margin-top:20px;">
            <button type="submit" class="btn btn-warning" name="createPdf"><span class="glyphicon glyphicon-file" ></span> Create PDF</button>
        </form>
    </div>
    <div class="table-responsive" id="events" style="width:160%;">
        <table class="table table-hover table-bordered" style="margin-top:10px;">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Event Name</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Location</th>
                    <th>Category</th>
                    <th>Edit</td>
                    <th>Delete</th>
                </tr>
            </thead>
        </table>
    </div>

    <div id="deleteEventPopup" class="create" style="padding-top:170px;">
    <div id="create" class="create">
        <div class="create-content animate" style="width:50%;">
            <div style="padding: 16px;">
                <h3>Delete Event</h3>
                <hr style="display: block;height: 1px;border: 0;border-top: 3px solid #f44336;margin-top: -5px;padding: 0;">
                <p id="tellUser"></p>
                <div style="float:right;margin-top:10px;">
                <button type="button" class="btn btn-danger" style="margin-right:5px;" onclick="deleteEvent();setDel();"><span class="glyphicon glyphicon-trash"></span> Delete</button>
                <button type="button" class="btn btn-success" onclick="document.getElementById('deleteEventPopup').style.display='none';setDel()"><span class="glyphicon glyphicon-share-alt"></span> Cancel</button>
                <br><br>
            </div>
        </div>
        </div>
    </div>
</div>

<script>
getEvents();
var idEvent = null;
var edit = false;
var del = false;
function getEvents(){
$.ajax({  
     type: "POST",  
     url: "src/indexPHP.php", 
    data: { getEvents:"true" },
    success: function(response) {
        $("#events").html(
        '<div class="table-responsive"  id="events">'+
        '<table class="table table-hover table-bordered" style="margin-top:10px;">'+
        '<thead>'+
            '<tr>'+
            '<th>No.</th>'+
            '<th>Event Name</th>'+
            '<th>Date</th>'+
            '<th>Start Time</th>'+
            '<th>End Time</th>'+
            '<th>Location</th>'+
            '<th>Category</th>'+
            '<th>Edit</th>'+
            '<th>Delete</th>'+
            '</tr>'+
        '</thead>'+
        response +
        '</table>'+
        '</div>');
        
    }
    });
}

function setEdit() {
    edit = false;
}

function setDel() {
    del = false;
}

function successTell(message){
    document.getElementById('susUser').innerHTML = message;
    document.getElementById('showSuc').style.display='block';
}

// function setDeleteEvent(eventName) {
//     document.getElementById('tellUser').innerHTML = "Delete event: " + eventName;
//     document.getElementById('deleteEventPopup').style.display='block';   
// }

function deleteEvent(idEvent) {
    console.log("dele "+idEvent);
    $.post('src/indexPHP.php',{deleteEvent:"true", idEvent:idEvent},
    function(data){
            console.log("data: "+data);
        if(data == 1){
            successTell("Delete Event: " + idEvent);
            document.getElementById('deleteEventPopup').style.display='none';
            getEvents();
        }else if(data == "-1"){
            document.getElementById('showWg').style.display='block'; 
            document.getElementById('deleteEventPopup').style.display='none';
        }
    });
}


function editEvent(id,type){
    idEvent = id;
    console.log("editd "+idEvent);
    if(type == "del" || del == true){
        del = true;
    }else{
        console.log("Type:  "+type);
        if(type == "edit"){
            edit = true;
        }
        $.ajax({
            type: "POST",  
            url: "src/indexPHP.php", 
            data: { getEvent:"true", idEvent:idEvent },
            success: function(response) {
                // console.log("back edit"+response);
                var array = response.split("๏");
                console.log(array);
                setValueEdit(array);
                // if(type == "read" && edit == false){
                //     disableInput();
                // }
            }
        });
    }
}

function setValueEdit(array) {
    // console.log(array);
    document.getElementById('eventName').value = array[2];
    document.getElementById('locationEvent').value = array[3];
    document.getElementById('date').value = array[4];
    document.getElementById('inputStartTime').value = array[5];
    document.getElementById('inputEndTime').value = array[6];
    if (array[9]=="free") {
    document.getElementById('typeFree').value = array[10];

    } 
    if (array[9]=="paid") {
    document.getElementById('ticketPrice').value = array[10];
    }
    document.getElementById('category').value = array[8];
    document.getElementById('size').value = array[7];
    document.getElementById('details').value = array[11];
    document.getElementById('preCondition').value= array[13];
    document.getElementById('postCondition').value= array[14];
    document.getElementById('organizerName').value= array[15];
    document.getElementById('contactName').value= array[16];
    document.getElementById('email').value= array[17];
    document.getElementById('ePhone').value= array[18];
     document.getElementById('teaser').value = array[12];

    // document.getElementById('type').style.display= 'block';
    document.getElementById('create').style.display= 'block';
    document.getElementById('createNew').innerHTML= 'editEvent';
    document.getElementById('fileupload').style.display= 'none';
    document.getElementById('fileupload').value = array[0];
    // document.getElementById('conP').style.display= 'none';
    // document.getElementById('psw').type= "text";
    // document.getElementById('status').style.display= 'block';
}