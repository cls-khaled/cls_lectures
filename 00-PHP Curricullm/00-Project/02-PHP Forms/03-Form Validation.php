<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<h1>Think SECURITY when processing PHP forms! </h1>
<h1> ================== $_SERVER["PHP_SELF"] ================= </h1>
What is the $_SERVER["PHP_SELF"] variable?

<!-- The $_SERVER["PHP_SELF"] is a super global variable that returns the filename of the
 currently executing script. -->

 <!-- So, the $_SERVER["PHP_SELF"] sends the submitted form data to the page itself,
  instead of jumping to a different page. This way, the user will get error messages
   on the same page as the form. -->


   <h1>============ What is the htmlspecialchars() function? ==============</h1>

   <!-- The htmlspecialchars() function converts special characters into HTML entities.
    This means that it will replace HTML characters like < and > with &lt; and &gt;.
     This prevents attackers from exploiting the code by injecting HTML or Javascript
      code (Cross-site Scripting attacks) in forms. -->


  <h1> ================== Cross-site scripting (XSS)  =====================</h1>  
  
  <!-- Cross-site scripting (XSS) is a type of computer security vulnerability
   typically found in Web applications. XSS enables attackers to inject client-side 
   script into Web pages viewed by other users. -->


<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Website: <input type="text" name="website">
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>