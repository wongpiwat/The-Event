<?php //ใส่ทุกอัน
    include 'header.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exporting to files</title>
    </head>
    <body>
        
        <div class="container" style="width:100%;">
               

        <h3 align="center">Export HTML Table data to PDF using TCPDF in PHP</h3><br />
        <div id="head">
            <!-- <input type="button"value="Create Account" class="btn btn-warning ">
            <input type="button"value="Create Account" class="btn btn-info ">
            <input type="button"value="Create Account" class="btn btn-success ">
            <input type="button"value="Create Account" class="btn btn-defualt ">
            <input type="button"value="Create Account" class="btn btn-primary "> -->

            <input type="button"value="Create Account" class="btn btn-success" onclick="document.getElementById('signUp').style.display='block'">
            <input type="button"value="Edit Account" class="btn btn-info">
            <input type="button"value="Delete Account" class="btn btn-danger">
        </div> 

        
        <div class="table-responsive">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                    <th>Username</th>
                    <th >Password</th>
                    <th>E-Mail</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>ID NO.</th>
                    <th>Birthday</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Type Account</th>
                    <th>Image</th>
                    <th>Status</th>
                    </tr>
                </thead>
                
                    <?php
                        echo $controller->getDatabase()->readAccount();
                    ?>
                
            </table>
            <br/>

            <form  method="post">
                <input type="submit" name="create_pdf" class="btn btn-danger" value="Create PDF">

            </form>
        </div>
        </div>





    <script type="text/javascript">
        
        function sun(){
            document.getElementById('signUp').style.display='block'
        }
    </script>
    </body>
</html>


