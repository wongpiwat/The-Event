<div class="alert alert-success alert-dismissible" style="display:none" id="showSuc">
<a href="#" class="close" data-dismiss="alert" aria-label="close" onclick="reload()">&times;</a>
<strong>Successful!</strong><span id="susUser">This alert box could indicate a successful or positive action.</span>
</div>

<h1 align="center" style="margin-top:35px;">Personal Infomation</h1><br /> 
    <div id="sunny" style="width: 70%;margin:0 auto;float:right">
       
    <label for="uname" id="nameu"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" id="gsrn" required>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw"  id="gpsw" required>


    <input type="password" placeholder="Enter Password Again" name="cPsw" id="gPsw" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="umail" id="gmail" required>

    <label for="Fname"><b>FirstName</b></label>
    <input type="text" placeholder="FirstName" name="uFname" id="gfirstName" required>
    <label for="Lname"><b>LastName</b></label>
    <input type="text" placeholder="LastName" name="uLname" id="glastName" required>
    <label for="id"><b>Id No.</b></label>
    <input type="text" placeholder="Enter Id No." name="uid" id="gidNo" required>
    <label for="birth"><b>Birthday</b></label>
    <input type="date" name="bday" id="gbday" require><br>
    <label for="gen"><b>Gender</b></label><br>
    <input type="radio" name="gender" value="male" id="gmale" checked> Male
    <input type="radio" name="gender" value="female" id="gfemale" > Female<br>
    
  <label for="address"><b>Address</b></label>
  <input type="text" placeholder="Enter Address" name="uaddress" id="gaddress" required>

  <label for="phone"><b>Phone Number</b></label>
  <input type="text" onKeypress="return event.charCode >= 48 && event.charCode <= 57" placeholder="Enter Phone Number" name="gphone" id="gphone" required>
  <div id="gtype" style="display:none;">
      <label for="type"><b>Type Account: </b></label>
      <input type="radio" name="type1" value="male" id="gtypeA" checked> Admin
      <input type="radio" name="type1" value="female" id="gtypeU" > User<br>
  </div>
  <div id="gstatus" style="display:none;margin-bottom:15px;">
      <label for="type"><b>Status Account: </b></label>
      <input type="radio" name="status1" value="Activate" id="gstatusA" checked> Activate
      <input type="radio" name="status1" value="unActivate" id="gstatusU" > unActivate
      <input type="radio" name="status1" value="Block" id="gstatusB" > Block<br>
  </div>
    <!-- 20,40 -->
    <!-- <button id="signupCan" style="width: 20%; height: 7%;" type="button" onclick="document.getElementById('signUp').style.display='none';document.getElementById('signUpForm').reset(); setEdit();undisableInput()" class="cancelbtn">Cancel</button> -->
    <button id="gsignupbtn"  type="button" name="SignUp" onclick="document.getElementById('deleteAccount').style.display='block'" class="btn btn-success" style="float:right"><span class="glyphicon glyphicon-cog" ></span> Edit</button>
    
    </div>

    <div id="deleteAccount" class="login" style="padding-top:170px;">
<div class="login-content animate" style="width:50%;">
     <div style="padding: 16px;">
            <h3>Edit Account</h3>
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
            <button type="button" class="btn btn-danger" style="margin-right:5px;" onclick="editPersonal()"><span class="glyphicon glyphicon-cog" ></span> Edit</button>
            <button type="button" class="btn btn-success" onclick="document.getElementById('deleteAccount').style.display='none';"><span class="glyphicon glyphicon-share-alt" ></span> Cancel</button>
            </div>
            <br><br>
     </div>
</div>
</div>
    <script>
        r()
    function r(){
    $.ajax({  
                    type: "POST",  
                    url: "src/indexPHP.php", 
                    data: { editAccount:"true", username:username },
                    success: function(response) {
                        console.log(response);
                        var array = response.split("๏");
                        
                        setValueEdit(array);

                    }
                });
    }
            // console.log(array);
            function setValueEdit(array){
                // console.log(array);
                document.getElementById('gsrn').value= array[0];
                document.getElementById('gsrn').disabled= "true";
                document.getElementById('gpsw').value= array[1];
                document.getElementById('gmail').value=  array[2];
                document.getElementById('gfirstName').value= array[3];
                document.getElementById('glastName').value= array[4];
                document.getElementById('gidNo').value= array[5];
                document.getElementById('gaddress').value= array[8];
                document.getElementById('gbday').value= array[6];
                if(array[7] == "female"){
                    document.getElementById('gfemale').checked= true;
                }
                if(array[10] == "user"){
                    document.getElementById('gtypeU').checked= true;
                }
                if(array["12"] == "unActivate"){
                    document.getElementById('gstatusU').checked= true;
                }else if(array["12"] == "Block"){
                    document.getElementById('gstatusB').checked= true;
                }
                document.getElementById('gphone').value= array[9];
                // document.getElementById('type').style.display= 'block';
                // document.getElementById('signUp').style.display= 'block';
                
                document.getElementById('gPsw').style.display= 'none';
                
                document.getElementById('gpsw').type= "text";
                // document.getElementById('status').style.display= 'block';
                
    }

    function successTell(message){
document.getElementById('susUser').innerHTML = message;
document.getElementById('showSuc').style.display='block'; 
}

    function reload(){
        location.reload();
    }

    function editPersonal(){
        document.getElementById('deleteAccount').style.display='none';
        console.log("Personal");
    var username = document.getElementById('gsrn').value;
    var psw = document.getElementById('gpsw').value;
    var email = document.getElementById('gmail').value;
    var firstName = document.getElementById('gfirstName').value;
    var lastName = document.getElementById('glastName').value;
    var idNo = document.getElementById('gidNo').value;
    var gender = "male";
    var address = document.getElementById('gaddress').value;
    var phone = document.getElementById('gphone').value;
    var bday = document.getElementById('gbday').value;
    var type = 1;
    var status = $('input[name=status1]:checked').val();
    if(document.getElementById('gmale').checked == false){
      gender = "female";
    }
    if(document.getElementById('gtypeA').checked == true){
        type = 0;
    }

    if(bday == ""){
        alert("Input Birthday.");
    }else{
        $.post('src/indexPHP.php',{Edit:"true",uname:username,psw:psw,umail:email,uFname:firstName,
        uLname:lastName,uid:idNo,bday:bday,gender:gender,uaddress:address,uphone:phone,type:type,status:status},
    function(data){
        console.log(data);

     if(data == 1){
        successTell(" Edit User => Username: "+username+" into Database.");
        r()
     }
     }
     );
    }
    }