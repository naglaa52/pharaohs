<?php
// Connect to the MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "feedback_form";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check for errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the form data
  $firstname = $_POST["firstname"];
  $lastname = $_POST["lastname"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $rate = $_POST["rate"];
  $opinion = $_POST["opinion"];

  // Insert the form data into the database
  $sql = "INSERT INTO feedback (firstname, lastname, email, phone, rate, opinion) VALUES ('$firstname', '$lastname', '$email', '$phone', '$rate', '$opinion')";

  if ($conn->query($sql) === TRUE) {
      echo "Thank you for your feedback!";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Feedback Form</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=neon|outline|emboss|shadow-multiple">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/536d809d29.js" crossorigin="anonymous"></script>

</head>
<body>
<div class="navbar">
  <table style="width: 100%;">
    <tr>
  <td><i><img src="logo.png" alt="logo" style="width: 250px;" align="left"></i></td>
 <td><a href="..\home.html"><i class="fa-sharp fa-solid fa-house"></i> Home</a>
  <a href="..\characters\characters.html"><i class="fa-solid fa-users"></i> Characters</a>
  <a href="..\egyption gods\Mythology.html"><i class="fa-sharp fa-solid fa-bug"></i> Mythology</a>
  <a class="active" href="#"><i class="fa-regular fa-thumbs-up"></i> Feedback</a>
  <a href="..\About_Us\contact us.html"><i class="fa-regular fa-user"></i> About Us</a></td>
</tr>
</table>
</div>

<div id="header">

    <h1 align="right">
      <form>
      <select name="pets" id="pet-select">
      <option value="">--Please choose your country--</option>
      <option value="america">america</option>
      <option value="spain">spain</option>
      <option value="italy">italy</option>
      <option value="england">england</option>
      <option value="french">french</option>
      <option value="another couuntry">another country</option>
      </select>
      </form>
      </h1>
</div>
	
	<form method="POST"><br><br>
	  <div>
	    <label for="firstname">First name:</label>
	    <input type="text" id="firstname" name="firstname">
	  </div>
	  <div>
	    <label for="lastname">Last name:</label>
	    <input type="text" id="lastname" name="lastname">
	  </div>
	  <div>
	    <label for="email">Email:</label>
	    <input type="email" id="email" name="email">
	  </div>
	  <div>
	    <label for="phone">Phone:</label>
	    <input type="text" id="phone" name="phone">
	  </div>
	  
<div>
  <label for="rate">What is your rating about our website?</label><br><br><br><br>
  <div class="rating">
  <input type="radio" id="star1" name="rate" value="1">
    <label for="star1" title="Very Poor">&#9733;</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="radio" id="star2" name="rate" value="2">
    <label for="star2" title="Poor">&#9733;&#9733;</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="radio" id="star3" name="rate" value="3">
    <label for="star3" title="Average">&#9733;&#9733;&#9733;</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="radio" id="star4" name="rate" value="4">
    <label for="star4" title="Good">&#9733;&#9733;&#9733;&#9733;</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="radio" id="star5" name="rate" value="5">
    <label for="star5" title="Excellent">&#9733;&#9733;&#9733;&#9733;&#9733;</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  </div>
</div></div>
	  <div>
	    <label for="opinion">Feedback:</label>
	    <textarea id="opinion" name="opinion"></textarea>
	  </div>
	  <div>
	    <button type="submit">Submit</button>
	  </div>
	</form>
    <div id="footer">
		<div>
    <h3 align ="center">
			<p>&copy; 2023 by pharaohs. All rights received.</p>
    </h3>
		</div>
	</div>

</body>
</html>
<style>

.navbar {
  width: 100%;
  overflow: auto;
  background-color: rgb(0, 0, 0);
}

/* Navbar links */
.navbar a {
  float: left;
  text-align: right;
  padding: 5px;
  color: white;
  text-decoration: none;
  font-size: 20px;
  margin-left: 4%;
}



/* Navbar links on mouse-over */
.navbar a:hover {
  background-color: #af23da;;
}

/* Current/active navbar link */
.active {
  background-color: #af23da;
}

/* Add responsiveness - will automatically display the navbar vertically instead of horizontally on screens less than 500 pixels */
@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
  }
}

    form {
  width: 50%;
  margin: 0 auto;
  font-family: Arial, sans-serif;
}



input[type="text"],
input[type="email"],
textarea {
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

select {
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

button[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

button[type="submit"]:hover {
  background-color: #45a049;
}

div {
  margin-bottom: 15px;
}

    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
	background: #fff;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: normal;
	line-height: 1;
	margin: 0;
	min-width: 960px;
	padding: 0;
}
p {
	color: #252525;
	line-height: 24px;
	margin: 0;
	padding: 0;
}
p a {
	color: #252525;
	text-decoration: underline;
}
p a:hover {
	color: #898989;
}
#header {
  background: #252525;
	margin: 0;
	padding: 10px 0 42px;
	text-align: center;
	width: 0px auto;
}
#header a.logo {
	display: block;
	margin: 0 auto;
	padding: 0;
	width: 340px;
}
#header a.logo img {
	border: 0;
	display: block;
	margin: 0;
	padding: 0;
}
#header ul {
	margin: 0;
	padding: 56px 0 0;
}
#header ul li {
	display: inline;
	list-style: none;
	margin: 0;
	padding: 0 19px;
}
#header ul li a {
	color: #ffffff;
	display: inline-block;
	font-family: "Arial Black", Gadget, sans-serif;
	font-size: 14px;
	font-weight: normal;
	margin: 0;
	padding: 0 0 3px;
	text-decoration: none;
	text-transform: uppercase;
}
#header ul li a:hover, #header ul li.selected a {
	color: #0ba39c;
}
    
    #footer {
	background: #252525;
	margin: 0;
	padding: 36px 0 42px;
}
#footer div {
	margin: 0 auto;
	overflow: hidden;
	padding: 0;
	width: 960px;
}
#footer div p {
	color: #fff;
	float: center;
	line-height: 44px;
	margin: 0 0 0 10px;
	padding: 0;
}
img {
      	
		  width:10%;
		  height: 10%;
	  
		}

  
  </style>