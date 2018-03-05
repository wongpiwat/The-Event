<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
body {
    margin: 0;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 20%;

    background-color: #f1f1f1;
    position: fixed;
    height: 200%;
    overflow: auto;
    font-size: 40px;
}

li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
}

li a.active {
    background-color: #4CAF50;
    color: white;
}

li a:hover:not(.active) {
    background-color: #555;
    color: white;
}
 
.b1{
	width: 100%;
	height: 5%;
	background-color: #f1f1f1;
	border: 0px solid blue;
	font-size: 30px;
	color: #555;
}
.b1:hover {
    background-color: #555;
    color: white;
}

</style>
</head>
<body>
	<ul>
		<button class="b1" type="button">Genneral</button>
  <button class="b1" type="button">Manage User</button>
  <button class="b1" type="button">Manage Event</button>
  <li><a class="active" href="#genneral">Genneral</a></li>
  <li><a href="manageuser">Manage User</a></li>
  <li><a href="#manageevent">Manage Event</a></li>
  
  
</ul>

<div style="margin-left:25%;padding:1px 16px;height:1000px;">
  <h2>Fixed Full-height Side Nav</h2>
  <h3>Try to scroll this area, and see how the sidenav sticks to the page</h3>
  <p>Notice that this div element has a left margin of 25%. This is because the side navigation is set to 25% width. If you remove the margin, the sidenav will overlay/sit on top of this div.</p>
  <p>Also notice that we have set overflow:auto to sidenav. This will add a scrollbar when the sidenav is too long (for example if it has over 50 links inside of it).</p>
  <p>Some text..</p>
  <p>Some text..</p>
  <p>Some text..</p>
  <p>Some text..</p>
  <p>Some text..</p>
  <p>Some text..</p>
  <p>Some text..</p>
</div>





</body>
</html>