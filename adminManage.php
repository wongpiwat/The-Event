<?php //ใส่ทุกอัน
    include 'header.php';
   


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exporting to files</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        
    </head>
    <body>
        <br /><br />
          <div class="container" style="width:100%;">
               <h3 align="center">Export HTML Table data to PDF using TCPDF in PHP</h3><br />
         <div class="table-responsive">
        <table  class="table table-bordered">

        <tr>
            <th width="7%">Username</th>
            <th width="7%">Password</th>
            <th width="7%">E-Mail</th>
            <th width="7%">Firstname</th>
            <th width="7%">Lastname</th>
            <th width="8%">ID NO.</th>
            <th width="10%">Birthday</th>
            <th width="7%">Gender</th>
            <th width="7%">Address</th>
            <th width="7%">Phone</th>
            <th width="7%">Type Account</th>
            <th width="7%">Image</th>
            <th width="7%">Status</th>
            
        </tr>

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
    </body>
</html>


