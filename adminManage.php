<?php //ใส่ทุกอัน
    include 'header.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Manager User</title>
        
    </head>
    <body>
        
        <div class="alert alert-success alert-dismissible" style="display:none" id="showSuc">
            <a href="#" class="close" data-dismiss="alert" aria-label="close" >&times;</a>
            <strong>Successful!</strong><span id="susUser">This alert box could indicate a successful or positive action.</span>
        </div>

        <div class="alert alert-danger alert-dismissible"  style="display:none" id="showWg">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Success!</strong> This alert box could indicate a successful or positive action.
        </div>
        </div>

        <div class="container" style="width:70%;">
        

        <h1 align="center" style="margin-top:70px;">Manager User</h1><br />
        <div id="head">
            <!-- <input type="button"value="Create Account" class="btn btn-warning ">
            <input type="button"value="Create Account" class="btn btn-info ">
            <input type="button"value="Create Account" class="btn btn-success ">
            <input type="button"value="Create Account" class="btn btn-defualt ">
            <input type="button"value="Create Account" class="btn btn-primary "> -->
        
            
            <form  method="post" style="margin-top:20px;">
            <button type="button" class="btn btn-primary" onclick="createAccount(null)" ><span class="glyphicon glyphicon-user" ></span> Create Account</button>
            <button type="submit" class="btn btn-warning" name="createPdf" ><span class="glyphicon glyphicon-file" ></span> Create PDF</button>
            <!-- <input type="submit" name="<span class="glyphicon glyphicon-file" ></span> create_pdf" class="btn btn-warning" value="Create PDF"> -->
            </form>
            <!-- <input type="button"value="Edit Account" class="btn btn-info"> -->
            <!-- <input type="button"value="Delete Account" class="btn btn-danger"> -->
        </div> 

        
        <div class="table-responsive" id="readAccount">
            <table class="table table-hover table-bordered" style="margin-top:10px;text-align:center;">
                <thead>
                    <tr>
                    <th>No.</th>
                    <th>Username</th>
                    <th>E-Mail</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Type Account</th>
                    <th>Status</th>
                    <th>Edit Account</td>
                    <th>Delete Account</th>
                    </tr>
                </thead>
                    
                    <?php
                        echo $controller->getDatabase()->readAccount();
                    ?>
                    
                
            </table>
            <!-- <div id="pagiA" style="float:right;margin-top:-37px;" >
                <ul class="pagination">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&raquo;</a></li>
                </ul>
            </div>
            
            
            <br/> -->

        
        </div>


        <div id="deleteAccount" class="login" style="padding-top:170px;">
            <div class="login-content animate" style="width:50%;">
                 <div style="padding: 16px;">
                        <h3>Delete Account</h3>
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
                            <button type="button" class="btn btn-danger" style="margin-right:5px;" onclick="deleteA()"><span class="glyphicon glyphicon-trash" ></span> Delete</button>
                            <button type="button" class="btn btn-success" onclick="document.getElementById('deleteAccount').style.display='none'"><span class="glyphicon glyphicon-share-alt" ></span> Cancel</button>
                        </div>
                        <br><br>
                 </div>
            </div>
        </div>

 

        

            
    <script >
        var deleteUser = null;
        var edit = false;
        function createAccount(name){
            console.log(name);
            document.getElementById('typeA').style.display='block';
            document.getElementById('signUp').style.display='block';
        }



        function deleteAccount(name){
            deleteUser = name;       
            document.getElementById('tellUser').innerHTML = "Delete Account Username: " + name;
            document.getElementById('deleteAccount').style.display='block';   
        }



        function editAccount(name,type){
            console.log("Type:  "+type);
            if(type == "edit"){
                // undisableInput();
                // document.getElementById('psw').disabled= false;
                edit = true;
            }
            console.log("Edit:  "+edit);
            $.ajax({  
                 type: "POST",  
                 url: "src/indexPHP.php", 
                data: { editAccount:"true", username:name },
                success: function(response) {
                    console.log("Sun");
                    console.log(response);
                    var array = response.split(",");
                    
                    setValueEdit(array);
                    if(type == "read" && edit == false){
                        disableInput();
                    }
 
                }
            });
        }

        function disableInput(){
            console.log("MINNNNNNNNN");
            document.getElementById('psw').disabled= true;
            document.getElementById('umail').disabled= true;
            document.getElementById('firstName').disabled= true;
            document.getElementById('lastName').disabled= true;
            document.getElementById('idNo').disabled= true;
            document.getElementById('address').disabled= true;
            document.getElementById('bday').disabled= true;
            document.getElementById('phone').disabled= true;
            document.getElementById('typeU').disabled= true;
            document.getElementById('typeA').disabled= true;
            document.getElementById('statusA').disabled= true;
            document.getElementById('statusU').disabled= true;
            document.getElementById('statusB').disabled= true;
            document.getElementById('male').disabled= true;
            document.getElementById('female').disabled= true;
            document.getElementById('signupbtn').style.display= "none";
            document.getElementById('signupCan').innerHTML= 'Submit';
            
        }
        
        function undisableInput(){
            console.log("Noellllllllll");
            document.getElementById('usrn').disabled= false;
            document.getElementById('psw').disabled= false;
            document.getElementById('umail').disabled= false;
            document.getElementById('firstName').disabled= false;
            document.getElementById('lastName').disabled= false;
            document.getElementById('idNo').disabled= false;
            document.getElementById('address').disabled= false;
            document.getElementById('bday').disabled= false;
            document.getElementById('phone').disabled= false;
            document.getElementById('typeU').disabled= false;
            document.getElementById('typeA').disabled= false;
            document.getElementById('statusA').disabled= false;
            document.getElementById('statusU').disabled= false;
            document.getElementById('statusB').disabled= false;
            document.getElementById('male').disabled= false;
            document.getElementById('female').disabled= false;
            document.getElementById('signupbtn').style.display= "block";
            document.getElementById('signupCan').innerHTML= 'Cancel';
            

        }

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
            document.getElementById('typeA').style.display= 'block';
            document.getElementById('signUp').style.display= 'block';
            document.getElementById('signupbtn').innerHTML= 'Edit Account';
            document.getElementById('cPsw').style.display= 'none';
            document.getElementById('conP').style.display= 'none';
            document.getElementById('psw').type= "text";
            document.getElementById('status').style.display= 'block';
            
        }

        function setEdit(){
            edit = false;
        }
        
        function deleteA(){
            $.post('src/indexPHP.php',{deleteAccount:"true",username:deleteUser},
            function(data){
                    console.log(data);
                if(data == 1){
                    successTell(" Delete Account Username: " + deleteUser);
                    document.getElementById('deleteAccount').style.display='none';
                    readAccount();
                }else if(data == "-1"){
                    document.getElementById('showWg').style.display='block'; 
                    document.getElementById('deleteAccount').style.display='none';
                }
                });
        }

        function successTell(message){
            document.getElementById('susUser').innerHTML = message;
            document.getElementById('showSuc').style.display='block'; 
        }

        function readAccount(){
            $.ajax({  
                 type: "POST",  
                 url: "src/indexPHP.php", 
                data: { readAccount:"true" },
                success: function(response) {
                    $("#readAccount").html(`
                            <div class="table-responsive"  id="readAccount">
            <table class="table table-hover table-bordered" style="margin-top:10px;text-align:center;">
                <thead>
                    <tr>
                    <th>No.</th>
                    <th>Username</th>
                    <th>E-Mail</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Type Account</th>
                    <th>Status</th>
                    <th>Edit Account</td>
                    <th>Delete Account</th>
                    </tr>
                </thead>`+
                 
                  response +`
                   </table>
                   </div>
                   `);

                
                }
                });
        }




        
    </script>
    </body>
</html>


<?php   

    if(isset($_POST["createPdf"])){
        // echo "pdf";

    }
?>
