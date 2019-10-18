<html>
<head>
</head>

<style>

body{
  background-color: #0a0f38;
}

form {
  color: #ffffff;
  size: 100%;
  background-image-margin-left: 0px ;
  background-repeat: no-repeat;
  background-position: right top;
  margin-left: 400px;
}

#ex{
  background-image: url("qq.jpg");
  border: 2px solid black;
  padding: 25px;
  background-repeat: no-repeat;
  background-size: 28% 100%;}

input[type=text], input[type=password] ,select {
  width: 80%;
  padding: 15px;
  margin: 5px 0 22px 0; 
  border: none;
  background: #f1f1f1;
  margin: 2px 100px;
  resize: vertical;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 5px 0 22px 0;
  border: none;
  cursor: pointer;
  margin: 20px 100px;
  width: 20%;
  opacity: 0.9;
  float:right;
}

.container {
  border-radius: 5px;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
<body>
<div id="ex">
<div class="container">
<form action="insert.php" method="post">
<h2 align="center" style=#ffffff>Driver registration form</h2>

  <div class="row">
    <div class="col-25">
      <label for="first_name">First Name</label>
    </div>
    <div class="col-75">
      <input type="text" name="first_name" placeholder="First name" required>
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="last_name">Last Name</label>
    </div>
    <div class="col-75">
      <input type="text" name="last_name" placeholder="Last name" required><br>
    </div>
  </div>
 
  <div class="row">
    <div class="col-25">
      <label for="nic">NIC</label>
    </div>
    <div class="col-75">
      <input type="text" name="nic" placeholder="NIC" required><br>
    </div>
  </div>

 <div class="row">  
    <div class="col-25">
      <label for="gender">Gender</label>
    </div>
    <div class="col-75">
      <select id="gender" name="gender">
        <option value="male">Male</option>
        <option value="female">Female</option><br>
      </select>
    </div>
  </div>
 
  <div class="row">
    <div class="col-25">
      <label for="dob">Date of birth</label>
    </div>
    <div class="col-75">
      <input type="text" name="dob" placeholder="Date of birth" required><br>
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="address">Address</label>
    </div> 
    <div class="col-75">
      <input type="text" name="address" placeholder="Address" required><br>
   </div>
  </div>
 
<div class="row">
    <div class="col-25">
  <label for="mobile">Mobile</label> 
  </div>
<div class="col-75">
  <input type="text" name="mobile" placeholder="Mobile" required>
    </div>
  </div>

 <div class="row">
    <div class="col-25">
    <label for="land">Land</label> 
     </div>
<div class="col-75">
  <input type="text" name="land" placeholder="Land" required><br>
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="email">Email</label>
    </div>
    <div class="col-75">
      <input type="text" name="email" placeholder="Email" required><br>
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="license">Driving license number</label>
    </div>
    <div class="col-75">
  	 <input type="text" name="license" placeholder="Driving license number" required><br>
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="password">Password</label>
    </div>
    <div class="col-75">
      <input type="password" name="password" placeholder="Password" required><br>
    </div>
  </div>

  <div class="row">
    <input type="submit" value="Submit">
  </div>

</form>
</div>

</body>
</html>