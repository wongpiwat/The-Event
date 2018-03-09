
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
    <style>
    .block1{
      border: 2px solid #999;
      height: 700px;
      width: 1000px;
      margin-left: 30px; 
      
      }
    .main{
      
      
      
      display: flex;
      margin-top:50px; 
      margin-left: 50px;
      
    
    }
    .inbox{
      border: 1px solid #999;
      width: 1250px;
      margin-top:20px;
      margin-left: 20px; 
      height: 200px;


    }
    .ww{
      border-bottom: 100px; 
      border-width: 120px;
      display: inline-block;
    }
    .wrapper {
    padding: 5px;
    max-width: 960px;
    width: 95%;
    margin: 20px auto;
}
header {
    padding: 0 15px;
}

.columns {
    display: flex;
    flex-flow: row wrap;
    justify-content: center;
    margin: 5px 0;
    margin-left: 5px;

}

.column {
    flex: 9;
    border: 1px solid gray;
    margin: 10px;
    padding: 20px;
    margin-right: -155px; 


    &:first-child { margin-left: 10; }
    &:last-child { margin-right: 0; }

    
}
.column3 {
    flex: 3;
    border: 1px solid white;
    margin: 10px;
    padding: 20px;


    margin-left: -155px;
    &:first-child { margin-left: 0; }
    &:last-child { margin-right: 0; }
    
}
.column2{
  margin-top:5px; 
  border: 1px solid black;

}
.column4{
  margin-top:10px; 
  border: 0px solid black;

}
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
    width: 200px;
    height: 50px;
    border-bottom: 20px; 
}

.dropdown {
    position: relative;
    display: inline-block;

    

}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    width: 200px;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
table {
    border-collapse: collapse;
    height: 150px;
    
}

table, td, th {
    border: 1px solid white;
    
    
}

.td2{
  text-align: center;
}
.tablecolumn{
  width: 850px;
  font-size: 20px;
}
.tablecolumn1{
  text-align: center;
  width: 150px;
  font-size: 20px;
}

    
    

  </style>
</head>
<body >
  <div class="wrapper">
<section class="columns">
    <div class="column3">
      <h2 style="text-align: left;">User Profile</h2>
      <div class="card">
          <img src="theToys.JPG" alt="TheToys" style="width:100%">

          <h1>BankKy</h1>
          <p class="title">Student</p>
          <p>Kasetsart University</p>
          <p><button class="buttonContact">Contact</button></p>
        </div>
        
       
    </div>
    
    <div class="column">

       <div class="dropdown">
  <button class="dropbtn">เช็คกิจกรรม</button>
  <div class="dropdown-content">
    <a href="#">กินกรรมที่เคยเข้าร่วม</a>
    <a href="#">กิจกรรมที่เข้าร่วม</a>
    <a href="#">กิจกรรมที่สร้าง</a>
    
  </div>
</div>
<div class="column2">
  
</div>
<div class="column4">
  <table>
  <tr>
    <th class="tablecolumn">กิจกรรมที่เคยเข้าร่วม</th>
    <th class="tablecolumn1">วัน-เดือน-ปี</th>
  </tr>
  <tr>
    <td class="td1">วิ่งมาราธอน</td>
    <td class="td2">5-05-2560</td>
  </tr>
  <tr>
    <td class="td1">เก็บขยะ</td>
    <td class="td2">10-09-2560</td>
  </tr>
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



</body>

</html>
