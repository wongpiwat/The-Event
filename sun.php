
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>

	<ul class="nav navbar-nav navbar-right">
	<li><a href="#" onclick="document.getElementById('login').style.display='block'" ><span class="glyphicon glyphicon-user" ></span> Sign Up</a></li>
	</ul>
	<div id="login" class="login">

<div style="background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%;" class="container">       
  <center><table class="table">
  	<h1>Username</h1>
    <thead>
      <tr>
        <th>Username</th>
        <th>Password</th>
        <th>Email</th>
        <th>FirstName</th>
        <th>LastName</th>
        <th>Id No.</th>
        <th>Birthday</th>
        <th>Gender</th>
        <th>Address</th>
        <th>Phone</th>
        <th>TypeAccount</th>
        <th>Image</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>1234</td>
        <td>john@example.com</td>
        <td>Kittichai</td>
        <td>Terakul</td>
        <td>1238190381903</td>
        <td>12/08/2539</td>
        <td>male</td>
        <td>980/77 wachirathamsatit</td>
        <td>0854491469</td>
        <td>activate</td>
        <td>bbb</td>
        <td>user</td>
      </tr>
    </tbody>
  </table></center>
  <button type="button" name="SignIn" onclick="signIn()" id="logBtn" style="    background-color: #4CAF50;
color: white;
padding: 10px 18px;
margin: 8px 0;
border: none;
float: right;
cursor: pointer;
width: 20%;">Ok</button>
    <label>


  </div>

</body>
</html>