<h1 align="center" style="margin-top:35px;">Personal Infomation</h1><br />
    <div id="sunny" style="width: 70%;margin:0 auto;float:right">
       
    <label for="uname" id="nameu"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" id="usrn" required>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw"  id="psw" required>

    <label for="psw" id="conP"><b>Confirm Your Password</b></label>
    <input type="password" placeholder="Enter Password Again" name="cPsw" id="cPsw" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="umail" id="umail" required>

    <label for="Fname"><b>FirstName</b></label>
    <input type="text" placeholder="FirstName" name="uFname" id="firstName" required>
    <label for="Lname"><b>LastName</b></label>
    <input type="text" placeholder="LastName" name="uLname" id="lastName" required>
    <label for="id"><b>Id No.</b></label>
    <input type="text" placeholder="Enter Id No." name="uid" id="idNo" required>
    <label for="birth"><b>Birthday</b></label>
    <input type="date" name="bday" id="bday" require><br>
    <label for="gen"><b>Gender</b></label><br>
    <input type="radio" name="gender" value="male" id="male" checked> Male
    <input type="radio" name="gender" value="female" id="female" > Female<br>
    
  <label for="address"><b>Address</b></label>
  <input type="text" placeholder="Enter Address" name="uaddress" id="address" required>

  <label for="phone"><b>Phone Number</b></label>
  <input type="text" onKeypress="return event.charCode >= 48 && event.charCode <= 57" placeholder="Enter Phone Number" name="uphone" id="phone" required>
  <div id="type" style="display:none;">
      <label for="type"><b>Type Account: </b></label>
      <input type="radio" name="type" value="male" id="typeA" checked> Admin
      <input type="radio" name="type" value="female" id="typeU" > User<br>
  </div>
  <div id="status" style="display:none;margin-bottom:15px;">
      <label for="type"><b>Status Account: </b></label>
      <input type="radio" name="status" value="Activate" id="statusA" checked> Activate
      <input type="radio" name="status" value="unActivate" id="statusU" > unActivate
      <input type="radio" name="status" value="Block" id="statusB" > Block<br>
  </div>
    <!-- 20,40 -->
    <!-- <button id="signupCan" style="width: 20%; height: 7%;" type="button" onclick="document.getElementById('signUp').style.display='none';document.getElementById('signUpForm').reset(); setEdit();undisableInput()" class="cancelbtn">Cancel</button> -->
    <button id="signupbtn"  type="button" name="SignUp" onclick="signUp()" class="btn btn-success" style="float:right">SignUp</button>
    
    </div>
    <script>
    $("#signUp").html("");
    
    $.ajax({  
                    type: "POST",  
                    url: "src/indexPHP.php", 
                    data: { editAccount:"true", username:username },
                    success: function(response) {
                        console.log(response);
                        var array = response.split(",");
                        
                        setValueEdit(array);

                    }
                });
            // console.log(array);
            function setValueEdit(array){
                // console.log(array);
                document.getElementById('usrn').value= array[0];
                document.getElementById('usrn').disabled= "true";
                document.getElementById('psw').value= array[1];
                document.getElementById('umail').value=  array[2];
                document.getElementById('firstName').value= array[3];
                document.getElementById('lastName').value= array[4];
                document.getElementById('idNo').value= array[5];
                document.getElementById('address').value= array[8];
                document.getElementById('bday').value= array[6];
                if(array[7] == "female"){
                    document.getElementById('female').checked= true;
                }
                if(array[10] == "user"){
                    document.getElementById('typeU').checked= true;
                }
                if(array["12"] == "unActivate"){
                    document.getElementById('statusU').checked= true;
                }else if(array["12"] == "Block"){
                    document.getElementById('statusB').checked= true;
                }
                document.getElementById('phone').value= array[9];
                // document.getElementById('type').style.display= 'block';
                // document.getElementById('signUp').style.display= 'block';
                document.getElementById('signupbtn').innerHTML= 'Edit Account';
                document.getElementById('cPsw').style.display= 'none';
                document.getElementById('conP').style.display= 'none';
                document.getElementById('psw').type= "text";
                // document.getElementById('status').style.display= 'block';
                
    }