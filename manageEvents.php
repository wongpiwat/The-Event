<div class="alert alert-success alert-dismissible" style="display:none" id="showSuc">
    <a href="#" class="close" data-dismiss="alert" aria-label="close" >&times;</a>
    <strong>Successful!</strong><span id="susUser">This alert box could indicate a successful or positive action.</span>
</div>


<div id="sPEV" class="signUp">
  <div class="signUp-content animate"  id="viewEventF" method="POST" action="src/indexPHP.php" style="width:70%">
 
  <div class="alert alert-success alert-dismissible" style="display:none" id="showSucF">
    <a href="#" class="close" data-dismiss="alert" aria-label="close" >&times;</a>
    <strong>Successful!</strong> <span id="susUserF">This alert box could indicate a successful or positive action.</span>
    </div>

  <div style="padding: 30px;">
  <center><h2>Event Attandents</h2></center><br><br><a href="#" target="_blank" id="pdf_linkA" style="float:right;" ><button type="button" class="btn btn-warning" name="createPdf" style="float:right;background-color:rgb(255, 101, 110);" onclick="createAttedPDF()" id="pdfCH" ><span class="glyphicon glyphicon-file" ></span> Create PDF</button></a>
  <h4>Link Google Form:</h4> 
  <div class="input-group">
 
            <input type="text" class="form-control" placeholder="Link Google Form"  id="ggForm" name="search" style="margin-top:3px;height:28px;" disabled>
            <div class="input-group-btn">
              <button class="btn btn-default" type="button" onclick="setUp()"  id="ggBForm" style="height:28px;margin-top:3px;" >
                <span id="sunnY"><i class="glyphicon glyphicon-cog"></i> Edit</span>
              </button>
            </div>
          </div>
        <div id="sEV"></div>
        
        <button class="btn btn-primary" onclick="document.getElementById('sPEV').style.display = 'none'"><span class="glyphicon glyphicon-ok" ></span>  Submit</button>
  </div>
  </div>
  </div>

<div class="container" style="width:100%;">
<h1 align="center" style="margin-top:35px;">Manager Events</h1><br />
    <div id="head">
        <form  method="post" style="margin-top:20px;display: inline-block;">
        <div class="dropdown" id="fi">
            
            
    <button class="btn btn-info dropdown-toggle" type="button" value="None" data-toggle="dropdown" id="fil">filter
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
        <li><a href="#">None</a></li>
      <li><a href="#">Day</a></li>
      <li><a href="#">Month</a></li>
      <li><a href="#">Year</a></li>
      <li><a href="#">Username</a></li>
      <li><a href="#">Location</a></li>
      <li><a href="#">Attendent</a></li>
    </ul>
    <a href="#" target="_blank" id="pdf_link" ><button type="button" class="btn btn-warning" name="createPdf" style="margin-left:5px;" onclick="createPDF()" id="pdfC" ><span class="glyphicon glyphicon-file" ></span> Create PDF</button></a>
    <a href="generateCheckIn.php" target="_blank"  ><button type="button" class="btn btn-primary"  style="margin-left:5px;"  ><span class="glyphicon glyphicon-bullhorn" ></span> Alert</button></a>
  </div>
</div>

<div class="input-group" style="float:right;">
            <input type="text" class="form-control" placeholder="Word" id="filter" name="search" style="margin-top:3px;height:28px;" disabled>
            <div class="input-group-btn">
              <button class="btn btn-default" type="button" onclick="filter()" style="height:28px;margin-top:3px;">
                <i class="glyphicon glyphicon-search"></i>
              </button>
            </div>
          </div>
        </form>
    </div>


    <div class="table-responsive" id="events" style="width:150%;">
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

    <div id="manageDel" class="login" style="padding-top:170px;">
    <div class="login-content animate" style="width:50%;">
         <div style="padding: 16px;">
                <h3>Delete Events</h3>
                <hr style="    display: block;
                                height: 1px;
                                border: 0;
                                border-top: 3px solid #f44336;
                                margin-top: -5px;
                                padding: 0;
                                /* background-color: black;
                                color: black; */">
                <p id="tellUser"></p>
                
                <div style="float:right;margin-top:10px;">
                <button type="button" class="btn btn-danger" style="margin-right:5px;" onclick="deleteEvent();setDel();document.getElementById('manageDel').style.display='none';setDelE()"><span class="glyphicon glyphicon-trash" ></span> Delete</button>
                <button type="button" class="btn btn-success" onclick="document.getElementById('manageDel').style.display='none';setDel();setDelE();"><span class="glyphicon glyphicon-share-alt" ></span> Cancel</button>
                </div>
                <br><br>
         </div>
    </div>
    </div>

<script>

getEvents();
var idEvent = null;
var edit = false;
var del = false;
var delE = false;


function setDelE(){
delE = false;

}
function getEvents(){
$.ajax({  
     type: "POST",  
     url: "src/indexPHP.php", 
    data: { getEvents:"true" ,type:typeAccount,username:username},
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
var iEventS = -1;
function successTell(message){
    document.getElementById('susUser').innerHTML = message;
    document.getElementById('showSuc').style.display='block';
}

function setDeleteEvent(idEvent,eventName) {
    delE = true;
    iEventS = idEvent;
    document.getElementById('tellUser').innerHTML = "Delete event: " + eventName;
    document.getElementById('manageDel').style.display='block';   
}

function deleteEvent() {
    // console.log("dele "+idEvent);
    del = true;
    document.getElementById('sPEV').style.display = 'none'
    $.post('src/indexPHP.php',{deleteEvent:"true", idEvent:iEventS},
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
        getEvents();
    });
}


function editEvent(id,type){
    document.getElementById('sPEV').style.display = 'none'
    idEvent = id;
    edit = true;
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

$(function(){

$("#fi li a").click(function(){

  $("#fil:first-child").html($(this).text()+' <span class="caret"></span>');
  $("#fil:first-child").val($(this).text());
  document.getElementById("filter").value = "";

    if(document.getElementById('fil').value == "None"){
    // console.log("Sunnnnnnn");
     getEvents();
     document.getElementById("filter").placeholder = "filter";
     document.getElementById("filter").disabled = true;
     document.getElementById("pdfC").disabled = false;

     
     
  }else {
            if(document.getElementById('fil').value == "Day"){
            document.getElementById("filter").disabled = false;
            document.getElementById("filter").placeholder = "YYYY-MM-DD => Ex.: 2018-03-12";
        }else if(document.getElementById('fil').value == "Month"){
            document.getElementById("filter").disabled = false;
            document.getElementById("filter").placeholder = "YYYY-MM => Ex.: 2018-03";
        }else if(document.getElementById('fil').value == "Year"){
            document.getElementById("filter").disabled = false;
            document.getElementById("filter").placeholder = "YYYY => Ex.: 2018";
        }else if(document.getElementById('fil').value == "Username"){
            document.getElementById("filter").disabled = false;
            document.getElementById("filter").placeholder = "Username";
        }else if(document.getElementById('fil').value == "Location"){
            document.getElementById("filter").disabled = false;
            document.getElementById("filter").placeholder = "Location";
        }else if(document.getElementById('fil').value == "Attendent"){
            document.getElementById("filter").disabled = false;
            document.getElementById("filter").placeholder = "Number";
            
        }
        disableB();
  }


});

});

$('#filter').on('input', function() {
    // do something
    if(document.getElementById('filter').value == "" &&  document.getElementById('fil').textContent != "None" ){
        document.getElementById("pdfC").disabled = true;
    }else{
        document.getElementById("pdfC").disabled = false;
    }
})

function disableB(){
    if(document.getElementById('filter').value == "" &&  document.getElementById('fil').textContent != "None" ){
        document.getElementById("pdfC").disabled = true;
    }else{
        document.getElementById("pdfC").disabled = false;
    }
}

function  filter(){
    var fil = document.getElementById('fil').textContent;
    var word = document.getElementById('filter').value;
    console.log(fil);
    console.log(word);
    if(fil != "none" && word != ""){
         $.post("src/indexPHP.php",{filter:fil,word:word,type:typeAccount,username:username},
         function(data){
            // console.log(data);
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
        data +
        '</table>'+
        '</div>');


         });
    }
    
}

function createPDF(){
   // console.log("Sunnnnnnn123");
   var word = document.getElementById('filter').value;
   var filter = document.getElementById('fil').value;
   if((filter != "None" && word != "") || filter == "None" ){
   document.getElementById('pdf_link').href = "src/indexPHP.php?create_pdf_Event=1&type="+typeAccount+"&username="+username+"&filter="+filter+"&word="+document.getElementById('filter').value;;
   document.getElementById('pdf_link').toggle().click();
   }else if(word == "" && fil != "None" ){
       alert("Please Fill in filter.");
   }
}
var ealID = "";
var nameE = "";





function showP(idEvent,i,nameEvent,googleLink){
    // alert(idEvent);
    ealID = idEvent;
    nameE = nameEvent;
    console.log("showP");
    if(i == "read" && edit == false && delE == false){
    document.getElementById('sPEV').style.display = 'block';
    document.getElementById('ggForm').value = googleLink;
    $.post("src/indexPHP.php",{AttenEvent:true,idEvent:idEvent,nameEvent:nameEvent},
         function(data){
            // console.log(data);
           
            $("#sEV").html(
                '<center>'+
        '<div class="table-responsive"  id="events">'+
        '<table class="table table-bordered" style="margin-top:10px;">'+
        '<thead>'+
            '<tr>'+
            '<th>No.</th>'+
            '<th>Confirm</th>'+
            '<th>Username</th>'+
            '<th>Amount</th>'+
            '<th>Date</th>'+
            '<th>Time</th>'+
            '<th>Comfirm Mail</th>'+
            '<th>Certificate</th>'+
            '<th>Evaluation Form</th>'+
            '</tr>'+
        '</thead>'+
        data +
        '</table>'+
        '</div></center>');


         });
    }else{
        document.getElementById('sPEV').style.display = 'none';
        edit = false;
        del = false;
    }

    if(document.getElementById('create').style.display == 'block'  ){
        document.getElementById('sPEV').style.display = 'none';
        // alert("Sunny");


    }
}

function createAttedPDF(){
    document.getElementById('pdf_linkA').href = "src/indexPHP.php?create_pdf_Attend=1&idEvent="+ealID+"&nameEvent="+nameE;
   document.getElementById('pdf_linkA').toggle().click();
}

function mailCon(username,idEvent,nameEvent){
    var personal = ""
            $.post("src/indexPHP.php",{editAccount:true,username:username},
            function(data){
                console.log(data);
                var personal = data.split('๏');
                
                sendEmail(username,personal[2],personal[3],"The Event Comfirm Event","Please comfirm "+nameEvent+". To reserve a seat click= "+"http://localhost:120/ProjectWebtech_1/confirmEvent.php?xTaScDwdl78X2ACs7Sc="+username+"&eVS4S5fkc27fc7p="+idEvent+"  hope you enjoys, Thankyou.");
            });
            showSucFul("Send Comfirm Email.")

}

function certi(user,idEvent,nameEvent){
    var personal = ""
    var fname = "";
    var title = "The Event Certificate";
    var body = "";
    var email = "" ; 
    var certis = cer + "/ProjectWebtech_1/certificates/"+idEvent+"/"+user+".pdf"
            $.post("src/indexPHP.php",{editAccount:true,username:user},
            function(data){
                console.log(data);
                personal = data.split('๏');
                fname = personal[3];
                email = personal[2];
                body = "Hi! "+fname+" We Congratulation on passing the "+nameEvent+". We have a gift certifacate for you.";
                // sendEmail(username,personal[2],personal[3],"The Event Certificate","You are buy ticket from Event: "+arrayE[2]+" hope you enjoys, Thankyou.");
            
                
            $.post("src/indexPHP.php",{certis:true,username:user,idEvent:ealID,nameEvent:nameEvent,fNames:fname},
            function(sun){
                //  console.log(sun);
            });
           

           console.log(certis);
           console.log(email);
           console.log(body);
           console.log(title);
           console.log(fname);
            $.post("email/phpSendMailGmail.php",{title:title,body:body,email:email,fname:fname,certis:certis},
            function(data){
                //  alert(data);
                // location.reload();
            })
            
            });
            //createCertificate  $_SERVER['DOCUMENT_ROOT'].'/ProjectWebtech_1/certificates/'.$idEvent.'/'.$username.'.pdf'



            showSucFul("Send Certificate.");
}



function eval(username,idEvent,nameEvent){

    var link = document.getElementById('ggForm').value;
    if(link != ""){
            $.post("src/indexPHP.php",{editAccount:true,username:username},
            function(data){
                console.log(data);
                var personal = data.split('๏');
                
                sendEmail(username,personal[2],personal[3],"The Event Evaluation Form","Please evaluate the questionnaire. Event: click= "+link+" Thankyou.");
            });
            showSucFul("Send Link Google Form.");
    }else{
        alert("Please Insert Link Google Form.")
    }

    
}

function showSucFul($message){
    document.getElementById('susUserF').innerHTML = $message;
    document.getElementById('showSucF').style.display = 'block';
}



function saveLink(){
    if(document.getElementById('ggForm').value != ""){
        var link = document.getElementById('ggForm').value;
    document.getElementById('ggForm').disabled = true;
    document.getElementById('sunnY').innerHTML = '<i class="glyphicon glyphicon-cog"></i> Edit';
    document.getElementById('ggBForm').onclick = setUp;
    $.post("src/indexPHP.php",{linkGoogleForm:link,idEvent:ealID},
    function(data){
        console.log("sunnn");
        console.log(data);
    });
    alert('Save Into System.')
    }else{
        alert("Please Insert Link Google Form.")
    }
}
function setUp(){
    document.getElementById('ggForm').disabled = false;
    document.getElementById('ggBForm').onclick = saveLink;
    document.getElementById('sunnY').innerHTML = '<i class="glyphicon glyphicon-save"></i> Save';
    
}